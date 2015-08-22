@extends('app')

@section('content')

<h1 class="page-heading">Write a new article</h1>

{!! Form::open(['url'=>'articles']) !!}
@include('articles.form',['submitText'=>'Add Article'])

{!! Form::close() !!}
@include('errors.list')
@endsection