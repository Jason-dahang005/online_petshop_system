@extends('layouts.admin')
@section('title', 'Product Categories')
@section('admin_content')

{{-- @if (Session::has('success'))
  <div class="alert alert-success">
    {{ Session::get('success') }}
  </div>
@elseif(Session::has('error'))
  <div class="alert alert-danger">
    {{ Session::get('danger') }}
  </div>
@endif --}}

<div class="card">
  <div class="card-header">
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ProdCatModal">Add new category</button>
    </div>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped table-sm">
      <thead>
        <tr>
          <th width="20%">Name</th>
          <th>Description</th>
          <th width="15%">Date added</th>
          <td width="10%">Status</td>
          <th width="11%">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($prod_cat as $pc)
          <tr>
            <td>{{ $pc->name }}</td>
            <td>{{ $pc->description }}</td>
            <td>{{ date('m-d-y', strtotime($pc->created_at)) }}</td>
            <td>
              @if ($pc->status == 1)
                <span class="badge badge-success">Active</span>
              @else
              <span class="badge badge-danger">Inactive</span>
              @endif

            </td>
            <td>
              <a href="#" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> View</a>
              <a href="#" class="btn btn-sm bg-navy" data-toggle="modal" data-target="#EditProdCatModal{{ $pc->id }}"><i class="fas fa-edit"></i> Edit</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="ProdCatModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="ProdCatModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ProdCatModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('admin/product-category') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter category name here...">
          </div>
    
          <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Enter category description here...">
          </div>

          <div class="form-group">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" type="submit" class="btn btn-primary">Submit</button>
      </div> --}}
    </div>
  </div>
</div>

@foreach ($prod_cat as $pc)
<div class="modal fade" id="EditProdCatModal{{ $pc->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="EditProdCatModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EditProdCatModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('admin/product-category/{product_category}') }}" method="post">
          @csrf
          @method('PUT')
          <input type="hidden" name="id" value="{{ $pc->id }}">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter category name here..." value="{{ $pc->name }}">
          </div>
    
          <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Enter category description here..." value="{{ $pc->description }}">
          </div>

          <div class="form-group">
            <label for="">Status</label>
            <select class="custom-select" name="status">
              <option value="0">Inactive</option>
              <option value="1">Active</option>
            </select>
          </div>

          <div class="form-group">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" type="submit" class="btn btn-primary">Submit</button>
      </div> --}}
    </div>
  </div>
</div>
@endforeach

{{ dd($prod_cat) }}

@endsection