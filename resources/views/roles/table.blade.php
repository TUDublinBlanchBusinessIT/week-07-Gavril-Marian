<table class="table table-responsive" id="roles-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Guard Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($roles as $role)
        <tr>
            <td>{!! $role->name !!}</td>
            <td>{!! $role->guard_name !!}</td>
            <td>
                {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                <div class='btn-group'>

                    <a href="{!! route('roles.show', [$role->id]) !!}" class='btn btn-default btn-xs'>
                        <i class="fa fa-eye"></i>
                    </a>

                    <a href="{!! route('roles.edit', [$role->id]) !!}" class='btn btn-default btn-xs'>
                        <i class="fa fa-edit"></i>
                    </a>

                    
                    <a href="{{ route('roles.assignpermissions', [$role->id]) }}" class='btn btn-default btn-xs'>
                        <i class="fa fa-unlock"></i>
                    </a>

                    {!! Form::button('<i class="fa fa-trash"></i>', [
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'onclick' => "return confirm('Are you sure?')"
                    ]) !!}

                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>