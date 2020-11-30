@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
        
                    <form method="POST" action="/admin/user/{{$user->id}}">

                        <div class="form-group">
                        <strong>Admin</strong>
                        <select class="form-control" name="user_id">
                            @if ($user->is_admin)
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                            @else
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                            @endif
                        </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="update" class="btn btn-sm btn-primary">Update</button>
                        </div>
                    {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection