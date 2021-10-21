@extends('Admin.layout.main')
@section('content')
<div class="content-wrapper table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-5">
                <h2><b>User Management</b></h2>
            </div>
            <div class="col-sm-7">
                <a href="#" class="btn btn-secondary btn-create"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>						
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>						
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 0 ?>
            @foreach ($users as $user)
                <tr>
                    <td><?php $count++; echo $count; ?></td>
                    <td><a href="#"><img src="{{ asset('image/users/'.$user->Avatar) }}" class="avatar" alt="Avatar">{{ $user->Name }}</a></td>
                    <td>{{ $user->Email }}</td>                       
                    <td>
                        Admin
                    </td>
                    @if ($user->Status == 1)
                        <td><span class="status text-success">&bull;</span> Active</td>
                    @else
                        <td><span class="status text-danger">&bull;</span> Enable</td>
                    @endif
                    <td>
                        <a class="btn-update" href="#" data-id="{{ $user->UserID }}"><i style="margin: 0px; font-size: 19px;" class="action text-info fas fa-cog"></i></a>
                        <a href="#"><i style="margin: 0px; font-size: 19px;" class="action text-danger fas fa-times-circle"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="clearfix">
        <div class="hint-text">Showing <b>5</b> out of <b>{{ count($users) }}</b> entries</div>
        {{ $users->links("pagination::bootstrap-4") }}
    </div>

    
</div>
@include('Admin.user.create')
@include('Admin.user.update')
<!-- /.content-wrapper -->
@stop

