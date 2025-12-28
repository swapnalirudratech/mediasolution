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
                Animocare Private Limited <br class="md:hidden"> <span class="text-brand">Blog</span>
            </h1>
            <p class="mt-6 text-base text-gray-200 max-md:hidden">
                Discover the latest news, tips, and stories from Animocare Private Limited. Learn about global import-export trends, industry insights, and best practices for international trade.
            </p>
        </div>
    </section>

    <!-- <div class="w-[80vw] mx-auto border-b border-gray-200 pt-10 pb-6 flex items-center justify-between">
        <h2 class="text-3xl font-semibold text-gray-900">Latest Blogs</h2>
        <div class="flex rounded-md ">
            <input type="text" placeholder="Search..." class="w-full border border-gray-300 rounded-l-md px-4 py-2 focus:outline-none focus:ring-1 focus:ring-brand">
            <span class="items-center justify-center border border-brand flex bg-brand text-white rounded-r-md  px-4 py-2"><i class="fas fa-search"></i></span>
        </div>

    </div> -->

    <section class="w-[70vw] max-md:w-[90vw] mx-auto md:px-4 py-16 grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Blog List -->
        <div class="lg:col-span-2 gap-10 space-y-10 max-md:order-1">
            <?php foreach ($blogs as $key => $blog) {
                $url = str_replace(' ', '-', $blog['blog_title']);
                $url = str_replace('“', '', $url);
                $url = str_replace('”', '', $url);
                $url = str_replace('’', '', $url);
                $url = str_replace('&', 'and', $url);
                $url = strtolower($url);
            ?>
                <article class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                    <img src="<?= $blog['blog_img'] ?>" alt="Blog Image" class="w-full md:h-64 lg:h-72 max-md:h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-gray-500 text-sm mb-2">
                            <span class="mr-4"><i class="fas fa-user"></i> Admin</span>
                            <span class="mr-4"><i class="far fa-calendar-alt"></i> <?= $blog['blog_date'] ?></span>
                        </div>
                        <h2 class="text-2xl max-md:text-base font-semibold text-gray-900 mb-3">
                            <?= $blog['blog_title'] ?>
                        </h2>
                        <p class="text-gray-600 mb-4 max-md:text-sm">
                            <?= mb_strimwidth(strip_tags($blog['blog_description']), 0, 150, '...') ?>
                        </p>
                        <a href="/blog-details/<?= $url ?>" class="inline-flex items-center text-orange-500 font-medium max-md:text-sm hover:underline">
                            Read More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>
            <?php } ?>
        </div>

        <!-- Sidebar -->
        <aside class="space-y-10 lg:sticky lg:top-20 self-start max-md:order-1">
            <div class="bg-gray-100 flex rounded-md p-8">
                <input type="text" placeholder="Search..." class="w-full border border-gray-300 rounded-l-md px-4 py-2 focus:outline-none focus:ring-1 focus:ring-brand">
                <span class="items-center justify-center border border-brand flex bg-brand text-white rounded-r-md px-4 py-2">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <div class="bg-gray-100 rounded-md p-8">
                <h3 class="text-xl font-semibold mb-4">Tags</h3>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($tags as $key => $tag) { ?>
                        <a href="#" class="bg-gray-200 text-gray-700 px-3 py-1 rounded hover:bg-orange-500 hover:text-white">
                            <?= $tag['blog_category'] ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </aside>
    </section>



</body>

<?php include 'includes/footer.php'; ?>