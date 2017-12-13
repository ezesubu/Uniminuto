<table class="table table-responsive" id="medicaments-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($medicaments as $medicament)
        <tr>
            <td>{!! $medicament->name !!}</td>
            <td>
                {!! Form::open(['route' => ['medicaments.destroy', $medicament->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('medicaments.show', [$medicament->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('medicaments.edit', [$medicament->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>