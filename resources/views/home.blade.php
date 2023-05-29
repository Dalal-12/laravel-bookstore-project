@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5" style="background-color: #f2f9f7;border: solid 1px #108766">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('لقد تم تسجيل دخولك!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
