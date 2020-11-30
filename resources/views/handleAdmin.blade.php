@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Hey! you are admin.
                    <br><br>
                    <div class="row">
                    <div class="col-md-3"><strong>User</strong></div>
                    <div class="col-md-2"><strong>Admin</strong></div>
                    <div class="col-md-4"><strong>Email</strong></div>
                    <div class="col-md-3"><strong>Edit</strong></div>
                    </div>
                    <hr>
                    @foreach($users as $user)
                    <div class="mb-2 row">
                    <div class="col-md-3">{{$user->name}}</div>
                    <div class="col-md-2">
                    @if ($user->is_admin)
                        <span style="color: green;">Yes</span>
                    @else
                        <span style="color: red;">No</span>
                    @endif
                    </div>
                    <div class="col-md-4">{{$user->email}}</div>
                    <div class="col-md-3">                    
                    <a href="/admin/user/{{$user->id}}" name="edit" class="btn btn-sm btn-primary">Edit</a>
                    </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection