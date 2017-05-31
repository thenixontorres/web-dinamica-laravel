<table class="table table-responsive" id="services-table">
    <thead>
        <th>Icon</th>
        <th>Title</th>
        <th>Description</th>
        <th>Url</th>
        <th>Visibility</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
            <td> <i class="fa {!! $service->icon->css_value !!}"></i> </td>
            <td>{!! $service->title !!}</td>
            <td>{!! $service->description !!}</td>
            <td>{!! $service->url !!}</td>
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