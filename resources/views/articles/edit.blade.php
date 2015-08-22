@extends('app')

@section('content')

<h1 class="page-heading">Edit: {{ $article->title }}</h1>

{!! Form::model($article,['method'=>'PATCH','action'=>['ArticlesController@update',$article->id]]) !!}
@include('articles.form',['submitText'=>'Update Article'])

{!! Form::close() !!}
@include('errors.list')
@endsection