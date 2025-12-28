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
                            <div class="card-header" style="background-color:#294ab8;">
                                <div class="flex justify-between">
                                    <h3 class="card-title pt-2 text-lg !font-bold !text-[#ffffff]"><?= $pageTitle ?>
                                    </h3>
                                    <span class="btn btn-primary1" onclick="window.location.href='/blog/blog-list'">
                                        <i class="fa fa-bars mr-2"></i>Blog List</span>
                                </div>
                            </div>
                            <div class="card-body">

                                <!-- Form -->
                                <div class="pt-6">
                                    <form class="space-y-6" action="" method="post" enctype="multipart/form-data">

                                        <div class="flex gap-10 w-full">
                                            <!-- Blog Name -->
                                            <div class="w-1/2">
                                                <label for="blog_title"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Blog
                                                    Title</label>
                                                <input type="text" name="blog_title"
                                                    value="<?= !empty($editData) ? $editData['blog_title'] : '' ?>"
                                                    id="blog_title" required
                                                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-[1px] focus:ring-indigo-500" />
                                            </div>

                                            <!-- Author Name -->
                                            <div class="w-1/2">
                                                <label for="author_name"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Author
                                                    Name</label>
                                                <input type="text" name="author_name" id="author_name"
                                                    value="<?= !empty($editData) ? $editData['author_name'] : '' ?>"
                                                    required
                                                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-[1px] focus:ring-indigo-500" />
                                            </div>
                                        </div>

                                        <div class="flex gap-10 w-full">
                                            <!-- Blog Image -->
                                            <div class="w-1/2">
                                                <label for="blog_image"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Blog
                                                    Image</label>
                                                <input type="file" name="blog_image" id="blog_image" accept="image/*"
                                                    class="w-full border border-gray-300 rounded-lg p-2 file:bg-indigo-100 file:border-none file:px-4 file:py-0 file:rounded file:text-indigo-700 file:cursor-pointer" />
                                            </div>

                                            <div class="w-1/2 max-md:w-full">
                                                <label for="category_id"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                                                <select name="category_id" id="category_id" required
                                                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-[1px] focus:ring-[#1F3D2B]">
                                                    <option value="">-- Select Category --</option>

                                                    <?php foreach ($categories as $cat): ?>
                                                        <option value="<?= $cat['id']; ?>" <?= !empty($editData) && $editData['category_id'] == $cat['id'] ? 'selected' : '' ?>>
                                                            <?= htmlspecialchars($cat['blog_category']); ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <!-- Blog Date -->
                                            <div class="w-1/2">
                                                <label for="blog_date"
                                                    class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                                                <input type="date" name="blog_date" id="blog_date"
                                                    value="<?= !empty($editData) ? $editData['blog_date'] : '' ?>"
                                                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                                            </div>
                                        </div>

                                        <div>
                                            <label for="blog_description"
                                                class="block text-sm font-medium text-gray-700 mb-1">Blog
                                                Content</label>
                                            <textarea name="blog_description" id="blog_description" rows="7" required
                                                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-[1px] focus:ring-indigo-500"
                                                placeholder="Write the blog content here..."><?= !empty($editData) ? $editData['blog_description'] : '' ?></textarea>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="text-right">
                                            <button type="submit"
                                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition">
                                                Publish
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
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('blog_description');
    </script>

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/footer.php";
    ?>
</body>

</html>