<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/LoginController.php";

class MetaController extends LoginController
{
    private $db;
    public function __construct($db = null)
    {
        $this->db = $db;
        parent::__construct($this->db);
    }

    public function metaList()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Meta List";
        $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $meta = $this->getData('meta');

            require 'views/admin/meta/meta-list.php';
        }
    }

    public function AddMeta()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Add Meta";
        $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $editData = [];

            require 'views/admin/meta/add-meta.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // printWithPre($_POST);
            // printWithPre($_FILES);
            // die();

            if ($this->add($_POST, "meta")) {
                $_SESSION['success'] = "Meta data Added Successfully";
            } else {
                $_SESSION['err'] = "Something went wrong";
            }

            redirect('/meta/add-meta');
        }
    }

    public function EditBlog($id)
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Edit Meta Data";
        $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            // printWithPre($country);
            // printWithPre($position);
            // printWithPre($department);
            // die();

            $editData = $this->getData2("SELECT * FROM meta where id='$id'")[0];

            // printWithPre($editData);
            // die();

            if (empty($editData)) {
                redirect('views/admin/meta/meta-list.php');
            }

            require 'views/admin/meta/add-meta.php';
            
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // printWithPre($_POST);
            // printWithPre($_FILES);
            // die();

            try {

                $this->update($_POST, $id, "meta");
                // if () {
                //     $_SESSION['success'] = "Blog Added Successfully";
                // } else {
                //     $_SESSION['err'] = "Something went wrong";
                // }

                redirect('/meta/add-meta');

            } catch (Exception $e) {
                $_SESSION['err'] = $e->getMessage();
                echo $e->getMessage();
            }

            redirect('/meta/meta-list');
        }
    }

    function formatTime1($time)
    {
        return ($time && strlen($time) === 5) ? $time . ":00" : $time;
    }

    public function deleteMeta($id = null)
    {
        if ($this->delete($id, 'meta')) {
            $_SESSION['success'] = "Meta data Deleted Successfully";
        } else {
            $_SESSION['err'] = "Something went wrong";
        }

        redirect('/meta/meta-list');
    }
}


?>