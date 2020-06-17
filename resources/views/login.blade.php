@extends('layouts.head')
@section('content')
<br><br><br>
  @if (Session::has('info'))
  <div class="alert alert-danger mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
  @endif


<div class="card bg-light">
  <article class="card-body mx-auto w-100" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Авторизация</h4>
    <p class="text-center">Начните с вашего бесплатного аккаунта</p>

    <form class="" action="{{ route('login-submit') }}" method="post" novalidate>
    @csrf
      
     
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
        </div>
          <input name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email адресс" type="email">
          @if ($errors->has('email'))
            <div class="help-block invalid-feedback ">{{ $errors->first('email') }}</div>
          @endif
      </div> <!-- form-group// -->
      
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
          <input name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Введите пароль" type="password">
          @if ($errors->has('password'))
            <div class="help-block invalid-feedback ">{{ $errors->first('password') }}</div>
          @endif
      </div> <!-- form-group// -->
     
      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Войти</button>
      </div> 
      <!-- form-group// -->      
      <p class="text-center">У вас ещё нет аккайунта? <a href="{{ route('reg')}}">Зарегистрироваться</a> </p>
    </form>
  </article>
</div>

<!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
@endsection