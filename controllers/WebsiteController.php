<?php

use Mpdf\Tag\Select;

include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/LoginController.php";

class WebsiteController extends LoginController
{
    private $db;
    public function __construct($db = null)
    {
        $this->db = $db;
        parent::__construct($this->db);
    }

    public function home()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "home";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $testimonial = $this->getData('testimonial');

            require 'views/website/home.php';
        }
    }

    public function about()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "about";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            require 'views/website/about.php';
        }
    }

    public function services()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "services";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            require 'views/website/services.php';
        }
    }

    public function blog()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "blog";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $blogs = $this->getData2("SELECT * FROM blogs ORDER BY blog_date DESC");
            $tags = $this->getData2("SELECT * FROM blog_category");
            // printWithPre($blogs);
            // die();

            require 'views/website/blog.php';
        }
    }

    public function blogDetails($id)
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Details";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            // $blogs = $this->getData('blogs');
            $id = str_replace('-', ' ', $id);
            // echo $id;
            $blogbyid = $this->getData2("SELECT * 
                                                    FROM blogs 
                                                    WHERE LOWER(
                                                        REPLACE(
                                                        REPLACE(
                                                            REPLACE(
                                                            REPLACE(
                                                                REPLACE(blog_title, '-', ' '),
                                                                '“', ''
                                                            ),
                                                            '”', ''
                                                            ),
                                                            '&', 'and'
                                                        ),
                                                        '’', ''
                                                        )
                                                    ) = LOWER('$id');")[0];
            // printWithPre($blogbyid);
            // die();
            $recentBlogs = $this->getData2("SELECT * FROM blogs ORDER BY blog_date DESC LIMIT 3");
            // printWithPre($blogbyid);
            // die();
            require 'views/website/blog_details.php';
        }
    }

    public function feedback()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "feedback";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            require 'views/website/feedbacks.php';
        }
    }

    public function ourTeam()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "ourTeam";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            require 'views/website/our-team.php';
        }
    }

    public function contact()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "contact";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            require 'views/website/contact.php';
        }
    }

     public function contacteMail()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "contact email";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            require 'views/website/contact_mail.php';
        }
    }

    public function faq()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "faq";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            require 'views/website/faq.php';
        }
    }

    public function privacy()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "privacy_policy";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            require 'views/website/privacy-policy.php';
        }
    }

    public function terms()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "terms-condition";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            require 'views/website/terms_condition.php';
        }
    }

    public function phpmailercode()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "mail";
        // $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // echo "hii";
            require 'views/website/book_session_mail.php';
        }
    }
}
