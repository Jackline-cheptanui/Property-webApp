@extends('layouts.app')

@section('title', 'Add Users')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Users</h1>
        <a href="{{route('users.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New User</h6>
        </div>
        <form method="POST" action="{{route('room.create')}}" enctype="multipart/form-data">
            @csrf
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <label for="recipient-name" class="form-label" style="color:black">Property Room type:</label>
            <input type="text" class="form-control" id="roomtype" name="roomtype" placeholder="Property room type" /> 
          </div>
          <!-- <div class="form-group">
            <label for="recipient-name" class="col-form-label">Property Name:</label>
            <input type="text" class="form-control" id="property_name" name="property_name" placeholder="Property Name" />
          </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Property Location:</label>
            <input type="text" class="form-control" id="property_location" name="property_location" placeholder="Property Location" />
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Property Image:</label>
            <input type="file" class="form-control" id="property_image" name="property_image">
          </div>-->
            </div> 
          </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('users.index') }}">Cancel</a>
            </div>
        </form>
    </div>

</div>


@endsection