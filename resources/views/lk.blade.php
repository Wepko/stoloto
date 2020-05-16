@extends('layouts.head')
@section('content')

    @if (Session::has('info'))
        <div class="alert alert-success mt-5" role="alert">
            {{   Session::get('info') }}
        </div>
    @endif

<h1>Личный кабинет</h1>
<p>Добро пожаловать {{ Auth::user()->getName() }}</p>


<div class="content-4_20">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Кошелек</h5>
        <h6 class="card-subtitle  card-text mb-2 text-muted">0 руб</h6>
        <a href="#"class="btn btn-dark mt-2">Пополнить</a>
        </div>
    </div>
    
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Промокоды</h5>
          <h6 class="card-subtitle  card-text mb-2 text-muted">0 руб</h6>
          <a href="#" class="btn btn-dark mt-2">Добавить</a>
        </div>
      </div>
    
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Бонус</h5>
          <h6 class="card-subtitle card-text mb-2 text-muted">0</h6>
          <a href="#" class="btn btn-dark mt-2">Особые программы</a>
        </div>
      </div>

      <div class="card mt-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Мои билеты</h5>
            <h6 class="card-subtitle  card-text mb-2 text-muted">Билетов с неполученными выйграшами нет</h6>
        </div>
    </div>
    
      <div class="card mt-5" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Корзина</h5>
          <h6 class="card-subtitle  card-text mb-2 text-muted">В вашей корзине нет билетоа.<br> Участвуйте в тиражах, выигрывайте чаще</h6>
        </div>
      </div>
    
      <div class="card mt-5" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Подписки</h5>
          <h6 class="card-subtitle card-text mb-2 text-muted">Оформите подписку на все тиражи. <br> Подпишитесь на свою победу</h6>
        </div>
      </div>
</div>
@endsection