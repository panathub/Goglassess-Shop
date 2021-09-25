<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\orderdetail;
use Illuminate\Http\Request;
use DB;

class orderdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index($orderid)
    {
   
        $perPage = 25;

  if(!empty($orderid)){
        $orderdetail = DB::table('orders')
        ->join('order_detail','order_detail.orderID','=','orders.orderID')
        ->join('product','product.productID','=','order_detail.productID')
        ->join('lens','lens.lensID','=','order_detail.LensID')
        ->join('product_type','product_type.producttypeID','=','product.producttypeID')
        ->join('band','band.bandID','=','product.bandID')
        ->leftJoin('users','users.userID','=','orders.userID')
        ->select('order_detail.*','product.*','product_type.*')
       ->where('order_detail.orderID', $orderid)->paginate($perPage);
  }else{
    $orderdetail = DB::table('orders');
  }
   
        return view('admin.orderdetail.index', compact('orderdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.orderdetail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        orderdetail::create($requestData);

        return redirect('admin/orderdetail')->with('flash_message', 'orderdetail added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $orderdetail = orderdetail::findOrFail($id);

        return view('admin.orderdetail.edit', compact('orderdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $orderdetail = orderdetail::findOrFail($id);
        $orderdetail->update($requestData);

        return redirect('admin/orderdetail')->with('flash_message', 'orderdetail updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        orderdetail::destroy($id);

        return redirect('admin/orderdetail')->with('flash_message', 'orderdetail deleted!');
    }
}
