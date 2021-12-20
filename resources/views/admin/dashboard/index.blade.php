@extends('layouts.admin')
@section('content')

<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">


<!-- The sidebar -->
<div class="sidebar">
  @if (Auth::user()->role->name == 'admin')
  <a class="nav-link" href="{{route('dashboard.index')}}">
    <i class="bi bi-cpu-fill"></i> 
    Dashboard
  </a>
  <a class="nav-link" href='{{route('users.index')}}'>
    <i class="bi bi-people-fill"></i>
    {{__('common.Users manage')}}
  </a>
  <a class="nav-link" href='{{route('manage.comment')}}'>
    <i class="bi bi-camera-fill"></i>
    {{__('common.Comment manage p')}}
  </a>
  <a class="nav-link" href='{{route('articleComment.index')}}'>
    <i class="bi bi-camera-fill"></i>
    {{__('common.Comment manage a')}}
  </a>
  @endif
  

  {{-- <a class="nav-link" href='{{route('manage.tourIndex')}}'>
    <i class="bi bi-camera-fill"></i>
    {{__('common.Tours manage')}}
  </a>

  <a class="nav-link" href='{{route('manage.hotelIndex')}}'>
    <i class="bi bi-house-fill"></i>
    {{__('common.Hotels manage')}}
  </a>

  <a class="nav-link" href='{{route('manage.articleIndex')}}'>
    <i class="bi bi-file-earmark-richtext-fill"></i>
    {{__('common.Articles manage')}}
  </a> --}}

  <a class="nav-link" href='{{route('receipt.waiting')}}'>
    <i class="bi bi-check2-circle"></i>
    {{__('common.Receipts queue')}}
  </a>
  <a class="nav-link" href='{{route('receipt.indexAccepted')}}'>
    <i class="bi bi-receipt-cutoff"></i>
    {{__('common.Receipts manage')}}
  </a>
  {{-- <a class="nav-link" href='{{route('income.index')}}'>{{__('common.Income')}}</a> --}}
  
  <button class="dropdown-btn">
    <i class="bi bi-graph-up"></i>
    {{__('common.Income')}}
    
  </button>

  <div class="dropdown-container">
    <a href="{{route('income.currentDay')}}">{{__('common.Day')}}</a>
    <a href="{{route('income.currentMonth')}}">{{__('common.Month')}}</a>
    <a href="{{route('income.currentYear')}}">{{__('common.Year')}}</a>
  </div>
  
</div>
  
  <!-- Page content -->
  <div class="content">
    <main>
      @yield('dashboard')
  </main>
  </div>


<script src="{{ asset('js/dashboard.js') }}" defer></script>

@endsection
