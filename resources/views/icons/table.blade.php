<table class="table table-responsive" id="icons-table">
    <thead>
        <th>Nombre</th>
        <th>Valor</th>
        <th>Simbolo</th>
    </thead>
    <tbody>
    @foreach($icons as $icon)
        <tr>
            <td>{!! $icon->name !!}</td>
            <td>{!! $icon->css_value !!}</td>
            <td> <i class="fa {!! $icon->css_value !!}"></i> </td>
        </tr>
    @endforeach
    </tbody>
</table>