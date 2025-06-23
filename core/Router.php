<?php
// core/Router.php

class Router {
    protected $controller = 'HomeController';
    protected $method     = 'index';
    protected $params     = [];

    public function run() {
        $url = $this->parseUrl();

        //
        // 1) allow "/reservation" as synonym for "/accomodation"
        //
        if (isset($url[0]) && strtolower($url[0]) === 'reservation') {
            $url[0] = 'accomodation';
        }

        //
        // 2) determine controller class
        //
        // if user hit "/billing", this will look for BillingController.php
        $ctrlName = ucfirst($url[0] ?? '') . 'Controller';
        $ctrlFile = __DIR__ . '/../app/controllers/' . $ctrlName . '.php';
        if (isset($url[0]) && file_exists($ctrlFile)) {
            $this->controller = $ctrlName;
            array_shift($url);
        }

        // load & instantiate
        require_once __DIR__ . '/../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //
        // 3) determine method (default "index")
        //
        if (isset($url[0]) && method_exists($this->controller, $url[0])) {
            $this->method = array_shift($url);
        }

        //
        // 4) remaining $url segments → params
        //
        $this->params = $url;

        //
        // 5) dispatch!
        //
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl() {
        if (! isset($_GET['url'])) {
            return [];
        }
        // strip trailing slash, sanitize, split
        $clean = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
        return explode('/', trim($clean, '/'));
    }
}
