<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;
use App\Township;
use function GuzzleHttp\Promise\all;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop=new Shop();
        $shops=$shop->get();
        return view('shop.index',compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $township=new Township();
        $townships=$township->get();
        return view('shop.create',compact('townships'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop=Shop::create($request->all());
        return redirect()->back();
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

    public function shopRegNumber($tsp_id){
        $townships=Township::where('id',$tsp_id)->get();
        $shops = Shop::where('tsp_id',$tsp_id);

        $tspCode="";
        foreach ($townships as $township) {
            $tspCode = $township['tsp_code'];
        }

        $registerNumber="";
        if ($shops->count()>0){
            foreach ($shops->latest('created_at')->first()->get() as $shop) {
                $registerNumber = $shop['register_number']+1;
            }
        }else{
            $registerNumber=$tspCode."001";
        }

        $msg =$registerNumber;
        return response()->json(array('register_number'=> $msg), 200);
    }
}
