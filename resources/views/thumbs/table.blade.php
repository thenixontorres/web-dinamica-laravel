<table class="table table-responsive" id="thumbs-table">
    <thead>
        <th>Thumb</th>
        <th>Article Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($thumbs as $thumb)
        <tr>
            <td>{!! $thumb->thumb !!}</td>
            <td>{!! $thumb->article_id !!}</td>
            <td>
                {!! Form::open(['route' => ['thumbs.destroy', $thumb->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('thumbs.show', [$thumb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('thumbs.edit', [$thumb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>