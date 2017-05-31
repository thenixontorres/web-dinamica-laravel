<table class="table table-responsive" id="articles-table">
    <thead>
        <th>Title</th>
        <th>Categoria</th>
        <th>Imagen de muestra</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{!! $article->title !!}</td>
            <td>{!! $article->tag->category !!}</td>
            <td><img class="img-responsive" style="max-width: 100px;" src="{{ asset('storage/images/').'/'.$article->thumb->thumb }}"></td>
            <td>
                {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('articles.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>