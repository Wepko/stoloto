@extends('layouts.head')
@section('content')

    @if (Session::has('info'))
        <div class="alert alert-success mt-5" role="alert">
            {{ Session::get('info') }}
        </div>
    @endif
  </div>
</header>

@if(Auth::check())

<div class="content-4_20">
  <div class="container" >
    <h1>Личный кабинет</h1>
    <h4>Добро пожаловать {{ Auth::user()->getName() }}</h4>
    <div class="row w-100 mt-5">
      <div class="card card-block" >
          <div class="card-body">
            <h5 class="card-title">Кошелек</h5>
            <h6 class="card-subtitle card-text mb-2 text-muted">{{ Auth::user()->money() }} руб</h6>

            <form action="{{ route('refill') }}" method="get">
              @csrf
              <input type="number" name="price" placeholder="Сумма" style="border: 1px solid black" class="btn mt-2 w-100">
              @if ($errors->has('price'))
                <p style="color: red">{{ $errors->first('price') }}</p>
              @endif
              <input type="submit" class="btn btn-dark mt-2 w-100" value="Пополнить">
            </form>
            
            <form action="{{ route('output') }}" method="post" class="mt-5">
              @csrf
              <input type="number" name="price" placeholder="Сумма" style="border: 1px solid black" class="btn mt-2 w-100">
              <input type="text" name="card" placeholder="Номер карты" style="border: 1px solid black" class="btn mt-2 w-100">
              @if ($errors->has('price'))
                <p style="color: red">{{ $errors->first('price') }}</p>
              @endif
              <input type="submit" class="btn btn-dark mt-2 w-100" value="Вывести">
            </form>
            
          </div>
      </div>
      
      <div class="card card-block">
        <div class="card-body">
          <h5 class="card-title">Промокоды</h5>
          <h6 class="card-subtitle card-text mb-2 text-muted">0 руб</h6>
          <a href="#" class="btn btn-dark mt-2" >Добавить</a>
        </div>
      </div>
    
      <div class="card card-block" >
        <div class="card-body">
          <h5 class="card-title">Бонус</h5>
          <h6 class="card-subtitle card-text mb-2 text-muted">0</h6>
          <a href="#" class="btn btn-dark mt-2" >Особые программы</a>
        </div>
      </div>
    </div>

    <div class="row w-100 mt-4 " >
      <nav class="w-100">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Мои билеты</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Корзина</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Подписки</a>
        </div>
      </nav>
      <div class="tab-content w-100 p-4 border border-top-0 text-center" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        @if($userwinner)
          @forelse ($userwinner as $user)
            @if ($user->user_id == Auth::user()->getId())
              <h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">Игра №{{$user->numberGame}}, Тираж №{{$user->circulation}} Результат: {{ $user->win }}</h6>
            @endif
          @empty  
          <h6 class="card-subtitle card-text mb-2 mt-2 text-muted " style="text-align: center">Результатов пока нету</h6>
          @endforelse
        @else
          <h6 class="card-subtitle  card-text mb-2 text-muted ">Билетов с неполученными выйграшами нет</h6>     
        @endif     
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          @if($usergame)
            @for ($i = 0; $i < 6; $i++)
              @empty($usergame[$i])
                @continue
              @endempty
                @forelse ($usergame[$i] as $user)
                  <h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">Номер игры {{$user->numberGame}}, Номер билета {{$user->id}}, Тираж №{{$user->circulation}} Поле1: {{ $user->ticketOne }} Поле2: {{ $user->ticketTwo ?? ' Поля не существует'}}</h6>
                @empty  
                @endforelse
            @endfor
          @else
            <h6 class="card-subtitle  card-text mb-2 text-muted">В вашей корзине нет билетов.<br> Участвуйте в тиражах, выигрывайте чаще</h6>    
          @endif     
        </div> 
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <h6 class="card-subtitle card-text mb-2 text-muted">Оформите подписку на все тиражи. <br> Подпишитесь на свою победу</h6>
        </div>
      </div>
    </div>
  </div>

</div>

@endif

@endsection