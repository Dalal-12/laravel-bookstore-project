@extends('layouts.app')
@section('title','datails')
@section('content')

<div class="container">
  <div class="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">الرئيسية</a></li>
      <li class="breadcrumb-item"> </li>
      <li class="breadcrumb-item"><a href="">كتب أدبية</a>  </li>
      <li class=" active">ثلاثية غرناطة</li>
    </ol>
  </div>
  

  <div class="row">
    <div class="col-12">
        <div class="card card-details mb-5">
          <div class="row g-0">
            <div class="col-md-4  ">
              <img src="{{$book->img}}" class="img-fluid details img-responsive img-thumbnail" alt="..." style="max-width: 100%; max-width:100%">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title"> {{$book->title}}</h5>
                <h4>{{$book->price}}</h4> <small>السعر شامل الضريبة</small>
                <div class="row mt-4">
                  <div class="col-2">
                    <p class="card-text fw-bold">المؤلف </p>
                  </div>
                  <div class="col-10">
                    <p class="card-text">{{$book->author}}  </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-2">
                    <p class="card-text fw-bold">الناشر </p>
                  </div>
                  <div class="col-10">
                    <p class="card-text"> {{$book->publisher}} </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-2">
                    <p class="card-text fw-bold">اللغة </p>
                  </div>
                  <div class="col-10">
                    <p class="card-text">{{$book->language}}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-2">
                    <p class="card-text fw-bold">الفئة </p>
                  </div>
                  <div class="col-10">
                    <p class="card-text">{{$book->category}} </p>
                  </div>
                </div>
                <div class="row description ">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Voluptatum similique minus ipsa labore iusto sint asperiores 
                  repudiandae incidunt dolores soluta? Maxime excepturi quod fugit nihil eveniet. Qui delectus nihil illum.
                </div>
                <div>
                  <a href="cart/{{$book->id}}" class="btn">أضف في السلة للشراء</a>
                </div>
              </div>
            
          </div>
          </div>
        </div>
        

          
        
    </div>
  </div>
</div>


@endsection