<table class="table table-responsive" id="sections-table">
    <thead>
        <th>Nombre</th>
        <th>Pagina</th>
         <th>¿Visibile?</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($sections as $section)
        <tr>
            <td>{!! $section->name !!}</td>
            <td>{!! $section->page->title !!}</td>
            <td>{!! $section->visibility !!}</td>
            <td>
                {!! Form::open(['route' => ['sections.destroy', $section->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sections.edit', [$section->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @if(Auth::User()->tipo == 'master')
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Eliminar?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>