@include('header')
    <div class="container">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4><i class="fa fa-trophy" aria-hidden="true"></i> Produto Destaque</h3>
      </div>
      <div class="panel-body">
      <table class="table">
          <tableheader>
            <tr><th>Imagem</th><th>Produto<th><th>Quantidade</th><th>Ação</th></tr>
          </tableheader>
          <tr>
        <td><img href="{{$produto[0]->id}}" class="img-responsive produto" src="{{$produto[0]->imagem}}" alt="" /></td><td>{{$produto[0]->nome}}</td><td></td><td>{{$produto[0]->quantidade}}</td><td><a href="/promocao/update/{{$produto[0]->id}}"><button type="button" class="btn btn-status" name="button">Alterar</button></a></td>
          </tr>
    </table>
  </div>
    </div>
    </div>

  </body>
</html>
