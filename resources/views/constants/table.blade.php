<table class="table table-responsive" id="constants-table">
    <thead>
        <th>Var</th>
        <th>Value</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($constants as $constant)
        <tr>
            <td>{!! $constant->var !!}</td>
            <td>{!! $constant->value !!}</td>
            <td>
                {!! Form::open(['route' => ['constants.destroy', $constant->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('constants.show', [$constant->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
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