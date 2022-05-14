<?php 
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Skelton</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php 
    echo $_SESSION['state_start'];
  ?>
  <!-- Button trigger modal -->
  <button type="button" class="button" data-toggle="modal" data-target="#start_modal">
                        เริ่มต้นใช้งาน
                    </button>


    <div class="modal fade" tabindex="-1" id="start_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" id="frm_product">
                    <div class="modal-header">
                        <h5 class="modal-title">รายละเอียดการจัดส่งสินค้า</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                        <div class="form-group">
                                <label for="inputState_start">ต้นทาง</label>
                                <select id="inputState_start" class="form-control" name ="inputState_start" required>
                                    <option selected>เลือกจังหวัด...</option>
                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                    <option value="กระบี่">กระบี่ </option>
                                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                    <option value="จันทบุรี">จันทบุรี</option>
                                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                    <option value="ชัยนาท">ชัยนาท </option>
                                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                                    <option value="ชุมพร">ชุมพร </option>
                                    <option value="ชลบุรี">ชลบุรี </option>
                                    <option value="เชียงใหม่">เชียงใหม่ </option>
                                    <option value="เชียงราย">เชียงราย </option>
                                    <option value="ตรัง">ตรัง </option>
                                    <option value="ตราด">ตราด </option>
                                    <option value="ตาก">ตาก </option>
                                    <option value="นครนายก">นครนายก </option>
                                    <option value="นครปฐม">นครปฐม </option>
                                    <option value="นครพนม">นครพนม </option>
                                    <option value="นครราชสีมา">นครราชสีมา </option>
                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                    <option value="นครสวรรค์">นครสวรรค์ </option>
                                    <option value="นราธิวาส">นราธิวาส </option>
                                    <option value="น่าน">น่าน </option>
                                    <option value="นนทบุรี">นนทบุรี </option>
                                    <option value="บึงกาฬ">บึงกาฬ</option>
                                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                    <option value="ปทุมธานี">ปทุมธานี </option>
                                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                    <option value="ปัตตานี">ปัตตานี </option>
                                    <option value="พะเยา">พะเยา </option>
                                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                    <option value="พังงา">พังงา </option>
                                    <option value="พิจิตร">พิจิตร </option>
                                    <option value="พิษณุโลก">พิษณุโลก </option>
                                    <option value="เพชรบุรี">เพชรบุรี </option>
                                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                    <option value="แพร่">แพร่ </option>
                                    <option value="พัทลุง">พัทลุง </option>
                                    <option value="ภูเก็ต">ภูเก็ต </option>
                                    <option value="มหาสารคาม">มหาสารคาม </option>
                                    <option value="มุกดาหาร">มุกดาหาร </option>
                                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                    <option value="ยโสธร">ยโสธร </option>
                                    <option value="ยะลา">ยะลา </option>
                                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                    <option value="ระนอง">ระนอง </option>
                                    <option value="ระยอง">ระยอง </option>
                                    <option value="ราชบุรี">ราชบุรี</option>
                                    <option value="ลพบุรี">ลพบุรี </option>
                                    <option value="ลำปาง">ลำปาง </option>
                                    <option value="ลำพูน">ลำพูน </option>
                                    <option value="เลย">เลย </option>
                                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                    <option value="สกลนคร">สกลนคร</option>
                                    <option value="สงขลา">สงขลา </option>
                                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                    <option value="สระแก้ว">สระแก้ว </option>
                                    <option value="สระบุรี">สระบุรี </option>
                                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                                    <option value="สุโขทัย">สุโขทัย </option>
                                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                    <option value="สุรินทร์">สุรินทร์ </option>
                                    <option value="สตูล">สตูล </option>
                                    <option value="หนองคาย">หนองคาย </option>
                                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                    <option value="อุดรธานี">อุดรธานี </option>
                                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                    <option value="อุทัยธานี">อุทัยธานี </option>
                                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                                    <option value="อ่างทอง">อ่างทอง </option>
                                    <option value="อื่นๆ">อื่นๆ</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="inputState_end">ปลายทาง</label>
                                <select id="inputState_end" class="form-control" required>
                                    <option selected>เลือกจังหวัด...</option>
                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                    <option value="กระบี่">กระบี่ </option>
                                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                    <option value="จันทบุรี">จันทบุรี</option>
                                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                    <option value="ชัยนาท">ชัยนาท </option>
                                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                                    <option value="ชุมพร">ชุมพร </option>
                                    <option value="ชลบุรี">ชลบุรี </option>
                                    <option value="เชียงใหม่">เชียงใหม่ </option>
                                    <option value="เชียงราย">เชียงราย </option>
                                    <option value="ตรัง">ตรัง </option>
                                    <option value="ตราด">ตราด </option>
                                    <option value="ตาก">ตาก </option>
                                    <option value="นครนายก">นครนายก </option>
                                    <option value="นครปฐม">นครปฐม </option>
                                    <option value="นครพนม">นครพนม </option>
                                    <option value="นครราชสีมา">นครราชสีมา </option>
                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                    <option value="นครสวรรค์">นครสวรรค์ </option>
                                    <option value="นราธิวาส">นราธิวาส </option>
                                    <option value="น่าน">น่าน </option>
                                    <option value="นนทบุรี">นนทบุรี </option>
                                    <option value="บึงกาฬ">บึงกาฬ</option>
                                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                    <option value="ปทุมธานี">ปทุมธานี </option>
                                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                    <option value="ปัตตานี">ปัตตานี </option>
                                    <option value="พะเยา">พะเยา </option>
                                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                    <option value="พังงา">พังงา </option>
                                    <option value="พิจิตร">พิจิตร </option>
                                    <option value="พิษณุโลก">พิษณุโลก </option>
                                    <option value="เพชรบุรี">เพชรบุรี </option>
                                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                    <option value="แพร่">แพร่ </option>
                                    <option value="พัทลุง">พัทลุง </option>
                                    <option value="ภูเก็ต">ภูเก็ต </option>
                                    <option value="มหาสารคาม">มหาสารคาม </option>
                                    <option value="มุกดาหาร">มุกดาหาร </option>
                                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                    <option value="ยโสธร">ยโสธร </option>
                                    <option value="ยะลา">ยะลา </option>
                                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                    <option value="ระนอง">ระนอง </option>
                                    <option value="ระยอง">ระยอง </option>
                                    <option value="ราชบุรี">ราชบุรี</option>
                                    <option value="ลพบุรี">ลพบุรี </option>
                                    <option value="ลำปาง">ลำปาง </option>
                                    <option value="ลำพูน">ลำพูน </option>
                                    <option value="เลย">เลย </option>
                                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                    <option value="สกลนคร">สกลนคร</option>
                                    <option value="สงขลา">สงขลา </option>
                                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                    <option value="สระแก้ว">สระแก้ว </option>
                                    <option value="สระบุรี">สระบุรี </option>
                                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                                    <option value="สุโขทัย">สุโขทัย </option>
                                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                    <option value="สุรินทร์">สุรินทร์ </option>
                                    <option value="สตูล">สตูล </option>
                                    <option value="หนองคาย">หนองคาย </option>
                                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                    <option value="อุดรธานี">อุดรธานี </option>
                                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                    <option value="อุทัยธานี">อุทัยธานี </option>
                                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                                    <option value="อ่างทอง">อ่างทอง </option>
                                    <option value="อื่นๆ">อื่นๆ</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for=".....-text" class="col-form-label">ประเภทการจัดส่ง (ทางเรือ &
                                    ทางอากาศ)</label>
                                <input type="text" class="form-control" id="deliver_type" required>
                            </div>

                            <div class="form-group type_product">
                                <label for="inputTypeproduct">ประเภทสินค้า</label>
                                <select id="inputTypeproduct" class="form-control">
                                    <option selected>ประเภทสินค้า...</option>
                                    <option value="ก๊าซบรรจุแท็งก์">ก๊าซบรรจุแท็งก์</option>
                                    <option value="ของเหลวบรรจุแท็งก์">ของเหลวบรรจุแท็งก์</option>
                                    <option value="ไข่สด">ไข่สด</option>
                                    <option
                                        value="เครื่องคอมพิวเตอร์ เครื่องปริ้นเตอร์ เครื่องจักรขนาดใหญ่ (ที่มีน้ำหนักเกิน 1,000 กิโลกรัม)"
                                        style="overflow: hidden;">
                                        เครื่องคอมพิวเตอร์ เครื่องปริ้นเตอร์ เครื่องจักรขนาดใหญ่ (ที่มีน้ำหนักเกิน 1,000
                                        กิโลกรัม)</option>
                                    <option value="เครื่องดื่มแอลกอฮอล์ เช่น สุรา เบียร์ ไวน์">เครื่องดื่มแอลกอฮอล์ เช่น
                                        สุรา เบียร์ ไวน์</option>
                                    <option value="เครื่องพลาสติดต่าง ๆ">เครื่องพลาสติดต่าง ๆ</option>
                                    <option value="โซดา เครื่องดื่มชูกำลัง">โซดา เครื่องดื่มชูกำลัง</option>
                                    <option value="ตู้คอนเทนเนอร์เปล่า">ตู้คอนเทนเนอร์เปล่า</option>
                                    <option value="ตู้คอนเทนเนอร์แบบแห้ง และแบบปรับอุณหภูมิขณะมีสินค้า">
                                        ตู้คอนเทนเนอร์แบบแห้ง และแบบปรับอุณหภูมิขณะมีสินค้า</option>
                                    <option value="โทรศัพท์มือถือ">โทรศัพท์มือถือ</option>
                                    <option value="น้ำมันเชื้อเพลิงบรรจุแท็งก์">น้ำมันเชื้อเพลิงบรรจุแท็งก์</option>
                                    <option value="บุหรี่">บุหรี่</option>
                                    <option value="ปุ๋ยหรือสารเคมีทั่วไปบรรจุถุง / กระสอบ / ถัง บรรจุในตู้คอนเทนเนอร์">
                                        ปุ๋ยหรือสารเคมีทั่วไปบรรจุถุง / กระสอบ / ถัง บรรจุในตู้คอนเทนเนอร์</option>
                                    <option
                                        value="ผลิตผลทางการเกษตร พืชไร่ พืชสมุนไพรต่าง ๆ ผลิตผลแปรรูปทั้งหมด(เฉพาะที่มีบรรจุภัณฑ์ห่อหุ้มสินค้า)">
                                        ผลิตผลทางการเกษตร พืชไร่ พืชสมุนไพรต่าง ๆ
                                        ผลิตผลแปรรูปทั้งหมด(เฉพาะที่มีบรรจุภัณฑ์ห่อหุ้มสินค้า)</option>
                                    <option value="ผัก ผลไม้ และสินค้าเทกองทุกชนิด">ผัก ผลไม้ และสินค้าเทกองทุกชนิด
                                    </option>
                                    <option value="พัสดุภัณฑ์">พัสดุภัณฑ์</option>
                                    <option value="ไม้แปรรูป">ไม้แปรรูป</option>
                                    <option value="ยางแผ่น/ยางถ้วย (ไม่รวมน้ำยาง)">ยางแผ่น/ยางถ้วย (ไม่รวมน้ำยาง)
                                    </option>
                                    <option value="ยารักษาโรคอุปกรณ์เครื่องมือแพทย์">ยารักษาโรคอุปกรณ์เครื่องมือแพทย์
                                    </option>
                                    <option value="รถจักรยาน และอะไหล่ชิ้นส่วน">รถจักรยาน และอะไหล่ชิ้นส่วน</option>
                                    <option value="รถที่ใช้เพื่อการเกษตรกรรมและอุตสาหกรรม">
                                        รถที่ใช้เพื่อการเกษตรกรรมและอุตสาหกรรม</option>
                                    <option value="สิ่งมีชีวิต สัตว์น้ำ ">สิ่งมีชีวิต สัตว์น้ำ </option>
                                    <option value="สิ่งมีชีวิตที่เป็นสัตว์เศรษฐกิจ(เฉพาะสัตว์น้ำ) เช่น กุ้ง หอย ปู ปลา">
                                        สิ่งมีชีวิตที่เป็นสัตว์เศรษฐกิจ(เฉพาะสัตว์น้ำ) เช่น กุ้ง หอย ปู ปลา</option>
                                    <option
                                        value="สิ่งมีชีวิตที่เป็นสัตว์เศรษฐกิจ(เฉพาะสัตว์บก) เช่น โค กระบือ ไก่ สุกร">
                                        สิ่งมีชีวิตที่เป็นสัตว์เศรษฐกิจ(เฉพาะสัตว์บก) เช่น โค กระบือ ไก่ สุกร</option>
                                    <option
                                        value="สินค้ากระจก แก้ว ขวดแก้ว เซรามิค สินค้าที่มีบรรจุภัณฑ์เป็นขวดแก้ว และสินค้าที่แตกหักง่าย">
                                        สินค้ากระจก แก้ว ขวดแก้ว เซรามิค สินค้าที่มีบรรจุภัณฑ์เป็นขวดแก้ว
                                        และสินค้าที่แตกหักง่าย</option>
                                    <option
                                        value="สินค้าเกษตรที่ไม่ใช่สินค้าสด บรรจุถุงหรือกระสอบ เช่น เมล็ดพืช เมล็ดกาแฟ">
                                        สินค้าเกษตรที่ไม่ใช่สินค้าสด บรรจุถุงหรือกระสอบ เช่น เมล็ดพืช เมล็ดกาแฟ</option>
                                    <option value="สินค้าแช่เย็นแช่แข็ง สินค้าควบคุมอุณหภูมิ">สินค้าแช่เย็นแช่แข็ง
                                        สินค้าควบคุมอุณหภูมิ</option>
                                    <option value="สินค้าตกแต่งบ้านเฟอร์นิเจอร์">สินค้าตกแต่งบ้านเฟอร์นิเจอร์</option>
                                    <option value="สินค้าทั่วไป และสินค้าเบ็ดเตล็ดอื่น ๆ">สินค้าทั่วไป
                                        และสินค้าเบ็ดเตล็ดอื่น ๆ</option>
                                    <option value="สินค้าที่ไม่ได้รับผลตอบแทน">สินค้าที่ไม่ได้รับผลตอบแทน</option>
                                    <option value="สินค้าทุกประเภทที่บรรจุอยู่บนยานพาหนะพื้นเรียบ">
                                        สินค้าทุกประเภทที่บรรจุอยู่บนยานพาหนะพื้นเรียบ</option>
                                    <option
                                        value="สินค้าประเภทรถยนต์ทุกชนิด (รถเก่ง, รถกระบะ) รถจักรยานยนต์ พาหนะขับเคลื่อนด้วยตัวเองทุกชนิด">
                                        สินค้าประเภทรถยนต์ทุกชนิด (รถเก่ง, รถกระบะ) รถจักรยานยนต์
                                        พาหนะขับเคลื่อนด้วยตัวเองทุกชนิด</option>
                                    <option
                                        value="สินค้าเป็นสิ่งของที่ใช้แล้ว สิ่งของที่ส่งซ่อม และสิ่งของเครื่องใช้ส่วนตัว">
                                        สินค้าเป็นสิ่งของที่ใช้แล้ว สิ่งของที่ส่งซ่อม และสิ่งของเครื่องใช้ส่วนตัว
                                    </option>
                                    <option
                                        value="สินค้าอุปโภค-บริโภค ผลิตภัณฑ์อาหารแปรรูป สินค้าโชห่วย (เครื่องอุปโภคที่ใช้ในชีวิตประจำวัน)">
                                        สินค้าอุปโภค-บริโภค ผลิตภัณฑ์อาหารแปรรูป สินค้าโชห่วย
                                        (เครื่องอุปโภคที่ใช้ในชีวิตประจำวัน)</option>
                                    <option value="เสื้อผ้า อุปกรณ์เครื่องแต่งกาย สิ่งทอใยสังเคราะห์หนังสัตว์">เสื้อผ้า
                                        อุปกรณ์เครื่องแต่งกาย สิ่งทอใยสังเคราะห์หนังสัตว์</option>
                                    <option value="อะไหล่เครื่องจักร">อะไหล่เครื่องจักร</option>
                                    <option value="อะไหล่ชิ้นส่วนรถจักรยานยนต์">อะไหล่ชิ้นส่วนรถจักรยานยนต์</option>
                                    <option value="อะไหล่รถยนต์ น้ำมันหล่อลื่นบรรจุถังหรือแกลลอน">อะไหล่รถยนต์
                                        น้ำมันหล่อลื่นบรรจุถังหรือแกลลอน</option>
                                    <option value="อาหารทะเลสด">อาหารทะเลสด</option>
                                    <option value="อาหารสด">อาหารสด</option>
                                    <option value="อาหารสัตว์สำเร็จรูปบรรจุในถุง">อาหารสัตว์สำเร็จรูปบรรจุในถุง</option>
                                    <option value="อุปกรณ์การเรียนการสอน">อุปกรณ์การเรียนการสอน</option>
                                    <option value="อุปกรณ์เครื่องใช้ไฟฟ้า ชิ้นส่วนอิเล็กทรอนิกส์">อุปกรณ์เครื่องใช้ไฟฟ้า
                                        ชิ้นส่วนอิเล็กทรอนิกส์</option>
                                    <option
                                        value="อุปกรณ์ช่าง โลหะ เหล็ก วัสดุอุปกรณ์ก่อสร้าง ปูนซีเมนต์บรรจุถุง ปูนซีเมนต์ผสมเสร็จ ยางมะตอยมีบรรจุภัณฑ์">
                                        อุปกรณ์ช่าง โลหะ เหล็ก วัสดุอุปกรณ์ก่อสร้าง ปูนซีเมนต์บรรจุถุง
                                        ปูนซีเมนต์ผสมเสร็จ ยางมะตอยมีบรรจุภัณฑ์</option>
                                    <option value="อุปกรณ์ทางการแพทย์">อุปกรณ์ทางการแพทย์</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for=".....-text" class="col-form-label">ราคาสินค้าโดยประมาณ</label>
                                <input type="text" class="form-control" id="price_product" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btn-sub" value="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

      <!-- Modal
      <div class="modal fade" id="startmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">รายละเอียดการจัดส่งสินค้า</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="frminsurance">

                            <div class="form-group">
                                <label for="inputState_start">ต้นทาง</label>
                                <select id="inputState_start" class="form-control">
                                    <option selected>เลือกจังหวัด...</option>
                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                    <option value="กระบี่">กระบี่ </option>
                                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                    <option value="จันทบุรี">จันทบุรี</option>
                                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                    <option value="ชัยนาท">ชัยนาท </option>
                                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                                    <option value="ชุมพร">ชุมพร </option>
                                    <option value="ชลบุรี">ชลบุรี </option>
                                    <option value="เชียงใหม่">เชียงใหม่ </option>
                                    <option value="เชียงราย">เชียงราย </option>
                                    <option value="ตรัง">ตรัง </option>
                                    <option value="ตราด">ตราด </option>
                                    <option value="ตาก">ตาก </option>
                                    <option value="นครนายก">นครนายก </option>
                                    <option value="นครปฐม">นครปฐม </option>
                                    <option value="นครพนม">นครพนม </option>
                                    <option value="นครราชสีมา">นครราชสีมา </option>
                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                    <option value="นครสวรรค์">นครสวรรค์ </option>
                                    <option value="นราธิวาส">นราธิวาส </option>
                                    <option value="น่าน">น่าน </option>
                                    <option value="นนทบุรี">นนทบุรี </option>
                                    <option value="บึงกาฬ">บึงกาฬ</option>
                                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                    <option value="ปทุมธานี">ปทุมธานี </option>
                                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                    <option value="ปัตตานี">ปัตตานี </option>
                                    <option value="พะเยา">พะเยา </option>
                                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                    <option value="พังงา">พังงา </option>
                                    <option value="พิจิตร">พิจิตร </option>
                                    <option value="พิษณุโลก">พิษณุโลก </option>
                                    <option value="เพชรบุรี">เพชรบุรี </option>
                                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                    <option value="แพร่">แพร่ </option>
                                    <option value="พัทลุง">พัทลุง </option>
                                    <option value="ภูเก็ต">ภูเก็ต </option>
                                    <option value="มหาสารคาม">มหาสารคาม </option>
                                    <option value="มุกดาหาร">มุกดาหาร </option>
                                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                    <option value="ยโสธร">ยโสธร </option>
                                    <option value="ยะลา">ยะลา </option>
                                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                    <option value="ระนอง">ระนอง </option>
                                    <option value="ระยอง">ระยอง </option>
                                    <option value="ราชบุรี">ราชบุรี</option>
                                    <option value="ลพบุรี">ลพบุรี </option>
                                    <option value="ลำปาง">ลำปาง </option>
                                    <option value="ลำพูน">ลำพูน </option>
                                    <option value="เลย">เลย </option>
                                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                    <option value="สกลนคร">สกลนคร</option>
                                    <option value="สงขลา">สงขลา </option>
                                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                    <option value="สระแก้ว">สระแก้ว </option>
                                    <option value="สระบุรี">สระบุรี </option>
                                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                                    <option value="สุโขทัย">สุโขทัย </option>
                                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                    <option value="สุรินทร์">สุรินทร์ </option>
                                    <option value="สตูล">สตูล </option>
                                    <option value="หนองคาย">หนองคาย </option>
                                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                    <option value="อุดรธานี">อุดรธานี </option>
                                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                    <option value="อุทัยธานี">อุทัยธานี </option>
                                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                                    <option value="อ่างทอง">อ่างทอง </option>
                                    <option value="อื่นๆ">อื่นๆ</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="inputState_end">ปลายทาง</label>
                                <select id="inputState_end" class="form-control">
                                    <option selected>เลือกจังหวัด...</option>
                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                    <option value="กระบี่">กระบี่ </option>
                                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                    <option value="จันทบุรี">จันทบุรี</option>
                                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                    <option value="ชัยนาท">ชัยนาท </option>
                                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                                    <option value="ชุมพร">ชุมพร </option>
                                    <option value="ชลบุรี">ชลบุรี </option>
                                    <option value="เชียงใหม่">เชียงใหม่ </option>
                                    <option value="เชียงราย">เชียงราย </option>
                                    <option value="ตรัง">ตรัง </option>
                                    <option value="ตราด">ตราด </option>
                                    <option value="ตาก">ตาก </option>
                                    <option value="นครนายก">นครนายก </option>
                                    <option value="นครปฐม">นครปฐม </option>
                                    <option value="นครพนม">นครพนม </option>
                                    <option value="นครราชสีมา">นครราชสีมา </option>
                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                    <option value="นครสวรรค์">นครสวรรค์ </option>
                                    <option value="นราธิวาส">นราธิวาส </option>
                                    <option value="น่าน">น่าน </option>
                                    <option value="นนทบุรี">นนทบุรี </option>
                                    <option value="บึงกาฬ">บึงกาฬ</option>
                                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                    <option value="ปทุมธานี">ปทุมธานี </option>
                                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                    <option value="ปัตตานี">ปัตตานี </option>
                                    <option value="พะเยา">พะเยา </option>
                                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                    <option value="พังงา">พังงา </option>
                                    <option value="พิจิตร">พิจิตร </option>
                                    <option value="พิษณุโลก">พิษณุโลก </option>
                                    <option value="เพชรบุรี">เพชรบุรี </option>
                                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                    <option value="แพร่">แพร่ </option>
                                    <option value="พัทลุง">พัทลุง </option>
                                    <option value="ภูเก็ต">ภูเก็ต </option>
                                    <option value="มหาสารคาม">มหาสารคาม </option>
                                    <option value="มุกดาหาร">มุกดาหาร </option>
                                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                    <option value="ยโสธร">ยโสธร </option>
                                    <option value="ยะลา">ยะลา </option>
                                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                    <option value="ระนอง">ระนอง </option>
                                    <option value="ระยอง">ระยอง </option>
                                    <option value="ราชบุรี">ราชบุรี</option>
                                    <option value="ลพบุรี">ลพบุรี </option>
                                    <option value="ลำปาง">ลำปาง </option>
                                    <option value="ลำพูน">ลำพูน </option>
                                    <option value="เลย">เลย </option>
                                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                    <option value="สกลนคร">สกลนคร</option>
                                    <option value="สงขลา">สงขลา </option>
                                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                    <option value="สระแก้ว">สระแก้ว </option>
                                    <option value="สระบุรี">สระบุรี </option>
                                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                                    <option value="สุโขทัย">สุโขทัย </option>
                                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                    <option value="สุรินทร์">สุรินทร์ </option>
                                    <option value="สตูล">สตูล </option>
                                    <option value="หนองคาย">หนองคาย </option>
                                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                    <option value="อุดรธานี">อุดรธานี </option>
                                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                    <option value="อุทัยธานี">อุทัยธานี </option>
                                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                                    <option value="อ่างทอง">อ่างทอง </option>
                                    <option value="อื่นๆ">อื่นๆ</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for=".....-text" class="col-form-label">ประเภทการจัดส่ง (ทางเรือ &
                                    ทางอากาศ)</label>
                                <input type="text" class="form-control" id=".....">
                            </div>

                            <div class="form-group type_product">
                                <label for="inputTypeproduct">ประเภทสินค้า</label>
                                <select id="inputTypeproduct" class="form-control">
                                    <option selected>ประเภทสินค้า...</option>
                                    <option value="ก๊าซบรรจุแท็งก์">ก๊าซบรรจุแท็งก์</option>
                                    <option value="ของเหลวบรรจุแท็งก์">ของเหลวบรรจุแท็งก์</option>
                                    <option value="ไข่สด">ไข่สด</option>
                                    <option
                                        value="เครื่องคอมพิวเตอร์ เครื่องปริ้นเตอร์ เครื่องจักรขนาดใหญ่ (ที่มีน้ำหนักเกิน 1,000 กิโลกรัม)"
                                        style="overflow: hidden;">
                                        เครื่องคอมพิวเตอร์ เครื่องปริ้นเตอร์ เครื่องจักรขนาดใหญ่ (ที่มีน้ำหนักเกิน 1,000
                                        กิโลกรัม)</option>
                                    <option value="เครื่องดื่มแอลกอฮอล์ เช่น สุรา เบียร์ ไวน์">เครื่องดื่มแอลกอฮอล์ เช่น
                                        สุรา เบียร์ ไวน์</option>
                                    <option value="เครื่องพลาสติดต่าง ๆ">เครื่องพลาสติดต่าง ๆ</option>
                                    <option value="โซดา เครื่องดื่มชูกำลัง">โซดา เครื่องดื่มชูกำลัง</option>
                                    <option value="ตู้คอนเทนเนอร์เปล่า">ตู้คอนเทนเนอร์เปล่า</option>
                                    <option value="ตู้คอนเทนเนอร์แบบแห้ง และแบบปรับอุณหภูมิขณะมีสินค้า">
                                        ตู้คอนเทนเนอร์แบบแห้ง และแบบปรับอุณหภูมิขณะมีสินค้า</option>
                                    <option value="โทรศัพท์มือถือ">โทรศัพท์มือถือ</option>
                                    <option value="น้ำมันเชื้อเพลิงบรรจุแท็งก์">น้ำมันเชื้อเพลิงบรรจุแท็งก์</option>
                                    <option value="บุหรี่">บุหรี่</option>
                                    <option value="ปุ๋ยหรือสารเคมีทั่วไปบรรจุถุง / กระสอบ / ถัง บรรจุในตู้คอนเทนเนอร์">
                                        ปุ๋ยหรือสารเคมีทั่วไปบรรจุถุง / กระสอบ / ถัง บรรจุในตู้คอนเทนเนอร์</option>
                                    <option
                                        value="ผลิตผลทางการเกษตร พืชไร่ พืชสมุนไพรต่าง ๆ ผลิตผลแปรรูปทั้งหมด(เฉพาะที่มีบรรจุภัณฑ์ห่อหุ้มสินค้า)">
                                        ผลิตผลทางการเกษตร พืชไร่ พืชสมุนไพรต่าง ๆ
                                        ผลิตผลแปรรูปทั้งหมด(เฉพาะที่มีบรรจุภัณฑ์ห่อหุ้มสินค้า)</option>
                                    <option value="ผัก ผลไม้ และสินค้าเทกองทุกชนิด">ผัก ผลไม้ และสินค้าเทกองทุกชนิด
                                    </option>
                                    <option value="พัสดุภัณฑ์">พัสดุภัณฑ์</option>
                                    <option value="ไม้แปรรูป">ไม้แปรรูป</option>
                                    <option value="ยางแผ่น/ยางถ้วย (ไม่รวมน้ำยาง)">ยางแผ่น/ยางถ้วย (ไม่รวมน้ำยาง)
                                    </option>
                                    <option value="ยารักษาโรคอุปกรณ์เครื่องมือแพทย์">ยารักษาโรคอุปกรณ์เครื่องมือแพทย์
                                    </option>
                                    <option value="รถจักรยาน และอะไหล่ชิ้นส่วน">รถจักรยาน และอะไหล่ชิ้นส่วน</option>
                                    <option value="รถที่ใช้เพื่อการเกษตรกรรมและอุตสาหกรรม">
                                        รถที่ใช้เพื่อการเกษตรกรรมและอุตสาหกรรม</option>
                                    <option value="สิ่งมีชีวิต สัตว์น้ำ ">สิ่งมีชีวิต สัตว์น้ำ </option>
                                    <option value="สิ่งมีชีวิตที่เป็นสัตว์เศรษฐกิจ(เฉพาะสัตว์น้ำ) เช่น กุ้ง หอย ปู ปลา">
                                        สิ่งมีชีวิตที่เป็นสัตว์เศรษฐกิจ(เฉพาะสัตว์น้ำ) เช่น กุ้ง หอย ปู ปลา</option>
                                    <option
                                        value="สิ่งมีชีวิตที่เป็นสัตว์เศรษฐกิจ(เฉพาะสัตว์บก) เช่น โค กระบือ ไก่ สุกร">
                                        สิ่งมีชีวิตที่เป็นสัตว์เศรษฐกิจ(เฉพาะสัตว์บก) เช่น โค กระบือ ไก่ สุกร</option>
                                    <option
                                        value="สินค้ากระจก แก้ว ขวดแก้ว เซรามิค สินค้าที่มีบรรจุภัณฑ์เป็นขวดแก้ว และสินค้าที่แตกหักง่าย">
                                        สินค้ากระจก แก้ว ขวดแก้ว เซรามิค สินค้าที่มีบรรจุภัณฑ์เป็นขวดแก้ว
                                        และสินค้าที่แตกหักง่าย</option>
                                    <option
                                        value="สินค้าเกษตรที่ไม่ใช่สินค้าสด บรรจุถุงหรือกระสอบ เช่น เมล็ดพืช เมล็ดกาแฟ">
                                        สินค้าเกษตรที่ไม่ใช่สินค้าสด บรรจุถุงหรือกระสอบ เช่น เมล็ดพืช เมล็ดกาแฟ</option>
                                    <option value="สินค้าแช่เย็นแช่แข็ง สินค้าควบคุมอุณหภูมิ">สินค้าแช่เย็นแช่แข็ง
                                        สินค้าควบคุมอุณหภูมิ</option>
                                    <option value="สินค้าตกแต่งบ้านเฟอร์นิเจอร์">สินค้าตกแต่งบ้านเฟอร์นิเจอร์</option>
                                    <option value="สินค้าทั่วไป และสินค้าเบ็ดเตล็ดอื่น ๆ">สินค้าทั่วไป
                                        และสินค้าเบ็ดเตล็ดอื่น ๆ</option>
                                    <option value="สินค้าที่ไม่ได้รับผลตอบแทน">สินค้าที่ไม่ได้รับผลตอบแทน</option>
                                    <option value="สินค้าทุกประเภทที่บรรจุอยู่บนยานพาหนะพื้นเรียบ">
                                        สินค้าทุกประเภทที่บรรจุอยู่บนยานพาหนะพื้นเรียบ</option>
                                    <option
                                        value="สินค้าประเภทรถยนต์ทุกชนิด (รถเก่ง, รถกระบะ) รถจักรยานยนต์ พาหนะขับเคลื่อนด้วยตัวเองทุกชนิด">
                                        สินค้าประเภทรถยนต์ทุกชนิด (รถเก่ง, รถกระบะ) รถจักรยานยนต์
                                        พาหนะขับเคลื่อนด้วยตัวเองทุกชนิด</option>
                                    <option
                                        value="สินค้าเป็นสิ่งของที่ใช้แล้ว สิ่งของที่ส่งซ่อม และสิ่งของเครื่องใช้ส่วนตัว">
                                        สินค้าเป็นสิ่งของที่ใช้แล้ว สิ่งของที่ส่งซ่อม และสิ่งของเครื่องใช้ส่วนตัว
                                    </option>
                                    <option
                                        value="สินค้าอุปโภค-บริโภค ผลิตภัณฑ์อาหารแปรรูป สินค้าโชห่วย (เครื่องอุปโภคที่ใช้ในชีวิตประจำวัน)">
                                        สินค้าอุปโภค-บริโภค ผลิตภัณฑ์อาหารแปรรูป สินค้าโชห่วย
                                        (เครื่องอุปโภคที่ใช้ในชีวิตประจำวัน)</option>
                                    <option value="เสื้อผ้า อุปกรณ์เครื่องแต่งกาย สิ่งทอใยสังเคราะห์หนังสัตว์">เสื้อผ้า
                                        อุปกรณ์เครื่องแต่งกาย สิ่งทอใยสังเคราะห์หนังสัตว์</option>
                                    <option value="อะไหล่เครื่องจักร">อะไหล่เครื่องจักร</option>
                                    <option value="อะไหล่ชิ้นส่วนรถจักรยานยนต์">อะไหล่ชิ้นส่วนรถจักรยานยนต์</option>
                                    <option value="อะไหล่รถยนต์ น้ำมันหล่อลื่นบรรจุถังหรือแกลลอน">อะไหล่รถยนต์
                                        น้ำมันหล่อลื่นบรรจุถังหรือแกลลอน</option>
                                    <option value="อาหารทะเลสด">อาหารทะเลสด</option>
                                    <option value="อาหารสด">อาหารสด</option>
                                    <option value="อาหารสัตว์สำเร็จรูปบรรจุในถุง">อาหารสัตว์สำเร็จรูปบรรจุในถุง</option>
                                    <option value="อุปกรณ์การเรียนการสอน">อุปกรณ์การเรียนการสอน</option>
                                    <option value="อุปกรณ์เครื่องใช้ไฟฟ้า ชิ้นส่วนอิเล็กทรอนิกส์">อุปกรณ์เครื่องใช้ไฟฟ้า
                                        ชิ้นส่วนอิเล็กทรอนิกส์</option>
                                    <option
                                        value="อุปกรณ์ช่าง โลหะ เหล็ก วัสดุอุปกรณ์ก่อสร้าง ปูนซีเมนต์บรรจุถุง ปูนซีเมนต์ผสมเสร็จ ยางมะตอยมีบรรจุภัณฑ์">
                                        อุปกรณ์ช่าง โลหะ เหล็ก วัสดุอุปกรณ์ก่อสร้าง ปูนซีเมนต์บรรจุถุง
                                        ปูนซีเมนต์ผสมเสร็จ ยางมะตอยมีบรรจุภัณฑ์</option>
                                    <option value="อุปกรณ์ทางการแพทย์">อุปกรณ์ทางการแพทย์</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for=".....-text" class="col-form-label">ราคาสินค้าโดยประมาณ</label>
                                <input type="text" class="form-control" id=".....">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-success" value="submit" name="btn-sub">ตรวจสอบ</button>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            console.log("Function ready!");
            
            $("#frm_product").submit(function(e){
                console.log("information submit");
                event.preventDefault();
                $.ajax({
                    url: "information.php",
                    type: "POST",
                    data: $('form#frminsurance').serialize(),
                    success: function(data){
                        console.log("Success", data);
                        location.reload();
                    },
                    error: function(data){
                        console.log("An error occurred.");
                        console.log(data);
                    },
                });
            });
        });
    </script>

  </body>
</html>