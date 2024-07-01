@extends('layouts.main')

@section('content')

<div class="w-full xl:w-[80%] px-3 xl:px-0 h-full flex justify-center items-center">
    <div class="w-full h-full flex justify-start overflow-y-scroll items-start" id="student_dashboard">
        <div class="w-full max-h-max overflow-y-scroll flex flex-col justify-start items-start gap-2"
            id="student_dashboard">

            @include('component.courseMainDisplayBanner')
            @include('component.circulardisplay')

            {{-- Course Descriotion and Categories --}}
            <div class="w-full max-h-max md:h-[48vh] py-7 flex justify-center items-start gap-7">
                <div
                    class="w-[45%] rounded-xl px-7 py-5 flex flex-col justify-start items-start gap-1 h-full bg-gray-200">
                    <div class="w-full flex justify-between items-start">
                        <div class="w-1/2 flex justify-start items-center gap-1">
                            <h4 class="capitalize font-semibold text-base">difficulty level: </h4>
                            <h3 class="capitalize text-center text-lg font-semibold">5</h3>
                        </div>
                        <div class="w-1/2 flex justify-start items-center gap-1">
                            <h4 class="capitalize font-semibold text-base">difficulty level: </h4>
                            <h3 class="capitalize text-center text-lg font-semibold">5</h3>
                        </div>
                    </div>
                    <div class="w-full flex justify-between items-start">
                        <div class="w-1/2 flex justify-start items-center gap-1">
                            <h4 class="capitalize font-semibold text-base">Instructor: </h4>
                            <h3 class="capitalize text-center text-lg font-semibold">5</h3>
                        </div>
                        <div class="w-1/2 flex justify-start items-center gap-1">
                            <h4 class="capitalize font-semibold text-base">Subject Categories: </h4>
                            <h3 class="capitalize text-center text-lg font-semibold">5</h3>
                        </div>
                    </div>
                </div>
                <div
                    class="w-[45%] rounded-xl px-7 py-5 flex flex-col justify-start items-start gap-5 h-full bg-gray-200">
                    <div class="w-full flex flex-col justify-start items-start gap-1">
                        <h4 class="capitalize font-bold text-lg">description</h4>
                        <p class="capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, fugiat
                            velit architecto
                            consequuntur placeat aperiam quod! Assumenda delectus incidunt voluptas, obcaecati hic rem
                            temporibus distinctio omnis sit, porro eum quas.</p>
                    </div>
                    <div class="w-full flex flex-col justify-start items-start gap-1">
                        <h4 class="capitalize font-bold text-lg">keyNote</h4>
                        <p class="capitalize">Only Availabe when u've finished the Course</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection