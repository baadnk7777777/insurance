<?php 
    session_start();
    $output = "";
    include_once('config.php');

    $inputState_start = $_POST['inputState_start'];
    $inputState_end = $_POST['inputState_end'];
    $deliver_type = $_POST['deliver_type'];
    $inputTypeproduct = $_POST['inputTypeproduct'];
    $price = $_POST['price'];

    $_SESSION['inputTypeproduct'] = $inputTypeproduct;
    $_SESSION['price'] = $price;

    var_dump($inputState_start);
    var_dump($inputState_end);
    var_dump($deliver_type);
    var_dump($inputTypeproduct);
    var_dump($price);

    // SELECT c.company_name,c.company_link, d.cost 
    // FROM company c ,insurance_detail d
    // WHERE EXISTS(SELECT d.company_id 
    // WHERE (d.prod_id=**** AND d.insurance_amount =****  AND c.company_id = d.company_id) 
    // OR( d.prod_id=6 AND d.insurance_amount =****  AND c.company_id = d.company_id))
    // ORDER BY d.cost LIMIT 5;


?>