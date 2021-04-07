<?php 
    //ket thua layout1.php de load vao day
    $this->layout = "Mvc/Backend/Views/Layout.php";
 ?>                  
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=Backend&controller=Order&action=sent&id=<?php echo $id; ?>" class="btn btn-primary">Xác nhận đã giao hàng</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Chi tiết đơn hàng</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="width: 100px;"><img src="Assets/Upload/Product/<?php echo $rows->img; ?>" style="width:100px;"></td>
                    <td><?php echo $rows->name; ?></td>
                    <th><?php echo number_format($rows->price); ?></th>
                    <th><?php echo $rows->number; ?></th>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>