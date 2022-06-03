<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()


     { 
        //Terceira forma
        $input = [
            'name' => 'Maria',
            'email' => 'maria@maria.com',
        ];
        $businesses = Business::find(2);
        $businesses->fill($input);
        $businesses->save();
        dd($businesses);
        
        /*
        //Atualizando forma II, retorna true se tiver dado certo
         $businesses=Business::find(2)->update([
            'name' => 'Jon',
            'email' => 'jon@jon.com',
        ]); 
        dd($businesses); */
        
        
        //populando o banco 
/*         $businesses = Business::create([
            'name' => 'Jon Snow',
            'email' => 'jon@snow.com',
            'adress' => 'Rua a quadra B'
        ]); */

   /*   Atualizando o registro forma I  
        $businesses = Business::find(2);
        $businesses->name = 'Tiago';
        $businesses->email = 'Tiago@laravel9.com';
        $businesses->adress = 'Quadra C Rua B';
        $businesses->save(); 
        dd($businesses); */

        //$businesses = Business::all();
       // $businesses = Business::find(1);
       // $businessesWhere = Business::where('name', 'Runte-Wunsch')->get();
       // dd($businesses, $businesses);
       // dd($businessesWhere);

       //$businessesWhereFirst -> encontra o primeiro que encontrar, caso tiverem mais de uma pessoas com o mesmo nome
    }
}
