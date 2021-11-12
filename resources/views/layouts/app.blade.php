@extends('layouts.skeleton')
@section('app')
@include('layouts._header')
<div class="app-body">
    @include('layouts._sidebar')
    <main class="main">
      @yield('content')
    </main>
  </div>
   @include('layouts._footer')
@endsection
