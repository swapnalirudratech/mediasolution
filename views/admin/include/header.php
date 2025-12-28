<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $siteName ?> || <?= $pageTitle ?></title>

    <link rel="icon" href="/public/assets/images/logo_img.png" type="image/x-icon">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- JQVMap -->
    <link rel="stylesheet" href="/public/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/public/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/public/plugins/daterangepicker/daterangepicker.css">

    <!-- <link rel="icon" href="/public/assets/images/logo.png" type="image/x-icon"> -->

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- quill -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.snow.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.tailwindcss.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.2/css/buttons.dataTables.min.css">

    <!-- summernote -->
    <link rel="stylesheet" href="/public/plugins/summernote/summernote-bs4.min.css">
    <script src="https://kit.fontawesome.com/1e51001868.js" crossorigin="anonymous"></script>
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js"
        integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <style>
        .card {
            border-radius: 1rem !important;
            box-shadow: 0 0.2rem 0.2rem rgba(0, 0, 0, 0.15) !important;
        }

        .main-sidebar {
            height: inherit;
            min-height: 100%;
            position: fixed !important;
            top: 0;
        }

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
            background-color: #ffffff;
            /* Deep brown */
            border: none;
            color: black;
            transition: all 0.2s ease;
            padding: 0.5rem 1rem;
            border-radius: 4px;
        }


        .btn-primary2 {
            background-color: #1e40af;
            /* Deep brown */
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
        }

        .content-wrapper {
            background-color: #f5f5f4;
            /* Stone-100 - very subtle background */
        }
    </style>
</head>