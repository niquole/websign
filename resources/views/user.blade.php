@extends('layouts.app')

@section('content')

    <div id="app">
        <user-component data-user="{{json_encode($user)}}"></user-component>
        <footer-component></footer-component>
    </div>
@endsection

