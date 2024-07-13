@extends('layouts.app')

@push('styles')
    <style>
        .base-wave .wave{
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('{{ asset("assets/wave.png") }}');
            background-size: 1000px 100px;
        }
        .base-wave .wave-1{
            animation: animate 30s linear infinite;
            z-index: 1000;
            opacity: 1;
            animation-delay: 0s;
            bottom: 0;
        }
        .base-wave .wave-2{
            animation: animate2 15s linear infinite;
            z-index: 999;
            opacity: 0.5;
            animation-delay: -5s;
            bottom: 10px;
        }

        .base-wave .wave-3{
            animation: animate3 10s linear infinite;
            z-index: 998;
            opacity: 0.75;
            animation-delay: 0;
            bottom: 20px;
        }
        @keyframes animate{
            0%{
                background-position-x: 0;
            }
            100%{
                background-position-x: 1000px;
            }
        }
        @keyframes animate2{
            0%{
                background-position-x: 0;
            }
            100%{
                background-position-x: -1000px;
            }
        }
        @keyframes animate3{
            0%{
                background-position-x: 0;
            }
            100%{
                background-position-x: 1000px;
            }
        }
        .card:hover{
            transition: 0.5s ease-in-out;
            scale: 2;
        }
    </style>
@endpush

@section('content')
    <div>
        <div class="position-relative w-100 vh-100 o-hidden base-wave" style="background: #0f2cd3;">
            <div class="wave wave-1"></div>
            <div class="wave wave-2"></div>
            <div class="wave wave-3"></div>
            <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                <h1 class="text-light fw-bold">TESTING APPS</h1>
            </div>
        </div>
    </div>
@endsection

@stack('script')