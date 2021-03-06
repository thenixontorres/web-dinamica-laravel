<table class="table table-responsive" id="services-table">
    <thead>
        <th>Icono</th>
        <th>Titulo</th>
        <th>Banner</th>
        <th>¿Visibile?</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
            <td> <i class="fa {!! $service->icon->css_value !!}"></i> </td>
            <td>{!! $service->title !!}</td>
            <td><img class="img-responsive" style="max-width: 100px;" src="{{ asset('storage/images/').'/'.$service->banner_img }}"></td></td>
            <td>{!! $service->visibility !!}</td>
            <td>
                {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('services.edit', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $services->links() }}