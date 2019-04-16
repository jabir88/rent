<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
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
            $send_cur = Currency::where('currency_name', $req->bit_gateway_send)->get();
            $send_cur_all = $send_cur[0];
            $send_cur_name =$send_cur_all['currency_name'];
            $send_cur_buying_price =$send_cur_all['currency_buying_price'];
            $send_cur_currency_selling_price =$send_cur_all['currency_selling_price'];

            $taka_ditase_rate = $taka_ditase*$send_cur_buying_price;
            $recive_cur = Currency::where('currency_name', $req->bit_gateway_receive)->get();
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
}
