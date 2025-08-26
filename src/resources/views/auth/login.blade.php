@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css')}}">
<link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

@section('content')
<h1>ログイン</h1>
<form action="" method="post">
    @csrf 
    <dl class="form-list">
        <dt>メールアドレス</dt>
        <dd><input class="input-form" type="email" name="email" value=""></dd>
        <dt>パスワード</dt>
        <dd><input class="input-form" type="password" name="password"></dd>
    </dl>
    <button class="button" type="submit">ログイン</button>
    <a class="button" href="/">キャンセル</a>
</form>
@endsection()