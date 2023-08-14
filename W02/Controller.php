<?php
namespace P3;
spl_autoload_register(function($className){
    require_once str_replace("P3\\", "", $className).'.php';
});
class Controller
{
    public function index(): string
    {
        $model = new Model();
        $net = $model->calculateSalary(9800, 4500);

        $view = new View();
        return $view->output($net);
    }
}

$controller = new Controller();
echo $controller->index();