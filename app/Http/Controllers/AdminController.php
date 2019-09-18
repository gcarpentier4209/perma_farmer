<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAdminDashboard()
    {
        return view('admin.dashboard');
    }

    public function showOrders()
    {
        return view('admin.admin_orders');
    }


    public function showStocks()
    {
        return view('admin.stock', ['stocks'=>Stock::all()]);
    }
}
