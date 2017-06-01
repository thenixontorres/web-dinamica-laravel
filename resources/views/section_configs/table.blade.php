<table class="table table-responsive" id="sectionConfigs-table">
    <thead>
        <th>Section Id</th>
        <th>Multiimg</th>
        <th>Type</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($sectionConfigs as $sectionConfig)
        <tr>
            <td>{!! $sectionConfig->section_id !!}</td>
            <td>{!! $sectionConfig->multiImg !!}</td>
            <td>{!! $sectionConfig->type !!}</td>
            <td>
                {!! Form::open(['route' => ['sectionConfigs.destroy', $sectionConfig->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sectionConfigs.show', [$sectionConfig->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sectionConfigs.edit', [$sectionConfig->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>