<li class="{{ Request::is('landing') ? 'active' : '' }}">
    <a href="{!! route('landing') !!}"><span>Ver Pagina</span></a>
</li>

<li class="{{ Request::is('pages*') ? 'active' : '' }}">
    <a href="{!! route('pages.index') !!}"><i class="fa fa-edit"></i><span>Paginas</span></a>
</li>

<li class="{{ Request::is('sections*') ? 'active' : '' }}">
    <a href="{!! route('sections.index') !!}"><i class="fa fa-edit"></i><span>Secciones</span></a>
</li>

<li class="{{ Request::is('imgs*') ? 'active' : '' }}">
    <a href="{!! route('imgs.index') !!}"><i class="fa fa-edit"></i><span>Imagenes</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{!! route('services.index') !!}"><i class="fa fa-edit"></i><span>Servicios</span></a>
</li>

<li class="{{ Request::is('articles*') ? 'active' : '' }}">
    <a href="{!! route('articles.index') !!}"><i class="fa fa-edit"></i><span>Articulos</span></a>
</li>

<li class="{{ Request::is('tags*') ? 'active' : '' }}">
    <a href="{!! route('tags.index') !!}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('constants*') ? 'active' : '' }}">
    <a href="{!! route('constants.index') !!}"><i class="fa fa-edit"></i><span>Variables</span></a>
</li>
@if(Auth::User()->tipo=='master')
<li class="{{ Request::is('icons*') ? 'active' : '' }}">
    <a href="{!! route('icons.index') !!}"><i class="fa fa-edit"></i><span>Iconos</span></a>
</li>

<li class="{{ Request::is('thumbs*') ? 'active' : '' }}">
    <a href="{!! route('thumbs.index') !!}"><i class="fa fa-edit"></i><span>Thumbs</span></a>
</li>

@endif
<li class="{{ Request::is('messages*') ? 'active' : '' }}">
    <a href="{!! route('messages.index') !!}"><i class="fa fa-edit"></i><span>Mensajes</span></a>
</li>

