<?php
$config = require(base_path('config.php'));
$name = 'Create Note';
$db = new Database($config['database'],'MinKhant','password');
$errors = [];

if($_SERVER['REQUEST_METHOD'] === "POST"){
if(!Validator::string($_POST['title'],1,30)){
    $errors['title'] = 'Title is required';
}

if(empty($errors)){
    $db->query("INSERT INTO notes(title,description,user_id) VALUES (:title, :description, :user_id)",[
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'user_id' => 1,
    ]);
}
}
view('/notes/create.view.php',[
    'name' => $name,
    'errors' => $errors
]);