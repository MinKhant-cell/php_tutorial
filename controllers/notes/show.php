<?php
$name = 'Note';
$config = require(base_path('config.php'));
$db = new Database($config['database'],'MinKhant','password');
$note = $db->query('select * from notes where id= :id',['id' => $_GET['id']])->findOrFail();
$auth_id = 1;
authorize($note['user_id'] === $auth_id);
view('/notes/show.view.php',[
    'name' => $name,
    'note' => $note
]);