@extends('layouts.admin')
@section('title', 'Pet Categories')
@section('admin_content')

<div class="card">
  <div class="card-header">
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#PetCatModal"><i class="fas fa-plus-circle"></i> Add new category</button>
    </div>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped table-sm">
      <thead>
        <tr>
          <th width="20%">Name</th>
          <th>Description</th>
          <th width="15%">Date added</th>
          <th width="10%">Status</th>
          <th width="11%">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pet_cat as $p)
          <tr>
            <td>{{ $p->name }}</td>
            <td>{{ $p->description }}</td>
            <td>{{ $p->created_at }}</td>
            <td>
              @if ($p->status == 1)
                <span class="badge badge-success">Active</span>
              @else
                <span class="badge badge-danger">Inactive</span>
              @endif
            </td>
            <td>
              <a href="#" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> View</a>
              <a href="#" class="btn btn-sm bg-navy" data-toggle="modal" data-target="#EditPetCatModal{{ $p->id }}"><i class="fas fa-edit"></i> Edit</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="PetCatModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="PetCatModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PetCatModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('pet-category.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter pet category name here...">
          </div>
    
          <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Enter pet category description here..."></textarea>
            {{-- <input type="text" class="form-control" name="description" id="description" placeholder="Enter category description here..."> --}}
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

@foreach ($pet_cat as $p)
<div class="modal fade" id="EditPetCatModal{{ $p->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="EditPetCatModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EditPetCatModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('pet-category.update', $p->id) }}" method="post">
          {{ method_field('patch') }}
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $p->id }}">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter pet category name here..." value="{{ $p->name }}">
          </div>
    
          <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Enter pet category description here...">{{ $p->description }}"</textarea>
            {{-- <input type="text" class="form-control" name="description" id="description" placeholder="Enter category description here..."> --}}
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