<?php
$name = 'My Notes';
$config = require(base_path('config.php'));
$db = new Database($config['database'],'MinKhant','password');
$notes = $db->query("select * from notes")->all();


view('/notes/index.view.php',[
    'name' => $name,
    'notes' => $notes
]);