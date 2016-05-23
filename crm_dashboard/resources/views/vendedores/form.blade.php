
@include('header')
<div class="container">

  <form action="{!!URL::route('vendedores.store')!!}" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome">
    <label for="id_meta">Meta:</label>
    <select class="" name="meta">
      @foreach ($meta as $metas)
      <option value="{{$metas->id}}">R$ {{number_format($metas->valor,2)}}</option>
      @endforeach
    </select>
    <label for="avatar">Avatar:</label>
    <input type="file" name="image">
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
