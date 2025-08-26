@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css')}}">
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
@endsection

@section('content')

<h1>記事一覧画面</h1>
<p>ようこそ、Auth::user()->nameさん</p>

<form action="" method="post">
    @csrf 
    <button class="button" type="submit">ログアウト</button>
</form>

<ul class="header-nav">
    @if (Auth::check())
    <li class="header-nav__item">
        <a class="header-nav__link" href="/mypage">マイページ</a>
    </li>
    <li class="header-nav__item">
        <form action="/logout" method="post">
        @csrf
        <button class="header-nav__button">ログアウト</button>
        </form>
    </li>
    @endif
</ul>

<ul class="article-list">
    <li class="article-item">
        <h2>記事タイトル 1</h2>
        <p>この記事の概要がここに入ります。短い説明文です。</p>
        <a href="#" class="read-more">続きを読む</a>
    </li>
    <li class="article-item">
        <h2>記事タイトル 2</h2>
        <p>この記事の概要がここに入ります。短い説明文です。</p>
        <a href="#" class="read-more">続きを読む</a>
    </li>
    <li class="article-item">
        <h2>記事タイトル 3</h2>
        <p>この記事の概要がここに入ります。短い説明文です。</p>
        <a href="#" class="read-more">続きを読む</a>
    </li>
    <li class="article-item">
        <h2>記事タイトル 4</h2>
        <p>この記事の概要がここに入ります。短い説明文です。</p>
        <a href="#" class="read-more">続きを読む</a>
    </li>
    <li class="article-item">
        <h2>記事タイトル 5</h2>
        <p>この記事の概要がここに入ります。短い説明文です。</p>
        <a href="#" class="read-more">続きを読む</a>
    </li>
    <li class="article-item">
        <h2>記事タイトル 6</h2>
        <p>この記事の概要がここに入ります。短い説明文です。</p>
        <a href="#" class="read-more">続きを読む</a>
    </li>
    <li class="article-item">
        <h2>記事タイトル 7</h2>
        <p>この記事の概要がここに入ります。短い説明文です。</p>
        <a href="#" class="read-more">続きを読む</a>
    </li>
</ul>
@endsection()