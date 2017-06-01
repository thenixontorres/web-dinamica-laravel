<table class="table table-responsive" id="tags-table">
    <thead>
        <th>Categoria</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($tags as $tag)
        <tr>
            <td>{!! $tag->category !!}</td>
            <td>
                {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tags.edit', [$tag->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $tags->links() }}