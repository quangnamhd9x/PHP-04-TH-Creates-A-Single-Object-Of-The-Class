<?php
class Application {
    private static $instance;

    public static function getInstance(){
        if (self::$instance === null){
            self::$instance = new Application();
            echo 'alo';
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance();
$app2 = Application::getInstance();
$app3 = new Application();

