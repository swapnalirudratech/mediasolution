<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/LoginController.php";

class TestimonialController extends LoginController
{
    private $db;
    public function __construct($db = null)
    {
        $this->db = $db;
        parent::__construct($this->db);
    }

    public function TestimonialList()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Testimonial List";
        $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $testimonial = $this->getData('testimonial');

            // printWithPre($testimonial);
            // die();

            require 'views/admin/testimonials/testimonial_list.php';
        }
    }

    public function AddTestimonial()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Add Testimonial";
        $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $editData = [];


            require 'views/admin/testimonials/add-testimonial.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // printWithPre($_POST);
            // printWithPre($_FILES);
            // die();

            if (isset($_FILES["student_image"]) && $_FILES["student_image"]["error"] == UPLOAD_ERR_OK) {
                $_POST['student_img'] = uploadImage($_FILES["student_image"], "public/uploads/testimonial_img/");
            }

            if ($this->add($_POST, "testimonial")) {
                $_SESSION['success'] = "Testimonial Added Successfully";
            } else {
                $_SESSION['err'] = "Something went wrong";
            }

            redirect('/testimonial/testimonial-list');
        }
    }

    public function EditTestimonial($id)
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Edit Testimonial";
        $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $editData = $this->getData2("SELECT * FROM testimonial where id='$id'")[0];

            // printWithPre($editData);
            // die();

            if (empty($editData)) {
                redirect('/testimonial/testimonial-list');
            }

            require 'views/admin/testimonials/add-testimonial.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

            try {
                if (isset($_FILES["student_image"]) && $_FILES["student_image"]["error"] == UPLOAD_ERR_OK) {
                    $_POST['student_img'] = uploadImage($_FILES["student_image"], "public/uploads/testimonial_img/");
                } else {
                    unset($_POST['student_img']);
                }

                $this->update($_POST, $id, "testimonial");

                redirect('/testimonial/add-testimonial');

            } catch (Exception $e) {
                $_SESSION['err'] = $e->getMessage();
                echo $e->getMessage();
            }

            redirect('/testimonial/testimonial-list');
        }
    }

    function formatTime1($time)
    {
        return ($time && strlen($time) === 5) ? $time . ":00" : $time;
    }

    public function deleteTestimonial($id = null)
    {
        if ($this->delete($id, 'testimonial')) {
            $_SESSION['success'] = "Testimonial Deleted Successfully";
        } else {
            $_SESSION['err'] = "Something went wrong";
        }

        redirect('/testimonial/testimonial-list');
    }
}


?>