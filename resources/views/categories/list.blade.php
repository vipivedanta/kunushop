@extends('layouts.dashboard')
@section('title','All categories')

@section('content')

<div class="row">
    <div class="col-md-3">Category List</div>
    <div class="col-md-9 text-right">
        <a href="{{ url('create-category') }}" class="btn btn-info">New category</a>
    </div>    
</div>

<div class="row">
<div class="col-md-12">
<table class="table table-striped table-condensed table-bordered">
<thead>
    <th>Name</th>
    <th>Slug</th>
    <th>Description</th>
    <th>Parent Category</th>
    <th>Created at</th>
    <th colspan="2">Actions</th>
</thead>
<tbody>
    @foreach($categories as $cat)
    <tr>
    <td>{{ $cat->name }}</td>
    <td>{{ $cat->slug }}</td>
    <td>{{ $cat->description }}</td>
    @if($cat->parentCategory != null)
        <td>{{ $cat->parentCategory->name }}</td>
    @else
        <td>No Parent</td>
    @endif
    <td>{{ $cat->created_at }}</td>
    <td><a href="#">
    </tr>
    @endforeach
</tbody>
</table>

</div>
</div>


@endsection