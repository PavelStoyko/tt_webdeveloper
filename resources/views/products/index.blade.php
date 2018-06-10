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
        <div class="table_products">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">category</th>
                    <th scope="col">description</th>
                    <th scope="col">picture</th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach(products as $product)--}}
                <tr>
                    <td>
                        {{$product->id}}
                    </td>
                    <td>
                        {{$product->title}}
                    </td>
                    <td>
                        {!! $$product->category !!}
                    </td>
                    <td>
                        {!! $$product->description !!}
                    </td>
                    <td>
                        {!! $$product->picture !!}
                    </td>
                </tr>
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
