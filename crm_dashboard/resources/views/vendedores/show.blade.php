@include('header')
<div class="container">
  <div class="container">
      <div class="col-md-12">
        <div class="panel panel-default">        
          <div class="panel-body">
<form class="" action="index.html" method="post">
    <div class="text-center">
      <div class="item"><img  class="avatar-x2" src="{{$v->avatar}}" alt="" /></div>
      <h2>
      {{$v->nome}}
    </h2>
    </div>
    <div class="form-group">
    <h2 for="">Meta</h2>
    <h3>
      {{number_format($v->valor,2)}}
    </h3>
  </div>
  <div class="form-group">
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
