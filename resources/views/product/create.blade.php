@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Create product</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('product.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Enter title" name="title" value="{{ old('title') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter description" name="description" value="{{ old('description') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter price" name="price" value="{{ old('price') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter rating" name="rating" value="{{ old('rating') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter Breed" name="category" value="{{ old('category') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter Supplier" name="supplier" value="{{ old('supplier') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter image url" name="image" value="{{ old('image') }}" />
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
