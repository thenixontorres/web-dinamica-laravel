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
                {!! Form::open(['route' => ['constants.destroy', $constant->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('constants.edit', [$constant->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @if(Auth::User()->tipo=='master')
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>