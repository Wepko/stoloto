@extends('layouts.head')

@section('content')
<br><br><br>
<div class="card bg-light">
  <article class="card-body mx-auto w-100" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Регистрация</h4>
    <p class="text-center">Начните с вашего бесплатного аккаунта</p>

    <form class="" action="{{ route('reg-submit') }}" method="post" novalidate>
    @csrf
      <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input name="first_name" class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="Имя" type="text">
        @if ($errors->has('first_name'))
          <div class="help-block invalid-feedback ">{{ $errors->first('first_name') }}</div>
        @endif
      </div> <!-- form-group// -->
      <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
            <input name="last_name" class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="Фамилия" type="text">
            @if ($errors->has('last_name'))
              <div class="help-block invalid-feedback">{{ $errors->first('last_name') }}</div>
           @endif
      </div>
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
          <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
        <input name="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Номер телефона" type="text">
        @if ($errors->has('phone'))
          <div class="help-block invalid-feedback ">{{ $errors->first('phone') }}</div>
        @endif
      </div> <!-- form-group// -->
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
          <input name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Придумайте пароль" type="password">
          @if ($errors->has('password'))
            <div class="help-block invalid-feedback ">{{ $errors->first('password') }}</div>
          @endif
      </div> <!-- form-group// -->
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
          <input name="confpass" class="form-control {{ $errors->has('confpass') ? ' is-invalid' : '' }}" placeholder="Повторите пароль" type="password">
          @if ($errors->has('confpass'))
            <div class="help-block invalid-feedback ">{{ $errors->first('confpass') }}</div>
          @endif
      </div>
      <div class="custom-control custom-checkbox mb-3">
        <input name="validAge" type="checkbox" class="custom-control-input {{ $errors->has('validAge') ? ' is-invalid' : '' }}" id="customCheck1">

        <label class="custom-control-label" for="customCheck1">Мне есть 18 лет</label>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block"> Создать аккаунт </button>
      </div> 
      <!-- form-group// -->      
      <p class="text-center">У вас уже есть аккайунт? <a href="{{ route('login') }}">Войдите</a> </p>
    </form>
  </article>
</div>

@endsection


