@extends('layouts.head')
@section('content')

    @if (Session::has('info'))
        <div class="alert alert-success mt-5" role="alert">
            {{   Session::get('info') }}
        </div>
    @endif

@if(Auth::user()->isAdmin())
      <h1 class="mt-5">Панель администратора</h1>

      <a href="{{ route('one-game') }}"class="btn btn-dark mt-2">Игра 4 из 20</a><br>
      <a href="{{ route('two-game') }}"class="btn btn-dark mt-2">Игра 5 из 36</a><br>
      <a href="{{ route('three-game') }}"class="btn btn-dark mt-2">Игра 7 из 49</a><br>
      <a href="{{ route('four-game') }}"class="btn btn-dark mt-2">Игра 6 из 45</a><br>
      <a href="{{ route('five-game') }}"class="btn btn-dark mt-2">Игра 12 из 24</a><br>
      <a href="{{ route('six-game') }}"class="btn btn-dark mt-2">Рапидо</a><br>
      
@endif

@endsection