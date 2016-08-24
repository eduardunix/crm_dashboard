
@include('header')
<div class="container">
  <div class="panel panel-default">
     <div class="panel-heading"><h4><b><i class="fa fa-user" aria-hidden="true"></i> Produto Destaque</b></h4></div>
       <div class="panel-body">
     <div class="text-center">
      <img src="{{$produto[0]->imagem}}" class="avatar-x2" alt="" />
     </div>
  <div class="panel-body" id="dadosvendedor">
  <form enctype="multipart/form-data" action="{!!URL::route('promocao.store')!!}" method="post">
    <label for="">Nome do Produto</label>
    <input type="text" name="nome" id="nome" value="{{$produto[0]->nome}}" placeholder="Digite o nome do Produto" required>
    <label for="">Quantidade</label>
    <input type="number" name="quantidade" id="quantidade" value="{{$produto[0]->quantidade}}" placeholder="Digite a Quantidade" required >
    <label for="">Imagem</label>
    <input type="file" id="image" name="image" required>
    <span id="helpBlock" class="help-block">imagem precisa ser <b>*.png</b></span>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <input class="btn btn-status" type="submit" value="Atualizar">
  </form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
