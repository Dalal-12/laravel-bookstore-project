@extends('layouts.app')
@section('title','مكتبة إقرأ')
@section('content')
    <div class="container">
        <div>
            <h5 class="fw-bold"> الكتب المتوفرة</h5>
        </div>
        <div class="row h-100 ">    
        @foreach($book as $item)
        <div class="col-2 h-100">
            <div class="first ">
                <div class="" >
                    <a href="/details/{{$item->id}}">
                        <img src="{{$item->img}}" alt=" " class=" img-thumbnail img-responsive show" >
                    </a>
                </div>
                <div class="second">
                    <div class="titleo">
                        <a href="/details/{{$item->id}}">{{$item->title}}</a>
                    </div>
                    <div class="price">
                        <p>{{$item->price}}</p>
                    </div>
                    <div class="">
                        <a href="cart/{{$item->id}}" class="btn ">أضف للسلة</a>
                    </div>
                </div>   
            </div>
        </div>
        @endforeach
        </div>
    </div>   
@endsection


