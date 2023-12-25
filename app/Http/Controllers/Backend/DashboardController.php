<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\shipment;

class DashboardController extends Controller
{
    public function index(){
        $shipment=shipment::count();
        $todayshipment = shipment::take(10)-> get();
        $totalshipment = shipment::take(5)-> get();
        if(fullAccess())
        return view ('backend.adminDashboard', compact('shipment','todayshipment','totalshipment'));
        else
        return view('backend.dashboard');
        }
}
