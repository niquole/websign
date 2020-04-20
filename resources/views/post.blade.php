@extends('layouts.app')

@section('content')
    {{--    prop--}}
    <post-component data-post="{{json_encode($post)}}"></post-component>

    <post-comments></post-comments>
    <footer-component></footer-component>

@endsection
