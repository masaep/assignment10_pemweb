<?php
function render($data) {
    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>To-Do List</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <h1>To-Do List</h1>
        <form method='POST'>
            <input type='text' name='project_name' placeholder='Project Name' required>
            <input type='date' name='deadline' required>
            <button type='submit'>Add</button>
        </form>
        <ul>";
    foreach ($data as $item) {
        echo "<li>
                <strong>{$item['project_name']}</strong> - Deadline: {$item['deadline']}
                <a href='?delete={$item['id']}'>Delete</a>
              </li>";
    }
    echo "</ul>
    </body>
    </html>";
}
?>
