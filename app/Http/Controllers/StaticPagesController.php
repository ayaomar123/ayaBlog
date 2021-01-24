<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Models\StaticPages;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = StaticPages::all();

        return view('pages2.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        //dd($request->all());
        $requestData = $request->all();
        //$requestData['status']= $requestData['status']?? '0';
        StaticPages::create($requestData);
        return redirect(route('staticPages.index'));
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
        $pages = StaticPages::find($id);
        return view('pages2.edit',compact('pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        StaticPages::query()->find($id)->update($data);
        return redirect(route('staticPages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        StaticPages::find($id)->delete();
        return redirect()->route('staticPages.index')
            ->with('success', 'page deleted successfully');
    }
}
