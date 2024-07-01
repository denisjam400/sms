<div class="w-[90%] h-max md:h-[80%] rounded-xl bg-white" @if($routeName==='onboarding' ) class="mb-0" @else
    class="mb-10" @endif>
    <form method="POST" class="py-4 w-full h-full flex flex-col justify-between items-end rounded-xl gap-5"
        @if($routeName==='onboarding' ) action="{{ url('onboard') }}" class="py-10 px-5 gap-3" @else
        action="{{ url('admin_add') }}" class="py-4 px-3 gap-0" @endif>
        @csrf
        <div class="w-full h-[90%] flex flex-col sm:flex-row justify-center gap-5">
            <div class="w-full sm:w-[50%] max-h-max flex flex-col justify-center gap-5">
                <div class="w-full max-h-max">
                    <x-label for="nationality" value="{{ __('Nationality:') }}" />
                    <x-input id="nationality" class="block mt-1 w-full" type="text" name="nationality"
                        :value="old('nationality')" required autocomplete="nationality" />
                </div>

                <div class="w-full max-h-max">
                    <x-label for="state" value="{{ __('State') }}" />
                    <x-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')"
                        required autocomplete="state" />
                </div>

                <div class="w-full max-h-max">
                    <x-label for="age" value="{{ __('Age') }}" />
                    <x-input id="age" class="block mt-1 w-full" type="number" name="age" required autocomplete="age" />
                </div>

                <div class="w-full max-h-max">
                    <x-label for="address" value="{{ __('Address') }}" />
                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" required
                        autocomplete="address" />
                </div>

                @if($routeName!=='onboarding' )
                <div class="w-full max-h-max">
                    <x-label for="user_id" value="{{ __('User ID') }}" />
                    <x-input id="user_id" class="block mt-1 w-full" type="number" name="user_id" required />
                </div>
                @endif
            </div>

            <div class="w-full sm:w-[40%] max-h-max flex flex-col justify-center gap-5">

                <div class="w-full max-h-max">
                    <x-label for="phone_number" value="{{ __('Phone Number') }}" />
                    <x-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number" required
                        autocomplete="phone_number" />
                </div>

                <div class="w-full max-h-max">
                    <x-label for="phone_number2" value="{{ __('Phone Number 2 (optional)') }}" />
                    <x-input id="phone_number2" class="block mt-1 w-full" type="number" name="phone_number2"
                        autocomplete="phone_number2" />
                </div>

                <div class="w-full max-h-max">
                    <x-label for="date_of_birth" value="{{ __('Date Of Birth') }}" />
                    <x-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" required />
                </div>

                <div class="w-full max-h-max">
                    <x-label for="gender" value="{{ __('Gender') }}" />
                    <x-input id="gender" class="block mt-1 w-full" type="text" name="gender" required />
                </div>

                @if($routeName!=='onboarding' )
                <div class="w-full max-h-max">
                    <x-label for="role" value="{{ __('Role') }}" />
                    <x-input id="role" class="block mt-1 w-full" type="text" name="role" required />
                </div>
                @endif
            </div>
        </div>

        <button
            class="mr-4 w-[35%] lg:w-[23%] h-[9%] flex justify-center items-center hover:bg-main-brand-color-hover py-2 bg-main-brand-color transition ease-in-out duration-150 text-white rounded-3xl font-semibold text-base"
            type="submit">
            Register
        </button>
    </form>
</div>