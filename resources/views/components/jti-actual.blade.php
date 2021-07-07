
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('JTI Actual (Project Team)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- svg image icon  -->
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>

            <!-- Code Start Here-->

            <div>
                <div>
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">JTI Form</h3>
                            <!-- <p class="mt-1 text-sm text-gray-600">
                            This form data is estimation from the Sales Team. Project Manager will analyze and give the actual input to record the actual JTI Form  value, together with task tracking record.
                            </p> -->
                            <br>

                            <div class="alert alert-info d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                                <div>
                                This form data is estimation from the Sales Team. Project Manager will analyze and give the actual input to record the actual JTI Form  value, together with task tracking record
                                </div>
                            </div>
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

                        <form action="/confirm_jti/{{$jti_no}}" method="post" enctype="multipart/form-data" accept-charset='UTF-8'>
                        {{@csrf_field()}}
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                                    <input type="hidden" name="jti_no" value={{$jti_no}}>

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
                                            <select id="mode" name="mode" autocomplete="mode" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="Land" <?php if($mode=="Land") echo 'selected="selected"'; ?>>Land</option>
                                                <option value="Sea" <?php if($mode=="Sea") echo 'selected="selected"'; ?> >Sea</option>
                                                <option value="Air" <?php if($mode=="Air") echo 'selected="selected"'; ?> >Air</option>
                                            </select>
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
                                        <!-- <legend class="text-base font-medium font-bold text-gray-900">Destination</legend> -->
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="from" class="block text-sm font-medium text-gray-700">Destination (From)</label>
                                                <input readonly type="text" value="{{$JtiRecordDetails->from_destination}}" name="from" id="from" autocomplete="given-name" class="mt-1 bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="to" class="block text-sm font-medium text-gray-700">Destination (To)</label>
                                                <input readonly type="text" value="{{$JtiRecordDetails->to_destination}}" name="to" id="to" autocomplete="given-name" class="mt-1 bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="job_instruction" class="block text-sm font-medium text-gray-700">
                                            Job Detail Instruction
                                        </label>
                                        <div class="mt-1">
                                            <textarea readonly id="job_instruction" name="job_instruction" rows="3" class="shadow-sm bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$JtiRecordDetails->job_details}}</textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                            Detail instruction of the job if applicable
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="manpower" class="block text-sm font-medium text-gray-700">Manpower Required</label>
                                            <input type="number" value="{{$JtiRecordDetails->manpower}}" name="manpower" id="manpower" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="trucks" class="block text-sm font-medium text-gray-700">Trucks</label>
                                            <input type="number" value="{{$JtiRecordDetails->trucks}}" name="trucks" id="trucks" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>

                                    <div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="sales_guy" class="block text-sm font-medium text-gray-700">Issued By</label>
                                            <input readonly value="{{$JtiRecordDetails->issued_by}}" type="text" name="sales_guy" id="sales_guy" autocomplete="given-name" class="mt-1 bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            <p class="mt-2 text-sm text-gray-500">
                                                Sales person name
                                            </p>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="special_instruct" class="block text-sm font-medium text-gray-700">
                                            Special Instruction
                                        </label>
                                        <div class="mt-1">
                                            <textarea readonly id="special_instruct" name="special_instruct" rows="3" class="shadow-sm bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$JtiRecordDetails->special_instruction}}</textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                            State any special instruction if applicable
                                        </p>
                                    </div>

                                    <x-jet-section-border />

                                    <legend class="text-base font-medium font-bold text-gray-900">Job Description</legend>
                                    <br>
                                    <!-- <div>
                                        <div class="mt-1">
                                            <textarea readonly id="joblist" name="joblist" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$JtiRecordDetails->job_list}}</textarea>
                                        </div>
                                    </div> -->

                                    <div class="grid grid-cols-8 gap-3">
                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="packing" name="packing" type="checkbox" value="Packing" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="packing" class="font-medium text-gray-700">Packing</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="unpacking" name="unpacking" type="checkbox" value="Unpacking" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="unpacking" class="font-medium text-gray-700">Unpacking</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="removals" name="removals" type="checkbox" value="Removals" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="removals" class="font-medium text-gray-700">Removals</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="trucking" name="trucking" type="checkbox" value="Trucking" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="trucking" class="font-medium text-gray-700">Trucking</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="shipment" name="shipment" type="checkbox" value="Shipment" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="shipment" class="font-medium text-gray-700">Shipment</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="import" name="import" type="checkbox" value="Import" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="import" class="font-medium text-gray-700">Import</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="console" name="console" type="checkbox" value="Console" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="console" class="font-medium text-gray-700">Console</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="intermove" name="intermove" value="Inter Move" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="intermove" class="font-medium text-gray-700">Inter Move</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="local" name="local" value="Local" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="local" class="font-medium text-gray-700">Local</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="international" name="international" value="International" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="international" class="font-medium text-gray-700">International</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="household" name="household" value="Household" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="household" class="font-medium text-gray-700">Household</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="vehicle" name="vehicle" value="Vehicle" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="vehicle" class="font-medium text-gray-700">Vehicle</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="office_good" name="office_good" value="Office Goods" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="office_good" class="font-medium text-gray-700">Office Goods</label>
                                            </div>
                                        </div>

                                    </div>

                                    <legend class="text-base font-medium font-bold text-gray-900">Material Required</legend>
                                    <br>
                                    <!-- <div>
                                        <div class="mt-1">
                                            <textarea readonly id="material" name="material" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$JtiRecordDetails->material_list}}</textarea>
                                        </div>
                                    </div> -->
                                    <div class="grid grid-cols-6 gap-2">
                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Boxes - S [19 x 14 x 14"]
                                                </span>
                                                <input type="number" name="m1" id="m1" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Boxes - M [17 x 17 x 17"]
                                                </span>
                                                <input type="number" name="m2" id="m2" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Boxes - M [18 x 18 x 18"]
                                                </span>
                                                <input type="number" name="m3" id="m3" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Boxes - L [ 19 x 19 x 30"]
                                                </span>
                                                <input type="number" name="m4" id="m4" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Boxes - [21 x 20 x 20"]
                                                </span>
                                                <input type="number" name="m5" id="m5" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Empty Boxes (USED)
                                                </span>
                                                <input type="number" name="m6" id="m6" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Corrugated Paper Roll
                                                </span>
                                                <input type="number" name="m7" id="m7" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Wardrobe / Hanging Ctn
                                                </span>
                                                <input type="number" name="m8" id="m8" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Air-Bubblepack
                                                </span>
                                                <input type="number" name="m9" id="m9" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                PE Foam
                                                </span>
                                                <input type="number" name="m10" id="m10" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                White Tape (Eco)
                                                </span>
                                                <input type="number" name="m11" id="m11" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                OPP Tape -"KLCCUH"
                                                </span>
                                                <input type="number" name="m12" id="m12" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                OPP Tape (Brown)
                                                </span>
                                                <input type="number" name="m13" id="m13" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Masking Tape
                                                </span>
                                                <input type="number" name="m14" id="m14" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Fragile Tape
                                                </span>
                                                <input type="number" name="m15" id="m15" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Stretch Film
                                                </span>
                                                <input type="number" name="m16" id="m16" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Newsprint Paper
                                                </span>
                                                <input type="number" name="m17" id="m17" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Steel Strapping Rope
                                                </span>
                                                <input type="number" name="m18" id="m18" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                Sticker Color
                                                </span>
                                                <input type="number" name="m19" id="m19" value="0" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>

                                    </div>

                                    <legend class="text-base font-medium font-bold text-gray-900">Equipment</legend>
                                    <br>
                                    <div>
                                        <div class="mt-1">
                                            <textarea readonly id="equipment" name="equipment" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$JtiRecordDetails->equipment_list}}</textarea>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-6 gap-3">
                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e1" name="e1" type="checkbox" value="Two Wheel Trolley" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e1" class="font-medium text-gray-700">Two Wheel Trolley</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e2" name="e2" type="checkbox" value="Four Wheel Trolley" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e2" class="font-medium text-gray-700">Four Wheel Trolley</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e3" name="e3" type="checkbox" value="Tools Set / Hand Drill Set" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e3" class="font-medium text-gray-700">Tools Set / Hand Drill Set</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e4" name="e4" type="checkbox" value="Weight Scale" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e4" class="font-medium text-gray-700">Weight Scale</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e5" name="e5" type="checkbox" value="Tape Measure" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e5" class="font-medium text-gray-700">Tape Measure</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e6" name="e6" type="checkbox" value="Pallet Jack" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e6" class="font-medium text-gray-700">Pallet Jack</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e7" name="e7" type="checkbox" value="Wooden / Plastic pallet" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e7" class="font-medium text-gray-700">Wooden / Plastic pallet</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e8" name="e8" type="checkbox" value="Ramp [ Wooden / Steel ]" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e8" class="font-medium text-gray-700">Ramp [ Wooden / Steel ]</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e9" name="e9" type="checkbox" value="Plywood Sheets" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e9" class="font-medium text-gray-700">Plywood Sheets</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e10" name="e10" type="checkbox" value="Canvas" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e10" class="font-medium text-gray-700">Canvas</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e11" name="e11" type="checkbox" value="Cutter Seal" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e11" class="font-medium text-gray-700">Cutter Seal</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e12" name="e12" type="checkbox" value="Wood (kocai / 2-3)" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e12" class="font-medium text-gray-700">Wood (kocai / 2-3)</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e13" name="e13" type="checkbox" value="Crane - 5 / 10 / 20 / 40 tonage" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e13" class="font-medium text-gray-700">Crane - 5 / 10 / 20 / 40 tonage</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="e14" name="e14" type="checkbox" value="Forklift" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="e14" class="font-medium text-gray-700">Forklift</label>
                                            </div>
                                        </div>

                                    </div>

                                    <x-jet-section-border />

                                    <div>
                                        <legend class="text-base font-medium font-bold text-gray-900">Job Task Tracker</legend>
                                        <!-- <p class="text-sm text-gray-500">These section is for the actual task updated by the Project Manager or Supervisor who are involved with the Operation/Project team.</p> -->
                                        <div class="alert alert-info d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                                            <div>
                                            Once this JTI form has been updated by the project team. A task tracker will be created base on this JTI form.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Update & Confirm
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

<script>

$( document ).ready(function() {

    var joblist = {!! json_encode($JtiRecordDetails->job_list) !!};

    joblist.includes("Packing") ? $("#packing").prop('checked', true) : $("#packing").prop('checked', false);
    joblist.includes("Unpacking") ? $("#unpacking").prop('checked', true) : $("#unpacking").prop('checked', false);
    joblist.includes("Removals") ? $("#removals").prop('checked', true) : $("#removals").prop('checked', false);
    joblist.includes("Trucking") ? $("#trucking").prop('checked', true) : $("#trucking").prop('checked', false);
    joblist.includes("Shipment") ? $("#shipment").prop('checked', true) : $("#shipment").prop('checked', false);
    joblist.includes("Import") ? $("#import").prop('checked', true) : $("#import").prop('checked', false);
    joblist.includes("Console") ? $("#console").prop('checked', true) : $("#console").prop('checked', false);
    joblist.includes("Inter Move") ? $("#intermove").prop('checked', true) : $("#intermove").prop('checked', false);
    joblist.includes("Local") ? $("#local").prop('checked', true) : $("#local").prop('checked', false);
    joblist.includes("International") ? $("#international").prop('checked', true) : $("#international").prop('checked', false);
    joblist.includes("Household") ? $("#household").prop('checked', true) : $("#household").prop('checked', false);
    joblist.includes("Vehicle") ? $("#vehicle").prop('checked', true) : $("#vehicle").prop('checked', false);
    joblist.includes("Office Goods") ? $("#office_good").prop('checked', true) : $("#office_good").prop('checked', false);

    var material_list = {!! json_encode($JtiRecordDetails->material_list) !!};

    var materialArr = material_list.split(',');

    materialArr.forEach(material => {

        var quantityStr = material.substr(0, material.indexOf('x')); 
        var quantityNumber = parseInt(quantityStr);

        if(material.includes("Boxes - S [19 x 14 x 14']")){
            $('#m1').val(quantityNumber);
        }

        if(material.includes("Boxes - M [17 x 17 x 17']")){
            $('#m2').val(quantityNumber);
        }

        if(material.includes("Boxes - M [18 x 18 x 18']")){
            $('#m3').val(quantityNumber);
        }

        if(material.includes("Boxes - L [ 19 x 19 x 30']")){
            $('#m4').val(quantityNumber);
        }

        if(material.includes("Boxes - [21 x 20 x 20']")){
            $('#m5').val(quantityNumber);
        }

        if(material.includes("Empty Boxes (USED)")){
            $('#m6').val(quantityNumber);
        }

        if(material.includes("Corrugated Paper Roll")){
            $('#m7').val(quantityNumber);
        }

        if(material.includes("Wardrobe / Hanging Ctn")){
            $('#m8').val(quantityNumber);
        }

        if(material.includes("Air-Bubblepack")){
            $('#m9').val(quantityNumber);
        }

        if(material.includes("PE Foam")){
            $('#m10').val(quantityNumber);
        }

        if(material.includes("White Tape (Eco)")){
            $('#m11').val(quantityNumber);
        }

        if(material.includes("OPP Tape -'KLCCUH'")){
            $('#m12').val(quantityNumber);
        }

        if(material.includes("OPP Tape (Brown)")){
            $('#m13').val(quantityNumber);
        }

        if(material.includes("Masking Tape")){
            $('#m14').val(quantityNumber);
        }

        if(material.includes("Fragile Tape")){
            $('#m15').val(quantityNumber);
        }

        if(material.includes("Stretch Film")){
            $('#m16').val(quantityNumber);
        }

        if(material.includes("Newsprint Paper")){
            $('#m17').val(quantityNumber);
        }

        if(material.includes("Steel Strapping Rope")){
            $('#m18').val(quantityNumber);
        }

        if(material.includes("Sticker Color")){
            $('#m19').val(quantityNumber);
        }

    });


    var equipmentlist = {!! json_encode($JtiRecordDetails->equipment_list) !!};

    equipmentlist.includes("Two Wheel Trolley") ? $("#e1").prop('checked', true) : $("#e1").prop('checked', false);
    equipmentlist.includes("Four Wheel Trolley") ? $("#e2").prop('checked', true) : $("#e2").prop('checked', false);
    equipmentlist.includes("Tools Set / Hand Drill Set") ? $("#e3").prop('checked', true) : $("#e3").prop('checked', false);
    equipmentlist.includes("Weight Scale") ? $("#e4").prop('checked', true) : $("#e4").prop('checked', false);
    equipmentlist.includes("Tape Measure") ? $("#e5").prop('checked', true) : $("#e5").prop('checked', false);
    equipmentlist.includes("Pallet Jack") ? $("#e6").prop('checked', true) : $("#e6").prop('checked', false);
    equipmentlist.includes("Wooden / Plastic pallet") ? $("#e7").prop('checked', true) : $("#e7").prop('checked', false);
    equipmentlist.includes("Ramp [ Wooden / Steel ]") ? $("#e8").prop('checked', true) : $("#e8").prop('checked', false);
    equipmentlist.includes("Plywood Sheets") ? $("#e9").prop('checked', true) : $("#e9").prop('checked', false);
    equipmentlist.includes("Canvas") ? $("#e10").prop('checked', true) : $("#e10").prop('checked', false);
    equipmentlist.includes("Cutter Seal") ? $("#e11").prop('checked', true) : $("#e11").prop('checked', false);
    equipmentlist.includes("Wood (kocai / 2-3)") ? $("#e12").prop('checked', true) : $("#e12").prop('checked', false);
    equipmentlist.includes("Crane - 5 / 10 / 20 / 40 tonage") ? $("#e13").prop('checked', true) : $("#e13").prop('checked', false);
    equipmentlist.includes("Forklift") ? $("#e14").prop('checked', true) : $("#e14").prop('checked', false);
    



});

</script>

