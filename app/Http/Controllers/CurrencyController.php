<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use Carbon\Carbon;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $currency =   Currency::all();
        return view('backend.currency.allcurrency', compact('currency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.currency.addcurrency');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
          'currency_name' => 'required',
        'currency_buying_price' => 'required',
        'currency_selling_price' => 'required',
        'currency_pic' => 'image|mimes:jpeg,png,jpg,svg',
        ]);
        $currency_id =  Currency::insertGetId([
          'currency_name' =>$request->currency_name,
          'currency_buying_price' =>$request->currency_buying_price,
          'currency_selling_price' =>$request->currency_selling_price,
          'created_at'=>Carbon::now(),
        ]);
        if ($request->hasFile('currency_pic')) {
            $path = $request->file('currency_pic')->storeAs(
                'currency',
                "currency-".  rand(10000, 200000).".jpeg"
          );
            Currency::where('id', $currency_id)->update([
            'currency_pic' => $path,
          ]);
        }
        return back()->with('status', 'Currency Added Successfully !');
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
        return $id;
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
}
