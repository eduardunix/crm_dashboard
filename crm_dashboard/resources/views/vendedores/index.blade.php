@include('header')
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4><i class="fa fa-users" aria-hidden="true"></i> Vendedores</h3>
        </div>
        <div class="panel-body">
      <table class="table">
          <tableheader>
            <th></th><th>Nome</th><th>Ação</th>
          </tableheader>
        @foreach ($vendedores as $vendedor)
        <tr><td><img src="{{$vendedor->avatar}}" width="80px" class="img-responsive img-thumbnail"/></td><td><h2>{{$vendedor->nome}}</h2></td><td><a href="vendedores/show/{{ $vendedor->id }}"><button type="button" name="button" class="btn btn-status"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button></a></td><td><a href="/vendedores/destroy/{{ $vendedor->id }}"><button type="button" name="button" class="btn btn-status"><i class="fa fa-trash" aria-hidden="true"></i> Excluir</button></a></td></tr>
      @endforeach
    </table>
      <nav>
  <ul class="pagination">
    <li>
      <a href="{{$vendedores->previousPageUrl() }}" aria-label="Previous">
        <i class="fa fa-hand-o-left" aria-hidden="true"></i> Anterior
      </a>
    </li>
    <li>
      <a href="{{$vendedores->nextPageUrl() }}" aria-label="Next">
        <i class="fa fa-hand-o-right" aria-hidden="true"></i> Próximo
      </a>
    </li>
  </ul>
  @if(empty($vendedores))
  <div class="alert alert-danger">não temos vendedores cadastrados</div>
  @else
  @endif
</nav>
 <a href="{!!URL::route('vendedores.create')!!}"><button class="btn btn-status">Cadastro</button></a>
    </div>
  </div>
  </div>
  </body>
</html>
