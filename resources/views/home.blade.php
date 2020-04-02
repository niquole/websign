@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container">
            @auth
                <post-form-component></post-form-component>
            @endauth
            <list-component></list-component>
            
        </div>
    </div>

@endsection
