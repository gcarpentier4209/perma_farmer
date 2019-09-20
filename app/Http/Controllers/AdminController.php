<?php

namespace App\Http\Controllers;

use App\Stock;
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

    public function showAllOrders($clientId)
    {
        /**
         * Show the profile and all orders for the given client.
         *
         * @param  int  $clientId
         * @return View
         */
        $client = User::findOrFail($clientId);
        $orders = $client->orders()->get();

        return view('admin.admin_orders', compact('client', 'orders'));
    }

    public function showOrder($orderId)
    {
        /**
         * Show the order status and all products for the given orderId.
         *
         * @param  int  $orderId
         * @return View
         */

        $order = Order::findOrFail($orderId);
        $products = $order->products()->get();
        return view('admin.admin_order', compact('order', 'products'));
    }

    public function deleteOrder($orderId)
    {
        /**
         * Delete the order for the given orderId.
         *
         * @param  int  $orderId
         * @return View
         */

        $order = Order::findOrFail($orderId);
        $clientId = $order->id_user;
        $order->delete();
        return redirect()->route('admin.show.orders', $clientId);
    }

    public function editOrder($orderId)
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

    public function showProducts()
    {
        return view('admin.product', ['products'=>Product::all()]);
    }
}
