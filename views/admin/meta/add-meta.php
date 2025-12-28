<?php

// if(isset($editData)){

// }

?>
<!DOCTYPE html>
<html lang="en">



<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php
        include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/header.php";
        include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/navbar.php";
        include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/sidebar.php";
        ?>

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
                                    <span class="btn btn-primary1" onclick="window.location.href='/meta/meta-list'">
                                        <i class="fa fa-bars mr-2"></i> Meta List</span>
                                </div>
                            </div>
                            <div class="card-body">

                                <!-- Form -->
                                <div class="pt-6">
                                    <form class="space-y-6" action="" method="post">
                                        <div class="flex gap-10 w-full">
                                            <!-- Page Selection Dropdown -->
                                            <div class="w-1/2">
                                                <label for="meta_page"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Select
                                                    Page</label>
                                                <select name="meta_page" id="meta_page" required
                                                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-[1px] focus:ring-indigo-500">
                                                    <option value="" selected disabled>Select Page</option>
                                                    <option value="home" <?= (!empty($editData) && $editData['meta_page'] == 'home') ? 'selected' : '' ?>>Home
                                                    </option>
                                                    <option value="about" <?= (!empty($editData) && $editData['meta_page'] == 'about') ? 'selected' : '' ?>>About
                                                    </option>
                                                    <option value="contact" <?= (!empty($editData) && $editData['meta_page'] == 'contact') ? 'selected' : '' ?>>Contact
                                                    </option>
                                                    <option value="blog" <?= (!empty($editData) && $editData['meta_page'] == 'blog') ? 'selected' : '' ?>>Blog
                                                    </option>
                                                    <option value="Details" <?= (!empty($editData) && $editData['meta_page'] == 'Details') ? 'selected' : '' ?>>Blog
                                                        Details
                                                    </option>
                                                    <option value="collab" <?= (!empty($editData) && $editData['meta_page'] == 'collab') ? 'selected' : '' ?>>
                                                        Collab</option>
                                                    <option value="competitive" <?= (!empty($editData) && $editData['meta_page'] == 'competitive') ? 'selected' : '' ?>>
                                                        Competitive Exams</option>
                                                    <option value="pcm" <?= (!empty($editData) && $editData['meta_page'] == 'pcm') ? 'selected' : '' ?>>
                                                        Maths, Physics, Chemistry</option>
                                                    <option value="additional" <?= (!empty($editData) && $editData['meta_page'] == 'additional') ? 'selected' : '' ?>>
                                                        Additional Preparations</option>
                                                    <option value="faq" <?= (!empty($editData) && $editData['meta_page'] == 'faq') ? 'selected' : '' ?>>
                                                        FAQ</option>
                                                    <option value="privacy_policy" <?= (!empty($editData) && $editData['meta_page'] == 'privacy_policy') ? 'selected' : '' ?>>
                                                        Privacy Policy</option>
                                                    <option value="terms_conditions" <?= (!empty($editData) && $editData['meta_page'] == 'terms_conditions') ? 'selected' : '' ?>>
                                                        Terms and Conditions</option>
                                                </select>
                                            </div>

                                            <!-- Meta Keywords -->
                                            <div class="w-1/2">
                                                <label for="author"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Author</label>
                                                <input type="text" name="author"
                                                    value="<?= !empty($editData) ? $editData['author'] : '' ?>"
                                                    id="author" required placeholder="IsEqualTo Klasses"
                                                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-[1px] focus:ring-indigo-500" />
                                            </div>
                                        </div>

                                        <div class="flex gap-10 w-full">
                                            <!-- Meta Title -->
                                            <div class="w-1/2">
                                                <label for="meta_title"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Meta
                                                    Title</label>
                                                <input type="text" name="meta_title"
                                                    value="<?= !empty($editData) ? $editData['meta_title'] : '' ?>"
                                                    id="meta_title" required placeholder="Enter meta title"
                                                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-[1px] focus:ring-indigo-500" />
                                            </div>

                                            <!-- Meta Keywords -->
                                            <div class="w-1/2">
                                                <label for="meta_keywords"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Meta
                                                    Keywords</label>
                                                <input type="text" name="meta_keywords"
                                                    value="<?= !empty($editData) ? $editData['meta_keywords'] : '' ?>"
                                                    id="meta_keywords" required placeholder="Enter meta Keywords"
                                                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-[1px] focus:ring-indigo-500" />
                                            </div>
                                        </div>

                                        <!-- Meta Description -->
                                        <div>
                                            <label for="meta_description"
                                                class="block text-sm font-medium text-gray-700 mb-1">Meta
                                                Description</label>
                                            <textarea name="meta_description" id="meta_description" rows="4" required
                                                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-[1px] focus:ring-indigo-500"
                                                placeholder="Enter a short description for SEO..."><?= !empty($editData) ? $editData['meta_description'] : '' ?></textarea>
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
</body>

</html>