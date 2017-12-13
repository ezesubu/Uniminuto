<li class="{{ Request::is('medicaments*') ? 'active' : '' }}">
    <a href="{!! route('medicaments.index') !!}"><i class="fa fa-edit"></i><span>Medicaments</span></a>
</li>

<li class="{{ Request::is('eps*') ? 'active' : '' }}">
    <a href="{!! route('eps.index') !!}"><i class="fa fa-edit"></i><span>Eps</span></a>
</li>

<li class="{{ Request::is('formulas*') ? 'active' : '' }}">
    <a href="{!! route('formulas.index') !!}"><i class="fa fa-edit"></i><span>Formulas</span></a>
</li>

<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('usuarios') !!}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>
