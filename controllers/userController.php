<?php
include './models/userModel.php';
// include '/xampp/htdocs/phone/db.php';
class UserController
{
    public function index()
    {
        // echo "123";
        $objUserController = new UserModel();
        $products = $objUserController->all();
        include "views/users/index.php";
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nameTB = $_REQUEST['nameTB'];
            $parameter = $_REQUEST['parameter'];
            $typeCode = $_REQUEST['typeCode'];
            $price = $_REQUEST['price'];
            $supplierID = $_REQUEST['supplierID'];
            $producerID = $_REQUEST['producerID'];
            // print_r($_FILES);die();
            $unique_image = "";
            if (isset($_FILES['image'])) {
                $img = $_FILES['image']['name'];
                $tmp_img = $_FILES['image']['tmp_name'];
                $unique_image = "./image/upload/" . $img;
                move_uploaded_file($tmp_img, $unique_image);
            }
            // $tmp_name=$_FILES['avatar']['upload'];
            $UserModel = new UserModel();
            $UserModel->add($nameTB, $parameter, $typeCode, $price, $supplierID, $producerID, $unique_image);
            header('Location:index.php?controller=user&action=index');
        }
        include "views/users/add.php";
        // print_r($_FILES);die();

    }
    public function delete()
    {
        $id = $_REQUEST['id'];
        $objUserController = new UserModel();
        $objUserController->delete($id);
        header('location:index.php?controller=user&action=index');
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_REQUEST['id'];
            $objUserController = new UserModel();
            $rows = $objUserController->edit($_REQUEST);
            header('location:index.php?controller=user&action=index');
        }
        include "views/users/edit.php";
        // header('location:index.php?controller=user&action=index');
        // header('http://localhost:3000/views/users/edit.php');
    }
}
