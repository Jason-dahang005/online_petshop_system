@extends('layouts.admin')
@section('title', 'Goldfish')
@section('admin_content')

<div class="card">
  <div class="card-header">
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#GoldfishModal"><i class="fas fa-plus-circle"></i> Add new Goldfish</button>
    </div>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped table-sm">
      <thead>
        <tr>
          <th>Name</th>
          <th>Image</th>
          <th>Category</th>
          <th>Price</th>
          <th>Stock</th>
          <th width="8%">Status</th>
          <th width="15%">Date added</th>
          <th width="11%">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($goldF as $p)
          <tr>
            <td>{{ $p->name }}</td>
            <td><img src="{{ asset('images') }}/{{ $p->image }}" alt="Product Image Here" style="max-width: 50px; max-height: 50px"></td>
            <td>{{ $p->category->name }}</td>
            <td>₱{{ $p->price }}</td>
            <td>
              @if ($p->stock > 1)
                {{ $p->stock }} pcs
              @elseif ($p->stock == 0)
                <span class="text-danger">Sold out</span>
              @elseif ($p->stock == 1)
                {{ $p->stock }} pc
              @endif
            </td>
            <td>
              @if ($p->status == 1)
                <span class="badge badge-success">Active</span>
              @else
                <span class="badge badge-danger">Inactive</span>
              @endif
            </td>
            <td>{{ $p->created_at }}</td>
            <td>
              <a href="#" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> View</a>
              <a href="#" class="btn btn-sm bg-navy" data-toggle="modal" data-target="#EditGoldfishModal{{ $p->id }}"><i class="fas fa-edit"></i> Edit</a>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="GoldfishModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="GoldfishModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="GoldfishModal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('goldfish.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="">
          </div>

          <div class="form-group">
            <label for="">Category</label>
            <select class="custom-select" name="petCat_id">
              <option selected>Select Category</option>
              @foreach ($pet_cat as $pc)
              <option value="{{ $pc->id }}">{{ $pc->name }}</option>
              @endforeach
            </select>
          </div>
          
          <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" id="">
          </div>
          
          <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" id="">
          </div>

          <div class="form-group">
            <label for="">Stock</label>
            <input type="text" class="form-control" name="stock" id="">
          </div>

          <div class="form-group">
            <label for="">Image</label>
            <div class="custom-file">
              <input type="file" class="form-control" id="customFile" name="image" onchange="previewFile(this)">
            </div>
            <img src="" alt="" id="previewImg" style="max-width: 130px; margin-top: 20px;">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-sm btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@foreach ($goldF as $pc)
<div class="modal fade" id="EditGoldfishModal{{ $pc->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="EditGoldfishModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EditGoldfishModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('goldfish.update', $pc->id) }}" method="post">
          {{ method_field('patch') }}
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $pc->id }}">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter product category name here..." value="{{ $pc->name }}">
          </div>
    
          <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description" id="" cols="100" rows="5" placeholder="Enter product category description here...">{{ $pc->description }}</textarea>
            {{-- <input type="text" class="form-control" name="description" id="description" placeholder="Enter category description here..." value="{{ $pc->description }}"> --}}
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

@endsection