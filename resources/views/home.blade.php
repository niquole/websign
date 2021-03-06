@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container">
            @auth
                <post-form-component></post-form-component>
            @endauth
            <latest-posts-component></latest-posts-component>
            <homepage-categories-component></homepage-categories-component>
            <footer-component></footer-component>

        </div>
    </div>

@endsection
