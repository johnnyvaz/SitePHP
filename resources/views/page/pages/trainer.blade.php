<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="control-label">{{ 'Titulo' }}</label>
    <input class="form-control" name="titulo" type="text" id="titulo" value="{{ isset($page->titulo) ? $page->titulo : ''}}" >
    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('menu') ? 'has-error' : ''}}">
    <label for="menu" class="control-label">{{ 'Menu' }}</label>
    <input class="form-control" name="menu" type="text" id="menu" value="{{ isset($page->menu) ? $page->menu : ''}}" >
    {!! $errors->first('menu', '<p class="help-block">:message</p>') !!}
</div>
<!-- <div id="summernote"></div> -->
<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
    <label for="body" class="control-label">{{ 'Body' }}</label>
    <textarea id="summernote" class="form-control" rows="15" name="body" type="textarea" id="body" >{{!! isset($page->body) ? $page->body : '' !!}}</textarea>
    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
