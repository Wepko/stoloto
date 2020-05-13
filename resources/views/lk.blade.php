@extends('layouts.head')
@section('content')

<h1>Личный кабинет</h1>
<p>Добро пожаловать {{ Auth::user()->getName() }}</p>

@endsection