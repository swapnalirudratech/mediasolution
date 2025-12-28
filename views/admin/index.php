<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head> -->

<style>
    .day-cell {
        aspect-ratio: 1/1;
        position: relative;
        transition: all 0.2s ease;
    }

    @media (max-width: 640px) {
        .day-cell {
            aspect-ratio: auto;
            min-height: 40px;
        }
    }

    .day-cell:hover {
        transform: scale(1.05);
        z-index: 10;
    }

    @media (max-width: 640px) {
        .day-cell:hover {
            transform: none;
        }
    }

    .day-marker {
        position: absolute;
        bottom: 4px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
    }

    .day-marker span {
        width: 4px;
        height: 4px;
        border-radius: 50%;
        margin: 0 1px;
    }

    .date-pill {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        border-radius: 50%;
        transition: all 0.2s ease;
    }

    @media (max-width: 640px) {
        .date-pill {
            width: 24px;
            height: 24px;
            font-size: 0.75rem;
        }
    }

    .month-selector {
        transition: all 0.3s ease;
    }

    .month-selector:hover {
        background-color: rgba(146, 64, 14, 0.1);
    }

    .nav-btn {
        transition: all 0.2s ease;
    }

    .nav-btn:hover {
        transform: scale(1.1);
    }

    @media (max-width: 640px) {
        .nav-btn:hover {
            transform: none;
        }
    }

    .nav-group {
        display: flex;
        gap: 8px;
    }

    .holiday-tooltip {
        position: absolute;
        display: none;
        background: white;
        padding: 6px 12px;
        border-radius: 6px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 20;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        white-space: nowrap;
        font-size: 0.75rem;
    }

    @media (max-width: 640px) {
        .holiday-tooltip {
            left: 0;
            transform: none;
            font-size: 0.7rem;
            padding: 3px 6px;
        }
    }

    .day-cell:hover .holiday-tooltip {
        display: block;
    }

    /* Mobile month selector */
    .mobile-month-select {
        width: 100%;
        padding: 8px;
        border-radius: 8px;
        border: 1px solid #e5e7eb;
        background-color: white;
        font-size: 0.875rem;
        margin-bottom: 8px;
    }

    /* Year selector */
    .year-select {
        padding: 4px 8px;
        border-radius: 8px;
        border: 1px solid #e5e7eb;
        background-color: white;
        font-size: 0.875rem;
    }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/header.php"; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/navbar.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/sidebar.php";
    ?>
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper h-auto">

            <div class="flex min-h-screen">

                <!-- Main Content -->
                <div class="flex-1 flex flex-col">

                    <!-- Dashboard Content -->
                    <main class="p-6 space-y-6">

                        <!-- Stat Cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Total Blogs Card -->
                            <a href="/blog/blog-list">
                                <div
                                    class="bg-gradient-to-tr from-blue-50 to-white rounded-2xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                    <div class="flex items-center gap-4">
                                        <div class="p-4 bg-blue-100 text-blue-600 rounded-xl shadow-inner">
                                            <i class="fas fa-blog text-2xl"></i>
                                        </div>
                                        <div>
                                            <p class="text-base text-gray-600">Total Blogs</p>
                                            <h3 class="text-2xl font-bold text-blue-900"><?= $total_blogs['total']; ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Main Panel -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                            <!-- Recent Blog Posts -->
                            <div class="bg-white p-6 rounded-xl shadow">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-semibold">Latest Blog Posts</h3>
                                    <a href="/blog/blog-list" class="text-gray-600 hover:text-blue-600">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                                <ul class="space-y-4 text-sm">
                                    <?php foreach ($recentBlogs as $blog) { ?>
                                        <li class="border-l-4 border-blue-500 pl-3">
                                            <p class="font-medium text-base"><?= $blog['blog_title'] ?></p>
                                            <p class="text-sm text-gray-500">Posted on <?= $blog['blog_date'] ?></p>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <!-- Recent Testimonials -->
                            <div class="bg-white p-6 rounded-xl shadow hidden">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-semibold">Recent Testimonials</h3>
                                    <a href="/testimonial/testimonial-list" class="text-gray-600 hover:text-blue-600">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                                <ul class="space-y-4 text-sm">
                                    <?php foreach ($recentTestimonials as $recent) { ?>
                                        <li class="border-l-4 border-yellow-400 pl-3 flex justify-between">
                                            <div class="flex flex-col">
                                                <p class="text-base italic text-gray-700"><?= $recent['student_name'] ?></p>
                                                <p class="text-sm text-gray-500">School - <?= $recent['school_name'] ?></p>
                                            </div>
                                            <div class="flex">
                                                <div class="flex text-yellow-500">
                                                    <?php
                                                    $rating = floatval($recent['rating']);
                                                    $fullStars = floor($rating);
                                                    $halfStar = ($rating - $fullStars) >= 0.5;
                                                    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);

                                                    // Full stars
                                                    for ($i = 0; $i < $fullStars; $i++) {
                                                        echo '<i class="fas fa-star"></i>';
                                                    }

                                                    // Half star
                                                    if ($halfStar) {
                                                        echo '<i class="fas fa-star-half-alt"></i>';
                                                    }

                                                    // Empty stars
                                                    for ($i = 0; $i < $emptyStars; $i++) {
                                                        echo '<i class="far fa-star"></i>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>

                        </div>

                    </main>
                </div>

            </div>
        </div>

        <?php
        include $_SERVER['DOCUMENT_ROOT'] . "/views/admin/include/footer.php";
        ?>
</body>

</html>