@extends('layouts.app')

@section('content')
    {{--    prop--}}
    <post-component data-post="{{json_encode($post)}}"></post-component>
    <footer-component></footer-component>

@endsection
