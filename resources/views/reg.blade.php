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









<div class="card bg-light">
  <article class="card-body mx-auto w-100" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Регистрация</h4>
    <p class="text-center">Начните с вашего бесплатного аккаунта</p>

    <form class="">
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
<<<<<<< HEAD
      <div class="custom-control custom-checkbox mt-">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
=======
      <div class="custom-control custom-checkbox mb-3">
        <input name="validAge" type="checkbox" class="custom-control-input {{ $errors->has('validAge') ? ' is-invalid' : '' }}" id="customCheck1">
>>>>>>> 5d1948898491c18669ce63452a0d93719735c8e1
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


