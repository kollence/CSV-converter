@extends('welcome')

@section('content')

<form action="{{route('add.category')}}" method="POST" >
@csrf
<input type="text" name="category_name" id=""><input type="submit" value="add category">
</form>
<table class="table">
  <thead>
    <tr style="background-color: grey;">
      <th scope="col">model_number</th>
      <th scope="col">category_name</th>
      <th scope="col">deparment_name</th>
      <th scope="col">manufacturer_name</th>
      <th scope="col">upc</th>
      <th scope="col">sku</th>
      <th scope="col">regular_price</th>
      <th scope="col">sale_price</th>
      <th scope="col">description</th>
      <th scope="col">url</th>
    </tr>
  </thead>
  <tbody>
    @forelse( $products as $key => $product  )
    <tr>
      <th>{{$product->model_number}}</th>
      <td>{{$product->category_name}}</td>
      <td>{{$product->deparment_name}}</td>
      <td>{{$product->manufacturer_name}}</td>
      <th>{{$product->upc}}</th>
      <td>{{$product->sku}}</td>
      <td>{{$product->regular_price}}</td>
      <td>{{$product->sale_price}}</td>
      <td style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap; max-width: 100px;">{{$product->description}}</td>
      <td>{{$product->url}}</td>
    </tr>
    @empty
    <tr>
      <td><p>No Products</p></td>
    </tr>
    @endforelse
  </tbody>
</table>
        

@endsection