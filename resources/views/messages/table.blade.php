<table class="table table-responsive" id="messages-table">
    <thead>
        <th>Nombre</th>
        <th>Email</th>
        <th>Mensaje</th>
        <th>Fecha</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($messages as $message)
        <tr>
            <td>{!! $message->name !!}</td>
            <td>{!! $message->email !!}</td>
            <td>{!! $message->message !!}</td>
            <td>{!! $message->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>