<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/database.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/LoginController.php";

class DashboardController extends LoginController
{
    private $db;
    public function __construct($db = null)
    {
        $this->db = $db;
        parent::__construct($this->db);
    }

    public function index()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Dashboard";
        $this->checkSession();
        
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $current_year = date('Y');
            $total_blogs = $this->getData2("SELECT COUNT(*) AS total FROM blogs")[0];
            // printWithPre($total_blogs);
            // $total_videos = $this->getData2("SELECT COUNT(*) AS total FROM youtube")[0];
            // printWithPre($total_videos);
            // $total_testimonilas = $this->getData2("SELECT COUNT(*) AS total FROM testimonial")[0];
            // printWithPre($total_testimonilas);

            $recentBlogs = $this->getData2("SELECT * FROM blogs ORDER BY blog_date DESC LIMIT 5");

            $recentTestimonials = $this->getData2("SELECT * FROM testimonial LIMIT 5");

            require 'views/admin/index.php';

        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // printWithPre($_POST);
            // die();

            if (isset($_SESSION['role']) && $_SESSION['role'] == 35) {

                try {

                    if ($this->update($_POST, $_SESSION['eid'], 'tbl_employees')) {
                        
                        $this->update([
                            'name' => $_POST['name'],
                            'email' => $_POST['email'],
                            'phone' => $_POST['phone'],
                        ], $_SESSION['eid'], 'admin', 'eid');

                        $_SESSION['success'] = "Profile Updated Successfully";
                    } else {
                        $_SESSION['err'] = "Failed to update profile in employees table";
                    }
                } catch (Exception $e) {
                    echo $e->getMessage();
                    $_SESSION['err'] = $e->getMessage();
                }

                redirect('/dashboard');
            }
        }
    }
}
