@extends('templates/app')
@section('content')
  <h3>Vendas Efetuadas</h3>

  <table class="table">
    <tr>
      <th>Código da venda</th>
      <th>Valor total</th>
      <th>Data da Venda</th>
      <th>Data de Entrega</th>
    </tr>

    <tr>
      <td>1</td>
      <td>R$ 100,00</td>
      <td>27/03/2021</td>
      <td>27/03/2021</td>
    </tr>
    <tr>
      <td>2</td>
      <td>R$ 100,00</td>
      <td>27/03/2021</td>
      <td>27/03/2021</td>
    </tr>
    <tr>
      <td>3</td>
      <td>R$ 100,00</td>
      <td>27/03/2021</td>
      <td>27/03/2021</td>
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
<script src="{{ url(mix('site/js/jquery.js'))}}"></script>
<script src="{{ url(mix('site/js/bootstrap.js')) }}"></script>
@endsection