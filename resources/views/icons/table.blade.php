<table class="table table-responsive" id="icons-table">
    <thead>
        <th>Name</th>
        <th>Css Value</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($icons as $icon)
        <tr>
            <td>{!! $icon->name !!}</td>
            <td>{!! $icon->css_value !!}</td>
            <td>
                {!! Form::open(['route' => ['icons.destroy', $icon->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('icons.show', [$icon->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('icons.edit', [$icon->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>