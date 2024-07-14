@extends('layouts.guest')

@push('styles')
    <style>
        .bg-login{
            position: relative;
            width: 100%;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, rgba(var(--bs-success-rgb)) 50%, white 50%);
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .circle{
            width: 400px;
            height: 400px;
            border-radius: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .circle-1{
            position: absolute;
            top: -150px;
            left: -150px;
            background-color: rgb(0, 0, 0, 0.1);
        }
        .circle-2{
            position: absolute;
            bottom: -150px;
            right: -150px;
            background-color: rgba(var(--bs-success-rgb), 0.3);
        }
        .circle-in{
            width: 300px;
            height: 300px;
            border-radius: 100%;
        }
        .circle-1 .circle-in{
            background-color: rgba(var(--bs-success-rgb)) !important;
        }
        .circle-2 .circle-in{
            background-color: rgba(255, 255, 255, 0.5) !important;
        }
        .mini-circle-1{
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background-color: rgb(0, 0, 0, 0.1);
            position: absolute;
            left: 100px;
            top: 275px;
        }
        .mini-circle-2{
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background-color: rgba(var(--bs-success-rgb), 0.3);
            position: absolute;
            right: 100px;
            bottom: 275px;
        }
    </style>
@endpush

@section('content')
    <div class="bg-login px-3 px-lg-0">
        <div class="circle circle-1">
            <div class="circle-in"></div>
        </div>
        <div class="circle circle-2">
            <div class="circle-in"></div>
        </div>
        <div class="mini-circle-1"></div>
        <div class="mini-circle-2"></div>
        <div class="card bg-white shadow rounded-4" style="width: 25rem;">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset("assets/logo-1.png") }}" width="150px" height="auto"/>
                </div>
                <h3 class="card-title text-center fw-bold text-success">
                    Sign In
                </h3>
                <div class="card-content px-0 px-lg-2 pb-2">
                    <form method="POST" action="{{ route('login') }}"">
                        @csrf
                        <x-input-text key="username" type="text" title="Username" />
                        <x-input-text key="password" type="password" title="Password" />
                        <button type="submit" class="btn bg-success w-100 fw-bold text-light fs-5 mt-2">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection