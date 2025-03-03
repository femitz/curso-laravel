@extends('admin.layouts.app')

@section('title', 'Usuários')
@section('content')
    <h1>Users</h1>

    @if (session()->has('success'))
        {{ session('success') }}
    @endif

    <a href="{{ route('users.create') }}">Novo</a>
    <table>
        <thead>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>-</td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum usuário no banco.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $users->links() }}
@endsection
