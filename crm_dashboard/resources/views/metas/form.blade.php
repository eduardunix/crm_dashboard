
@include('header')
<div class="container">
  <form action="{!!URL::route('metas.store')!!}" method="post">
    <label for="nome">Meta</label>
    <input id='currency' type="text" name="meta">
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
