@extends('layouts.head')
@section('content')

    @if (Session::has('info'))
        <div class="alert alert-success mt-5" role="alert">
            {{   Session::get('info') }}
        </div>
    @endif

@if(Auth::user()->isAdmin())
      <h1 class="mt-5">Панель администратора</h1>
    
        <form action= "{{ route('WinnerOneGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 4 из 20">
        </form>
        <form action= "{{ route('WinnerTwoGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 5 из 36">
        </form>
        <form action= "{{ route('WinnerThreeGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 7 из 49">
        </form>
        <form action= "{{ route('WinnerFourGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 6 из 45">
        </form>
        <form action= "{{ route('WinnerFiveGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш 12 из 24">
        </form>
        <form action= "{{ route('WinnerSixGame') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-dark mt-2" value="Начать разыгрыш рапидо">
        </form>
      
@endif

@endsection