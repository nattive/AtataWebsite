@extends('supplier\layout\app')
@section('content')
<div id="vueapp">
<router-view></router-view>
    
</div>
@endsection

{{-- @section('js')
<script src="{{ asset('js/app.js') }}" defer></script>

@show --}}