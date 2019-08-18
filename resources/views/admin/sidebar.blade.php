<div class="container form-inline">
<h3>Área Administrativa</h3>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Galeria de Imagens
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a href="{{ url('/admin/imagens') }}" title="Listar"><button class="btn btn-default btn-block"><i class="fa fa-arrow-left" aria-hidden="true"></i> Listar Imagens</button></a>
    <a href="{{ url('/admin/imagens/create') }}" title="Add"><button class="btn btn-default btn-block"><i class="fa fa-arrow-left" aria-hidden="true"></i> Adicionar Imagem</button></a>
  </div>
  </div>
  <div>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Treinadores
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
    <a href="{{ url('/admin/treinadores') }}" title="Treinador"><button class="btn btn-default btn-block"><i class="fa fa-arrow-left" aria-hidden="true"></i> Listar Treinadores</button></a>
    <a href="{{ url('/admin/treinadores/create') }}" title="Addtreinador"><button class="btn btn-default btn-block"><i class="fa fa-arrow-left" aria-hidden="true"></i> Adicionar Treinador</button></a>
  </div>
</div>
</div>
        