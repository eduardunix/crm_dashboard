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
use Session;
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
  //$input = Input::file('image');
  $file = array('image' => Input::file('image'));
  // setting up rules
  $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    if (Input::file('image')->isValid()) {
      $destinationPath = 'uploads';
      $extension = Input::file('image')->getClientOriginalExtension();
      $fileName = rand(11111,99999).'.'.$extension;
      Input::file('image')->move($destinationPath, $fileName);
      $caminho = "/uploads/". $fileName;
      Session::flash('success', 'Upload successfully');
      DB::insert('insert into vendedores (nome, id_meta, avatar) values (?,?,?)',array($nome, $meta,$caminho));
      return Redirect::to('vendedores');
    }
    else {
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }
    return view('vendedores.adicionado');
  }
  public function update()
  {
    //
  }
}
