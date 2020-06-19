<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Database\Eloquent\Builder;
use App\Category;

class DatatablesController extends Controller
{
    public function categories(){

    }

    public function items(Builder $query) {

        $query = Item::select(DB::Raw("id, code, name, CONCAT('$ ', final_price) AS final_price"));

        return Datatables::of($query)->make(true);

    }
}
