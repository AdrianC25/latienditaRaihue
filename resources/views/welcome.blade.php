@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.welcomeViews.banner')
    @include('layouts.welcomeViews.menu')
    @include('layouts.footer')
@endsection

@section('css')
    <style>
        /* bootstrap style */
        .text-dark {
            color: #000000 !important;
        }

        .bg-light {
            background: url('/img/backcafe.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }



        /* utility clases */
        .bg-secondary,
        .btn-secondary {
            background: #e0bcaa !important;
            border: 0;
        }

        .bg-primary,
        .btn-primary {
            background: #b6816f !important;
            border: 0;
        }

        .pb-6 {
            padding-bottom: 70px;
        }

        .desserts {
            background: url('/img/info-img.jpg');
            background-repeat: no-repeat;
            background-position: bottom right;
        }

        /* style */
        .footer {
            background: url('/img/backcafe.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .footer-logo{
            width: 110px;
            height: 80px;
        }
    </style>
@endsection
