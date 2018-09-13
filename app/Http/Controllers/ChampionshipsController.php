<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Championships;

class ChampionshipsController extends Controller
{
    //
    public function index()
    {
    	$data = Championships::get();
    	return json_encode($data);
    }
}
