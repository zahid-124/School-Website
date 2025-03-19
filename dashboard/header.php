<?php
$host_name='localhost';
$user_name='root';
$password='';
$db_name='sjr_academy';

$db_connect=mysqli_connect($host_name, $user_name, $password, $db_name);
if(!$db_connect){
    echo 'error!! database not connected';
}
#class query
$classQuery="SELECT * FROM classes";
$classes=mysqli_query($db_connect, $classQuery);
$class=mysqli_fetch_assoc($classes);
$classId=$class['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJR Academy</title>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/sjr-academy/css/">
    <link rel="stylesheet" href="/sjr-academy/css/all.min.css">
    <link rel="stylesheet" href="/sjr-academy/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sjr-academy/css/lightbox.css">
    <link rel="stylesheet" href="/sjr-academy/css/slick.css">
    <link rel="stylesheet" href="/sjr-academy/css/venobox.css">
    <link rel="stylesheet" href="/sjr-academy/css/style.css">
    <link rel="stylesheet" href="/sjr-academy/css/1199.css">
    <link rel="stylesheet" href="/sjr-academy/css/1200 up.css">
    <link rel="stylesheet" href="/sjr-academy/css/about.css">
    <link rel="stylesheet" href="/sjr-academy/css/about-responsive.css">
    <link rel="stylesheet" href="/sjr-academy/css/contact.css">
    <link rel="stylesheet" href="/sjr-academy/css/contact-responsive.css">
    <link rel="icon" href="https://cdn.fbreader.org/files/images/android/icon_old.png">
    <style>
        .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
        }
        .dropdown:hover .test{
        color: red !important;
        }
        .test{
            vertical-align: middle;
            line-height: 107px;
        }
    </style>
        
</head>

<body style="padding-top: 120px;">
    <!-- navbar part goes here -->

    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="top: 0; opacity: 0.95">
            <div class="container">
                <a class="navbar-brand" href="/sjr-academy">
                    <!-- <img src="images/logo.png" class="img-fluid" alt=""> -->
                    <div class="bg-info text-bold fs-1 px-5 py-4 rounded text-white">TRISHAL ACADEMY</div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/sjr-academy">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                                Message
                            </a>
                            <ul class="dropdown-menu dropdown1" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/sjr-academy/message/message.php">HEAD TEACHER </a></li>
                                <li><a class="dropdown-item" href="/sjr-academy/message/message.php">ASS. HEAD TEACHER</a></li>
                                <li><a class="dropdown-item border" href="/sjr-academy/message/message.php">CHAIRMAN</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sjr-academy/contact/contact.php">contact</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                                about
                            </a>
                            <ul class="dropdown-menu dropdown2" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/sjr-academy/about/about_us.php">About Us</a></li>
                                <li><a class="dropdown-item border" href="/sjr-academy/about/faculty_member.php?id=<?=$classId?>">Faculty members</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="" aria-expanded="false">
                                login/signup
                            </a>
                            <ul class="dropdown-menu dropdown3" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/sjr-academy/login/student.php">Students Login</a></li>
                                <li><a class="dropdown-item border" href="/sjr-academy/login/teacher.php">Teachers Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
