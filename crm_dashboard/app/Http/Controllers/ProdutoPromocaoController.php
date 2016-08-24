<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
use Storage;
use Image;
use Session;
use Redirect;
use Validator;

class ProdutoPromocaoController extends Controller
{
    public function index()
    {
      $produto = DB::table('produto')->select('id','nome','quantidade','imagem')->get();
      return view('produto.index', compact('produto'));
    }

    public function create()
    {

    }

    public function destroy()
    {

    }
    public function show()
    {
      DB::table('produto')->select('id','nome','quantidade','imagem');
      return view('produto.form', compact('produto'));
    }
    public function update($id)
    {
      $produto = DB::table('produto')->select('id','nome','quantidade','imagem')->where('id','=', $id)->get();
      return view('produto.form', compact('produto'));
    }
    public function store()
    {
      $id = 1;
      $nome = Request::input('nome');
      $quantidade = Request::input('quantidade');
      $file = array('image' => Input::file('image'));
      $rules = array('image' => 'required',);
      $validator = Validator::make($file, $rules);
      if ($validator->fails()) {
        return Redirect::to('promocao')->withInput()->withErrors($validator);
      }
      else {
        if (Input::file('image')->isValid()) {
          $destinationPath = 'produto';
          $extension = Input::file('image')->getClientOriginalExtension();
          $fileName = 'produto.'.$extension;
          Input::file('image')->move($destinationPath, $fileName);
          $caminho = "/produto/". $fileName;
          Session::flash('success', 'Upload successfully');
          DB::table('produto')->where('id', $id)->update(['nome' => $nome, 'quantidade' => $quantidade, 'imagem' => $caminho]);
          return Redirect::to('promocao');
        }
        else {
          Session::flash('error', 'uploaded file is not valid');
          return Redirect::to('promocao');
        }
      }
    }

}
