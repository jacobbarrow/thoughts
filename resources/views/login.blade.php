@extends('master')

@section('content')
    <p>Pop in the secret</p>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="secret">secret</label>
        <input name="secret" type="password">
        <input type="submit" value="Pop it in">
    </form>
    <p>{{ $errors->first() }}</p>
@endsection