@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.contactosViews.contacto')
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

        .contact-section {
            background: linear-gradient(135deg, #e0bcaa 0%, #b6816f 100%);
            color: white;
            padding: 60px 0;
        }

        .contact-section h2 {
            margin-bottom: 30px;
            font-weight: bold;
        }

        .contact-section .icon-hover:hover {
            color: #ff6347;
            /* Tomate */
            transition: color 0.3s ease-in-out;
        }

        .map-container {
            height: 300px;
            border: 0;
        }
    </style>
@endsection
