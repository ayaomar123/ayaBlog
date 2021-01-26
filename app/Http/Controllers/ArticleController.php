<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Article;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\EditArticleRequest;
use App\Http\Controllers\CategoryController;
use App\models\Category;
use Validator,Redirect,Response;
use DataTables;
use Toastr;
use Session;

class ArticleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:article-list|article-create|article-edit|article-delete', ['only' => ['index','show']]);
         $this->middleware('permission:article-create', ['only' => ['create','store']]);
         $this->middleware('permission:article-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:article-delete', ['only' => ['destroy']]);
    }

    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(){

        $items = $this->queryModel()->get();
        return view('Articles.index',compact('items'));
     }

     //get datatable
    public function data(Request $request)
    {

        $items = $this->queryModel()->with('categories')->get();

        if(request()->ajax()) {
            $items = $this->queryModel()->select('*');
            return Datatables::of($items)
            ->filter(function ($instance) use ($request) {

                if (isset($request->artcile)) {
                    $instance->where('name', $request->artcile);
                }

                if (isset($request->status)) {
                    $instance->where('status', $request->status);
                }
                if (isset($request->category)) {
                    //dd($request->category);
                    $instance->where('category', $request->category);
                }

                if (isset($request->search)) {
                    $instance->where('name', 'like', '%'.\request('search').'%')
                    ->orWhere('status', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('description', 'LIKE', '%' . $request->search . '%');
                }
            })
            ->rawColumns(['status'])
            ->addColumn('action', function($data){
                $editUrl = url('articles/'.$data->id);
                $btn = '<a style="width:100px" href="'.$editUrl.'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary"><i class="fas fa-edit"></i>Edit</a>';
                $btn = $btn.' <a style="width:100px" href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Delete" class="btn btn-danger delete"><i class="fas fa-trash"></i>Delete</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Articles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $requestData = $request->all();

        if ($request->image) {
            $fileName = $request->image->store("public/articles");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;
        }
        if ($request->cover) {
            $fileName = $request->cover->store("public/articles");
            $CoverName = $request->cover->hashName();
            $requestData['cover'] = $CoverName;
        }
        $article = $this->queryModel()->create($requestData);
        $article->categories()->attach($request->category_id);
        $article->editors()->attach(Auth()->user());
        return redirect(route('articles.index'))->with('msg', 'Article Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $categories = Category::all();
            $articles = $this->queryModel()
            ->where('id', $id)
            ->first();

            return view('articles.edit',compact('articles','categories'));
        }catch(\Exception $e){
            throw $e;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditArticleRequest $request, $id)
    {
        $article = Article::find($id);
        $requestData = $request->all();
        if ($request['image'] ||$request['cover'] ){
            $fileName = $request->image->store("public/articles");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;
            $fileName2 = $request->cover->store("public/articles");
            $imageName2 = $request->cover->hashName();
            $requestData['cover'] = $imageName2;
            $article->update($requestData);
        } else{
        $this->queryModel()
        ->where('id', $request->id)
        ->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'status' => $request['status'],
        ]);
}
        return redirect(route('articles.index'))->with('info', 'Article Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->queryModel()
         ->find($id)
         ->delete();

         return  response()->json(['success' => 'Article Deleted successfully.']);
    }

    //delete all records
    public function deleteAll(){
        $this->queryModel()
        ->whereIn('id',\request('id'))
        ->delete();

        return response()->json(['success'=>"Article Deleted successfully."]);
    }

    //Deactivate all records
    public function deactive(){

        $this->queryModel()
        ->whereIn('id',\request('id'))
        ->update(['status'=> \request('status')]);

        return response()->json(['success'=>"Categories updated successfully."]);
    }

    //activate all records
    public function activate(){

        $this->queryModel()
        ->whereIn('id',\request('id'))
        ->update(['status'=>!\request('status')]);

        return response()->json(['success'=>"Article updated successfully."]);

    }

    //toggle switch
    public function changeStatus()
    {
        $this->queryModel()
        ->find(\request('id'))
        ->update(['status'=>\request('status')]);

        return response()->json(['success'=>"Article Status Updated successfully."]);
    }


    private function model()
    {
        return new Article();
    }

    private function queryModel()
    {
        return $this->model()->query();
    }

}
