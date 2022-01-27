<?php
require_once('constant.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header</title> 
        <link rel="stylesheet" href="<?= base_url ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url ?>assets/style.css">
        <style>
            #footnote{
                position: relative;
                top : 800px;
                width : 100%;
                height: 150px;
                background-color : #2f5ea8;
            }
            #bluebox{
                color : #010a06;
            }
            /* .inputbox{
                width: 80ox;
                height: 50px;
            } */
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="../images/horse.png" height=80px width=80px><br><br>
        <a class="navbar-brand" href="#">FRESH SCHOOL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">LOGIN</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    APPLY
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://images.app.goo.gl/BWKH5VBmKMwHjJX58">NEW ADMISSION</a>
                    <a class="dropdown-item" href="https://images.app.goo.gl/L3c37BuovU9Um7W77">RENEW ADMISSION</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="https://images.app.goo.gl/cQCYSNLmH4boXBZU7">How to Apply</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://images.app.goo.gl/T7mC4FGuHTvaet97A">About us</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
    </nav>
