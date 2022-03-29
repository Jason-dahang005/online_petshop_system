@extends('layouts.admin')
@section('title', 'Orders')
@section('admin_content')

<div class="card">
  <div class="card-header">
    <div class="d-flex justify-content-end">
      
    </div>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped table-sm">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Total</th>
          <th>Name</th>
          <th>Email</th>
          <th>Status</th>
          <th>Order Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>10032</td> 
            <td>1000php</td>
            <td>Venz Carna</td>
            <td>user@user.com</td>
            <td>
                <span class ="badge badge-danger">Pending</span>
            </td>
            <td>03/24/2022</td>
            <td>
            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Details</a>
              <a href="#" class="btn btn-sm bg-navy"><i class="fas fa-edit"></i> Status</a>

            </td>

        </tr>
      </tbody>
    </table>
  </div>
</div>




@endsection