@extends('admin.layouts.app')

@section('title', 'Inserir novo cadastro')

@section('content')

<a href="{{route('posts.index')}}">Home</a>

<h1>Cadastrar Nova Pessoa</h1>

<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
  @include('admin.posts._partials.form')
</form>

@endsection








