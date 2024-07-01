@extends('layouts.main')

@section('content')

<div class="w-full xl:w-[79%] lg:px-4 px-6 h-full flex justify-center items-center">
    <div class="w-full h-full flex justify-start overflow-y-scroll items-start scrollbarhider">
        <div class="w-full max-h-max overflow-y-scroll flex flex-col justify-start items-start gap-2 scrollbarhider">
            @include('component.slideDisplay')
            @include('component.table')
        </div>
    </div>
</div>

@endsection