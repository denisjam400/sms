@extends('layouts.main')

@section('content')
<div class="w-full xl:w-[80%] px-3 xl:px-0 h-full flex justify-center items-center">
    <div class="w-full h-full flex justify-start overflow-y-scroll items-start" id="student_dashboard">
        <div class="w-full max-h-max overflow-y-scroll flex flex-col justify-start items-start gap-2"
            id="student_dashboard">
            @include('component.courseMainDisplayBanner')
            @include('component.coursedisplay')
            @include('component.coursedisplaywrap')
        </div>
    </div>
</div>
@endsection