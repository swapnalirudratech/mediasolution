<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/database.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/GeneralController.php";

class LoginController extends GeneralController
{
    private $db;
    public function __construct($db = null)
    {
        $this->db = $db;
        parent::__construct($this->db);
    }

    public function checkSession()
    {
        if (empty($_SESSION) || !isset($_SESSION['id'])) {
            redirect('/');
        } else {
            return true;
        }
    }

    public function logout()
    {

        session_destroy();
        redirect("/");
    }

    public function index()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Login";
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (empty($_SESSION) || !isset($_SESSION['id'])) {
            } else {
                redirect('/dashboard');
            }
            require 'views/login.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // printWithPre($_POST);
            // die();

            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->getUserAuthentication($email, $password);

            if (!empty($user)) {
                $_SESSION['email'] = $user['email'];
                $_SESSION['id'] = $user['id'];
                $_SESSION['eid'] = $user['eid'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['role'] = $user['role'];

                $_SESSION['success'] = "Login successfully";
                redirect('/dashboard');
            } else {
                $_SESSION['err'] = "Email Or Password not matched";
                redirect('/');
            }
        }
    }

    public function getUserAuthentication($userid, $password)
    {
        try {
            $sql = "SELECT * FROM admin WHERE email = :userid AND status = '1'";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':userid', $userid);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!empty($user)) {
                if (password_verify($password, $user['password'])) {
                    return $user;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}
