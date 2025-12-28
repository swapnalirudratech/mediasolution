<?php

if (isset($_POST['step'])) {

    if ($_POST['step'] == 1) { ?>
        <h2 class="text-lg font-semibold mb-6">Basic info:</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    First name <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">Middle name</label>
                <input type="text" value="" placeholder="Enter middle name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Last name <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter last name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" value="" placeholder="Enter email" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Phone <span class="text-red-500">*</span>
                </label>
                <input type="tel" value="" placeholder="Enter phone" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">Country</label>
                <select class="w-[70%] border border-gray-300 rounded p-2 text-gray-500">
                    <option selected>Select country</option>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>United Kingdom</option>
                </select>
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">City</label>
                <input type="text" value="" placeholder="Enter city" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>
            <!-- </div> -->

            <!-- Right Column -->
            <!-- <div class="space-y-4"> -->
            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">Zip</label>
                <input type="text" value="" placeholder="Enter zip" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">Alternate phone</label>
                <input type="tel" value="" placeholder="Enter alternate phone" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">National id no</label>
                <input type="text" value="" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">Iqama no</label>
                <input type="text" value="" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">Passport no</label>
                <input type="text" value="" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">Driving license no</label>
                <input type="text" value="" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-2">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Attendance time <span class="text-red-500">*</span>
                </label>
                <select class="w-[70%] border border-gray-300 rounded p-2">
                    <option selected>Normal Shift</option>
                    <option>Evening Shift</option>
                    <option>Night Shift</option>
                </select>
            </div>
        </div>


        <!-- Buttons -->
        <div class="flex justify-end mt-4">
            <button type="button" onclick="nextStep(2)" class="bg-green-600 text-white px-6 py-2 rounded">Next</button>
        </div>
    <?php
    } elseif ($_POST['step'] == 2) {
    ?>

        <h2 class="text-lg font-semibold mb-6">Personal information: </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Account number: <span class="text-red-500"></span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">Branch address: </label>
                <input type="text" value="" placeholder="Enter middle name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Bank name:
                    <span class="text-red-500"></span>
                </label>
                <input type="text" value="" placeholder="Enter last name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Bban num: <span class="text-red-500">*</span>
                </label>
                <input type="email" value="" placeholder="Enter email" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>

            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Tin no: <span class="text-red-500">*</span>
                </label>
                <input type="tel" value="" placeholder="Enter phone" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>
        </div>

        <hr class="my-4">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Basic salary: <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>
            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Gross salary: <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>
            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Transport allowance: <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>
        </div>

        <hr class="my-4">

        <h2 class="text-lg font-semibold mb-6 mt-6">Benefit:</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Medical benefit: <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>
            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Family benefit: <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>
            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Transportation benefit: <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>
            <div class="flex justify-between gap-4">
                <label class="text-sm font-medium mb-1 w-[30%]">
                    Other benefit: <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="w-[70%] border border-gray-300 rounded p-2" />
            </div>
        </div>

        <!-- Buttons -->
        <div class="flex justify-end mt-4">
            <button type="button" onclick="preStep(<?= $_POST['step'] - 1 ?>)" class="text-gray-600 px-6 py-2 rounded">Previous</button>
            <button type="button" onclick="nextStep(3)" class="bg-green-600 text-white px-6 py-2 rounded">Next</button>
        </div>

    <?php
    } elseif ($_POST['step'] == 3) { ?>

        <h2 class="text-lg font-semibold mb-6">Personal information:</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="grid">
                <label class="text-sm font-medium mb-1">
                    Account number <span class="text-red-500"></span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="border border-gray-300 rounded p-2" />
            </div>

            <div class="grid">
                <label class="text-sm font-medium mb-1">Branch address</label>
                <input type="text" value="" placeholder="Enter middle name" class="border border-gray-300 rounded p-2" />
            </div>

            <div class="grid">
                <label class="text-sm font-medium mb-1">
                    Bank name
                    <span class="text-red-500"></span>
                </label>
                <input type="text" value="" placeholder="Enter last name" class="border border-gray-300 rounded p-2" />
            </div>

            <div class="grid">
                <label class="text-sm font-medium mb-1">
                    Bban num <span class="text-red-500">*</span>
                </label>
                <input type="email" value="" placeholder="Enter email" class="border border-gray-300 rounded p-2" />
            </div>

            <div class="grid">
                <label class="text-sm font-medium mb-1">
                    Tin no <span class="text-red-500">*</span>
                </label>
                <input type="tel" value="" placeholder="Enter phone" class="border border-gray-300 rounded p-2" />
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="grid">
                <label class="text-sm font-medium mb-1">
                    Basic salary <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="border border-gray-300 rounded p-2" />
            </div>
            <div class="grid">
                <label class="text-sm font-medium mb-1">
                    Gross salary <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="border border-gray-300 rounded p-2" />
            </div>
            <div class="grid">
                <label class="text-sm font-medium mb-1">
                    Transport allowance <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="border border-gray-300 rounded p-2" />
            </div>
        </div>

        <h2 class="text-lg font-semibold mb-6">Personal information:</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="grid">
                <label class="text-sm font-medium mb-1">
                    Medical benefit <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="border border-gray-300 rounded p-2" />
            </div>
            <div class="grid">
                <label class="text-sm font-medium mb-1">
                    Family benefit <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="border border-gray-300 rounded p-2" />
            </div>
            <div class="grid">
                <label class="text-sm font-medium mb-1">
                    Transportation benefit <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="border border-gray-300 rounded p-2" />
            </div>
            <div class="grid">
                <label class="text-sm font-medium mb-1">
                    Other benefit <span class="text-red-500">*</span>
                </label>
                <input type="text" value="" placeholder="Enter first name" class="border border-gray-300 rounded p-2" />
            </div>
        </div>


        <!-- Buttons -->
        <div class="flex justify-end mt-4">
            <button type="button" onclick="nextStep(4)" class="bg-green-600 text-white px-6 py-2 rounded">Next</button>
        </div>
<?php
    }
}


?>