<?php
$connection = new PDO('mysql:host=db;dbname=db;charset=utf8', 'user', 'password');
$query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
$tables     = $query->fetchAll(PDO::FETCH_COLUMN);

if (empty($tables)) {
    echo '<p class="center">There are no tables in database <code>db</code>.</p>';
} else {
    echo '<p class="center">Database <code>db</code> contains the following tables:</p>';
    echo '<ul class="center">';
    foreach ($tables as $table) {
        echo "<li>{$table}</li>";
    }
    echo '</ul>';
}
phpinfo();