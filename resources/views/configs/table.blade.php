<table class="table table-responsive" id="configs-table">
    <thead>
        <th>Count Img</th>
        <th>Section Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($configs as $config)
        <tr>
            <td>{!! $config->count_img !!}</td>
            <td>{!! $config->section_id !!}</td>
            <td>
                {!! Form::open(['route' => ['configs.destroy', $config->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('configs.show', [$config->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('configs.edit', [$config->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>