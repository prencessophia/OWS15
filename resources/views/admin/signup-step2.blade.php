@include('partials.__header')

<x-messages />

<div class="min-h-screen min-w-full flex flex-col md:flex-row">
    {{-- left card --}}
    <div class="bg-white rounded-lg md:w-1/2 sm:w-full min-h-full m-5 md:mr-0 shadow-lg ">
        <div class="usep_background m-3 p-3 md:p-8 rounded-lg flex flex-col relative" style=" height:96%;">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-white">Welcome OSAS System Super Admin</h1>
                <p class="mt-4 text-white">To get started, please provide the following information to create your admin
                    account.</p>
            </div>
            <div class="hidden md:block inset-0 flex items-center justify-center">
                <!-- Image at the very center -->
                <img src="/images/Ellips.png" alt="" class="mt-10 mx-auto w-40">
            </div>
            <div class="flex justify-center mt-auto">
                {{-- Email icon --}}
                <div class="w-10 h-10 rounded-full ouryellowbg flex items-center justify-center">
                    <i class='bx bxl-gmail' style='color:#ffffff; font-size: 30px;'></i>
                </div>
                {{-- Website icon --}}
                <div class="w-10 h-10 rounded-full ouryellowbg flex items-center justify-center ml-4">
                    <i class='bx bx-world' style="color:#ffffff; font-size: 30px;"></i>
                </div>
                {{-- Facebook icon --}}
                <div class="w-10 h-10 rounded-full ouryellowbg flex items-center justify-center ml-4">
                    <i class='bx bxl-facebook-square' style='color:#ffffff; font-size: 30px;'></i>
                </div>
            </div>
        </div>
    </div>

    {{-- right card --}}
    <div
        class="p-8 bg-white rounded-lg min-h-full m-5 mt-0 md:w-1/2 min-h-full flex flex-col sm:w-full md:mt-5  shadow-lg">
        <form action="{{ route('admin_signup2store') }}" method="POST" class=" flex flex-col m-0"
            enctype="multipart/form-data"> {{-- enctype=necessary for file uploads. --}}
            @csrf
            <div class="flex justify-between items-center
            font-bold">
                <h1 class="text-2xl  text-gray-800">Create Super Admin account</h1>
                <h3 class="text-gray-700">Step 2</h3>
            </div>
            <div class="flex mt-4 gap-4">
                <span class=" text-red-500 text-xs font-small py-0.5 rounded-full ">
                    * Required
                </span>
                <span class=" text-gray-500 text-xs font-small py-0.5 rounded-full ">
                    Put N/A to Not Applicable fields
                </span>
            </div>


            {{-- create account inputs --}}
            <div class="lg:grid grid-cols-2 gap-6 ">
                {{-- first column --}}
                <div class="col">
                    {{-- office --}}
                    <div class="mt-4">
                        <label for="admin_lname" class="block text-gray-600 font-bold text-sm">Office<span
                                class="text-red-500">*</span></label>
                        <input type="text" name="admin_lname" id="admin_lname" readonly required
                            class="mt-1 h-10 px-4 py-2 w-full rounded-full text-gray-600 border border-gray-300 focus:outline-none "
                            value="OSAS">
                        @include('partials.__input_error', ['fieldName' => 'admin_lname'])
                    </div>
                    {{-- admin types --}}
                    <div class="mt-4">
                        <label for="admin_lname" class="block text-gray-600 font-bold text-sm">Admin Type<span
                                class="text-red-500">*</span></label>
                        <input type="text" name="admin_lname" id="admin_lname" readonly required
                            class="mt-1 h-10 px-4 py-2 w-full rounded-full text-gray-600 border border-gray-300 focus:outline-none "
                            value="Super Admin">
                        @include('partials.__input_error', ['fieldName' => 'admin_lname'])
                    </div>

                </div>
                {{-- second column --}}
                <div class="col">
                    {{-- input photo --}}
                    <div class="mt-4">
                        <label for="admin_image" class="block text-gray-600 font-bold text-sm">
                            Image Profile
                        </label>
                        <input type="file" name="admin_image" id="admin_image"
                            class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4 mt-1
                                rounded-full border border-gray-300
                                file:text-sm file:font-semibold
                                  file:bg-yellow-400 file:border-none file:text-slate-700
                            value="{{ old('admin_image') }}" />
                        @include('partials.__input_error', ['fieldName' => 'admin_image'])
                    </div>
                    {{-- input emp id --}}
                    <div class="mt-4">
                        <label for="employee_id" class="block text-gray-600 font-bold text-sm">Employee ID <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="employee_id" id="employee_id" required
                            class="text-base h-10 mt-1 px-4 py-2 w-full rounded-full border border-gray-300 focus:outline-none focus:border-yellow-400"
                            value="{{ old('employee_id') }}">
                        @include('partials.__input_error', ['fieldName' => 'employee_id'])
                    </div>

                </div>
            </div>

            {{-- submit button --}}
            <div class="mt-6">
                <input type="submit"
                    class="block w-full h-10 hover:bg-red-900 text-white font-medium py-2 rounded-full text-center transition duration-300 ourmaroonbg"
                    value="Finish Signup">
            </div>
        </form>

        {{-- terms and conditions and privacy policy --}}
        <div class="lg:mt-8 mt-4 text-gray-700 text-base">
            <p>By signing up, you agree to our <a href="{{ route('terms_conditions') }}" target="_blank"
                    class="ouryellow font-bold">Terms of Service</a> and <a href="{{ route('data_privacy') }}"
                    target="_blank" class="ouryellow font-bold">Privacy Policy</a>.</p>
        </div>
    </div>
</div>

@include('partials.__footer')
