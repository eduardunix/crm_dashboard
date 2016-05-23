
@include('header')
<div class="container">
  <form action="{!!URL::route('vendedores.store')!!}" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome">
    <label for="id_meta">Meta:</label>>
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
