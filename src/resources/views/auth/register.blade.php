@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css')}}">
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
<h1>会員登録</h1>

<form action="/register" method="post">
    @csrf 
    <dl class="form-list">
        <dt>名前/ユーザー名</dt>
        <dd><input class="input-form" type="text" name="name" value="{{ old('name') }}"></dd>
        <dt>メールアドレス</dt>
        <dd><input class="input-form" type="email" name="email" value="{{ old('email') }}"></dd>
        <dt>パスワード</dt>
        <dd><input class="input-form" type="password" name="password"></dd>
        <dt>パスワード（確認用）</dt>
        <dd><input class="input-form" type="password" name="password_confirmation" placeholder="もう一度入力"></dd>
    </dl>
    <button class="button" type="submit">登録する</button>
    <a class="button" href="/">キャンセル</a>
</form>
@endsection