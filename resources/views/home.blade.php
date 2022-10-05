@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
        <h1>Ini Halaman Home</h1>
        <h2>Selamat datang, {{ $name }}. Anda adalah {{ $role }}</h2>

       <table class="table">
            <tr>
                <th>No.</th>
                <th>Nama</th>
            </tr>
            @foreach($motor as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td> {{ $data }}</td>
            </tr>
                 <br>
            @endforeach
       </table>
@endsection
        <!-- @for($i = 0; $i < 5; $i++)
            {{ $i }} <br>
        @endfor -->

        <!-- @if ($role == 'admin')
            <a href="">Ke Halaman Admin</a>
        @elseif ($role == 'user')
            <a href="">Ke halaman user</a>
        @else
            <a href="">ke hatimu</a>
        @endif   -->
        <!-- @switch($role)
            @case($role=='admin')
                <a href="">Ke Halaman Admin</a>
                @break

            @case($role=='user')
                <a href="">Ke Halaman user</a>
                @break

            @default
                <a href="">ke hatimu</a>
        @endswitch -->