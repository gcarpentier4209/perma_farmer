<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAdminDashboard()
    {
        return view('admin.admin_dashboard');
    }

    public function showClients()
    {
        $clients = User::all();
        return view('admin.admin_clients', compact('clients'));
    }

    public function showOrder($clientId)
    {
        /**
         * Show the profile and son order for the given client.
         *
         * @param  int  $clientId
         * @return View
         */
        // todo: get order information with clientId
        $clients = User::findOrFail($clientId);
        $order = Order::where('id_user', $clientId) -> first(); //quand status est livré, delete record
        $products = Product::where('id_order', $order->id);
        return view('admin.admin_order', ['users' => User::findOrFail($clientId)]);
    }

    public function editOrder($clientId)
    {
        /**
         * Edit the profile and son order for the given client.
         *
         * @param  int  $clientId
         * @return View
         */
        return view('admin.admin_order', ['users' => User::findOrFail($clientId)]);
    }


    public function showStocks()
    {
        return view('admin.stock', ['stocks'=>Stock::all()]);
    }
}
