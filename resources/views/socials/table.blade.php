<table class="table table-responsive" id="socials-table">
    <thead>
        <th>Icono</th>
        <th>Url</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($socials as $social)
        <tr>
            <td>{!! $social->icon !!}</td>
            <td>{!! $social->url !!}</td>
            <td>
                {!! Form::open(['route' => ['socials.destroy', $social->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('socials.show', [$social->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('socials.edit', [$social->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>