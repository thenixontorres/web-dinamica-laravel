<li class="{{ Request::is('pages*') ? 'active' : '' }}">
    <a href="{!! route('pages.index') !!}"><i class="fa fa-edit"></i><span>Paginas</span></a>
</li>

<li class="{{ Request::is('sections*') ? 'active' : '' }}">
    <a href="{!! route('sections.index') !!}"><i class="fa fa-edit"></i><span>Secciones</span></a>
</li>

<!-- <li class="{{ Request::is('contents*') ? 'active' : '' }}">
    <a href="{!! route('contents.index') !!}"><i class="fa fa-edit"></i><span>Contenidos</span></a>
</li> -->

<li class="{{ Request::is('configs*') ? 'active' : '' }}">
    <a href="{!! route('configs.index') !!}"><i class="fa fa-edit"></i><span>Configuraciones</span></a>
</li>

<li class="{{ Request::is('imgs*') ? 'active' : '' }}">
    <a href="{!! route('imgs.index') !!}"><i class="fa fa-edit"></i><span>Imagenes</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{!! route('services.index') !!}"><i class="fa fa-edit"></i><span>Servicios</span></a>
</li>

<li class="{{ Request::is('socials*') ? 'active' : '' }}">
    <a href="{!! route('socials.index') !!}"><i class="fa fa-edit"></i><span>Redes Sociales</span></a>
</li>

<li class="{{ Request::is('constants*') ? 'active' : '' }}">
    <a href="{!! route('constants.index') !!}"><i class="fa fa-edit"></i><span>Constantes</span></a>
</li>

