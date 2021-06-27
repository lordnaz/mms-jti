
<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Job Task Instruction Form') }}
        </h2>
    </x-slot>

    <div class="py-12 antialiased bg-red-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!--Code start here -->
            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium font-bold leading-6 text-gray-900">JTI Form</h3>
                        <p class="mt-1 text-sm text-gray-600">
                        Complete the form &amp; submit it to the project team.
                        </p>
                    </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="submit_jti" method="post" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="company_name" class="block text-sm font-medium text-gray-700">Company Name</label>
                                        <input type="text" name="company_name" id="company_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="pic_name" class="block text-sm font-medium text-gray-700">PIC Name</label>
                                        <input type="text" name="pic_name" id="pic_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="date_issued" class="block text-sm font-medium text-gray-700">Date Issued</label>
                                        <input value="{{$current_dt}}" readonly type="text" name="date_issued" id="date_issued" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="contact" class="block text-sm font-medium text-gray-700">Contact No.</label>
                                        <input type="text" name="contact" id="contact" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <!-- <x-jet-section-border /> -->
                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">
                                        Address
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="address" name="address" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Full address of the company
                                    </p>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="est_volume" class="block text-sm font-medium text-gray-700">Est. Volume</label>
                                        <input type="text" name="est_volume" id="est_volume" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="mode" class="block text-sm font-medium text-gray-700">Mode</label>
                                        <select id="mode" name="mode" autocomplete="mode" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>Land</option>
                                            <option>Sea</option>
                                            <option>Air</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                                        <input type="datetime-local" name="start_date" id="start_date" autocomplete="start_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                                        <input type="datetime-local" name="end_date" id="end_date" autocomplete="end_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="period" class="block text-sm font-medium text-gray-700">Period</label>
                                        <input type="text" name="period" id="period" autocomplete="period" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <x-jet-section-border />
                                
                                <fieldset>
                                    <legend class="text-base font-medium font-bold text-gray-900">Job Description</legend>
                                    <small class="text-muted">( You can choose more than one option. )</small>
                                    <br><br>

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
                                </fieldset>

                                <x-jet-section-border />
                                <div>
                                    <legend class="text-base font-medium font-bold text-gray-900">Destination</legend>
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="from" class="block text-sm font-medium text-gray-700">From</label>
                                            <input type="text" name="from" id="from" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="to" class="block text-sm font-medium text-gray-700">To</label>
                                            <input type="text" name="to" id="to" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label for="job_instruction" class="block text-sm font-medium text-gray-700">
                                        Job Detail Instruction
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="job_instruction" name="job_instruction" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Detail instruction of the job if applicable
                                    </p>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="manpower" class="block text-sm font-medium text-gray-700">Manpower Required</label>
                                        <input type="number" name="manpower" id="manpower" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="trucks" class="block text-sm font-medium text-gray-700">Trucks</label>
                                        <input type="number" name="trucks" id="trucks" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <x-jet-section-border />

                                <legend class="text-base font-medium font-bold text-gray-900">Material Required</legend>
                                <small class="text-muted">( Provide quantity input on the right side field on each item where applicable. )</small>
                                <br>
                                <div class="grid grid-cols-6 gap-2">
                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Boxes - S [19 x 14 x 14"]
                                            </span>
                                            <input type="number" name="m1" id="m1" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Boxes - M [17 x 17 x 17"]
                                            </span>
                                            <input type="number" name="m2" id="m2" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Boxes - M [18 x 18 x 18"]
                                            </span>
                                            <input type="number" name="m3" id="m3" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Boxes - L [ 19 x 19 x 30"]
                                            </span>
                                            <input type="number" name="m4" id="m4" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Boxes - [21 x 20 x 20"]
                                            </span>
                                            <input type="number" name="m5" id="m5" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Empty Boxes (USED)
                                            </span>
                                            <input type="number" name="m6" id="m6" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Corrugated Paper Roll
                                            </span>
                                            <input type="number" name="m7" id="m7" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Wardrobe / Hanging Ctn
                                            </span>
                                            <input type="number" name="m8" id="m8" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Air-Bubblepack
                                            </span>
                                            <input type="number" name="m9" id="m9" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            PE Foam
                                            </span>
                                            <input type="number" name="m10" id="m10" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            White Tape (Eco)
                                            </span>
                                            <input type="number" name="m11" id="m11" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            OPP Tape -"KLCCUH"
                                            </span>
                                            <input type="number" name="m12" id="m12" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            OPP Tape (Brown)
                                            </span>
                                            <input type="number" name="m13" id="m13" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Masking Tape
                                            </span>
                                            <input type="number" name="m14" id="m14" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Fragile Tape
                                            </span>
                                            <input type="number" name="m15" id="m15" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Stretch Film
                                            </span>
                                            <input type="number" name="m16" id="m16" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Newsprint Paper
                                            </span>
                                            <input type="number" name="m17" id="m17" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Steel Strapping Rope
                                            </span>
                                            <input type="number" name="m18" id="m18" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Sticker Color
                                            </span>
                                            <input type="number" name="m19" id="m19" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                </div>

                                <x-jet-section-border />
                                
                                <fieldset>
                                    <legend class="text-base font-medium font-bold text-gray-900">Equipment</legend>
                                    <small class="text-muted">( You can choose more than one option. )</small>
                                    <br><br>

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
                                </fieldset>

                                <x-jet-section-border />

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="assignto" class="block text-sm font-medium text-gray-700">Assign to (Project Manager)</label>
                                        <select id="assignto" name="assignto" autocomplete="assignto" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="" selected="true" disabled="">Select Project Manager</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}" @if($user->id == $user->name) selected @endif>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="sales_guy" class="block text-sm font-medium text-gray-700">Issued By</label>
                                        <input type="text" name="sales_guy" id="sales_guy" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        <p class="mt-2 text-sm text-red-500">
                                            Sales person name
                                        </p>
                                    </div>
                                </div>

                                <div>
                                    <label for="special_instruct" class="block text-sm font-medium text-gray-700">
                                        Special Instruction
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="special_instruct" name="special_instruct" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-red-500">
                                        State any special instruction if applicable
                                    </p>
                                </div>

                            </div>

                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">

                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Submit
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            

            <!--Code end here -->
        </div>
    </div>
    
</x-guest-layout>


