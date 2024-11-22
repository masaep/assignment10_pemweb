<?php
require_once 'Controller.php';
require_once 'View.php';

$controller = new Controller();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['project_name'], $_POST['deadline'])) {
    $controller->store($_POST['project_name'], $_POST['deadline']);
    header('Location: index.php');
    exit;
}

if (isset($_GET['delete'])) {
    $controller->destroy($_GET['delete']);
    header('Location: index.php');
    exit;
}

$data = $controller->index();
render($data);
?>
