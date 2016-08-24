
@include('header')
<div class="container">
  <div class="panel panel-default">
     <div class="panel-heading"><h4><b><i class="fa fa-user" aria-hidden="true"></i> Adicionar Pedido</b></h4></div>
  <div class="panel-body" id="dadosvendedor">
  <form action="{!!URL::route('pedidos.store')!!}" method="post">
    <label for="nome">Vendedor</label>
    <select class="" name="vendedor">
      @foreach ($vendedores as $vendedor)
      <option value="{{$vendedor->id}}">{{$vendedor->nome}}</option>
      @endforeach
    </select>
    <label for="nome">Nº Pedido</label>
    <input type="text" name="pedido" required>
    <label for="valor">Valor</label>
    <input class="valor"  id="currency" data-thousands="" data-decimal="." type="text" name="valor">
    <label for="produto">Vendeu algum produto promocional?(Quantidade)</label>
    <input class="valor" type="number" name="produto">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <input class="btn btn-status" type="submit" value="Gravar">
  </form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
