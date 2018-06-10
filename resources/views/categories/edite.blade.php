@extends('layouts.app')
@section('content')
    <div class="container">
        {{ Form::model($category, array('route'=> array('categories.update', $category->id), 'method' => 'PUT')) }}
        @include('categories._form')
        {{Form::close()}}
    </div>
@endsection