<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use DB;
use Input;
use App\Vendedores;
use Illuminate\Pagination\Paginator;
use Storage;
use Redirect;


class VendedoresController extends Controller
{
      public function index()
      {
	       $vendedores = DB::table('vendedores')->join('meta', 'meta.id', '=', 'vendedores.id_meta')->select('vendedores.*','vendedores.avatar', 'meta.valor')->orderBy('id','desc')->paginate('10');
         return view('vendedores.index', compact('vendedores'));
      }
      public function  show($id)
      {
        $vendedores = DB::SELECT("SELECT vendedores.id,meta.valor,vendedores.nome,vendedores.avatar FROM vendedores INNER JOIN meta ON vendedores.id_meta=meta.id where vendedores.id = ?", [$id]);
        if (empty($vendedores)) {
          return 'Vendedor Não encontrado';
        }
          return view('vendedores.show')->with('v',$vendedores[0]);
      }
      public function create()
      {
        $meta = DB::table('meta')->select('id','valor')->get();
        return  view('vendedores.form', compact('meta'));
      }
      public function destroy($id)
      {
          $destroy = vendedores.destroy($id);
          if (empty($destroy)) {
            return 'Vendedor Não Encontrado';
          }
      }
      public function store()
      {
          $nome = Request::input('nome');
          $meta = Request::input('meta');          
          DB::insert('insert into vendedores (nome, avatar, id_meta) values (?,?,?)',array($nome, $img_name, $meta));

          return view('vendedores.adicionado');

      }
      public function update()
      {
          //
      }
}
