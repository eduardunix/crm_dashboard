<?php

namespace App\Http\Controllers;
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


class MetasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      $metas = DB::table('meta')->select('id','valor')->orderBy('valor','desc')->paginate('10');
      return view('metas.index', compact('metas'));
    }
    public  function create()
    {
      return view('metas.form');
    }
    public function destroy($id)
    {
      DB::table('meta')->where('id', '=', $id)->delete();
      return view('metas.excluido');
    }

    public function store()
    {
      $meta = Request::input('meta');
      DB::insert('insert into meta (valor) values (?)',array($meta));
      return view('metas.adicionado');
    }
}
