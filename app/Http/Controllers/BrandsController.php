<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $brand_list = Brand::all()->where('deleted_at', null);
        return view('stock.brands', compact('brand_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function addItems()
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
        $brand = new Brand();
        $brand->name = $request->brn_name;
        $brand->logo = $request->brn_logo;
        $brand->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param Brand $brand
     * @return void
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Brand $brand
     * @return void
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Brand $brand
     * @return void
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Brand $brand
     * @return void
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
