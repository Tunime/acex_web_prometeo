<li class="{{ Request::is('tests*') ? 'active' : '' }}">
    <a href="{!! route('tests.index') !!}"><i class="fa fa-edit"></i><span>Tests</span></a>
</li>

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{!! route('categorias.index') !!}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

