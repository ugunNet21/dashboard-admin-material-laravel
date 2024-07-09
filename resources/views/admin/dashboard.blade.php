@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <main class="main-content border-radius-lg ">
        <!-- Navbar -->
        @include('admin.partials.navbar')
        <div class="container-fluid py-4">
            <!--home-->
            @include('admin.partials.home')
            <!--Footer-->
            @include('admin.partials.footer')
        </div>
    </main>
@endsection
