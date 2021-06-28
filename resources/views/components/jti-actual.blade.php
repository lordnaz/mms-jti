<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('JTI (Project Team)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Code Start Here-->

            <div>
                <div>
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">JTI Form</h3>
                            <p class="mt-1 text-sm text-gray-600">
                            This form data is estimation from the Sales Team. Project Manager will analyze and give the actual input to record the actual JTI Form  value, together with task tracking record.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">

                        <!-- card header  -->
                        <div class="bg-red-600">
                            <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                                <div class="flex items-center justify-between flex-wrap">
                                    <div class="w-0 flex-1 flex items-center">
                                        <span class="flex p-2 rounded-lg bg-red-800">
                                        <!-- Heroicon name: outline/speakerphone -->
                                        
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                                        </svg>
                                        </span>
                                        <p class="ml-3 font-medium text-white truncate">
                                        <span class="md:hidden text-base text-xl font-bold">
                                            {{$jti_no}}
                                        </span>
                                        <span class="hidden md:inline text-base text-xl font-bold">
                                            {{$jti_no}}
                                        </span>
                                        </p>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <!-- end of card header  -->

                        <form action="#" method="POST">
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="company_name" class="block text-sm font-medium text-gray-700">Company Name</label>
                                            <input readonly value="{{$JtiRecordDetails->company_name}}" type="text" name="company_name" id="company_name" autocomplete="given-name" class="mt-1 bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="pic_name" class="block text-sm font-medium text-gray-700">PIC Name / Officer</label>
                                            <input readonly value="{{$JtiRecordDetails->pic_name}}" type="text" name="pic_name" id="pic_name" autocomplete="given-name" class="mt-1 bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="date_issued" class="block text-sm font-medium text-gray-700">Date Issued</label>
                                            <input readonly value="{{$JtiRecordDetails->created_at}}" readonly type="text" name="date_issued" id="date_issued" autocomplete="given-name" class="mt-1 bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="contact" class="block text-sm font-medium text-gray-700">Contact No.</label>
                                            <input readonly type="text" value="{{$JtiRecordDetails->contact}}" name="contact" id="contact" autocomplete="given-name" class="mt-1 bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="address" class="block text-sm font-medium text-gray-700">
                                            Address
                                        </label>
                                        <div class="mt-1">
                                            <textarea readonly id="address" name="address" rows="3" class="shadow-sm bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$JtiRecordDetails->company_address}}</textarea>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="est_volume" class="block text-sm font-medium text-gray-700">Est. Volume</label>
                                            <input type="text" value="{{$JtiRecordDetails->volume}}" name="est_volume" id="est_volume" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="mode" class="block text-sm font-medium text-gray-700">Mode</label>
                                            <input type="text" value="{{$JtiRecordDetails->mode}}" name="mode" id="mode" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                                            <input readonly type="text" value="{{ Carbon\Carbon::parse($JtiRecordDetails->start_date)->format('d/m/Y g:i:s a') }}" name="start_date" id="start_date" autocomplete="start_date" class="mt-1 bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                                            <input readonly type="text" value="{{ Carbon\Carbon::parse($JtiRecordDetails->end_date)->format('d/m/Y g:i:s a') }}" name="end_date" id="end_date" autocomplete="end_date" class="mt-1 bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-6">
                                            <label for="period" class="block text-sm font-medium text-gray-700">Period</label>
                                            <input type="text" value="{{$JtiRecordDetails->period}}" name="period" id="period" autocomplete="period" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="about" class="block text-sm font-medium text-gray-700">
                                            About
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                            Brief description for your profile. URLs are hyperlinked.
                                        </p>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Photo
                                        </label>
                                        <div class="mt-1 flex items-center">
                                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            </span>
                                            <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Change
                                            </button>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Cover photo
                                        </label>
                                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">
                                                    PNG, JPG, GIF up to 10MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Code end Here -->
        </div>
    </div>
    
</x-app-layout>



