<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "TheNaCl"

            ];
        return $this->render('home',$params);
    }
    public function contact()
    {
        // return Application::$app->router->renderView('contact');
        return  $this->render('contact');
    }
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        // var_dump($body);
        return 'Handling submitted data';
    }
}