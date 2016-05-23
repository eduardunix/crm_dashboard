<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Pedidos;
use App\Http\Requests;
use DB;

class PedidosController extends Controller
{
    public function index()
    {
      $pedidos = DB::table('pedidos')->select('id','total')->orderBy('id');
      return  view('pedidos.index', compact($pedidos));
    }
}
