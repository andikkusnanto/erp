<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\DeliveryOrders;

class DeliveryOrderController extends Controller
{
     /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)

    {
        $items = DeliveryOrders::orderBy('donumber','ASC')->paginate(5);
          
        return view('DeliveryOrders.index',compact('items'))->with('b', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('DeliveryOrders.create');
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
        'donumber' => 'required',
        'accnumber' => 'required',
        'dodate' => 'required',
        'soldto' => 'required',
        'shipto' => 'required',
        'remark' => 'required',
        'receiver' => 'required',
        'approval' => 'required']);

        DeliveryOrders::create($request->all());
        return redirect()->route('DeliveryOrders.index')->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $item = DeliveryOrders::find($id);
        return view('DeliveryOrders.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $item = DeliveryOrders::find($id);
        return view('DeliveryOrders.edit',compact('item'));
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
        $this->validate($request, ['donumber' => 'required','accnumber' => 'required','dodate' => 'required', 'soldto' => 'required','shipto' => 'required','remark' => 'required','receiver' => 'required','approval' => 'required']);
        DeliveryOrders::find($id)->update($request->all());
        return redirect()->route('DeliveryOrders.index')->with('success','Item updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        DeliveryOrders::find($id)->delete();
        return redirect()->route('DeliveryOrders.index')->with('success','Item deleted successfully');
    }
}
