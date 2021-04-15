@extends('layouts.layout')
@section('title')
    商品列表
@endsection
@section('content')
    @foreach ($productions as $production)
        <h1>
            商品名稱:{{ $production->title }}
        </h1>
        <p>
            商品描述:{{ $production->description }}

        </p>
        <p>
            商品價格:{{ $production->price }}
        </p>
        <p>
            上架與否:
            @if ($production->published == 1)
                是
            @else
                否
            @endif
            <hr>
    @endforeach
@endsection
