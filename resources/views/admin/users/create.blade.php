@extends('admin.layouts.app')

@section('title', 'Criar novo Usuário')
@section('content')

    <form action="{{ route('users.store') }}" method="POST">
        {{-- Token --}}
        @csrf()
        {{--  --}}

        <input type="text" name="name" id="name" placeholder="Nome">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="passsword" name="password" id="password" placeholder="Senha">
        <input type="submit" value="Enviar">
    </form>

@endsection
