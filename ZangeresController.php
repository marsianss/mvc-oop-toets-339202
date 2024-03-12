<?php

require_once 'ZangeresModel.php';

$db = new PDO('mysql:host=localhost;dbname=mvc-oop-toets', 'root', '');

class ZangeresController {
    private $model;

    public function __construct(ZangeresModel $model) {
        $this->model = $model;
    }

    public function index() {
        $zangeressen = $this->model->getZangeressen();

        include 'ZangeresView.php';
    }
}

$controller = new ZangeresController(new ZangeresModel($db));
$controller->index();
