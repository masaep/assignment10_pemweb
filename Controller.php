<?php
require_once 'Model.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function index() {
        return $this->model->getAll();
    }

    public function store($project_name, $deadline) {
        return $this->model->create($project_name, $deadline);
    }

    public function destroy($id) {
        return $this->model->delete($id);
    }
}
?>
