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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper h-auto">
            <div class="content-header">
                <div class="container-fluid">

                    <main class="max-w-full mx-auto px-2 py-2 sm:px-6 lg:px-8">

                        <div class="card" style="border-radius: 6px !important;">
                            <div class="card-header" style="background-color: #1e40af;">
                                <div class="flex justify-between">
                                    <h3 class="card-title pt-2 text-lg !font-bold !text-[#fff]"><?= $pageTitle ?>
                                    </h3>
                                    <span class="btn btn-primary1"
                                        onclick="window.location.href='/testimonial/testimonial-list'"><i
                                            class="fa fa-bars"></i>&nbsp;&nbsp;Testimonial List</span>
                                </div>
                            </div>
                            <div class="card-body">

                                <!-- Form -->
                                <div class="pt-6">
                                    <form class="space-y-6" action="" method="post" enctype="multipart/form-data">

                                        <div class="flex gap-10 w-full">
                                            <!-- Student Name -->
                                            <div class="w-1/2">
                                                <label for="student_name"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Student
                                                    Name</label>
                                                <input type="text" name="student_name" id="student_name"
                                                    value="<?= !empty($editData) ? $editData['student_name'] : '' ?>"
                                                    required
                                                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-[1px] focus:ring-indigo-500" />
                                            </div>

                                            <!-- School Name -->
                                            <div class="w-1/2">
                                                <label for="school_name"
                                                    class="block text-sm font-medium text-gray-700 mb-1">School
                                                    Name</label>
                                                <input type="text" name="school_name" id="school_name"
                                                    value="<?= !empty($editData) ? $editData['school_name'] : '' ?>"
                                                    required
                                                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-[1px] focus:ring-indigo-500" />
                                            </div>
                                        </div>

                                        <div class="flex gap-10 w-full">
                                            <!-- Student Image -->
                                            <div class="w-1/2">
                                                <label for="student_image"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Student
                                                    Image</label>
                                                <input type="file" name="student_image" id="student_image"
                                                    accept="image/*"
                                                    class="w-full border border-gray-300 rounded-lg p-2 file:bg-indigo-100 file:border-none file:px-4 file:py-0 file:rounded file:text-indigo-700 file:cursor-pointer" />
                                            </div>

                                            <!-- Rating Dropdown -->
                                            <div class="w-1/2">
                                                <label for="rating"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Rating</label>
                                                <select name="rating" id="rating"
                                                    value="<?= !empty($editData) ? $editData['rating'] : '' ?>" required
                                                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                    <option value="">Select Rating</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                    <option value="2">2</option>
                                                    <option value="2.5">2.5</option>
                                                    <option value="3">3</option>
                                                    <option value="3.5">3.5</option>
                                                    <option value="4">4</option>
                                                    <option value="4.5">4.5</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>


                                        <!-- Review -->
                                        <div>
                                            <label for="review"
                                                class="block text-sm font-medium text-gray-700 mb-1">Review</label>
                                            <input type="long" name="review" id="review" rows="5"
                                                value="<?= !empty($editData) ? $editData['review'] : '' ?>" required
                                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-[1px] focus:ring-indigo-500"
                                                placeholder="Write the student's feedback here..."></input>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="text-right">
                                            <button type="submit"
                                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition">
                                                Save
                                            </button>
                                        </div>
                                    </form>
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

    <script>



    </script>
</body>

</html>