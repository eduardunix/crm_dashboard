@include('header')
<div class="container">
  <div class="container">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading"><i class="fa fa-user" aria-hidden="true"></i> Mostrar {{$v->nome }}<b></b></div>
          <div class="panel-body">
<form class="" action="index.html" method="post">
    <div class="form-group">
    <label for="">Nome Vendedor</label>
    <p>
      {{$v->nome}}
    </p>
    </div>
    <div class="form-group">
    <label for="">Meta</label>
    <p>
      {{number_format($v->valor,2)}}
    </p>
  </div>
  <div class="form-group">
    <label for="">Avatar</label>
    <p>
      <img src="{{$v->avatar}}" alt="" />
    </p>
  </div>
    <div class="form-group">
    <a href=""></a><button type="button" name="name" class="btn btn-status" value="voltar">Voltar</button></a>
  </div>
</form>
</div>
</div>
</div>
</div>

</body>
</html>
</div>
