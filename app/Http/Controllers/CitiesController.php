<?php

namespace App\Http\Controllers;

use App\City;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use phpDocumentor\Reflection\Types\Integer;

class CitiesController extends Controller
{
    /**
     * @param Request $request
     * @return void | mixed
     */
    public function getCitiesByProvinceId(Request $request) {
        $cities = (new Province)->getCities($request->id);
        $option = '<option value="">Seleccionar...</option>';
        foreach ($cities as $city){
            $option = $option.'<option value="'.$city['id'].'">'.$city['name'].'</option>';
        }
        echo ($option);
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
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
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param City $city
     * @return void
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param City $city
     * @return void
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param City $city
     * @return void
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param City $city
     * @return void
     */
    public function destroy(City $city)
    {
        //
    }
}
