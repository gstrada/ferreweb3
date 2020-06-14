<?php

namespace App\Http\Controllers;

use App\Province;
use App\Seller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $salesman_list = Seller::all()->where('deleted_at', null);
        $provinces = Province::get();
        return view('suppliers.salesmen', compact('salesman_list', 'provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $seller = new Seller();
        $seller->name = $request->sls_name;
        $seller->email = $request->sls_mail;
        $seller->phone = $request->sls_phone;
        $seller->observations = $request->sls_obs;
        $seller->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Seller  $seller
     * @return Response
     */
    public function update(Request $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return Response
     */
    public function destroy(Seller $seller)
    {
        //
    }
}
