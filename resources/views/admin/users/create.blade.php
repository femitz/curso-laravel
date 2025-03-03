@extends('admin.layouts.app')

@section('title', 'Criar novo Usuário')
@section('content')

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        {{-- Token --}}
        @csrf()
        {{--  --}}

        <input type="text" name="name" id="name" placeholder="Nome" value="{{ old('name') }}">
        <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
        <input type="passsword" name="password" id="password" placeholder="Senha">
        <input type="submit" value="Enviar">
    </form>

@endsection
