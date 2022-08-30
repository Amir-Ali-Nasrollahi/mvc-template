<?php
class App
{
    public $controller = 'Home';
    public $method = 'index';
    public $param = [''];

    public function __construct()
    {
        if (isset($_GET["url"])) {

            $url = $_GET["url"];
            $url = $this->Explode($url);
            $this->controller = $url[0];
            unset($url[0]);
            if (isset($url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
            $this->param = array_values($url);
        }
        $path = "controller/" . $this->controller . ".php";
        if (file_exists($path)) {
            include_once $path;
            $new = new $this->controller();
            $new->model($this->controller);
            if (method_exists($new, $this->method)) {
                call_user_func_array([$new, $this->method], $this->param);
            } else {
                echo "<h3 style='font-size: 50px; font-family: IRANSansDNFaNum; text-align: center; margin-top: 50px;'>درخواست شما نامعبتر است</h3>";
            }
        } else {
            echo "<h3 style='font-size: 50px; font-family: IRANSansDNFaNum; text-align: center; margin-top: 50px;'>صفحه مورد نظر پیدا نشد :(</h3>";
        }
    }
    public function Explode($url)
    {
        $url = rtrim($url, "/");
        return $url = explode('/', $url);
    }
}
