@include('header')
<script type="text/javascript">
setTimeout(function(){
  window.location.reload(1);
}, 5000);

</script>
<div class="container-fluid">
  <!-- <div class="alert alert-success" role="alert"><i class="fa fa-bell" aria-hidden="true"></i> Novo Pedido! de $usuario</div> -->
<div class="col-md-6">
  <div class="panel panel-default">
  <div class="panel-body">
      <h2><b>Ultimos Pedidos</b></h2>
        <table class="table table-hover">
          <tableheader>
            <tr><th></th><th><h2><b>Nome</b></h2></th><th><h2><b>Meta</b></h2></th><th><h2><b>Valor</b></h2></th></tr>
        </tableheader>
          <tr><td><img src="img/avatar/padrao.png" alt="img/avatar/padrao.png" class="img-circle img-dashboard"></td><td><h2>Daniel Batista</h2></td><td><h2><span class="label label-success">80%</span></h2></td><td><h2>R$ 3.000</h2></td></tr>
          <tr><td><img src="img/avatar/padrao.png" alt="img/avatar/padrao.png" class="img-circle img-dashboard"></td><td><h2>Daniel Batista</h2></td><td><h2><span class="label label-warning">50%</span></h2></td><td><h2>R$ 3.000</h2></td></tr>
          <tr><td><img src="img/avatar/padrao.png" alt="img/avatar/padrao.png" class="img-circle img-dashboard"></td><td><h2>Daniel Batista</h2></td><td><h2><span class="label label-danger">15%</span></h2></td><td><h2>R$ 3.000</h2></td></tr>
          <tr><td><img src="img/avatar/padrao.png" alt="img/avatar/padrao.png" class="img-circle img-dashboard"></td><td><h2>Daniel Batista</h2></td><td><h2><span class="label label-danger">10%</span></h2></td><td><h2>R$ 3.000</h2></td></tr>
        </table>
    </div>
  </div>
</div>
    <div class="col-md-6 text-center">
      <h1 class="text-center"><b>Meta do dia</b></h1>
      <div class="row">
        <h1 class="text-center titulos"><b> R$ 100.000</b></h1>
        <h2><b style="color:red;"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Faltam: R$30.000</b></h2>
      </div>
      <div class="panel panel-default">
      <div class="panel-body">
      <div class="col-md-12">
        <img src="img/promo.png"  class="img-responsive"alt="" />
      </div>
    </div>
  </div>
</div>
</div>
  </body>
</html>
