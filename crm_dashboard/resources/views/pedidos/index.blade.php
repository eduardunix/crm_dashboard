@include('header')
    <div class="container">
      <table class="table">
          <tableheader>
            <th>Nº Pedido</th><th>Valor</th><th>Data Emissão</th><th>Ação</th>
          </tableheader>
            <td></td>
          <tr>
            @foreach ($pedidos as $pedido)
              <td>{{$pedido->numero}}</td><td>R$ {{$pedido->valor}}</td><td>{{$pedido->created_at}}</td><td><a href="/pedidos/destroy/{{$pedido->id}}"><button class="btn btn-status">Excluir</button></a></td></tr>
            @endforeach
          </tr>
    </table>

 <a href="{!!URL::route('pedidos.create')!!}"><button class="btn btn-status">Cadastro</button></a>
    </div>
  </body>
</html>
