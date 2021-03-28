@extends('templates/app')
@section('content')
<h4>Listagem de Produtos Cadastrados</h4>

<table class="table">
  <tr>
    <th>Nome</th>
    <th>Código</th>
    <th>Preço</th>
  </tr>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

@endsection

@section('scripts')
  <script src="{{ url(mix('site/js/jquery.js')) }}"></script>
  <script src="{{ url(mix('site/js/bootstrap.js')) }}"></script>
@endsection