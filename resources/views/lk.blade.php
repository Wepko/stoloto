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
        <div class="card card-block w-100" >
            <div class="card-body">
              <h2 class="card-title">Кошелек</h2>
              <h4 class="card-subtitle card-text mb-2 text-muted">{{ Auth::user()->money() }} руб</h4>

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
      </div>

      <div class="row w-100 mt-4 " >
        <nav class="w-100">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Результаты</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Мои билеты</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Распределение</a>
          </div>
        </nav>
        <div class="tab-content w-100 p-4 border border-top-0 text-center" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home"  role="tabpanel" aria-labelledby="nav-home-tab">
          @if($userwinner)
            <div style="display: flex; flex-wrap: wrap; flex-basis: 30%; justify-content: space-around">
            @forelse ($userwinner as $user)
              @if ($user->user_id == Auth::user()->getId())
              <div>
                <div class="card mb-4" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">Игра {{$user->nameGame}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Тираж №{{$user->circulation}}</h6>
                    <p class="card-text">Поле 1: <label class="ticketOne">{{ $user->ticketOne}}</label><br>Поле 2: {{ $user->ticketTwo ?? 'поля не существует'}}<br>Выйгрышное поле: <label class="winTicketOne">{{ $userwingame[$user->numberGame - 1][$user->circulation - 1]->ticketOne ?? 'поля не существует'}}</label> {{ $userwingame[$user->numberGame - 1][$user->circulation - 1]->ticketTwo ?? 'поля не существует'}}<br> Результат: {{ $user->win }}</p>
                  </div>
                </div>
              </div>
                {{--<h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left"><br>Тираж №{{$user->circulation}}<br>Поле 1: <label class="ticketOne">{{ $user->ticketOne}}</label><br>Поле 2: {{ $user->ticketTwo ?? 'поля не существует'}}<br>Выйгрышное поле: <label class="winTicketOne">{{ $userwingame[$user->numberGame - 1][$user->circulation - 1]->ticketOne ?? 'поля не существует'}}</label> {{ $userwingame[$user->numberGame - 1][$user->circulation - 1]->ticketTwo ?? 'поля не существует'}}<br> Результат: {{ $user->win }}<br><br></h6>--}}
              @endif
            @empty  
            <h6 class="card-subtitle card-text mb-2 mt-2 text-muted " style="text-align: center">Результатов пока нету</h6>
            @endforelse
            </div>
          @else
            <h6 class="card-subtitle  card-text mb-2 text-muted ">Билетов с неполученными выйграшами нет</h6>     
          @endif     
          </div>
          <div class="tab-pane fade"  id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            @if($usergame)
            <div style="display: flex; flex-wrap: wrap; flex-basis: 30%; justify-content: space-around">
              @for ($i = 0; $i < 6; $i++)
                @empty($usergame[$i])
                  @continue
                @endempty
                  @forelse ($usergame[$i] as $user)
                    <div class="card mb-4" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Игра {{$user->nameGame}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Тираж №{{$user->circulation}}</h6>
                        <p class="card-text">Стоимость {{ $user->price * 2 }} руб<br> Поле1: {{ $user->ticketOne }} <br> Поле2: {{ $user->ticketTwo ?? ' Поля не существует'}}<br>Дата розыгрыша: {{ $data[$user->numberGame - 1]->time ?? 'Скоро'}}</p>
                      </div>
                    </div>
                      {{--<h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">Игра {{$user->nameGame}}, Номер билета {{$user->id}}<br>Тираж №{{$user->circulation}}<br> Стоимость {{ $user->price * 2 }} руб<br> Поле1: {{ $user->ticketOne }} <br> Поле2: {{ $user->ticketTwo ?? ' Поля не существует'}}<br>Дата розыгрыша: {{ $data[$user->numberGame - 1]->time ?? 'Скоро'}}<br><br></h6>--}}
                  @empty  
                  @endforelse
              @endfor
                  </div>
            @else
              <h6 class="card-subtitle  card-text mb-2 text-muted">В вашей корзине нет билетов.<br> Участвуйте в тиражах, выигрывайте чаще</h6>    
            @endif     
          </div> 
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            @if($infodist)
            <div style="display: flex; flex-wrap: wrap; flex-basis: 30%; justify-content: space-around">
              @forelse ($infodist as $user)
                @if ($user->user_id == Auth::user()->getId())
                  <div class="card mb-4" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Игра распределения №{{$user->id}}</h5>
                      <p class="card-text">Поле: {{$user->ticketOne}}<br>Цена {{ $user->price * 2}} руб.</p>
                    </div>
                  </div>
                  {{--<h6 class="card-subtitle card-text mb-2 text-muted " style="text-align: left">Игра распределения №{{$user->id}}<br>Поле: {{$user->ticketOne}}<br>Цена {{ $user->price * 2}} руб.<br><br></h6>--}}
                @endif
              @empty  
                <h6 class="card-subtitle card-text mb-2 mt-2 text-muted " style="text-align: center">Результатов пока нету</h6>
              @endforelse
            </div>
            @else
              <h6 class="card-subtitle  card-text mb-2 text-muted ">Билетов с неполученными выйграшами нет</h6>     
            @endif    
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="{{ asset('js/win.js')}}"></script>
@endif

@endsection
