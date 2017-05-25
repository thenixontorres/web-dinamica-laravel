<table class="table table-responsive" id="vars-table">
    <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Var</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($vars as $var)
        <tr>
            <td>{!! $var->name !!}</td>
            <td>{!! $var->description !!}</td>
            <td>{!! $var->var !!}</td>
            <td>
                {!! Form::open(['route' => ['vars.destroy', $var->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vars.show', [$var->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vars.edit', [$var->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>