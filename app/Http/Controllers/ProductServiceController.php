<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\ProductServices;


class ProductServiceController extends Controller
{
     /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)

    {
        $itemsx = ProductServices::orderBy('productcode','ASC')->paginate(5);
          
        return view('ProductServices.index',compact('itemsx'))->with('b', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('ProductServices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
        'productcode' => 'required',
        'productname' => 'required',
        'materialtype' => 'required',
        'spesification' => 'required',
        'minorder' => 'required',
        'minqty' => 'required']);

        ProductServices::create($request->all());
        return redirect()->route('ProductServices.index')->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $item = ProductServices::find($id);
        return view('ProductServices.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $item = ProductServices::find($id);
        return view('ProductServices.edit',compact('item'));
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
        $this->validate($request, ['productcode' => 'required','productname' => 'required','materialtype' => 'required', 'spesification' => 'required','minorder' => 'required','minqty' => 'required']);
        ProductServices::find($id)->update($request->all());
        return redirect()->route('ProductServices.index')->with('success','Item updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        ProductServices::find($id)->delete();
        return redirect()->route('ProductServices.index')->with('success','Item deleted successfully');
    }
}
