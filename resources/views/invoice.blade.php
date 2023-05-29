@extends('layouts.app')
@section('title','invoice')
@section('content')
<div class="row">
  <div class="col-11">
    <div class="card">
      <div class="card-body">
        <div class="container mb-5 mt-3">
          <div class="row d-flex align-items-baseline">
            <div class="col-xl-9">
              <p>رقم الفاتورة >> <strong> #{{$inv->id}}</strong></p>
            </div>
            <div class="col-xl-3 mb-3">
              <a class="btn" data-mdb-ripple-color="dark">
                <i class="fas fa-print text-primary"></i>
                طباعة
              </a>
              <a class="btn" data-mdb-ripple-color="dark">
                <i class="far fa-file-pdf text-danger"></i>
                حفظ
              </a>
            </div>
            <hr>
          </div>
      
          <div class="container">
            <div class="row">
              <div class="col-xl-8">
                <ul class="list-unstyled">
                  <li class="text-muted">إلى : <span style="color:#108766 ;">{{$inv->firstName}} {{$inv->lastName}}</span></li>
                  <li class="text-muted">العنوان :{{$inv->address}}</li>
                  <li class="text-muted">{{$inv->state}} , {{$inv->country}}</li>
                </ul>
              </div>
            </div>
      
            <div class="row my-2 mx-1 justify-content-center">
              <table class="table table-borderless">
                <thead style="background-color:#f3f9f7 ;">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">الوصف</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">سعر الوحدة</th>
                    <th scope="col">المجموع الكلي</th>
                  </tr>
                </thead>
                <tbody style="background-color:#f0f0f0 ;">
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$inv->title}}</td>
                    <td>1</td>
                    <td>{{$inv->price}}</td>
                    <td>{{$inv->price}}</td>
                  </tr>          
                </tbody>  
              </table>
            </div>

            <div class="row" dir="rtl">
              <div class="col-xl-3">
                <p class="text-black float-start">
                  <span class="text-black me-3"> المجموع الكلي : </span>
                  <span style="font-size: 25px;">{{$inv->price}} ر.س </span>
                </p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-xl-10">
                <p>شكراً لتسوقكم من إقرأ ...  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection