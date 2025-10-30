@extends('layouts.home')
@section('content')
    <a href="/usuarios" style="@auth
        text-align: center;
        text-decoration: none;
        color: #000;
        cursor: pointer;
    @endauth">Usuarios</a>
    @if ( session('success'))
        <p>{{ session('sucess') }}</p>
    @endif

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif


    <form action="/usuarios" method="post"
        style="
            background-color: #000;
            color: #fff;
            border: 1px solid grey;
            width: 15%;

        ">
        @method('POST')
        @csrf

        {{-- 'name',
            'id',
            'adress',
            'numberFone',
            'email',
            'date',
            'password'--}}

        <input type="text" name="name" id="Digite o seu name">
        @if ($errors->has('name'))
            <p>{{$errors->first('name')}}</p>
        @endif
        <br/>
        <input type="date" name="date">
        @if ($erros->has('date'))
            <p>{{$errors->first('date')}}</p>
        @endif
        <br/>
        <input type="text" name="adress">
        @if ($errors->has('adress'))
            <p>{{$errors->first('adress')}}</p>
        @endif
        <br/>
        <p style="
            text-align: center;
            margin-right: 40px;
        "><button type="submit">Salvar</button></p>
    </form>
@endsection
