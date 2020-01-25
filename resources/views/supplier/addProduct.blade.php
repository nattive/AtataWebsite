@extends('supplier\layout\app')
@section('content')


<!-- PAGE CONTENT-->
<div class="page-content--bgf5">
@endsection

@section('js')
<script>
    const nextTab = (next, current1,current2,current3) => {
            $('#'+ current1).removeClass('d-block, active').addClass('d-none');
            $('#'+ current2).removeClass('d-block, active').addClass('d-none');
            $('#'+ current3).removeClass('d-block, active').addClass('d-none');
            $('#'+ next).addClass('d-block, active ').removeClass('d-none').fadeIn();
            $('#'+ next+'-link').addClass('active-tab').fadeIn();
            $('#'+ current1+'-link').removeClass('active-tab').fadeOut();
            $('#'+ current2+'-link').removeClass('active-tab').fadeOut();
            $('#'+ current3+'-link').removeClass('active-tab').fadeOut();
        };

</script>