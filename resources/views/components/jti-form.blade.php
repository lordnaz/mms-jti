<?php 

    $test = "Hello World!";

    $date = date('d/m/Y h:i:s a', time());

?>

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
                    <form action="#" method="POST">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Company Name</label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">PIC Name</label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Date Issued</label>
                                        <input value="{{$date}}" readonly type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Contact No.</label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Est. Volume</label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium text-gray-700">Mode</label>
                                        <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>Land</option>
                                            <option>Sea</option>
                                            <option>Air</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Time</label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Period</label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
                                                <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments" class="font-medium text-gray-700">Packing</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="candidates" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="candidates" class="font-medium text-gray-700">Unpacking</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Removals</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Trucking</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Shipment</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Import</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Console</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Inter Move</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Local</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">International</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Household</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Vehicle</label>
                                            </div>
                                        </div>

                                        <div class="col-span-8 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Office Goods</label>
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>

                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">
                                        Destination
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="address" name="address" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Job destination
                                    </p>
                                </div>

                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">
                                        Job Detail Instruction
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="address" name="address" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Detail instruction of the job if applicable
                                    </p>
                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Manpower Required</label>
                                        <input readonly type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Trucks</label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Boxes - M [17 x 17 x 17"]
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Boxes - M [18 x 18 x 18"]
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Boxes - L [ 19 x 19 x 30"]
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Boxes - [21 x 20 x 20"]
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Empty Boxes (USED)
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Corrugated Paper Roll
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Wardrobe / Hanging Ctn
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Air-Bubblepack
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            PE Foam
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            White Tape (Eco)
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            OPP Tape -"KLCCUH"
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            OPP Tape (Brown)
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Masking Tape
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Fragile Tape
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Stretch Film
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Newsprint Paper
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Steel Strapping Rope
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="block w-72 inline-flex items-center px-12 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            Sticker Color
                                            </span>
                                            <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
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
                                                <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments" class="font-medium text-gray-700">Two Wheel Trolley</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="candidates" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="candidates" class="font-medium text-gray-700">Four Wheel Trolley</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Tools Set / Hand Drill Set</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Weight Scale</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Tape Measure</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Pallet Jack</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Wooden / Plastic pallet</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Ramp [ Wooden / Steel ]</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Plywood Sheets</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Canvas</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Cutter Seal</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Wood (kocai / 2-3)</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Crane - 5 / 10 / 20 / 40 tonage</label>
                                            </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-2 flex">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Forklift</label>
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>

                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">
                                        Special Instruction
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="address" name="address" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-red-500">
                                        State any special instruction if applicable
                                    </p>
                                </div>

                                

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                    <label for="assignto" class="block text-sm font-medium text-gray-700">Assign to (Project Manager)</label>
                                        <select id="assignto" name="assignto" autocomplete="assignto" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>Nazrul</option>
                                            <option>Izhar</option>
                                            <option>Albert</option>
                                        </select>
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
            

            <!--Code end here -->
        </div>
    </div>
    
</x-guest-layout>


