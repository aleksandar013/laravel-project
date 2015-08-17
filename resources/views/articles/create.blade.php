@extends('app')

@section('content')

<h1 class="page-heading">Write a new article</h1>

{!! Form::open(['url'=>'articles']) !!}
<div class="form-group">
{!! Form::label('title','Title:') !!}
{!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('body','Body:') !!}
{!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">

{!! Form::submit('Add Article',['class'=>'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

@endsection