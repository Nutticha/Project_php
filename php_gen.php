<?php

    include 'query/connect.php';
    require("fpdf/fpdf.php");

    // LOAD DATA FROM DB
    $sql = "select member.m_fname , member.m_lname , product.p_name from member inner join product on member.m_id = 2 and product.m_id = 2";
    $load = $con->query($sql);
    $invoice_num = rand(10,100);

    define ('FDPF_FONTPATH','fdpf/font/');

    $pdf = new FPDF('P','mm','A4');

    // สร้างหน้าใหม่
    $pdf->AddPage();

    // ตั้งค่าฟอนต์
    $pdf->AddFont('angsa','','angsa.php');
    $pdf->SetFont('angsa','',14);

    // ตั้งค่าสีพื้นหลังของตาราง
    $pdf->setFillColor(227,227,227);

    //แทรกรูปโลโก้
    $pdf->Image('http://www.digitalagemag.com/wp-content/uploads/2019/11/ms-edge-1024x683.jpg',10,10,20,0,'JPG');
    
    // แทรกข้อความ
    $pdf->Text(15,30,"Train");
    $pdf->Text(15,35,iconv('UTF-8','TIS-620',"หอพักชาย มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ"));
    $pdf->Text(15,40,iconv('UTF-8','TIS-620',"129 หมู่ 21 ตำบลเนินหอม อำเภอเมืองปราจีนบุรี"));
    $pdf->Text(15,45,iconv('UTF-8','TIS-620',"จังหวัดปราจีนบุรี 25230"));
    if($name = $load->fetch_assoc()){
        $pdf->Text(10,72,iconv('UTF-8','TIS-620','ออกใบเสร็จให้กับคุณ : ' .$name['m_fname'] . ' '.$name['m_lname']));
    }

    $pdf->Text(160,15,iconv('UTF-8','TIS-620','สร้างเมื่อวันที่ : ').date("d-F-Y"));
    $pdf->Text(160,23,iconv('UTF-8','TIS-620','รหัสใบเสร็จ : '.$invoice_num));

    // แทรกช่อง
    // ช่องนี้ไว้เว้นระยะห่างจากด้านบน
    $pdf->cell(190,50,"",0,1,"C");

    // ช่องนี้ที่ทำสีเทาๆ
    $pdf->cell(190,5,"",0,1,"C",1);
    
    //ช่องเว้นระยะห่างจากสีเทาๆกับตาราง
    $pdf->cell(190,15,"",0,1,"C");

    // ช่องส่วนหัวของตาราง
    $pdf->cell(10,10,iconv('UTF-8','TIS-620','ลำดับ'),1,0,'C');
    $pdf->cell(120,10,iconv('UTF-8','TIS-620','รายการ'),1,0,'C');
    $pdf->cell(30,10,iconv('UTF-8','TIS-620','จำนวน'),1,0,'C');
    $pdf->cell(30,10,iconv('UTF-8','TIS-620','ราคา'),1,1,'C');
    $count = 1;
    $sql = "select member.m_fname , member.m_lname , product.p_name from member inner join product on member.m_id = 2 and product.m_id = 2";
    $load = $con->query($sql);
    $total = 0;
    while($data = $load->fetch_assoc()){
        $pdf->cell(10,10,$count,1,0,'C');
        $pdf->cell(120,10,iconv('UTF-8','TIS-620',$data['p_name']),1,0,'C');
        $pdf->cell(30,10,20,1,0,'C');
        $pdf->cell(30,10,15*20,1,1,'C');
        $count++;
    }
    
    $pdf->cell(160,10,iconv('UTF-8','TIS-620','รวมเป็นเงิน'),1,0,'C',1);
    $pdf->cell(30,10,600,1,1,'C');

    // เพิ่มช่องว่าระหว่างตารางหลักกับตารางชำระเงิน
    $pdf->cell(190,30,'',0,1,'C');

    // เพิ่มส่วนของตารางชำระเงิน
    $pdf->cell(190,10,iconv('UTF-8','TIS-620','ช่องทางการชำระเงิน'),1,1,'C',1);
    $pdf->cell(20,20,'',1,0,'C');
    $pdf->cell(170,20,iconv('UTF-8','TIS-620','โอนผ่านช่องทางธนาคารกสิกรไทย : 052-3-54128-5'),1,1,'C');
    $pdf->cell(20,20,'',1,0,'C');
    $pdf->cell(170,20,iconv('UTF-8','TIS-620','โอนผ่านช่องทางพร้อมเพย์ : 065-0757849'),1,1,'C');
    $pdf->MultiCell(190,7,iconv('UTF-8','TIS-620','หากลูกค้าทำการโอนเงินเสร็จแล้ว กรุณาแจ้งการชำระเงินในส่วนของเว็บไซต์หน้าแจ้งการชำระเงิน หากลูกค้าทำการแจ้งชำระเงินสำเร็จแล้วทางเราจะดำเนินการตรวจสอบความถูกต้องภายใน 24 ชั่วโมง ทางเราจะส่งสินค้าให้กับลูกค้าทันทีเมื่อสถานะการชำระเงินผ่านแล้ว ลูกค้าจะได้รับสินค้าที่สั่งหลังจากสถานะการชำระเงินผ่านประมาณ 2-3 วันทำการ ขอบคุณที่ไว้ใจเรา'),1,'L');


    // แทรกรูปโลโก้ธนาคาร
    $pdf->Image('https://i.pinimg.com/originals/a0/3c/f5/a03cf5e37b4b1d0b376ad04a6b39e0b3.png',14,153.8,12,0,'PNG');
    // แทรกรูปโลโก้พร้อมเพย์
    $pdf->Image('https://blog.loga.app/wp-content/uploads/2019/07/payment.png',12,175,16,0,'PNG');

    // แทรกข้อความข้างล่างหงะ
    $pdf->Text(95,293,"COMMON CINEMA");


    // บันทึก pdf
    $pdf->OutPut();