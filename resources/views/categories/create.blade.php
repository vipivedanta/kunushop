@extends('layouts.dashboard')
@section('title','Create new category')

@section('content')

<form method="post" action="{{ url('create-category') }}">

    @csrf

    <div class="form-group">
        <label>Parent Category</label>
        {{ Form::select('parent_category', $categories ,0,['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        <label>Category Name</label>
        <input type="text" name="name" class="form-control" />
        @if($errors->has('name'))<p class="text text-danger">{{ $errors->first('name') }} @endif
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" />
        @if($errors->has('slug'))<p class="text text-danger">{{ $errors->first('slug') }} @endif
    </div>

    <div class="form-group">
        <label>Description(Optional)</label>
        <textarea name="description" class="form-control" ></textarea>
    </div>

    <div class="form-group">
        <input type="submit" value="Save" class="btn btn-info pull-right" />
    </div>

</form>

@endsection