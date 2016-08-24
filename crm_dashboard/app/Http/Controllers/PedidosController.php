<?php

namespace App\Http\Controllers;
use App\Pedidos;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
use Storage;
use Image;
use Redirect;


class PedidosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id)
    {
      //$pedido = DB::table('pedidos')->select('id','id_vendedor','valor','numero','created_at')->where('id', = '$id');
      //return view('pedidos.show', compact('pedido'));
    }
    public function update()
    {

    }
    public function index()
    {
      $pedidos = DB::table('pedidos')->select('id','id_vendedor','valor','numero','created_at')->orderBy('valor','desc')->paginate('10');
      return view('pedidos.index', compact('pedidos'));

    }
    public function destroy($id)
    {
      DB::table('pedidos')->where('id', '=', $id)->delete();
      return view('pedidos.excluido');
    }
    public function CalculaMeta($meta,$pedidostotal)
    {
      $calculometa = $pedidostotal / $meta;
      return $calculometa * 100 . '%';

    }
    public function create()
    {
      $vendedores = DB::table('vendedores')->select('nome','id')->get();
      return view('pedidos.form', compact('vendedores'));
    }
    public function store()
    {
      $vendedor = Request::input('vendedor');
      $pedido = Request::input('pedido');
      $produto = Request::input('produto');
      $valor = Request::input('valor');
      $date = date('d-m-yyyy H:i:s');
      DB::insert('insert into pedidos (id_vendedor, numero, valor,produto, created_at) values (?,?,?,?,NOW())',array($vendedor, $pedido,$valor,$produto));
      return view('pedidos.adicionado');
    }
}
