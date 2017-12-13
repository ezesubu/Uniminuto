<table class="table table-responsive" id="formulas-table">
    <thead>
        <tr>
            <th>User Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($formulas as $formulas)
        <tr>
            <td>{!! $formulas->user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['formulas.destroy', $formulas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('formulas.show', [$formulas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('formulas.edit', [$formulas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>