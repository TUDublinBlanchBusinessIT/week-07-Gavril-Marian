<table class="table table-responsive" id="permissions-table">
    <thead>
        <th>Name</th>
        <th>Guard Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($permissions as $permissions)
        <tr>
            <td>{!! $permissions->name !!}</td>
            <td>{!! $permissions->guard_name !!}</td>
            <td>
                {!! Form::open(['route' => ['permissions.destroy', $permissions->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('permissions.show', [$permissions->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></i></a>
                    <a href="{!! route('permissions.edit', [$permissions->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>