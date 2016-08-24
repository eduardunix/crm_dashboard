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
          <img class="avatar" src="{{$metavendedor->avatar}}" alt=""/>
      </div>
      <b>{{$metavendedor->nome}}</b>
      <div class="progress">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:{{$metavendedor->total_vendas / $metavendedor->valor * 100}}%">
        <b>{{number_format($metavendedor->total_vendas / $metavendedor->valor * 100)}}% da meta</b>
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
        <table class="table" >
          <tableheader>
                            <tr><th></th><th><h5><b>Nome</b></h5></th><th><h5><b>Nº Pedido</b></h5></th><th><h5><b>Valor</b></h5></th><th><h5><b>Data</b></h5></th></tr>
        </tableheader>
        @foreach ($pedidos as $pedido)
          <tr><td ><div class="item"><img src="{{$pedido->avatar}}" class="avatar-dash" alt="" /></div></td> <td >{{$pedido->nome}}</td><td >{{$pedido->numero}}</td><td  >R$ {{$pedido->valor}}</td><td >{{date('d/m/Y H:i:s', strtotime($pedido->created_at))}}</td></tr>
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
        <img src="{{$produto[0]->imagem}}"  class="img-responsive"alt="" />
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
    label: "R$",
    title: "Meta do dia",

  });
</script>
<script>
  var g = new JustGage({
    id: "mes",
    value: {{$somapedidos[0]->totalpedidos}},
    min: 0,
    max: "500000",
    label: "R$",
    title: "Meta do Mês",
  });
</script>
<script>
  var g = new JustGage({
    id: "capacetes",
    value: {{$somapedidosdias[0]->totalproduto}},
    min: 0,
    max: {{$produto[0]->quantidade}},
    title: "{{$produto[0]->nome}} Vendidos",
    humanFriendly: true,
  });
</script>
</div>
  </body>
</html>
