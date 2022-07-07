<?php
include "db.php";
class UserModel
{
    public function all()
    {
        // echo "1234";
        global $conn;
        $sql = "SELECT device.id, device.nameTB,device.parameter,device.price,device.image,producer.nameSX,supplier.nameCC 
        FROM device JOIN producer ON device.producerID=producer.id 
        JOIN supplier ON device.supplierID=supplier.id;";
        $stmt = $conn->query($sql);
        //thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function add($nameTB, $parameter, $typeCode, $price, $supplierID, $producerID, $image)
    {
        global $conn;
        $sql = "INSERT INTO `device`
        VALUES ('','$nameTB','$parameter','$typeCode','$price','$supplierID','$producerID',' $image');";
    //    echo $sql ;die();
        $conn->exec($sql);
        $stmt = $conn->query($sql);
        // //thiết lập kiểu dữ liệu trả về
        // $stmt->setFetchMode(PDO::FETCH_OBJ);
        // $rows = $stmt->fetchAll();
    }
    public function delete($id)
    {
        global $conn;
        //lay du lieu tren url

        //cau query
        $sql = "DELETE FROM device WHERE `device`.`id` = $id";

        //check sql
        // var_dump($sql);
        // $sql = "SELECT * FROM books";

        //thuc hien truy van
        $conn->exec($sql);
    }
    public function edit($data)
    {
        global $conn;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $data['id'];
            $nameTB = $data['nameTB'];
            $parameter = $data['parameter'];
            $typeCode = $data['typeCode'];
            $price = $data['price'];
            $supplierID = $data['supplierID'];
            $producerID = $data['producerID'];
            $sql = "UPDATE `device` SET `nameTB`='$nameTB',
            `parameter`='$parameter',`typeCode`='$typeCode',`price`='$price',
            `supplierID`='$supplierID',`producerID`='$producerID' WHERE `device`.`id` = '$id'";
            $stmt = $conn->query($sql);
            //thiết lập kiểu dữ liệu trả về
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->fetch();
            // var_dump($sql);
            // $conn->exec($sql);
        }
    }
}
