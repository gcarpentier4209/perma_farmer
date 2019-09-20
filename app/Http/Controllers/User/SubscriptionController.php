<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Order;
use App\Subscription;
use App\SubscriptionOption;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = auth()->user();
        $subscription_options = SubscriptionOption::all();

        return view('user.subscriptions.create',[
            'user'=>$user,
            'subscription_options'=>$subscription_options
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $nb_order =4;

        $subscription = new Subscription([
        'date_start'=> $request->date_start = now(),
        'start_end'=> $request->date_end = now()->addMonth(),

    ]);

        $subscription->subscriptionOption()->associate($request->basket_choice);
        $subscription->user()->associate($user);

        $subscription->save();

        for ($i = 1; $i <= $nb_order; $i++) {

           $order = new Order();
           $order->user()->associate($user);
           $order->subscription()->associate($subscription);
           $order->save();
        }




        return redirect()->route('welcome');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
