<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meja;

class WaiterController extends Controller
{
    public function index(){
        $meja = Meja::get();
        return view('waiter.index',['meja' => $meja]);
    }
}
