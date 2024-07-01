@extends('layouts.main')

@section('content')

<div class="w-full lg:w-[80%] h-full">
    <div class="w-full h-[98vh] flex flex-col justify-start items-start gap-2">
        <h2 class="h-[8%] flex justify-center items-center font-semibold text-xl">Add Employees</h2>
        @include('component.onboardSection')
    </div>
</div>

@endsection