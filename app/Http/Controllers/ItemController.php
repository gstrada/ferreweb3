<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Item;
use App\MeasurementUnit;
use App\Supplier;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('stock.items');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function addItems()
    {
        $categories = Category::where('deleted_at', null)->get();
        $brands = Brand::where('deleted_at', null)->get();
        $suppliers = Supplier::where('deleted_at', null)->get();
        $units = MeasurementUnit::get();
        return view('stock.add-item', compact('categories', 'brands', 'suppliers', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $item = new Item();
        $item->category_id = $request->item_cat;
        $item->brand_id = $request->item_brand;
        $item->code = $request->item_code;
        $item->barcode = $request->item_barcode;
        $item->name = $request->item_name;
        $item->description = $request->item_description;
        $item->supplier_id_1 = $request->item_supplier_1;
        $item->measurement_unit_id = $request->item_m_unit;
        $item->cost = $request->item_cat;
        $item->discount = $request->item_discount;
        $item->profit = $request->item_profit;
        $item->iva = $request->item_iva;
        $item->final_price = $request->item_final_price;
        $item->observations = $request->add_item_obs;
        $item->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Item  $item
     * @return Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
