@include('dependencies\head')
@extends('layouts.app')
@section('content')
<div id="vueapp">
<register-supplier sellerid="{{$id}}"></register-supplier>
</div>
@endsection

{{-- @section('js')
<script src="{{ asset('js/app.js') }}" defer></script>

@show --}}