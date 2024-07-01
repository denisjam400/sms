<nav
    class="w-[80%] xs:w-[60%] sm:w-[30%] xl:w-[21%] bg-white fixed z-10 xl:relative h-full flex flex-col justify-between items-start gap-3 py-2">
    <div class="h-[80%] w-full flex flex-col">
        <div class="overflow-y-scroll overflow-x-hidden max-h-max w-full flex flex-col gap-3 scrollbarhider">
            @if ($Auth->usertype === 'student')
            <div @if ($routeName==="dashboard" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/radar.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">dashboard</a>
                    </div>
                </div>
            </div>
            <div @if ($routeName==="academics" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/radar.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('academics') }}"
                            class="w-[100%] capitalize text-base font-semibold ">Academics</a>
                    </div>
                    {{-- toggle of academic (timetable) --}}
                </div>
            </div>
            <div @if ($routeName==="student" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/atom.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">student</a>
                    </div>
                    {{-- toggle of yr performance, guardian and student data (course) and lesson they signed Up for --}}
                </div>
            </div>
            <div @if ($routeName==="announcement_board" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/chalkboard.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">announcement board</a>
                    </div>
                </div>
            </div>
            <div @if ($routeName==="live_classes" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('asset/icon/livestream.png') }}" class="h-[70%] w-[70%] object-contain"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}" class="w-[100%] capitalize text-base font-semibold ">Live
                            Classes</a>
                        {{-- toggle of elearning schedule, changing elearning time --}}
                    </div>
                </div>
            </div>
            <div @if ($routeName==="courses" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/radar.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">Courses</a>
                        {{-- toggle of courses (viewing all course), creation of courses --}}
                    </div>
                </div>
            </div>
            <div @if ($routeName==="exam" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/radar.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">Exam</a>{{-- toggle of exam list, grade --}}
                    </div>
                </div>
            </div>

            @elseif ($Auth->usertype === 'manager')

            <div @if ($routeName==="dashboard" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/radar.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">dashboard</a>
                    </div>
                </div>
            </div>
            <div @if ($routeName==="academics" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/book-open.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('academics') }}"
                            class="w-[100%] capitalize text-base font-semibold ">Academics</a>
                    </div>
                    {{-- toggle of academic (timetable) --}}
                </div>
            </div>
            <div @if ($routeName==="attendance" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('asset/icon/attendance.png') }}" class="h-[70%] w-[70%] object-contain"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">attendance</a>
                    </div>
                    {{-- toggle of (attendance of student) --}}
                </div>
            </div>
            <div @if ($routeName==="announcement" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/chalkboard.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">announcement</a>
                    </div>
                    {{-- toggle of view announcement, create announcement (email) (parent, teacher, staff) --}}
                </div>
            </div>
            <div @if ($routeName==="student" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/radar.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">student</a>
                    </div>{{-- toggle of performance, guardian and student data and lesson they signed Up for --}}
                </div>
            </div>
            <div @if ($routeName==="live_classes" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/radar.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}" class="w-[100%] capitalize text-base font-semibold ">Live
                            Classes</a>
                        {{-- toggle of elearning schedule, changing elearning time --}}
                    </div>
                </div>
            </div>
            <div @if ($routeName==="courses" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/radar.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">Courses</a>
                        {{-- toggle of courses (viewing all course), creation of courses --}}
                    </div>
                </div>
            </div>
            <div @if ($routeName==="exam" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/radar.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}" class="w-[100%] capitalize text-base font-semibold ">Exam</a>
                        {{-- toggle of exam list, grade --}}
                    </div>
                </div>
            </div>
            @else

            <div @if ($routeName==="dashboard" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/radar.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">dashboard</a>
                    </div>
                </div>
            </div>
            <div @if ($routeName==="academics" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/book-open.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('academics') }}"
                            class="w-[100%] capitalize text-base font-semibold ">Academics</a>
                    </div>
                    {{-- toggle of academic (timetable) --}}
                </div>
            </div>
            <div @if ($routeName==="attendance" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('asset/icon/attendance.png') }}" class="h-[70%] w-[70%] object-contain"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">attendance</a>
                    </div>
                    {{-- toggle of (attendance of student) --}}
                </div>
            </div>
            <div @if ($routeName==="announcement" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/chalkboard.svg') }}" class="h-[70%] w-[80%]"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">announcement</a>
                    </div>
                    {{-- toggle of view announcement, create announcement (email) (parent, teacher, staff) --}}
                </div>
            </div>
            <div @if ($routeName==="administrative_board" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('asset/icon/administration.png') }}" class="h-[70%] w-[70%] object-contain"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('administrative_board') }}"
                            class="w-[100%] capitalize text-base font-semibold ">Administrative</a>
                    </div>{{-- toggle of staff and non staff --}}
                </div>
            </div>
            <div @if ($routeName==="finance" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('asset/icon/finance.png') }}" class="h-[70%] w-[70%] object-contain"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">Finance</a>
                    </div>{{-- tracking of finance nd company performance --}}
                </div>
            </div>
            <div @if ($routeName==="student" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('asset/icon/student.png') }}" class="h-[70%] w-[80%] object-contain"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">student</a>
                    </div>{{-- toggle of performance, guardian and student data and lesson they signed Up for --}}
                </div>
            </div>
            <div @if ($routeName==="class_management" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('vendor/blade-boxicons/regular/trim.svg') }}"
                            class="h-[70%] w-[80%] object-contain" alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}" class="w-[100%] capitalize text-base font-semibold ">Class
                            management</a>
                        {{-- toggle of class, class section addition --}}
                    </div>
                </div>
            </div>
            <div @if ($routeName==="e-learning" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('asset/icon/coursesAlt.png') }}" class="h-[70%] w-[80%] object-contain"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">E-Learning</a>
                        {{-- toggle of elearning schedule, changing elearning time --}}
                    </div>
                </div>
            </div>
            <div @if ($routeName==="courses" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('asset/icon/courses.png') }}" class="h-[70%] w-[80%] object-contain"
                            alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">Courses</a>
                        {{-- toggle of courses (viewing all course), creation of courses --}}
                    </div>
                </div>
            </div>
            <div @if ($routeName==="exam" ){
                class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
                class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
                <div
                    class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                    <div class="h-full w-[25%] flex justify-center items-center">
                        <img src="{{ asset('asset/icon/exam.png') }}" class="h-[70%] w-[70%] object-contain" alt="icon">
                    </div>
                    <div class="h-full w-[73%] flex justify-start items-center">
                        <a href="{{ url('dashboard') }}"
                            class="w-[100%] capitalize text-base font-semibold ">Exam</a>{{-- toggle of exam list, grade --}}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="pt-5 h-[18%] w-full flex flex-col justify-center items-center gap-2 border-top-90 relative">

        {{-- Dont Touch --}}
        <div @if ($routeName==="setting" ){
            class="w-full h-[45px] flex justify-center items-center border-r-2 border-red-500 group" } @else{
            class="w-full h-[45px] flex justify-center items-center border-r-2 group" } @endif>
            <div
                class="group-[.border-red-500]:bg-main-brand-color group-[.border-red-500]:text-white w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                <div class="h-full w-[25%] flex justify-center items-center">
                    <img src="{{ asset('vendor/blade-boxicons/regular/radar.svg') }}" class="h-[70%] w-[80%]"
                        alt="icon">
                </div>
                <div class="h-full w-[73%] flex justify-start items-center">
                    <a href="{{ url('dashboard') }}"
                        class="w-[100%] capitalize text-base font-semibold ">Setting</a>{{-- adding of staff and instructors --}}
                </div>
            </div>
        </div>

        <div class="w-full h-[45px] flex justify-center items-center border-r-2">
            <div class="w-[85%] rounded-xl h-[95%] flex justify-center items-center gap-1">
                <div class="h-full w-[25%] flex justify-center items-center">
                    <img src="{{ asset('vendor/blade-boxicons/regular/log-out.svg') }}" class="h-[70%] w-[80%]"
                        alt="icon">
                </div>
                <form method="POST" action="{{ route('logout') }}"
                    class="h-full w-[73%] flex justify-start items-center">
                    @csrf
                    <button type="submit" class="capitalize text-base font-semibold ">LogOut</button>
                </form>
                {{-- adding of staff and instructors --}}
            </div>
        </div>
    </div>
</nav>

{{-- :active="request()->RouteIs('dashboard')" --}}