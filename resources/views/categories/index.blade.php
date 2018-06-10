@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Hello Admin!!!
                    </div>
                </div>
            </div>
        </div>
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
                @foreach($categories as $category)
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
                @endforeach
                </tbody>
            </table>
        </div>

        </div>
    </div>
@endsection
