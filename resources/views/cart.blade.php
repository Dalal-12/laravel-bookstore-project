@extends('layouts.app')
@section('title','cart')
@section('content')


  
<div class="container py-5 h-100">
    <h5 class="mb-3 mt-3"><a href="#!" class="text-body">
        <i class="fas fa-long-arrow-alt-right ms-2"></i>إكمال التسوق</a>
    </h5>
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
            <div class="card mb-3">
                <div class="card-body p-4">  
                    <div class="row">
                        <div class="col">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <p class="mb-1">سلة التسوق</p>
                                    <p class="mb-0">لديك 1 منتجات في السلة</p>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div>
                                                <img src="{{$cart->img}}" class="img-fluid rounded-3" alt="" style="width: 65px;">
                                            </div>
                                            <div class="me-4">
                                                <h5>{{$cart->title}}</h5>
                                                <p class="small mb-0">{{$cart->author}}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <div style="width: 50px;">
                                                <h5 class="fw-normal mb-0">x1</h5>
                                            </div>
                                            <div style="width: 80px;">
                                                <h5 class="mb-0">{{$cart->price}} ر.س</h5>
                                            </div>
                                            <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
              
            </div>
            <div class="row">
                <div class="col text-center">
                    <a class="btn" href="checkout/{{$cart->id}}">إتمام عملية الشراء</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection