<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pedidos = DB::table('pedidos')->select('id','valor')->get();
        $pedidos = DB::table('pedidos')->join('vendedores', 'pedidos.id_vendedor', '=', 'vendedores.id')->select('pedidos.id','pedidos.valor','pedidos.numero','pedidos.created_at','vendedores.nome')->orderBy('pedidos.created_at','desc')->paginate('8');
        $metavendedor = DB::table('pedidos')->join('vendedores', 'pedidos.id_vendedor', '=', 'vendedores.id')->select('pedidos.id','pedidos.valor','pedidos.numero','pedidos.created_at','vendedores.nome')->groupby('vendedores.nome')->get();
        $meta = DB::table('meta')->select('id','valor')->where('id', '=', 3)->get();
        $somapedidosdias = DB::SELECT('select SUM(valor) as totalpedidosdias from pedidos where created_at >= CURDATE();');
        $somapedidos = DB::SELECT('select SUM(valor) as totalpedidos from pedidos');
        return view('index', compact('pedidos','meta','somapedidos','metavendedor','somapedidosdias'));
    }
}
