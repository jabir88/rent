<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use App\Order;
use Carbon\Carbon;

class MyController extends Controller
{
    public function index()
    {
        $currency = Currency::all();
        $currency1 = Currency::all();
        return view('frontend.home.home', compact('currency', 'currency1'));
    }
    public function generate(Request $req)
    {
        $taka_ditase = $req->bit_amount_send;
        if ($taka_ditase >=10) {
            $se_name=  explode('||#||', $req->bit_gateway_send);
            $send_cur = Currency::where('currency_name', $se_name[0])->get();
            $send_cur_all = $send_cur[0];
            $send_cur_name =$send_cur_all['currency_name'];
            $send_cur_buying_price =$send_cur_all['currency_buying_price'];
            $send_cur_currency_selling_price =$send_cur_all['currency_selling_price'];


            $taka_ditase_rate = $taka_ditase*$send_cur_buying_price;
            $Rec_name=  explode('||#||', $req->bit_gateway_receive);
            $Rec_name00=  $Rec_name[0];

            $recive_cur = Currency::where('currency_name', $Rec_name00)->get();
            $recive_cur_all = $recive_cur[0];
        
            $recive_cur_name =$recive_cur_all['currency_name'];
            $recive_cur_buying_price =$recive_cur_all['currency_buying_price'];
            $recive_cur_selling_price =$recive_cur_all['currency_selling_price'];

            $tk_dimu = $taka_ditase_rate/$recive_cur_selling_price;
            $exchange_id =str_random(14);
            $full_ar =  array(
          'send_cur_buying_price', $send_cur_buying_price,
          'currency_selling_price', $send_cur_currency_selling_price,
          'recive_cur_buying_price', $recive_cur_buying_price,
          'recive_cur_selling_price', $recive_cur_selling_price,
          'taka_ditase', $taka_ditase,
          'taka_ditase_rate', $taka_ditase_rate,
          'tk_dimu', $tk_dimu,
          'send_cur_name', $send_cur_name,
          'recive_cur_name', $recive_cur_name,
          'exchange_id', $exchange_id,

          );
            return view('frontend.home.home2', compact('full_ar'));
        } else {
            return back()->with('error', 'You Can Order Minimum 10$ !');
        }
    }
    public function generate_sub(Request $req)
    {
        // $req_done=   $req->validate([
        //
        //  ]);
        // $req->validate([
        //               'customer_name' => 'required|email',
        //                'customer_email' => 'required|email',
        //                'customer_phone' => 'required|min:5',
        //              ]);

        // $this->validate(, [
        //
        // ]);
        // return $req->all();

        $order_id=  Order::insertGetId([
          'currency_buying_price'=>$req->send_currency_buying_price,
          'currency_selling_price'=>$req->receive_currency_selling_price ,
          'customer_email'=>$req->customer_email ,
          'customer_name'=>$req->customer_name ,
          'customer_phone'=>$req->customer_phone ,
          'recive_cur_name'=>$req->recive_cur_name ,
          'send_cur_name'=>$req->send_cur_name ,
          'taka_ditase'=>$req->taka_ditase ,
          'taka_ditase_rate'=>$req->taka_ditase_rate ,
          'exchange_id'=>$req->exchange_id ,
          'tk_dimu'=>$req->tk_dimu ,
          'confirm'=> 0 ,
          'created_at'=> Carbon::now() ,

            ]);
        $Order_all =  Order::findOrFail($order_id);
        return view('frontend.home.home3', compact('Order_all'));
    }
    public function confirm(Request $req)
    {
        Order::where('id', $req->order_id)
              ->update([
              'confirm' => 1,
            ]);
        $Order_all =  Order::findOrFail($req->order_id);
        return view('frontend.home.home4', compact('Order_all'));
    }
    public function confirm_done(Request $req)
    {
        Order::where('id', $req->order_id)
              ->update([
                'transaction_details' =>$req->transaction_id,
              ]);
        return redirect('/')->with('success', 'Thank You For Your Order ');
    }
}
