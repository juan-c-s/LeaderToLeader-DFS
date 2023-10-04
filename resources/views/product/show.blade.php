@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">
            {{ $viewData["product"]->getTitle() }}
          </h5>
          <p class="card-text"> Description: {{ $viewData["product"]->getDescription() }}</p>
        </div>
        <div class="card-body">
          <h5 class="card-title">
           price :  {{ $viewData["product"]->getPrice()}}
          </h5>
          <h5 class="card-title">
           Seller's rating :  {{ $viewData["product"]->getRating()}}
          </h5>
          <h5 class="card-title">
           Breed :  {{ $viewData["product"]->getCategory() }}
          </h5>
          <h5 class="card-title">
            Supplier :  {{ $viewData["product"]->getSupplier() }}
          </h5>
          <h5 class="card-title">
            Image: <img  src={{$viewData["product"]->getImage()}}>
        </h5>
        <form method="POST" action="{{ route('product.delete') }}">
        @csrf
        <input type="hidden" name="id" value="{{$viewData["product"]->getId()}}" />
        <input type="submit" class="btn btn-primary" value="delete" />
        </form>

  </div>
    </div>
  </div>
</div>
@endsection
