
@include('header')
<div class="container">
  <form action="{!!URL::route('metas.store')!!}" method="post">
    <label for="nome">Meta</label>
    <input type="number" name="meta">
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
