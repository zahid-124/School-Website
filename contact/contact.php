<?php
require '../dashboard/header.php';
require '../db_connect.php';
#class query
$classQuery="SELECT * FROM classes";
$classes=mysqli_query($db_connect, $classQuery);
?>
 <section id="contact" class="mt-2">
     <div class="container">
         <div class="row ">
             <div class="col-lg-8">
                <div class="contact-head">
                    <p>আমাদের সাথে সরাসরি যোগাযোগ করুন</p>
                </div>
                <div class="table">
                    <table>
                        <tr>
                            <td class="one"><i class="fas fa-users"></i></td>
                            <td class="two">ব্যবহারকারীর ধরণ</td>
                            <td class="three"><select name="" class="select">
                                <option value="">ব্যবহারকারীর ধরণ নির্বাচণ করুন  </option>
                                <option value="অভিভাবক">অভিভাবক</option>
                                <option value="শিক্ষার্থী ">শিক্ষার্থী </option>
                                <option value="অন্যান্য">অন্যান্য</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td class="one"><i class="fas fa-user"></i></td>
                            <td class="two">আপনার নাম</td>
                            <td class="three"><input type="text" class="select"></td>
                        </tr>
                        <tr>
                            <td class="one"><i class="fas fa-envelope"></i></td>
                            <td class="two">আপনার ইমেইল আইডি(Email ID)</td>
                            <td class="three"><input type="email" class="select"></td>
                        </tr>
                        <tr>
                            <td class="one"><i class="fas fa-mobile"></i></td>
                            <td class="two">Mobile No.</td>
                            <td class="three"><input type="number" class="select"></td>
                        </tr>
                        <tr>
                            <td class="one"><i class="fas fa-comment-dots"></i></td>
                            <td class="two">আপনার বার্তা</td>
                            <td class="three"><textarea  name="" class="textarea"></textarea></td>
                        </tr>
                        <tr>
                            <td class="one"></td>
                            <td class="two"> <button type="submit" class="sub-btn">Sent Messege</button> </td>
                            <td class="three"></td>
                        </tr>
                        
                       
                    </table>
                </div>
             </div>
             <div class="col-lg-4">
                 <div class="contact-right">
                     <div class="contact-right-head">
                         <p>Contact Information</p>
                     </div>
                     <div class="contact-right-body">
                         <p><i class="fas fa-map-marker"></i>Address: Road No. 1, Namapara, Trishal, Mymenshingh.</p>
                         <p><i class="fas fa-phone"></i>Phone: +88-02-00000000</p>
                         <p><i class="fas fa-fax"></i>Fax: +88-02-11111111</p>
                         <p><i class="fas fa-envelope"></i>Email: sjr.academy@gmail.com</p>
                         <div class="contact-map">
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="340" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=jatiya%20kabi%20kazi%20&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:300px;width:340px;}</style><a href="https://www.embedgooglemap.net">google embedded</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:340px;}</style></div></div>
                           </div>
                     </div>
                 </div>
             </div>
         </div>  
     </div>
 </section>
 <section id="contact-main" class="mb-2">
     <div class="container">
        <div class="contact-main-head">
            <h3>বিভিন্ন শ্রেণীর মোবাইল নম্বরসমূহ</h3>
        </div>
        <div class="contact-main-body">
            <table class="contact-body-table">
                <tr>
                    <th class="width">ক্রমিক</th>
                    <th class="width1">শ্রেণীর নাম</th>
                    <th class="width2">মোবাইল নং</th>
                </tr>
                <?php
                foreach($classes as $idx=>$class){
                ?>
                <tr>
                    <td><?=$idx+1?></td>
                    <td class="td text-center"><?=$class['class_name']?></td>
                    <td><?=$class['phone']?></td>
                </tr>
                <?php }?>
            </table>
        </div>
     </div>
 </section>
<?php
require '../dashboard/footer.php';
?>