@extends('layouts.head')
@section('content')
<form class="mt-5" action="{{ route('reg-submit') }}" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Имя</label>
    <input type="name" class="form-control" id="exampleInputEmail1">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Фамилия</label>
    <input type="name" class="form-control" id="exampleInputEmail1">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Повторить пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Мне есть 18 лет</label>
  </div>
  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</form>
@endsection