@include('header')
    <div class="container">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4><i class="fa fa-trophy" aria-hidden="true"></i> Pedidos</h3>
      </div>
      <div class="panel-body">
      <table class="table">
          <tableheader>
            <th>Nº Pedido</th><th>Valor</th><th>Data Emissão</th><th>Ação</th>
          </tableheader>
            <td></td>
          <tr>
            @foreach ($pedidos as $pedido)
              <td>{{$pedido->numero}}</td><td>R$ {{$pedido->valor}}</td><td>{{$pedido->created_at}}</td><td><a href="/pedidos/destroy/{{$pedido->id}}"><button class="btn btn-status"><i class="fa fa-trash" aria-hidden="true"></i> Excluir</button></a></td></tr>
            @endforeach
          </tr>
    </table>

 <a href="{!!URL::route('pedidos.create')!!}"><button class="btn btn-status">Cadastro</button></a>
    </div>
    </div>
    </div>

  </body>
</html>
