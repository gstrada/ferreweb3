<?php

namespace App\Http\Controllers;

use App\MeasurementUnit;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MeasurementUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $units = MeasurementUnit::get();
        return view('configs.m-units', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $unit = new MeasurementUnit();
        $unit->name = $request->mu_name;
        $unit->description = $request->mu_desc;
        $unit->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MeasurementUnit  $measurementUnit
     * @return \Illuminate\Http\Response
     */
    public function show(MeasurementUnit $measurementUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MeasurementUnit  $measurementUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(MeasurementUnit $measurementUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\MeasurementUnit  $measurementUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MeasurementUnit $measurementUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MeasurementUnit  $measurementUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeasurementUnit $measurementUnit)
    {
        //
    }
}
