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

    public function showClients()
    {
        return view('admin.admin_clients');
    }

    public function showOrder()
    {
        return view('admin.admin_order');
    }


    public function showStocks()
    {
        return view('admin.stock', ['stocks'=>Stock::all()]);
    }
}
