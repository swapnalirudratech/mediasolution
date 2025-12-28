
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block ">
            <a href="/dashboard" class="nav-link">Home</a>
        </li>
    </ul>

    <script>
        function toggleFullScreen() {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
            } else if (document.exitFullscreen) {
                document.exitFullscreen();
            }
        }
    </script>

    <ul class="navbar-nav ml-auto items-center">
        <li class="nav-item mr-3 py-2">
            <button onclick="toggleFullScreen()" class=""><i class="fas fa-expand-arrows-alt text-gray-600 text-2xl"></i></button>
        </li>
        <li class="nav-item">
            <a href="/logout" class="btn btn-danger font-bold">
                <i class="nav-icon fas fa-arrow-right-from-bracket"></i>
            </a>
        </li>
    </ul>
</nav>

<?php
$notice = getExpiry();
// echo $notice;
if(!empty($notice)){
    ?>
    <div class="p-[20px] bg-[#F5F0E1]">
        <marquee behavior="" direction=""><?=$notice?></marquee>
    </div>
    <?php
}
?>


<div class="modal fade" id="commonModal" tabindex="-1" role="dialog" aria-labelledby="commonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:auto;" role="document">
        <div class="modal-content">
            test
        </div>
    </div>
</div>