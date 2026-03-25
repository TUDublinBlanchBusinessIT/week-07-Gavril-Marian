@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            users
        </h1>
    </section>
    <div class="content">
       @include('basic-template::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($users, ['route' => ['users.update', $users->id], 'method' => 'patch']) !!}

                        @include('users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>
@endsection