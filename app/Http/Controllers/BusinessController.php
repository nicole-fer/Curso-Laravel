<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all();
        $businesses = Business::find(1);
       // $businessesWhere = Business::where('name', 'Runte-Wunsch')->get();
        dd($businesses, $businesses);
       // dd($businessesWhere);

       //$businessesWhereFirst -> encontra o primeiro que encontrar, caso tiverem mais de uma pessoas com o mesmo nome
    }
}
