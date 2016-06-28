<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Pedidos;
use App\Http\Requests;
use DB;

class PedidosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
      $pedidos = DB::table('pedidos')->select('id','total')->orderBy('id');
      return  view('pedidos.index', compact('pedidos'));
    }
    public function update()
    {

    }
    public function index() {
      return view('pedidos.index');
    }
    public function destroy()
    {

    }
    public function create()
    {
      return view('pedidos.form');
    }
}
