<table class="table table-responsive" id="imgs-table">
    <thead>
        <th>Imagen</th>
        <th>Posicion</th>
        <th>Titulo</th>
        <th>Subtitulo</th>
        <th>Seccion</th>
        <th>¿Visibile?</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($imgs as $img)
        <tr>
            <td><img class="img-responsive" style="max-width: 100px;" src="{{ asset('storage/images/').'/'.$img->img }}"></td>
            <td>{!! $img->position !!}</td>
            <td>{!! $img->title !!}</td>
            <td>{!! $img->subtitle !!}</td>
            <td>{!! $img->section->name !!}</td>
            <td>{!! $img->visibility !!}</td>
            <td>
                {!! Form::open(['route' => ['imgs.destroy', $img->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('imgs.edit', [$img->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
                
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $imgs->links() }}