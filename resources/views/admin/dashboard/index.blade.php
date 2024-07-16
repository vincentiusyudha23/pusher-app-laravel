@extends('layouts.app')

@section('title')
    <span>Dashboard</span>
@endsection

@push('styles')
    <style>
        .new-card{
            width: 10rem;
            height: 10rem;
            background-color: aliceblue;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .new-card:hover{
            cursor: pointer;
            scale: 0.75;
            transition: 0.3s ease-in-out;
        }
    </style>
@endpush

@section('content')
    <div class="pt-5">
        <div class="new-card">
            <i class="bi bi-person-fill-add m-0 p-0" style="font-size: 3rem;"></i>
            <span>Add New Member</span>
        </div>
    </div>
@endsection