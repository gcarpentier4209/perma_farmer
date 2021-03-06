<?php

namespace App\Http\Controllers;

use App\Stock;
use App\User;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // dd($orders);

        return view('admin.admin_orders', compact('client', 'orders'));
    }

    public function showOrder($orderId)
    {
        /**
         * Show the order status and all products for the given order.
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

    public function updateOrder(Request $request)
    {
        /**
         * Update order's status for the given order.
         *
         * @param  int  $orderId and request
         * @return View
         */
        // dd($request);
        $order = Order::findOrFail($request->id);
        $order->status = $request->status;
        $order->save();
        // $status = $request->status;
        // DB::update('UPDATE orders SET status = ' + $status + ' where id = ' + $orderId, $param);
        return redirect()->route('admin.show.order', $order->id);
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
