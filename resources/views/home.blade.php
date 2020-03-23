@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container">
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-8">--}}
{{--                    <div class="card">--}}
                        <div>Most Liked Designs</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                        <list-component></list-component>
                    </div>
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

@endsection
