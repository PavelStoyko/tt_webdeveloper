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

                            <div class="button_categories">
                                <button type="">
                                    <a href="admin/categories">Categories</a>
                                </button>
                            </div>
                            <div class="button_products">
                                <button>
                                    <a href="/admin/products">Products</a>
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
