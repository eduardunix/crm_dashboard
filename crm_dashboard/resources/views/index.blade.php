@include('header')
<script type="text/javascript">
function update() {
  $.get("response.php", function(data) {
    $("#dadosvendedor").html(data);
    window.setTimeout(update, 10000);
  });
}

</script>

<?php setlocale(LC_MONETARY, 'pt_BR'); ?>
<div class="container-fluid">

  <div class="col-md-12">
    @foreach ($metavendedores as $metavendedor)
  <div class="col-md-2">
    <div class="panel panel-vendedores">
      <div class="col-md-4">
        <div class="">
          <img class="avatar" src="/img/avatar/padrao.jpg" alt=""/>
        </div>
      </div>
      <b>{{$metavendedor->nome}}</b>
      <div class="progress">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:{{$metavendedor->total_vendas / $meta[0]->valor * 100}}%">
        <b>{{$metavendedor->total_vendas / $meta[0]->valor * 100}}% da meta</b>
    </div>
  </div>
  </div>
  </div>
    @endforeach
    </div>
  <!-- <div class="alert alert-success" role="alert"><i class="fa fa-bell" aria-hidden="true"></i> Novo Pedido! de $usuario</div> -->
<div class="col-md-6">
  <div class="panel panel-default">
     <div class="panel-heading"><h4><b><i class="fa fa-money" aria-hidden="true"></i> Ultimos Pedidos</b></h4></div>
  <div class="panel-body" id="dadosvendedor">
        <table class="table table-hover" >
          <tableheader>
            <tr><th></th><th><h3><b>Nome</b></h3></th><th><h3><b>Nº Pedido</b></h3></th><th><h3><b>Valor</b></h3></th><th><h3><b>Data</b></h3></th></tr>
        </tableheader>
        @foreach ($pedidos as $pedido)
          <tr><td><img src="/img/avatar/padrao.jpg" class="avatar" alt="" /></td> <td>{{$pedido->nome}}</td><td>{{$pedido->numero}}</td><td >R$ {{$pedido->valor}}</td><td>{{$pedido->created_at}}</td></tr>
        @endforeach
        </table>
    </div>
  </div>
</div>
    <div class="col-md-6">
      <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading"><h4><b><i class="fa fa-line-chart" aria-hidden="true"></i> Metas</b></h4></div>
      <div class="panel-body">
        <div class="col-md-5">
          <div id="dia" style="width:400px; height:320px;"></div>
        </div>
        <div class="col-md-5">
        <div id="mes" style="width:400px; height:320px;"></div>
      </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading"><h4><b><i class="fa fa-bicycle" aria-hidden="true"></i> Promoção do Mês</b></h4></div>
    <div class="panel-body">
    <div class="col-md-6">
      <div class="col-md-8">
        <img src="img/promo.png"  class="img-responsive"alt="" />
      </div>
      <div class="col-md-4">
        <div id="capacetes" style="width:280px; height:180px;"></div>
      </div>
    </div>
    </div>
    </div>
    </div>
</div>
</div>
</div>
<script>
  var g = new JustGage({
    id: "dia",
    value: {{$somapedidosdias[0]->totalpedidosdias}},
    min: 0,
    max: {{$meta[0]->valor}},
    title: "Meta do dia",
    humanFriendly: true,

  });
</script>
<script>
  var g = new JustGage({
    id: "mes",
    value: {{$somapedidos[0]->totalpedidos}},
    min: 0,
    max: "500000",
    title: "Meta do Mês",
    humanFriendly: true,
  });
</script>
<script>
  var g = new JustGage({
    id: "capacetes",
    value: 4,
    min: 0,
    max: 10,
    title: "Capacetes Vendidos",
    humanFriendly: true,

  });
</script>
</div>
  </body>
</html>
