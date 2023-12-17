<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Backend\Ordertrack;


use Illuminate\Support\Facades\Hash;
use Exception;
use Toastr;


class HomeController extends Controller
{
    public function ordertrack(Request $r)
    {
        $inv=Shipment::where('invoice_no',$r->orderid)->pluck('id');
        $data=Ordertrack::whereIn('shipment_id',$inv)->oldest()->get();
        return view('frontend.ordertrack',compact('data'));
    }
}
