<!DOCTYPE html>
<html lang="en">

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/header.php"; ?>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/navbar.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/sidebar.php";
    ?>

    <style>
        /* Ensure table container is scrollable on small screens */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            border-radius: 8px;
        }

        .content-header {
            padding: 0;
        }

        /* Table styles */
        .table {
            width: 100%;
            min-width: 900px;
            /* Ensures proper layout on small screens */
            border-collapse: collapse;
            background-color: white;
        }

        /* Table header styles */
        .table thead {
            background-color: #f7e2c7;
            /* Deeper brown for minimalist look */
        }

        .table th {
            padding: 8px;
            text-align: left;
            color: rgb(49, 44, 40);
            /* Off-white text */
            text-transform: uppercase;
            border: none !important;
            /* Stone-300 for subtle border */
        }

        /* Table body styles */
        .table td {
            padding: 12px;
            border-bottom: 1px solid #e7e5e4;
            /* Stone-200 for subtle border */
            white-space: nowrap;
            /* Prevents text wrapping */
        }

        /* Action column icons */
        .table td a {
            margin-right: 10px;
            color: #78350f;
            /* Match header brown */
            text-decoration: none;
            font-size: 16px;
        }

        .table td a .fa-pen-to-square,
        .table td a .fa-edit,
        .table td a .fa-edit-fa-lg,
        .table td a .fa-pencil-alt {
            color: #16a34a;
            /* Green-600 */
        }

        /* Delete icon color */
        .table td a .fa-trash {
            color: rgb(235, 62, 62);
            /* A darker shade for deletion */
        }

        /* Button styles */
        .table td button {
            padding: 6px 12px;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .table td button:hover {
            background-color: #a8a29e;
            /* Stone-400 hover */
        }

        /* Mobile responsiveness */
        @media screen and (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }

            .table {
                min-width: 600px;
            }

            .table th {
                font-size: smaller;
            }
        }

        /* Card styling with minimalist approach */
        .card {
            border: none;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .card-header {
            background-color: white;
            border-bottom: 1px solid #e7e5e4;
            /* Stone-200 */
            padding: 1rem;
        }

        .card-title {
            color: #44403c;
            /* Stone-700 - darker text for minimalist look */
        }

        .btn-primary1 {
            background-color:#09c739 !important;
            /* Deep brown */
            border: none;
            color: white;
            transition: all 0.2s ease;
            padding: 0.5rem 1rem;
            border-radius: 4px;
        }

        .btn-primary1:hover {
            background-color: #92400e;
            color: white;
            /* Slightly lighter on hover */
        }

        .content-wrapper {
            background-color: #f5f5f4;
            /* Stone-100 - very subtle background */
        }
    </style>

    <!-- <div class="wrapper"> -->
    <div class="content-wrapper h-auto">
        <div class="content-header">
            <div class="container-fluid">

                <div class="modal fade" id="commonModal" tabindex="-1" role="dialog" aria-labelledby="commonModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            test
                        </div>
                    </div>
                </div>

                <main class="max-w-full mx-auto px-3 py-3 sm:px-6 lg:px-8">

                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="card" style="border-radius: 6px !important;">
                            <div class="card-header flex justify-between items-center"
                                style="background-color: #294ab8">
                                <h3 class="card-title text-lg !font-bold !text-[#fff]"><?= $pageTitle ?> Detail</h3>
                            </div>
                            <div class="card-body">
                                <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-3 justify-center items-center">
                                    <div class="">
                                        <label for="company" class="block text-base font-medium text-gray-700">Company
                                            Name<strong class="ms-1 text-red-600">*</strong></label>
                                        <input type="text" name="company" value="<?= $company["company"] ?>"
                                            placeholder="Enter company name" id="company"
                                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-1 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                    <div class="">
                                        <label for="logo" class="block text-base font-medium text-gray-700">Logo<strong
                                                class="ms-1 text-red-600">*</strong></label>
                                        <input type="file" name="logo" value="" placeholder="Select logo" id="logo"
                                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-1 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="flex justify-end ">
                                        <button type="submit" class="btn btn-primary1">
                                            Save
                                        </button>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </form>
                </main>
            </div>
        </div>
    </div>

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/footer.php";
    ?>

</body>

</html>