@extends('layouts.admin')
@section('title', 'Users')
@section('admin_content')



<div class="card">
  <div class="card-body">
    <table id="user" class="table table-bordered table-striped table-sm">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $us)
          <tr>
            <td>{{ $us->name }}</td>
            <td>{{ $us->email }}</td>

            <td>
              @if ($us->user_type == 1)
                <span class="badge badge-success">Admin</span>
              @elseif ($us->user_type == 0)
                <span class="badge badge-success">User</span>
                @else
                <span class="badge badge-success">Courier</span>
              @endif
            </td>
            <td>
              <a href="#" class="btn btn-xs bg-success" data-toggle="modal" data-target="#EditProdCatModal{{ $us->id }}"><i class="fas fa-eye"></i> View</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>





@endsection