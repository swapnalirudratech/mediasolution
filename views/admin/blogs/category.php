<?php

// if(isset($editData)){

// }

?>
<!DOCTYPE html>
<html lang="en">

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/header.php"; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php

    include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/navbar.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/sidebar.php";
    ?>

    <div class="wrapper">

           <style>
            /* Base styles */
            .content-wrapper {
                background-color: #f5f5f4;
            }

            .content-header {
                padding: 0;
            }

            /* Card styling */
            .card {
                border: none;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
                background-color: white;
                margin-bottom: 20px;
            }

            .card-header {
                background-color: white;
                border-bottom: 1px solid #e7e5e4;
                padding: 16px 20px;
            }

            .card-title {
                color: #44403c;
                font-size: 18px;
                font-weight: 600;
            }

            .card-body {
                padding: 20px;
            }

            /* Button styles */
            .btn-primary1 {
                background-color: #1e40af;
                border: none;
                color: white;
                padding: 8px 16px;
                border-radius: 4px;
                font-size: 14px;
            }

            .btn-primary1:hover {
                background-color: #1e40af;
                color: white;
            }


            /* Table container */
            .table-responsive {
                width: 100%;
                overflow-x: auto;
                border-radius: 8px;
                margin-top: 10px;
            }

            /* Table styles */
            .table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0;
                background-color: white;
            }

            /* Table header */
            .table thead {
                background-color: rgb(223, 240, 253);
            }

            .table th {
                padding: 12px 16px;
                text-align: left;
                color: #433f3b;
                font-weight: 600;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                border: none !important;
            }

            /* Table body */
            .table td {
                padding: 14px 16px;
                border-bottom: 1px solid #e7e5e4;
                font-size: 16px;
                color: rgb(45, 45, 45);
            }

            .table tbody tr:hover {
                background-color: #f5f5f4;
            }

            /* Status indicator */
            .status-pill {
                padding: 4px 12px;
                border-radius: 20px;
                display: inline-block;
                text-align: center;
                font-size: 13px;
                font-weight: 500;
            }

            .status-active {
                background-color: #dcfce7;
                color: #166534;
            }

            .status-inactive {
                background-color: #f3f4f6;
                color: #6b7280;
            }

            /* Action buttons */
            .action-buttons {
                display: flex;
                gap: 16px;
            }

            .action-button {
                color: #78350f;
                text-decoration: none;
                font-size: 16px;
            }

            .action-button.view {
                color: #2563eb;
            }

            .action-button.edit {
                color: #16a34a;
            }

            .action-button.delete {
                color: #dc2626;
            }

            /* Mobile responsiveness */
            @media screen and (max-width: 992px) {

                .table th,
                .table td {
                    padding: 10px 12px;
                    font-size: 13px;
                }

                .action-buttons {
                    gap: 12px;
                }
            }
        </style>

        <div class="content-wrapper h-auto">
            <div class="content-header">
                <div class="container-fluid">
                    <main class="max-w-full mx-auto md:p-4 lg:p-6 max-md:p-2">

                        <div class="card" style="border-radius: 6px !important;">
                            <div class="card-header" style="background-color:#294ab8;">
                                <div class="flex justify-between">
                                    <h3 class="card-title pt-2 text-lg !font-bold !text-[#ffffff]"><?= $pageTitle ?>
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body">

                                <!-- Form -->
                                <div class="pt-6">
                                    <form class="space-y-6" action="" method="post" enctype="multipart/form-data">

                                        <div class="flex max-md:flex-col gap-10 max-md:gap-4 w-full">
                                            <!-- Blog Name -->
                                            <div class="w-[50%]">
                                                <label for="blog_category"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Add Blog
                                                    Category</label>
                                                <input type="text" name="blog_category"
                                                    value="<?= !empty($editData) ? $editData['blog_category'] : '' ?>"
                                                    id="blog_category" required
                                                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-[1px] focus:ring-indigo-500" />
                                            </div>
                                            <!-- Submit Button -->
                                            <div class="text-right flex items-end justify-end">
                                                <button type="submit"
                                                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition">
                                                    Add
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="pagesTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Blog Category</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($blogs as $key => $blog) { ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td
                                                        style="max-width: 300px; white-space: normal; word-wrap: break-word;">
                                                        <?= $blog['blog_category'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="action-buttons">
                                                            <a href="/blog/edit-blog-category/<?= $blog['id'] ?>"
                                                                class="action-button edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a onclick="return confirm('Are you sure ?')"
                                                                href="/blog/delete-blog-category/<?= $blog['id'] ?>"
                                                                class="action-button delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('blog_description');
    </script>

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/footer.php";
    ?>
</body>

</html>