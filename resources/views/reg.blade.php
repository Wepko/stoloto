@extends('layouts.head')
@section('content')
<form class="mt-5" action="{{ route('reg-submit') }}" method="post" novalidate>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Имя</label>
    <input type="text" name="first_name" class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" id="exampleInputEmail1" value="{{ Request::old('first_name') ?: '' }}">
    @if ($errors->has('first_name'))
      <span class="help-block text-danger">{{ $errors->first('first_name') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Фамилия</label>
    <input type="text" name="last_name" class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}" id="exampleInputEmail1" value="{{ Request::old('last_name') ?: '' }}">
    @if ($errors->has('last_name'))
      <span class="help-block text-danger">{{ $errors->first('last_name') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Телефон</label>
    <input type="number" name="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" id="exampleInputEmail1" value="{{ Request::old('phone') ?: '' }}">
    @if ($errors->has('phone'))
      <span class="help-block text-danger">{{ $errors->first('phone') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1" value="{{ Request::old('email') ?: '' }}">
    @if ($errors->has('email'))
      <span class="help-block text-danger">{{ $errors->first('email') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль</label>
    <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1">
    @if ($errors->has('password'))
      <span class="help-block text-danger">{{ $errors->first('password') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Повторить пароль</label>
    <input type="password" name="confpass" class="form-control {{ $errors->has('confpass') ? ' is-invalid' : '' }}" id="exampleInputPassword1">
    @if ($errors->has('confpass'))
      <span class="help-block text-danger">{{ $errors->first('confpass') }}</span>
    @endif
  </div>
  <div class="form-group form-check">
    <input type="checkbox" name="validAge" class="form-check-input {{ $errors->has('validAge') ? ' is-invalid' : '' }}" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Мне есть 18 лет</label>
    @if ($errors->has('validAge'))
      <br><span class="help-block text-danger">{{ $errors->first('validAge') }}</span>
    @endif
  </div>
  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</form>
@endsection