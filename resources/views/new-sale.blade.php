@extends('templates/app')
@section('content')
<h4>Nova Venda - Dados Regionais</h4>

<div class="row">
  <div class="col">
    <div class="row">
      <div class="col">
        <label for="cep">CEP</label>
          <input name="cep" id="cep" type="number" class="form-control form-control-sm" maxlength="8"/>
    
          <label for="uf">UF</label>
          <input name="uf" id="uf" type="text" class="form-control form-control-sm"/>
          
          <label for="city">Cidade</label>
        <input name="city" id="city" type="text" class="form-control form-control-sm"/>
      </div>
    
      <div class="col">
        <label for="district">Bairro</label>
        <input name="district" id="district" type="text" class="form-control form-control-sm"/>
    
        <label for="street">Rua</label>
        <input name="street" id="street" type="text" class="form-control form-control-sm"/>
      </div>
    </div>

    <hr />
      <h4>Nova Venda - Dados do Produto</h4>
    
      <div class="row">
        <div class="col">
          <label for="cep">Nome</label>
            <input name="Nome" id="Nome" type="text" class="form-control form-control-sm" maxlength="8"/>
      
            <label for="ref">Código de Referência</label>
            <input name="ref" id="ref" type="text" class="form-control form-control-sm"/>

            <hr />

            <p>Entrega: </p>

            <input type="submit" value="Efetuar Venda">
          
        </div>
      </div>

  </div>
      <div class="col">
        <h4>Listagem de Produtos Inseridos</h4>
        <table class="table">
          <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Fornecedor(es)</th>
          </tr>
        </table>
      </div>
    </div>


<div id="modalLocal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Erro ao processar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="modalTxt"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
  <script src="{{ url(mix('site/js/jquery.js')) }}"></script>
  <script src="{{ url(mix('site/js/scripts.js')) }}"></script>
  <script src="{{ url(mix('site/js/bootstrap.js')) }}"></script>
  <script src="{{ url(mix('site/js/axios.js')) }}"></script>
@endsection