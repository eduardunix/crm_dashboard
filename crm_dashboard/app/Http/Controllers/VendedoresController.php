<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input;
use App\Vendedores;
use Illuminate\Pagination\Paginator;
use Storage;
use Image;
use Redirect;
use File;
use Validator;


class VendedoresController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
    $vendedores = DB::table('vendedores')->select('vendedores.*')->orderBy('id','desc')->paginate('5');
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
    DB::table('vendedores')->where('id', '=', $id)->delete();
    return view('vendedores.excluido');
  }
  public function store()
  {
  $nome = Request::input('nome');
  $meta = Request::input('meta');
  $image = Input::file('image');
  //echo $image;
  //Storage::move($image->pathName, "/img/".$image['originalName']);
  var_dump(Input::file(image));
  }
  public function update()
  {
    //
  }
}
