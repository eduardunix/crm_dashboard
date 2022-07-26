
@include('header')
<div class="container">
  <div class="panel panel-default">
     <div class="panel-heading"><h4><b><i class="fa fa-user" aria-hidden="true"></i> Adicionar Vendedor</b></h4></div>
  <div class="panel-body" id="vendedor">
  <form enctype="multipart/form-data" action="{!!URL::route('vendedores.store')!!}" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome">
    <label for="id_meta">Meta:</label>
    <select id="currency" class="" name="meta">
      @foreach ($meta as $metas)
      <option value="{{$metas->id}}">R$ {{number_format($metas->valor,2)}}</option>
      @endforeach
    </select>
    <label for="avatar">Avatar:</label>
    <input type="file" id="image" name="image">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <input class="btn btn-status" type="submit" value="Gravar">
  </form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
