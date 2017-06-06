<table class="table table-responsive" id="constants-table">
    <thead>
        <th>Variable</th>
        <th>Valor</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($constants as $constant)
        <tr>
            <td>{!! $constant->var !!}</td>
            @if($constant->var == "Contraseña de Email de contacto")
            <td> ********* </td>
            @else
            <td>{!! $constant->value !!}</td>
            @endif
            <td>
                <div class='btn-group'>
                    <a href="{!! route('constants.edit', [$constant->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>