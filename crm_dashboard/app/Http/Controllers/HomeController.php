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
        $data = date("Y-m-d");
        $pedidos = DB::table('pedidos')->join('vendedores', 'pedidos.id_vendedor', '=', 'vendedores.id')->select('pedidos.id','pedidos.valor','pedidos.numero','pedidos.produto','pedidos.created_at','vendedores.nome','vendedores.avatar')->where('pedidos.created_at', '>=', $data.'*')->orderBy('pedidos.created_at','desc')->paginate('8');
        $metavendedores = DB::table('pedidos')->join('vendedores', 'pedidos.id_vendedor', '=', 'vendedores.id')->join('meta', 'meta.id', '=', 'vendedores.id_meta')->select('pedidos.id','pedidos.valor','pedidos.numero','pedidos.created_at','meta.valor','vendedores.nome','vendedores.avatar', DB::raw('SUM(pedidos.valor) as total_vendas'))->groupby('vendedores.nome')->orderBy('total_vendas','desc')->paginate('6');
        $meta = DB::table('meta')->select('id','valor')->where('id', '=', 3)->get();
        $somapedidosdias = DB::SELECT('select SUM(valor) as totalpedidosdias, SUM(produto) as totalproduto from pedidos where created_at >= CURDATE();');
        $produto = DB::table('produto')->select('id','nome','quantidade','imagem')->get();
        $somapedidos = DB::SELECT('select SUM(valor) as totalpedidos from pedidos WHERE MONTH(created_at) = MONTH(NOW())');
        if (!$somapedidosdias[0]->totalpedidosdias || !$somapedidos[0]->totalpedidos) {
          $somapedidosdias[0]->totalpedidosdias = 0;
          if(!$somapedidos[0]->totalpedidos) {
            $somapedidos[0]->totalpedidos = 0;
            return view('index', compact('pedidos','meta','somapedidos','metavendedores','somapedidosdias','produto'));
          }
          if (!$somapedidosdias[0]->totalproduto) {
            $somapedidosdias[0]->totalproduto =  0;
            return view('index', compact('pedidos','meta','somapedidos','metavendedores','somapedidosdias','produto'));
          }
          return view('index', compact('pedidos','meta','somapedidos','metavendedores','somapedidosdias','produto'));
        }
        return view('index', compact('pedidos','meta','somapedidos','metavendedores','somapedidosdias','produto'));
    }
}
