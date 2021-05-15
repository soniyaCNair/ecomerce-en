@extends('master')
@section("content")
<div class=" custom-product">
 <div class="col-sm-4">
 <a href="#">Filter</a>
  </div>
<div class="col-sm-4">
<div class="treding-wrapper">
<h3>Result  for Products</h3>
@foreach ($product as $item)
<div class="trending-item">
<a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}">
      <div class="">
        <h3>{{$item['name']}}</h3>
      </div>
      </a>
    </div>
 @endforeach
</div>


</div>
@endsection