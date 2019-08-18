<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="nome" type="text" id="nome" value="{{ isset($imagen->nome) ? $imagen->nome : ''}}" >
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('arquivo') ? 'has-error' : ''}}">
    <label for="arquivo" class="control-label">{{ 'Arquivo' }}</label>
    <input class="form-control" name="arquivo" type="file" id="arquivo" value="{{ isset($imagen->arquivo) ? $imagen->arquivo : ''}}" >
    {!! $errors->first('arquivo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ativo') ? 'has-error' : ''}}">
    <label for="ativo" class="control-label">{{ 'Ativo' }}</label>
    <div class="radio">
    <label><input name="ativo" type="radio" value="1" {{ (isset($imagen) && 1 == $imagen->ativo) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="ativo" type="radio" value="0" @if (isset($imagen)) {{ (0 == $imagen->ativo) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('ativo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
