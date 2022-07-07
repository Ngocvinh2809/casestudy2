<?php 
include_once './views/layouts/header.php';
include_once './views/layouts/sidebar.php'; 
?>
<div class="">
    <div class="card">
        <div class="card-header " style="background-color: #ffffff3b;">
            <h1 class="text-center text-danger"> Danh sách sản phẩm</h1>
            <hr style="color: blue;">
            <div class="card-body">
                <div class="col-12">
                    <a class="btn btn-success mb-2 shadow " href="index.php?controller=user&action=add">
                        Thêm mới
                    </a>
                    <?php
                    // echo "<pre>"; print_r($products)
                    ?>
                    <table class="table table-bordered" border="1">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <!-- <th>Mã Thiết Bị</th> -->
                                <th>Tên Thiết Bị</th>
                                <th>Giá Bán</th>
                                <th>Nhà Cung Cấp</th>
                                <th>Nhà Sản Xuất</th>
                                <th>Hình Ảnh</th>
                                <th>Hoạt Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $key => $row) : ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo $row->nameTB ?></td>
                                    <td><?php echo $row->price ?></td>
                                    <td><?php echo $row->nameCC  ?></td>
                                    <td><?php echo $row->nameSX ?></td>
                                    <td><img src="<?= $row->image?>" width="150px" height="120px" alt=""></td>
                                    <td>
                                        <a href="index.php?controller=user&action=delete&id=<?php
                                        echo $row->id; ?>" class="btn btn-danger btn-sm shadow " onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                                        <a href="index.php?controller=user&action=edit&id=<?php
                                         echo $row->id; ?>" class="btn btn-primary btn-sm shadow ">Update</a>
                                    </td>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once './views/layouts/footer.php';?>