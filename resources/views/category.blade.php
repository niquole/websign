@extends('layouts.app')

@section('content')
    <category-component data-category="{{json_encode($category)}}"></category-component>
@endsection
