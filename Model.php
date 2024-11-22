<?php
class Model {
    private $file;

    public function __construct() {
        $this->file = 'data.json';
        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }
    }

    public function getAll() {
        $data = file_get_contents($this->file);
        return json_decode($data, true);
    }

    public function create($project_name, $deadline) {
        $data = $this->getAll();
        $data[] = ['id' => uniqid(), 'project_name' => $project_name, 'deadline' => $deadline];
        file_put_contents($this->file, json_encode($data));
        return true;
    }

    public function delete($id) {
        $data = $this->getAll();
        $data = array_filter($data, fn($item) => $item['id'] !== $id);
        file_put_contents($this->file, json_encode($data));
        return true;
    }
}
?>
