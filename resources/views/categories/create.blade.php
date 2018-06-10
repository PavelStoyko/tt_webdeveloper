@extends('layouts.app')
@section('content')
    {{Form::model($category, array('route'=> array('categories.store')))}}
    @include('categories._form')
    {{Form::close()}}
@endsection