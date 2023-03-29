<?php
    $dsn = 'mysql:dbname=php;host=localhost';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO($dsn, $user, $pass);
    } catch (\PDOException $th) {
        echo "Database Connection error." . $th->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-MVC</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <main>
        <header class="mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-section p-4 bg-primary text-white text-center">
                            <h2>PHP MVC</h2>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrapper">