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
                background-color: #dff0fd;
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

        <!-- Content Wrapper -->
        <div class="content-wrapper h-auto">
            <div class="content-header">
                <div class="container-fluid">
                    <main class="max-w-full mx-auto p-4 max-md:p-2">
                        <div class="card" style="border-radius: 6px !important;">
                            <div class="card-header">
                                <div class="flex justify-between items-center">
                                    <h3 class="card-title !font-bold !text-[#1e40af]"><?= $pageTitle ?></h3>
                                    <button class="btn btn-primary1"
                                        onclick="window.location.href='/testimonial/add-testimonial'">
                                        <i class="fa fa-circle-plus mr-2"></i>Add Testimonial
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="pagesTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Student Name</th>
                                                <th class="nowrap">School Name</th>
                                                <th>Student Image</th>
                                                <th>Rating</th>
                                                <th>Review</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($testimonial as $key => $test) { ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td>
                                                        <img src="/<?= $test['student_img'] ?>" alt="test Image"
                                                            style="width: 60px; height: 60px; object-fit: cover;" />
                                                    </td>
                                                    <td><?= $test['student_name'] ?></td>
                                                    <td><?= $test['school_name'] ?></td>
                                                    <td><?= $test['rating'] ?></td>
                                                    <td
                                                        style="max-width: 300px; white-space: normal; word-wrap: break-word;">
                                                        <?= $test['review'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="action-buttons">
                                                            <!-- /hr/employee/edit/<?= $test['id'] ?> -->
                                                            <a href="/testimonial/edit-testimonial/<?= $test['id'] ?>"
                                                                class="action-button edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a onclick="return confirm('Are you sure ?')"
                                                                href="/testimonial/delete-testimonial/<?= $test['id'] ?>"
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

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/footer.php";
    ?>
    <script src="/public/customjs/employees.js"></script>
    <script>
        async function finger(id) {
            let res = await fetch(`/api/employee/fingerprint/${id}`)
            res = await res.text();
            openMe(res);
        }

        async function saveFingerprint(ele, updateid = null) {
            let form = ele.parentElement.parentElement;
            let data = {
                employee_machine_id: form.querySelector(".employee").value,
                biomax: form.querySelector(".biomax").value,
                action: "save"
            };

            if (updateid != null) {
                data.action = "update"
                data.updateid = updateid
            }

            let url = `/api/employee/fingerprint/${form.querySelector(".employeeid").value}`;
            let res = await fetch(url, {
                method: "POST", // Specify the method
                headers: {
                    "Content-Type": "application/json", // Set the content type to JSON
                },
                body: JSON.stringify(data), // Convert the data object to a JSON string
            });

            let resData = await res.json()
            // console.log(resData)
            if (resData.success) {
                toastr.success(resData.message);
                closeMe();
            } else {
                toastr.error(resData.message)
            }
        }

        async function profile(id) {
            let res = await fetch(`/api/employee/profile/${id}`)
            res = await res.text();
            openMe(res);
        }
    </script>


    <!-- JavaScript for Tab Navigation -->
    <script>
        function nextStep(ele, i) {
            let currentStep = document.getElementById('step' + i);

            document.querySelectorAll('.step').forEach(step => {
                step.classList.add('hidden');
            });

            document.querySelectorAll('.stepbtn').forEach(step => {
                step.classList.remove('text-[#78350f]', 'bg-white', 'border-b-2', 'border-[#78350f]');
                step.classList.add('text-gray-500');
            })

            currentStep.classList.remove('hidden');
            ele.classList.remove('text-gray-500');
            ele.classList.add('text-[#78350f]', 'bg-white', 'border-b-2', 'border-[#78350f]');
        }
    </script>
</body>

</html>