<?php

namespace App\Http\Controllers;

use App\models\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\models\Article;
use Illuminate\Http\Request;
use Validator, Redirect, Response;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DataTables;
use Toastr;
use Session;

class CategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:category-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    public function index()
    {

        $items = $this->queryModel()->get();
        return view('categories.index', compact('items'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request)
    {

        if (request()->ajax()) {

            $data = $this->queryModel()->select('*');

            return datatables()::of($data)
                ->addIndexColumn()
                ->filter(function ($instance) use ($request) {

                    if (isset($request->category)) {
                        $instance->where('name', $request->category);
                    }

                    if (isset($request->status)) {
                        $instance->where('status', $request->status);
                    }

                    if (isset($request->search)) {
                        $instance->where('name', 'like', '%' . \request('search') . '%')
                            ->orWhere('status', 'LIKE', '%' . $request->search . '%')
                            ->orWhere('description', 'LIKE', '%' . $request->search . '%');
                    }
                })
                ->rawColumns(['status'])
                ->addColumn('action', function ($data) {

                    $editUrl = url('categories/' . $data->id);

                    $btn = '<a style="width:100px" href="' . $editUrl . '" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary"><i class="fas fa-edit"></i> Edit</a>';

                    $btn = $btn . ' <a style="width:100px" href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-danger delete"><i class="fas fa-trash"></i> Delete</a>';

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

        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $requestData = $request->all();
        if ($request->image) {
            $fileName = $request->image->store("public/categories");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;
        }

        $this->queryModel()->create($requestData);

        return Redirect::to("categories")->with('msg', 'Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = $this->queryModel()->find($id);

        return view("categories.show", compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        try {
            $category = $this->queryModel()
                ->where('id', $id)
                ->first();

            return view('categories.edit', compact('category'));
        } catch (\Exception $e) {
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
    public function update(EditCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        if ($request['image']) {
            $requestData = $request->all();
            $fileName = $request->image->store("public/categories");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;
            $category->update($requestData);
        } else {
            $this->queryModel()
                ->where('id', $id)
                ->update([
                    'name' => $request['name'],
                    'description' => $request['description'],
                    'status' => $request['status'],
                ]);
        }
        return Redirect::to("categories")->with('info', 'Category Edited Successfully');
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

        return  response()->json(['success' => 'success']);
    }

    public function deleteAll()
    {

        $this->queryModel()
            ->whereIn('id', \request('id'))
            ->delete();

        return response()->json(['success' => "Category Deleted successfully."]);
    }

    public function deactive(Request $request)
    {

        $this->queryModel()
            ->whereIn('id', \request('id'))
            ->update(['status' => !!\request('status')]);

        return response()->json(['success' => "Categories updated successfully."]);
    }


    public function activate()
    {

        $this->queryModel()
            ->whereIn('id', \request('id'))
            ->update(['status' => !\request('status')]);

        return response()->json(['success' => "Categories updated successfully."]);
    }

    public function changeStatus(Request $request)
    {

        $category = Category::find($request->id);
        $status = $request->status;
        $category->update(['status' => $status]);

        return response()->json(['success' => "Category Status Updated successfully."]);
    }

    public function searching()
    {
        $items = $this->queryModel();

        if (request('category')) {
            $items->where('name', request('category'));
        } elseif (request('status')) {
            $items->where('status', request('status'));
        }

        $items->get();

        return view("categories.index")->with('items', $items);
    }

    private function model()
    {
        return new Category();
    }

    private function queryModel()
    {
        return $this->model()->query();
    }
}
