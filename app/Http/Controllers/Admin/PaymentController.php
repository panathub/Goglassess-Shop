<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Payment;
use App\Models\order;
use Illuminate\Http\Request;
use DB;

class PaymentController extends Controller
{
    public function show($id)
    {
        $order = order::findOrFail($id);

        return view('admin.order.showbill', compact('order'));
    }
}