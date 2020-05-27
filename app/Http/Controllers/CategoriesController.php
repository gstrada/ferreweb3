<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
Use RealRashid\SweetAlert\Facades\Alert;


class CategoriesController extends Controller
{


    public function index()
    {
        $category_list = Category::all()->where('deleted_at', null);
        return view('stock.categories', compact('category_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->cat_name;
        $category->description = $request->cat_desc;
        $category->observations = $request->cat_obs;
        $category->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return void
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @return Factory|View
     */
    public function edit(Request $request)
    {
        $category = Category::whereId($request->param)->first();

        return view('stock.categories-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        $category = Category::all()->where('id',$request->cat_id)->first();

        if($category->update([
            'name' => $request->cat_name,
            'description' => $request->cat_desc,
            'observations' => $request->cat_obs
        ])){
            return 1;
        };
        return 0;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return int
     */
    public function destroy(Request $request)
    {
        $category = Category::all()->where('name', $request->name)->first();
        if ($category->update(['deleted_at' => now()])) {

            return 1;
        };
        return 0;
    }
}
