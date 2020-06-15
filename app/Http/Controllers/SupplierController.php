<?php

namespace App\Http\Controllers;

use App\Province;
use App\Seller;
use App\Supplier;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $salesmen = Seller::get();
        $provinces = Province::get();
        return view('suppliers.suppliers', compact('salesmen', 'provinces'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function salesmenIndex()
    {
        $provinces = Province::get();
        return view('suppliers.salesmen', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $supplier = new Supplier();
        $supplier->business_name = $request->sup_name;
        $supplier->cuit = $request->sup_cuit;
        $supplier->address_street = $request->sup_street;
        $supplier->address_number = $request->sup_address_number;
        $supplier->city_id = $request->sup_city;
        $supplier->email = $request->sup_mail;
        $supplier->phone = $request->sup_phone;
        $supplier->observations = $request->sup_obs;
        $supplier->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Supplier  $supplier
     * @return Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
