
@include('header')
<div class="container">
  <div class="panel panel-default">
     <div class="panel-heading"><h4><b><i class="fa fa-user" aria-hidden="true"></i> Produto Destaque</b></h4></div>
  <div class="panel-body" id="dadosvendedor">
  <form action="{!!URL::route('promocao.store')!!}" method="post">
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
