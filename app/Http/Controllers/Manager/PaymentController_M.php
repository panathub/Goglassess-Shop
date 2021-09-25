<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Payment;
use App\Models\order;
use Illuminate\Http\Request;
use DB;

class PaymentController_M extends Controller
{
    public function show($id)
    {
        $order = order::findOrFail($id);

        return view('manager.order.showbill', compact('order'));
    }
}