@extends('layouts.app')
@section('content')

    <div class="table_categories">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Alias</th>
                <th scope="col">Title</th>
                <th scope="col">Buttons</th>
            </tr>
            </thead>
            <tbody>
            {{--@foreach(categories as $category)--}}
            <tr>
                <td>
                    {{$category->id}}
                </td>
                <td>
                    {{$category->alias}}
                </td>
                <td>
                    {!! $category->title !!}
                </td>
            </tr>
            {{--@endforeach--}}
            </tbody>
        </table>
    </div>

    <div class="text-right">
        <a href="{{route('categories.index')}}" class="btn btn-default">GO BACK</a>
    </div>

@endsection