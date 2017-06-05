<?php 
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mcate");
        $this->load->model("muser");
        $this->load->model("mnews");
        $this->load->model("model_posts");
        $this->load->model("mindex");
        $this->load->helper("file");
        $this->load->model("muser");
        $this->load->model("monline");
        $this->load->library("session");
        $this->load->model("model_product");
    }

    public function fillter($str)
    {
        $str = str_replace("<", "&lt;", $str);
        $str = str_replace(">", "&gt;", $str);
        $str = str_replace("&", "&amp;", $str);			
        $str = str_replace("|", "&brvbar;", $str);
        $str = str_replace("~", "&tilde;", $str);
        $str = str_replace("`", "&lsquo;", $str);
        $str = str_replace("#", "&curren;", $str);
        $str = str_replace("%", "&permil;", $str);
        $str = str_replace("'", "&rsquo;", $str);
        $str = str_replace("\"", "&quot;", $str);
        $str = str_replace("\\", "&frasl;", $str);
        $str = str_replace("--", "&ndash;&ndash;", $str);
        $str = str_replace("ar(", "ar&Ccedil;", $str);
        $str = str_replace("Ar(", "Ar&Ccedil;", $str);
        $str = str_replace("aR(", "aR&Ccedil;", $str);
        $str = str_replace("AR(", "AR&Ccedil;", $str);
        return htmlspecialchars($str);
    }

    public function cut_str($str,$start,$end)
    {
        $val = substr($str,$start,$end);
        return $val;
    }

    public function debug($val)
    {
        echo "<pre>";
        print_r($val);
        echo "</pre>";
        die();
    }

    public function listcago($id = null, $limit = null)
    {
        return $this->model_product->listcago($id);
    }

    public function listall()
    {
        return $this->mindex->listall();
    }

    public function listcate()
    {
        return $this->mindex->listcate();
    }

    public function support()
    {
        return $this->mindex->support(5);
    }

    public function config()
    {
        return $this->mindex->config();
    }

    public function listintro()
    {
        return $this->mindex->intro();
    }
}