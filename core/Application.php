<?php

namespace app\core;
  

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;
    public Session $session;
    public static Application $app;
    public Controller $controller;

    public function __construct($rootPath,array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router =new Router($this->request,$this->response);
        $this->db = new Database($config['db']);
        $this->session = new Session();

        $this->controller = new Controller();
    }

    public function setController($controller){
        $this->controller = $controller;
    }

    public function getController($controller){
        return $this->controller;
    }

    public function run(){
        echo $this->router->resolve();
         
    }
}