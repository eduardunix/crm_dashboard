@include('header')
    <div class="container">
      <table class="table">
          <tableheader>
            <th>Meta</th><th>Ação</th>
            @foreach ($metas as $meta)
            <tr><td><h2>R$ {{number_format($meta->valor)}}</h2></td><td><a href="metas/show/{{ $meta->id }}"><button type="button" name="button" class="btn btn-status"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button></a></td><td><a href="/metas/destroy/{{ $meta->id }}"><button type="button" name="button" class="btn btn-status"><i class="fa fa-trash" aria-hidden="true"></i> Excluir</button></a></td></tr>

            @endforeach
          </tableheader>
    </table>

 <a href="{!!URL::route('metas.create')!!}"><button class="btn btn-status">Cadastro</button></a>
    </div>
  </body>
</html>
