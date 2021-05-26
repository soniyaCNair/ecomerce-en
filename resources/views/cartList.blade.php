@extends('master')
@section("content")
<div class=" custom-product">
 <div class="col-sm-10">
<div class="treding-wrapper">
<h3>Result for Products</h3>
@foreach ($products as $item)
<div class="row searched-item cart-list-devider">
<div class="col-sm-3">
     <a href= "detail/{{$item->id}}">
      <img class="trending-image" src="{{$item->gallery}}">
      </a>
    </div>
    <div class="col-sm-4">
      <div class="">
        <h3>{{$item->name}}</h3>
        <h5>{{$item->description}}</h5>
      </div>
    </div>
    <div class="col-sm-3">
<button class="btn btn-warning">Remove From Cart</button>
    </div>
    </div>
 @endforeach
</div>
</div>

</div>
@endsection