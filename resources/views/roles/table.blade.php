<table class="table table-responsive" id="roles-table">
    <thead>
        <th>Name</th>
        <th>Guard Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($roles as $roles)
        <tr>
            <td>{!! $roles->name !!}</td>
            <td>{!! $roles->guard_name !!}</td>
            <td>
                {!! Form::open(['route' => ['roles.destroy', $roles->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('roles.show', [$roles->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></i></a>
                    <a href="{!! route('roles.edit', [$roles->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>