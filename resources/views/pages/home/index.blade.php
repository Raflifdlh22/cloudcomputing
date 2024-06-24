@extends('layouts.app')
@section('content')

@foreach ($menuData as $menu)
    
<div class="col-md-4">
    <div class="card mb-5">
        <!-- Product image-->
        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{$menu->nama_menu}}</h5>
                <!-- Product price-->
                <p class="card-text">Rp {{number_format($menu->harga, 0,',','.')}}</p>
                <p class="card-text">kontak&nbsp:{{$menu->kontak}}</p>
                <p class="card-text">kategori&nbsp:{{$menu->kategori_menu_id}}</p>  
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
        </div>
    </div>
</div>
@endforeach
@endsection