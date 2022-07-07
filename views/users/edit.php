<?php include_once './views/layouts/header.php';
include_once './views/layouts/sidebar.php'; ?>

<div class="content" style="background-color: #ffffff3b;">
        <div class="workplace">

            <div class="row-fluid">

                <div class="span12">
                    <div class="head">
                        <div class="isw-grid"></div>
                        <h1 class="text-center text-danger ">Sửa Đổi</h1>
                        <hr>
                        <div class="clear"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="block-fluid">
                                <div class="container">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="row-form">
                                                <div class="span3">Tên Máy</div>
                                                <div class="span9 "><input class="form-control shadow "required type="text" name="nameTB" placeholder="" style="width: 700px" /></div>
                                                <div class="clear"></div>
                                            </div>


                                            <div class="row-form">
                                                <div class="span3">Thông Số</div>
                                                <div class="span9"><textarea class="form-control shadow " required type="text" name="parameter" placeholder="" style="width: 700px"></textarea></div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="row-form">
                                                <div class="span3">Thể Loại</div>
                                                <select name="typeCode" id="">
                                                    <option value="1">Androi</option>
                                                    <option value="2">IOS</option>
                                                    <option value="3">Điện Thoại Phổ Thông</option>
                                                </select>
                                                
                                                <!-- <div class="span9"><textarea name="textarea" placeholder="Textarea field placeholder..."></textarea></div> -->
                                                <div class="clear"></div>
                                            </div>
                                            <div class="row-form">
                                                <div class="span3">Giá</div>
                                                <div class="span9"><input type="text" required class="form-control shadow " name="price" placeholder="" style="width: 700px" /></div>
                                                <!-- <div class="span9"><input type="file" name="file" size="19"></div> -->
                                                <div class="clear"></div>
                                            </div>
                                            <div class="row-form">
                                                <div class="span3">Nhà Cung Cấp</div>
                                                <select name="supplierID" id="">
                                                    <option value="1">Công Ty TNHH TSmobile</option>
                                                    <option value="2">Công Ty TNHH Một THành Viên Thương Mại Và Dịch Vụ ...</option>
                                                    <option value="3">Công Ty TNHH Thế Giới Di Động</option>
                                                    <option value="4">Công Ty TNHH Tin Học Mai Phương</option>
                                                </select>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="row-form mb-3">
                                                <div class="span3">Nhà Sản Xuất</div>
                                                <select name="producerID" id="">
                                                    <option value="1">Asus</option>
                                                    <option value="2">Samsung</option>
                                                    <option value="3">LG</option>
                                                    <option value="4">Apple</option>
                                                    <option value="5">Panasonic</option>
                                                    <option value="6">Xiaomi</option>
                                                    <option value="7">Lenovo</option>
                                                    <option value="8">Viettel</option>
                                                </select>
                                                <div class="clear"></div>
                                            </div>
                                            <!-- <div class="row-form mb-3">
                                                <div class="span3">Hình Ảnh</div>
                                                <div class="span9 ">
                                                <input type="file" name="image" class="form-control" placeholder="" >
                                                </div>
                                                <div class="clear"></div>
                                            </div> -->
                                            <div class="row-form">
                                                <button class="btn btn-success " type="submit">Sửa</button>
                                                
                                                <!-- <div class="clear" href="(route.php?controller=user&action=index)"></div> -->
                                                <div class="clear"></div>


                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php include_once './views/layouts/footer.php';?>