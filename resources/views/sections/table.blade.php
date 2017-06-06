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
                <div class='btn-group'>
                    <a href="{!! route('sections.edit', [$section->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>
                    </a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $sections->links() }}
