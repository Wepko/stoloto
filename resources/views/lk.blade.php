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
  <div class="container">
    <div class="row w-100">
      <div class="card card-block" >
          <div class="card-body">
          <h5 class="card-title">Кошелек</h5>
          <h6 class="card-subtitle  card-text mb-2 text-muted">0 руб</h6>
          <a href="#"class="btn btn-dark mt-2">Пополнить</a>
          </div>
      </div>
      
      <div class="card card-block">
        <div class="card-body">
          <h5 class="card-title">Промокоды</h5>
          <h6 class="card-subtitle  card-text mb-2 text-muted">0 руб</h6>
          <a href="#" class="btn btn-dark mt-2">Добавить</a>
        </div>
      </div>
    
      <div class="card card-block" >
        <div class="card-body">
          <h5 class="card-title">Бонус</h5>
          <h6 class="card-subtitle card-text mb-2 text-muted">0</h6>
          <a href="#" class="btn btn-dark mt-2">Особые программы</a>
        </div>
      </div>

    </div>

    <div class="row w-100 mt-4 ">
      <nav class="w-100">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Мои билеты</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Корзина</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Подписки</a>
        </div>
      </nav>
      <div class="tab-content w-100 p-4 border border-top-0 text-center" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <h6 class="card-subtitle  card-text mb-2 text-muted ">Билетов с неполученными выйграшами нет</h6>          
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <h6 class="card-subtitle  card-text mb-2 text-muted">В вашей корзине нет билетов.<br> Участвуйте в тиражах, выигрывайте чаще</h6>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <h6 class="card-subtitle card-text mb-2 text-muted">Оформите подписку на все тиражи. <br> Подпишитесь на свою победу</h6>
        </div>
      </div>
    </div>
  </div>

      @if(Auth::user()->isAdmin())
      <div class="card mt-5" style="width: 18rem;">
        <a href="{{ route('admin') }}"class="btn btn-dark mt-2">Панель администратора</a>
      </div>
      @endif

</div>
@endsection