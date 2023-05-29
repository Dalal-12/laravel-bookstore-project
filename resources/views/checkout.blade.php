@extends('layouts.app')
@section('title','checkout')

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


  <div class="py-5 text-center">        
    <h2>نموذج الشراء</h2>
    <p >الرجاءإدخال البيانات المطلوبة في الصفحة لإتمام عملية الشراء</p>
  </div>
      
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span>سلة التسوق</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">اسم المنتج</h6>
            <small class="text-muted">{{$book->title}}</small>
          </div>
          <span class="text-muted">{{$book->price}}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>المجموع (ر.س)</span>
          <strong>{{$book->price}}</strong>
        </li>
      </ul>
    </div>


    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">معلومات الفاتورة</h4>
      <form action="{{route('invoice')}}" method="POST">
      @csrf
        <input type="hidden" id="title" name="title" value="{{$book->title}}">
        <input type="hidden" id="price" name="price" value="{{$book->price}}">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">الاسم الاول</label>
            <input type="text"  class="form-control " id="firstName" name="firstName" value="" required>
            <div class="invalid-feedback">
                    الاسم الاول مطلوب
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">الاسم الأخير</label>
            <input type="text" class="form-control" id="lastName" name="lastName" value="" >
            <div class="invalid-feedback">
                    الأسم الأخير مطلوب
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email"> رقم الجوال </label>
          <input type="number" class="form-control" id="email" name="email">
          <div class="invalid-feedback">
                    الرجاء إدخال رقم جوال صحيح    
          </div>
        </div>
      
        <div class="mb-3">
          <label for="email">البريد الإلكتروني </label>
        <input type="email" class="form-control" id="email" name="email">
            <div class="invalid-feedback">
                  الرجاء إدخال بريد إلكتروني صحيح
          </div>
        </div>
      
        <div class="mb-3">
          <label for="address">العنوان</label>
          <input type="text" class="form-control" id="address" name="address" >
          <div class="invalid-feedback">
                  الرجاء إدخال العنوان
          </div>
        </div>
      
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">الدولة</label>

            <select class="custom-select d-block w-100 form-control " id="country" name="country" >
              <option class="text-muted" value="">اختر الدولة ...</option>
              <option>المملكة العربية السعودية</option>
            </select>
            <div class="invalid-feedback">
                    الرجاء اختيار الدولة    
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">المدينة</label>
            <select class="custom-select d-block w-100 form-control" id="state" name="state">
              <option class="text-muted" value="">اختر المدينة ...</option>
              <option>الرياض</option>
              <option>جدة</option>
              <option>مكة المكرمة</option>
              <option>المدينة المنورة</option>
              <option>الطائف</option>
              <option>الدمام</option>
            </select>
            <div class="invalid-feedback">
                    الرجاء اختيار المدينة
            </div>
          </div>
        </div>
        <button class="btn btn-lg mb-4" type="submit" >تأكيد الطلب</button>
      </form>
    </div>
  </div>
</div>
@endsection