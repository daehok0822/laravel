@extends('layout')

@section('title')
    환영합니다
@endsection
@section('sitetitle')
    게임 사이트
@endsection

@section('categories')

@endsection
@section('articles')

    @foreach($articles as $article)
        {{$article -> title}}
    @endforeach
@endsection
