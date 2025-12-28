<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/database.php";

function getDBObject()
{
    $db = new Database();
    return $db;
}

function getExpiry()
{
    $software = getDBObject()->getSoftware();
    $softwareid = getDBObject()->getSoftwareId();
    $url = $software . "project/is-valid/$softwareid";
    // echo $url;
    $response = file_get_contents($url);
    // echo $response;
    $notice = "";
    if ($response === FALSE) {
    } else {
        $response = json_decode($response);
        if ($response->success) {
            $notice = $response->notice;
        }
    }
    return $notice;
}

function getBaseUrl()
{
    return getDBObject()->getUrl();
}

function printWithPre($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function redirect($route)
{
    header("Location: $route");
    exit();
}

function adminEmail()
{
    return "navinsuryawanshi159@gmail.com";
}

function uploadImage($file, $upload_dir, $allowed_extensions = ['png', 'jpg', 'jpeg', 'webp', 'pdf'])
{
    // Allowed file extensions


    // Check if file was uploaded without errors
    if ($file['error'] === UPLOAD_ERR_OK) {
        // Get the file extension
        $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        // Check if the file extension is allowed
        if (!in_array($file_extension, $allowed_extensions)) {
            return null; // Return null if the file extension is not allowed
        }

        // Generate unique file name to avoid conflicts
        $file_name = uniqid() . '_' . basename($file['name']);

        // Create the directory if it doesn't exist
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // Move the uploaded file to the specified directory
        $destination = $upload_dir . $file_name;
        if (move_uploaded_file($file['tmp_name'], $destination)) {
            $destination = str_replace("../", "", $destination);
            return $destination; // Return the path name if upload was successful
        } else {
            return false; // Return false if file upload failed
        }
    } else {
        return false; // Return false if file upload encountered an error
    }
}

function uploadPDF($file, $upload_dir, $allowed_extensions = ['pdf'])
{
    // Check if the file was uploaded without errors
    if ($file['error'] === UPLOAD_ERR_OK) {
        // Get the file extension
        $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        // Check if the file extension is allowed (only PDF in this case)
        if (!in_array($file_extension, $allowed_extensions)) {
            return null; // Return null if the file extension is not allowed
        }

        // Generate a unique file name to avoid conflicts
        $file_name = uniqid() . '_' . basename($file['name']);

        // Create the directory if it doesn't exist
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // Move the uploaded file to the specified directory
        $destination = $upload_dir . $file_name;
        if (move_uploaded_file($file['tmp_name'], $destination)) {
            $destination = str_replace("../", "", $destination);
            return $destination; // Return the path if the upload was successful
        } else {
            return false; // Return false if the file upload failed
        }
    } else {
        return false; // Return false if the file upload encountered an error
    }
}

function formatDateTime($dateString)
{
    // Create a DateTime object from the provided date string
    $date = new DateTime($dateString);

    // Format the date to the desired format: "d F y h:i:s A"
    $formattedDate = $date->format('d F y h:i:s A');

    return $formattedDate;
}

function formatTime($dateString)
{
    // Create a DateTime object from the provided date string
    $date = new DateTime($dateString);

    // Format the date to the desired format: "d F y h:i:s A"
    $formattedDate = $date->format('h:i A');

    return $formattedDate;
}

function formatDate($dateString)
{

    try {
        if (!empty($dateString) && $dateString != "" || $dateString != null) {
            // Create a DateTime object from the provided date string
            $date = new DateTime($dateString);

            // Format the date to the desired format: "d F y h:i:s A"
            $formattedDate = $date->format('d F y');

            return $formattedDate;
        }
        return "";
    } catch (Exception $e) {
        return $dateString;
    }
}

function formatNumber($number)
{
    if (empty($number)) {
        return 0;
    }
    // Use number_format to format the number with commas as thousands separators
    return number_format(round($number, 1), 1);
}

function timeDifference($dateString)
{
    $givenDate = new DateTime($dateString);
    $currentDate = new DateTime();
    $interval = $currentDate->diff($givenDate);

    if ($interval->y > 0) {
        return $interval->y . ' year' . ($interval->y > 1 ? 's' : '') . ' ago';
    } elseif ($interval->m > 0) {
        return $interval->m . ' month' . ($interval->m > 1 ? 's' : '') . ' ago';
    } elseif ($interval->d > 0) {
        return $interval->d . ' day' . ($interval->d > 1 ? 's' : '') . ' ago';
    } elseif ($interval->h > 0) {
        return $interval->h . ' hour' . ($interval->h > 1 ? 's' : '') . ' ago';
    } elseif ($interval->i > 0) {
        return $interval->i . ' minute' . ($interval->i > 1 ? 's' : '') . ' ago';
    } else {
        return $interval->s . ' second' . ($interval->s > 1 ? 's' : '') . ' ago';
    }
}

function timeRemaining($dateString)
{
    if (!empty($dateString) && $dateString != "" || $dateString != null) {
        $givenDate = new DateTime($dateString);
        $currentDate = new DateTime();
        $interval = $currentDate->diff($givenDate);

        if ($currentDate > $givenDate) {
            return false;
        }

        if ($interval->y > 0) {
            return $interval->y . ' year' . ($interval->y > 1 ? 's' : '') . ' remaining';
        } elseif ($interval->m > 0) {
            return $interval->m . ' month' . ($interval->m > 1 ? 's' : '') . ' remaining';
        } elseif ($interval->d > 0) {
            return $interval->d . ' day' . ($interval->d > 1 ? 's' : '') . ' remaining';
        } elseif ($interval->h > 0) {
            return $interval->h . ' hour' . ($interval->h > 1 ? 's' : '') . ' remaining';
        } elseif ($interval->i > 0) {
            return $interval->i . ' minute' . ($interval->i > 1 ? 's' : '') . ' remaining';
        } else {
            return $interval->s . ' second' . ($interval->s > 1 ? 's' : '') . ' remaining';
        }
    }
    return "";
}


$query = "SELECT r.*,p.page,p.page_name,p.module FROM role_permission r 
left join pages p on p.id = r.page
WHERE role = :id
";
$stmt = getDBObject()->getConnection()->prepare($query);
$stmt->bindParam(':id', $_SESSION["role"], PDO::PARAM_INT);
$stmt->execute();
$assignPages = $stmt->fetchAll(PDO::FETCH_ASSOC);;

$sidebarModules = [

    "Blog" => [
        [
            ["Add Blog", "/blog/add-blog", ""],
            ["Blog List", "/blog/blog-list", ""],
            ["Add Category", "/blog/add-category", ""],
        ],
        "nav-icon fas fa-newspaper"
    ],

    // "Testimonials" => [
    //     [
    //         ["Add Testimonial ", "/testimonial/add-testimonial", ""],
    //         ["Testimonial List", "/testimonial/testimonial-list", ""],

    //     ],
    //     "nav-icon fas fa-quote-left"
    // ],

    "Meta" => [
        [
            ["Add Meta ", "/meta/add-meta", ""],
            ["Meta List", "/meta/meta-list", ""],

        ],
        "nav-icon fas fa-tags"
    ],

    "Master" => [
        [
            // ["User", "/master/users", ""],
            // ["Roles", "/master/roles", ""],
            ["Company", "/master/company", ""],
            // ["Machine", "/master/machine", ""],
        ],
        "nav-icon fas fa-cog"
    ],
];

function getSidbarData()
{
    global $sidebarModules;
    return $sidebarModules;
}


/**
 * Checks if a user has access to a given page.
 *
 * This function determines if the current user has permission to access
 * the specified page. It checks if the user is an admin (role 1) or if
 * the page is specifically 'Doctor Appointment', granting access in these
 * cases. Otherwise, it verifies whether the page is included in the
 * list of assigned pages for the user.
 *
 * @param string $page The name of the page to check access for.
 * @return bool True if the user has access to the page, false otherwise.
 */

function checkPageAccess($page)
{
    // echo $page;
    global $assignPages;
    if ($_SESSION["role"] == 1) {
        return true;
    }
    foreach ($assignPages as $module) {
        if ($module['page_name'] == $page) {
            return true;
        }
    }
    return false;
}

function checkModuleAccess($module)
{

    global $assignPages;
    if ($_SESSION["role"] == 1) {
        return true;
    }
    foreach ($assignPages as $page) {
        foreach ($module[0] as $spage) {
            // echo "$page[page_name]<br>";
            if ($spage[0] == $page["page_name"]) {
                return true;
            }
        }
    }
    return false;
}

function checkActiveModule($page, $module)
{
    // global $sidebarModules;

    // foreach($sidebarModules as $module){
    foreach ($module[0] as $p) {
        // var_dump()
        // print_r($page);
        if ($p[0] == $page) {
            return true;
        }
    }
    // }
    return false;
}
