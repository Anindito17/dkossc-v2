@extends('template.layout')

@section('judul')
matakuliah


@section('isi')
    <h1>{{ $salam }}</h1>

    <h1> Ini Halaman Mata Kuliah </h1>
    @if (count($matkul)>0)
    <ul>
        @foreach ($matkul as $matakuliah)
        <li>
            {{ $matakuliah }}
        </li>
        @endforeach
    </ul>

@endsection