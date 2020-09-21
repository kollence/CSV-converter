@extends('welcome')

@section('content')

<div class=" mt-5">
    <h1>List of categories</h1>
    
    @forelse($categories as  $category)
        <li>{{$category->category_name}}</li>
        
    @empty
        <h1>Empty</h1>
    @endforelse
</div>

@endsection