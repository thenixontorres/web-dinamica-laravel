<li class="{{ Request::is('pages*') ? 'active' : '' }}">
    <a href="{!! route('pages.index') !!}"><i class="fa fa-edit"></i><span>pages</span></a>
</li>

<li class="{{ Request::is('sections*') ? 'active' : '' }}">
    <a href="{!! route('sections.index') !!}"><i class="fa fa-edit"></i><span>sections</span></a>
</li>

<li class="{{ Request::is('contents*') ? 'active' : '' }}">
    <a href="{!! route('contents.index') !!}"><i class="fa fa-edit"></i><span>contents</span></a>
</li>

<li class="{{ Request::is('configs*') ? 'active' : '' }}">
    <a href="{!! route('configs.index') !!}"><i class="fa fa-edit"></i><span>configs</span></a>
</li>

<li class="{{ Request::is('imgs*') ? 'active' : '' }}">
    <a href="{!! route('imgs.index') !!}"><i class="fa fa-edit"></i><span>imgs</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{!! route('services.index') !!}"><i class="fa fa-edit"></i><span>services</span></a>
</li>

<li class="{{ Request::is('socials*') ? 'active' : '' }}">
    <a href="{!! route('socials.index') !!}"><i class="fa fa-edit"></i><span>socials</span></a>
</li>

<li class="{{ Request::is('vars*') ? 'active' : '' }}">
    <a href="{!! route('vars.index') !!}"><i class="fa fa-edit"></i><span>vars</span></a>
</li>

