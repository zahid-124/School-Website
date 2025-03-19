<?php
require 'db_connect.php';

#notice query
$noticeQuery="SELECT * FROM notices ORDER BY id DESC";
$notices=mysqli_query($db_connect, $noticeQuery);

#class query
$classQuery="SELECT * FROM classes";
$classes=mysqli_query($db_connect, $classQuery);
include 'dashboard/header.php';
?>
    <!-- banner part goes here -->
    <section>
        <div class="container">
            <div class="row main">
                <div class="col-lg-3">
                    <div class="banner-item">
                        <div class="banner-top">
                            <i class="far fa-star"></i>
                            <h3>Head Teacher</h3>
                        </div>
                        <div class="banner-bottom">
                            <div class="banner-img">
                                <div class="chairman-img">
                                    <img src="images/head.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="banner-text">
                                <h3> Modasser Ali</h3>
                                <a href="/sjr-academy/message/message.php"> continue reading... </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="banner-main">
                        <div class="banner-slider">
                            <img src="images/slider-5.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="banner-slider">
                            <img src="images/slider-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="banner-slider">
                            <img src="images/slider-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="banner-slider">
                            <img src="images/slider-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="banner-slider">
                            <img src="images/1574051417.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="banner-slider">
                            <img src="images/1582125739.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="banner-slider">
                            <img src="images/1612175050.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="banner-item">
                        <div class="banner-top">
                            <i class="far fa-star"></i>
                            <h3>Chairman</h3>
                        </div>
                        <div class="banner-bottom">
                            <div class="banner-img">
                                <div class="chairman-img">
                                    <img src="images/admin.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="banner-text">
                                <h3>
                                    Welcome to this school</h3>
                                <a href="/sjr-academy/message/message.php"> continue reading... </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fetures">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fetures-item text-center" >
                        <h3 style="color: blue;"> বিভিন্ন শ্রেণির শিক্ষার্থিদের ভ্যাক্সিন গ্রহণ সংক্রান্ত তথ্য ফরম</h3>
                        <div class="fetures-btn">
                            <a href="#">শিক্ষার্থীদের তথ্য ফরম</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- fetures2 part goes here -->
    <section id="fetures2">
        <div class="container border-n">
            <div class="row fetures-main">
                <div class="col-lg-3 m">
                    <div class="feuters2-left-main">
                        <ul>
                            <li>
                                <h4>
                                    <img src="images/globe.png" class="img-fluid" alt="">
                                    <span> স্কুল সম্পর্কিত তথ্য</span>
                                </h4>
                            </li>
                            <li>
                                <a href="information/governing_body.php">
                                    <img src="images/n.png" width="12" alt=""> GOVERNING BODY
                                </a>
                            </li>
                            <li>
                                <a href="information/teachers.php">
                                    <img src="images/n.png" width="12" alt=""> TEACHERS INFORMATION
                                </a>
                            </li>
                            <li>
                                <a href="information/staff.php">
                                    <img src="images/n.png" width="12" alt=""> OFFICE STAFF
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/n.png" width="12" alt=""> STUDENTS INFO
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/n.png" width="12" alt=""> SYLLABUS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/n.png" width="12" alt=""> EBOOK
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/n.png" width="12" alt=""> EXAM RESULT
                                </a>
                            </li>
                            <li>
                                <a href="images/routine.jpg" target="_blank">
                                    <img src="images/n.png" width="12" alt=""> ROUTINES
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="left-last">
                        <div class="left-last-head">
                            <h3> প্রসপেক্টাস </h3>
                        </div>
                        <div class="left-last-body">
                            <div class="left-last-img text-center">
                                <a href="images/prospectus.pdf" target="_blank">
                                    <img src="images/prospectusicon.png" class="img-fluid" width="70%" alt="">
                                </a>
                            </div>
                            <div class="left-last-link" style="white-space: nowrap;">
                                <a href="images/prospectus.pdf" target="_blank">
                                    <img src="images/rightarrow.gif" class="img-fluid" width="20" alt="">
                                    <span> শিক্ষাবর্ষ: ২০২০-২১</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 padding-0">
                    <div class="features-middle">
                        <div class="noticed">
                            <h3>
                                <img src="images/pin.png" class="img-fluid" width="30" alt="">NOTICE BOARD
                            </h3>
                        </div>
                        <?php
                            $marque="";
                            foreach($notices as $idx=>$notice){
                                if($idx==5) break;
                                $marque.=$notice['description']." | ";
                            }?>
                        <div class="marquee">
                            <marquee behavior="" direction=""> <?=$marque?>... </marquee>
                        </div>
                        <div class="table-1 ">
                            <?php
                            foreach($notices as $idx=>$notice){
                                if($idx==5) break;
                                if($idx==0) $noticeId=$notice['id'];
                            ?>
                            <div class="row hover-0">

                                <div class="col-2  border custom">
                                    <h4> <?=date_format(date_create($notice['start_date']), "d-m-Y")?> </h4>
                                </div>
                                <div class="col-10 border lr">
                                    <a href="/sjr-academy/notice/notice.php?id=<?=$notice['id']?>"><?=$notice['title']?></a>
                                </div>

                            </div>
                            <?php } ?>
                        </div>
                        <div class="feuters-middle-last">
                            <a href="notice/all_notice.php?id=<?=$noticeId?>">See All Notice</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mx-0">
                    <div class="fetures-right-main">
                        <div class="fetures-right-item">
                            <div class="fetures-right-item-head">
                                <img src="images/admission1.png" class="img-fluid" width="30" alt="">
                                <span> ONLINE ADMISSION</span>
                            </div>
                            <div class="fetures-right-item-body">
                            <?php foreach($classes as $class){ ?>
                                <div class="fetures-right-item-body-link ">
                                    <div class="link link-1 text-start">
                                        <a href="admission/admission.php?id=<?=$class['id']?>"><?=ucwords(strtolower($class['class_name'])) ?> Admission</a>
                                    </div>
                                </div>
                            <?php }?>
                            </div>
                        </div>
                        
                        <div class="feuters2-left-main super-copy">
                            <ul>
                                <li>
                                    <h4>
                                        <img src="images/copy.png" class="img-fluid" alt="">
                                        <span> OUR CLASSES</span>
                                    </h4>
                                </li>
                                <?PHP foreach($classes as $class){ ?>
                                    <li>
                                        <a href="class/class_details.php?id=<?=$class['id']?>">
                                            <img src="images/n.png" width="12" alt=""> <?=$class['class_name']?>
                                        </a>
                                    </li>
                                <?php } ?>   
                            </ul>
                            <div class="right-last">
                                <a href="#" class="btn">
                                    ALL CLASSES INFO
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- nav&tabs part goes here -->
    <section id="nav-tabs">
        <div class="container">
            <div class="nav-tabs-main">
                <ul class="nav nav-tabs d-flex justify-content-between" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#first" type="button" role="tab" aria-controls="home" aria-selected="true">
                                    <div class="button button1">
                                        <div class="btn-img ">
                                            <img src="images/navtab.png " class="img-fluid " alt=" ">
                                        </div>
                                        <div class="btn-text ">
                                          স্কুল ভবন
                                        </div>
                                    </div>
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#second" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    <div class="button button2">
                                        <div class="btn-img ">
                                            <img src="images/navtab.png2.png " class="img-fluid " alt=" ">
                                        </div>
                                        <div class="btn-text ">
                                            ক্রিড়া প্রতিযোগীতা
                                        </div>
                                    </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#third" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    <div class="button button2">
                                        <div class="btn-img ">
                                            <img src="images/navtab.png2.png3.png " class="img-fluid " alt=" ">
                                        </div>
                                        <div class="btn-text ">
                                            বিতর্ক প্রতিযোগীতা
                                        </div>
                                    </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#fourth" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    <div class="button button2">
                                        <div class="btn-img ">
                                            <img src="images/navtab.png2.png3.png4.png " class="img-fluid " alt=" ">
                                        </div>
                                        <div class="btn-text ">
                                          শ্রেণিকক্ষ
                                        </div>
                                    </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#fifth" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    <div class="button button2">
                                        <div class="btn-img ">
                                            <img src="images/navtab.png2.png3.png4.png5.png " class="img-fluid " alt=" ">
                                        </div>
                                        <div class="btn-text ">
                                            উন্নয়ন মুলক কাজ
                                        </div>
                                    </div>
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane custom  fade show active" id="first" role="tabpanel" aria-labelledby="home-tab">
                        <div class="nav-tabs-container ">
                            <div class="row">
                                <div class="col-lg-3 rounded">
                                    <img src="images/project/school1.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/school3.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/school1.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/school2.jpg" alt="" width="200px">
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="tab-pane fade custom" id="second" role="tabpanel" aria-labelledby="home-tab">
                        <div class="nav-tabs-container ">
                        <div class="row">
                                <div class="col-lg-3 rounded">
                                    <img src="images/project/sport1.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/sport2.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/sport1.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/sport2.jpg" alt="" width="200px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade custom" id="third" role="tabpanel" aria-labelledby="home-tab">
                        <div class="nav-tabs-container ">
                        <div class="row">
                                <div class="col-lg-3 rounded">
                                    <img src="images/project/debate1.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/debate3.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/debate1.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/debate2.jpg" alt="" width="200px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade custom" id="fourth" role="tabpanel" aria-labelledby="home-tab">
                        <div class="nav-tabs-container ">
                        <div class="row">
                                <div class="col-lg-3 rounded">
                                    <img src="images/project/classroom2.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/classroom3.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/classroom2.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/classroom3.jpg" alt="" width="200px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade custom" id="fifth" role="tabpanel" aria-labelledby="home-tab">
                        <div class="nav-tabs-container ">
                        <div class="row">
                                <div class="col-lg-3 rounded">
                                    <img src="images/project/dev1.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/dev3.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/dev1.jpg" alt="" width="200px">
                                </div>
                                <div class="col-lg-3">
                                    <img src="images/project/dev2.jpg" alt="" width="200px">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="ooo ">
                    <a href="#">  SEE ALL</a>
                </div>
            </div>
        </div>
    </section>
<?php
include 'dashboard/footer.php';
?>