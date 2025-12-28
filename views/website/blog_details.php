<?php
$page = "blog";
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="overflow-x-hidden">
    <section class="relative h-screen max-md:h-[70vh] flex items-center justify-start bg-cover bg-center" style="background-image: url('/public/assets/images/blog.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <div class="relative z-10 max-w-3xl px-6 lg:px-20">
            <h1 class="lg:text-5xl md:text-4xl text-2xl font-bold text-white leading-tight mb-3">
                Animocare Private Limited <span class="text-brand">Blog</span>
            </h1>
            <p class="mt-6 text-base text-gray-200 max-md:hidden">
                Discover the latest news, tips, and stories from Animocare Private Limited. Learn about global import-export trends, industry insights, and best practices for international trade.
            </p>
        </div>
    </section>


    <!-- Main Content -->
    <section class="w-[85vw] max-md:w-[90vw] items-center justify-center mx-auto py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-md:gap-6">
            <!-- Main Blog Posts (2/3 width) -->
            <div class="lg:col-span-2">
                <!-- Blog Card -->
                <div class="bg-white overflow-hidden mb-8">
                    <h3 class="text-3xl max-md:text-xl font-bold text-gray-800 mb-4 capitalize"><?= $blogbyid['blog_title'] ?></h3>

                    <div class="flex justify-between items-center w-full mb-8">
                        <div class="flex items-center justify-center text-sm text-gray-500 space-x-8">
                            <div class="flex items-center gap-1">
                                <i class="fas fa-user mr-1 text-gray-500"></i>
                                <span>By</span> <span
                                    class="font-semibold text-gray-800 capitalize"><?= $blogbyid['author_name'] ?></span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i class="fas fa-calendar-alt text-gray-400"></i>
                                <span><?= $blogbyid['blog_date'] ?></span>
                            </div>
                        </div>
                        <!-- <div class="flex items-center justify-center">
                            <button
                                onclick="shareBlog('<?= $blog['blog_title'] ?>', window.location.origin + '/blog-details')"
                                class="flex items-center text-blue-600 h-12 w-12 rounded-full bg-blue-100 items-center justify-center hover:text-blue-700 text-base font-medium">
                                <i class="fas fa-share-alt text-xl mr-1"></i>
                            </button>
                        </div> -->
                    </div>

                    <!-- Blog Image -->
                    <div>
                        <img src="/<?= $blogbyid['blog_img'] ?>" alt="Blog Image"
                            class="w-full h-[60vh] max-md:h-[40vh] rounded-lg object-cover">
                    </div>

                    <!-- Blog Content -->
                    <div class="mt-12 max-md:mt-6">
                        <!-- Blog Description -->
                        <p class="text-gray-600 leading-relaxed">
                            <?= $blogbyid['blog_description'] ?>
                        </p>

                    </div>
                </div>

            </div>

            <!-- Sidebar (1/3 width) -->
            <div class="lg:col-span-1 sticky top-0 right-0 h-fit max-md:w-full">
                <!-- Recent Posts -->
                <div class="bg-white md:p-6 rounded-lg bg-gray-50 mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 pb-2 text-center">Recent Posts</h3>
                    <div class="grid grid-cols-1 gap-6 max-md:w-full">
                        <?php foreach ($recentBlogs as $blog) {
                            $url = str_replace(' ', '-', $blog['blog_title']);
                            $url = str_replace('“', '', $url);
                            $url = str_replace('”', '', $url);
                            $url = str_replace('’', '', $url);
                            $url = str_replace('&', 'and', $url);
                            $url = strtolower($url);
                        ?>
                            <div
                                class="bg-white flex  rounded-lg overflow-hidden p-2 border border-gray-200 hover:shadow-lg transition">
                                <img src="/<?= $blog['blog_img'] ?>" alt="Blog Image"
                                    class="w-[36%] h-full object-cover rounded">

                                <div class="p-4 flex flex-col justify-between h-auto">
                                    <div>
                                        <p class="text-xs text-gray-600 mb-2">
                                            <i class="far fa-calendar-alt mr-1 text-red-500"></i><?= $blog['blog_date'] ?>
                                        </p>
                                        <h3 class="text-sm text-gray-800 mb-2 capitalize">
                                            <?= $blog['blog_title'] ?>
                                        </h3>
                                        <!-- <p class="text-sm text-gray-600 mb-3">
                                            <?= mb_strimwidth(strip_tags($blog['blog_description']), 0, 100, '...') ?>
                                        </p> -->
                                    </div>

                                    <div class="flex justify-between items-center w-full">
                                        <!-- Read More Link -->
                                        <a href="/blog-details/<?= $url ?>" class="inline-flex text-xs items-center text-orange-500 font-medium hover:underline">
                                            Read More <i class="fas fa-arrow-right ml-2"></i>
                                        </a>

                                        <!-- Share Button -->
                                        <button
                                            onclick="shareBlog('<?= $blog['blog_title'] ?>', window.location.origin + '/blog-details')"
                                            class="flex items-center text-blue-600 h-6 w-6 rounded-full bg-blue-100 items-center justify-center hover:text-blue-700 text-sm font-medium">
                                            <i class="fas fa-share-alt mr-1"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        function shareBlog(title, url) {
            if (navigator.share) {
                navigator.share({
                        title: title,
                        text: `Check out this blog`,
                        url: url
                    })
                    .then(() => console.log('Shared successfully'))
                    .catch((error) => console.error('Error sharing:', error));
            } else {
                // fallback if share API is not supported
                alert("Sharing not supported in this browser. Please copy the link:\n" + url);
            }
        }
    </script>

</body>

<?php include 'includes/footer.php'; ?>