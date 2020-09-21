@extends('welcome')

@section('content')
<form action="{{route('add.category')}}" method="POST" >
@csrf
<input type="text" name="category_name" id=""><input type="submit" value="add category">
</form>
<div>
    <h1>List of categories</h1>

    @forelse($categories as $category)
        <li>{{$category->category_name}}</li>
    @empty
        <h1>Empty</h1>
    @endforelse
</div>

@endsection