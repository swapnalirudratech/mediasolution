<?php
$sidebarModules = getSidbarData();
include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/CompanyController.php";
$ccontroller = new CompanyController(getDBObject()->getConnection());
$companyData = $ccontroller->getCompanyDetail();
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-2 bg-gray-100">
    <!-- Brand Logo - Redesigned Header -->
    <a href="/dashboard"
        class="brand-link flex flex-col items-center justify-center w-full py-4 px-2 border-b border-blue-600">
        <img src="/<?= $companyData["logo"] ?>" alt="Company Logo" class="flex items-center justify-center p-1"
            style="max-height: 65px;">
        <div class="w-full flex items-center justify-center">
            <p class="font-bold tracking-wide text-blue-800 hidden"><?= $companyData["company"] ?></p>
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- User Profile Section -->
        <div class="user-panel py-3 border-b border-blue-600 flex items-start justify-start">
            <div class="flex gap-4 items-center ml-3">
                <!-- User Initial Circle -->
                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mb-1">
                    <span
                        class="text-blue-800 font-bold text-lg"><?= strtoupper(substr($_SESSION['name'], 0, 1)) ?></span>
                </div>

                <!-- User Name -->
                <div class="text-start items-start">
                    <a href="" class="font-medium text-sm text-blue-800 text-wrap">
                        <?= strtoupper($_SESSION['name']) ?>
                    </a>
                </div>

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 px-2">
            <ul class="nav nav-pills nav-sidebar flex-column space-y-1" data-widget="treeview" role="menu"
                data-accordion="false">

                <!-- Dashboard Item -->
                <li class="nav-item ml-1">
                    <a href="/dashboard"
                        class="nav-link rounded-md flex items-center gap-3 py-2 px-3 <?= $pageTitle == 'Dashboard' ? 'bg-blue-800 text-white shadow-sm' : '!text-black font-semibold hover:bg-blue-100 hover:text-blue-800' ?> transition-all duration-150">
                        <i class="fas fa-home <?= $pageTitle == 'Dashboard' ? '' : 'text-blue-800' ?>"></i>
                        <p class="text-base font-medium">Home</p>
                    </a>
                </li>

                <!-- Dynamic Menu Items -->
                <?php
                foreach ($sidebarModules as $key => $module) {
                    if (count($module) == 1) {
                        if (checkPageAccess($module[0][0])) { ?>
                            <li class="nav-item">
                                <a href="<?= $module[0][1] ?>"
                                    class="nav-link rounded-md flex items-center py-2 px-3 <?= $pageTitle == $module[0][0] ? 'bg-blue-800 text-white shadow-sm' : '!text-black hover:bg-blue-100 hover:text-blue-800' ?> transition-all duration-150">
                                    <i class="<?= $module[0][2] ?> <?= $pageTitle == $module[0][0] ? '' : 'text-blue-800' ?>"></i>
                                    <p class="text-base font-medium"><?= $module[0][0] ?></p>
                                </a>
                            </li>
                        <?php }
                    } elseif (checkModuleAccess($module)) {
                        $active = checkActiveModule($pageTitle, $module); ?>
                        <li class="nav-item <?= ($active) ? 'menu-open' : '' ?>">
                            <a href="#"
                                class="nav-link rounded-md flex items-center py-2 px-3 <?= ($active) ? '!bg-blue-800 !text-white shadow-sm' : '!text-black hover:bg-blue-100 hover:text-blue-800' ?> transition-all duration-150">
                                <i class="<?= $module[1] ?> <?= ($active) ? '' : 'text-blue-800' ?> mr-1"></i>
                                <p class="text-base font-medium"><?= $key ?></p>
                                <i class="fas <?= ($active) ? 'fa-angle-down' : 'fa-angle-right' ?> text-xs float-right"></i>
                            </a>
                            <ul
                                class="nav nav-treeview pl-3 mt-1 <?= ($active) ? 'block' : 'hidden' ?> border-l border-blue-800 ml-4">
                                <?php foreach ($module[0] as $page) {
                                    if (checkPageAccess($page[0])) { ?>
                                        <li class="nav-item">
                                            <a href="<?= $page[1] ?>"
                                                class="nav-link rounded-md flex items-center gap-3 py-1.5 px-3 <?= $pageTitle == $page[0] ? 'bg-blue-100 !text-black' : 'text-blue-800 hover:bg-blue-100 hover:text-blue-800' ?> transition-all duration-150">
                                                <i
                                                    class="far fa-circle nav-icon text-xs <?= $pageTitle == $page[0] ? 'text-blue-800' : 'text-blue-600' ?>"></i>
                                                <p class="text-sm font-medium"><?= $page[0] ?></p>
                                            </a>
                                        </li>
                                    <?php }
                                } ?>
                            </ul>
                        </li>
                    <?php }
                } ?>
            </ul>
        </nav>
    </div>
</aside>