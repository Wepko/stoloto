@extends('layouts.head')
@section('content')
  @if (Session::has('info'))
  <div class="alert alert-danger mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
  @endif
<form class="mt-5" action="{{ route('login-submit') }}" method="post" novalidate>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp">
    @if ($errors->has('email'))
      <span class="hel[-block text-danger">{{ $errors->first('email') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль</label>
    <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1">
    @if ($errors->has('password'))
      <span class="hel[-block text-danger">{{ $errors->first('password') }}</span>
    @endif
  </div>
  <div class="form-group form-check">
    <input type="checkbox" name="remember" class="form-check-input {{ $errors->has('validAge') ? ' is-invalid' : '' }}" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection