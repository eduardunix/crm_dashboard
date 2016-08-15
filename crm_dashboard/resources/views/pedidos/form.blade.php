
@include('header')
<div class="container">
  <h2>Adicionar Pedido</h2>
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
    <input type="text" required name="valor">
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
