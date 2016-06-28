
@include('header')
<div class="container">
  <form action="{!!URL::route('vendedores.store')!!}" method="post">
    <label for="nome">Nº Pedido</label>
    <input type="text" name="npedido">
    <label for="nome">Valor</label>
    <input type="text" name="valor">
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
