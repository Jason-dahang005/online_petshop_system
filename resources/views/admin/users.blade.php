@extends('layouts.admin')
@section('title', 'Users')
@section('admin_content')



<div class="card">
  <div class="card-header">
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-plus-circle"></i> Add new User</button>
    </div>
  </div>
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
              
              <a href="#" class="btn btn-sm bg-navy" data-toggle="modal" data-target="#EditProdCatModal{{ $us->id }}"><i class="fas fa-edit"></i> Edit</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>





@endsection