<div>Os campos aceitam formato HTML</div>
<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="control-label">{{ 'Titulo' }}</label>
    <input class="form-control" name="titulo" type="text" id="titulo" value="{{ isset($page->titulo) ? $page->titulo : ''}}" >
    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('slogan') ? 'has-error' : ''}}">
    <label for="slogan" class="control-label">{{ 'slogan' }}</label>
    <input class="form-control" name="slogan" type="text" id="menu" value="{{ isset($page->menu) ? $page->menu : ''}}" >
    {!! $errors->first('slogan', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('slogan2') ? 'has-error' : ''}}">
    <label for="slogan2" class="control-label">{{ 'slogan2' }}</label>
    <input class="form-control" name="slogan2" type="text" id="slogan2" value="{{ isset($page->slogan2) ? $page->slogan2 : ''}}" >
    {!! $errors->first('slogan2', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('slogan3') ? 'has-error' : ''}}">
    <label for="slogan3" class="control-label">{{ 'slogan3' }}</label>
    <input class="form-control" name="slogan3" type="text" id="slogan3" value="{{ isset($page->slogan3) ? $page->slogan3 : ''}}" >
    {!! $errors->first('slogan3', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
    <label for="telefone" class="control-label">{{ 'telefone' }}</label>
    <input class="form-control" name="telefone" type="text" id="telefone" value="{{ isset($page->menu) ? $page->menu : ''}}" >
    {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('rodapeTitulo') ? 'has-error' : ''}}">
    <label for="rodapeTitulo" class="control-label">{{ 'rodapeTitulo' }}</label>
    <input class="form-control" name="rodapeTitulo" type="text" id="rodapeTitulo" value="{{ isset($page->rodapeTitulo) ? $page->rodapeTitulo : ''}}" >
    {!! $errors->first('rodapeTitulo', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('rodapeTexto') ? 'has-error' : ''}}">
    <label for="rodapeTexto" class="control-label">{{ 'rodapeTexto' }}</label>
    <input class="form-control" name="rodapeTexto" type="text" id="rodapeTexto" value="{{ isset($page->rodapeTexto) ? $page->rodapeTexto : ''}}" >
    {!! $errors->first('rodapeTexto', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('direitosReservados') ? 'has-error' : ''}}">
    <label for="direitosReservados" class="control-label">{{ 'direitosReservados' }}</label>
    <input id="direitosReservados" class="form-control" name="direitosReservados" type="text" id="direitosReservados" value="{{ isset($page->direitosReservados) ? $page->direitosReservados : ''}}" >
    {!! $errors->first('direitosReservados', '<p class="help-block">:message</p>') !!}
</div>

<hr>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
