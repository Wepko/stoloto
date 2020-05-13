@extends('layouts.head')
@section('content')

    @if (Session::has('info'))
        <div class="alert alert-success mt-5" role="alert">
            {{   Session::get('info') }}
        </div>
    @endif

<h1>Личный кабинет</h1>
<p>Добро пожаловать {{ Auth::user()->getName() }}</p>

@endsection