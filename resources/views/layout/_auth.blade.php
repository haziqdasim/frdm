@extends('layout.master')

@section('content')

    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">
                        {{ $slot }}
                    </div>
                </div>
                <div class="d-flex flex-center flex-wrap px-5">
                    <div class="d-flex fw-semibold text-primary fs-base">
                        <a href="https://www.bomba.gov.my/" class="px-5" target="_blank">2023 © Fire & Rescue Department Malaysia.</a>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url({{ image('misc/auth-bg.png') }})">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <a href="{{ route('dashboard') }}" class="mb-12">
                        <img alt="Logo" src="{{ asset('assets/media/logos/bomba-malaysia.png') }}" class="h-125px h-auto"/>
                    </a>
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ image('misc/auth-screens.png') }}" alt=""/>
                    <h1 class="d-none d-lg-block text-dark fs-2qx fw-bolder text-center mb-7">
                        Fire Rescue Department Malaysia
                    </h1>
                    <div class="d-none d-lg-block text-dark fs-base text-center fw-bolder">
                       <a href="#" class="opacity-75-hover text-warning fw-bold me-1">Mobile</a>Monitoring System
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
