<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/php-board/project/connect/connect.php';

if($dbConnection){
    echo "연결성공";
}else{
    echo "Connection failed: " . $dbConnection->connect_error ;
};


$postcode = $_POST['postcode'];
$address = $_POST['address'];
$detailAddress = $_POST['detailAddress'];
$extraAddress = $_POST['extraAddress'];
var_dump($addrNum, $address);


$AddrArray = {'postcode': $postcode, 'address': $address,'detailAddress': $detailAddress,'extraAddress': $extraAddress};

/*
$sql = "INSERT INTO member(member_address) VALUES('$AddrArray[0]')";

$result = $dbConnection->query($sql);

if ($result) {
    echo "<script>alert('회원가입이 되었습니다.'); location.href='../login.php';</script>";
} else 
    echo "<script> error_reporting(E_ALL);
     					 ini_set('display_errors', 1);
						</script>";
} 
*/
?>