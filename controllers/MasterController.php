<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/database.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/LoginController.php";

class MasterController extends LoginController
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
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
           
            require 'views/index.php';
        }
    }

    public function openingBalance($id = null)
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Opening Balance";
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data = $this->getData2('SELECT * from opening_balance ORDER BY id DESC LIMIT 1');
            require 'views/master/openingBalance.php';
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // printWithPre($_POST);
            // die();

            if ($this->add($_POST, "opening_balance")) {
                $_SESSION['success'] = "Opening Balance Added Successfully";
                redirect('/master/opening-balance');
            } else {
                $_SESSION['err'] = "Something Went Wrong";
                redirect('/master/opening-balance');
            }
        }
    }

}
