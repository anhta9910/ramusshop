<?php 
    //load template
    $this->layout = "Mvc/Backend/Views/Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=Backend&controller=Product&action=add" class="btn btn-primary">Add Product</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List Product</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Image</th>
                    <th>Title</th>
                    <th style="width: 200px;">Category</th>
                    <th style="width: 100px;">Price</th>
                    <th style="width: 100px;">Hot Product</th>
                    <th style="width: 100px;">Sales Product</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td>
                        <?php if($rows->img != "" && file_exists("Assets/Upload/Product/".$rows->img)): ?>
                            <img src="Assets/Upload/Product/<?php echo $rows->img; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td>
                        <?php 
                            $category = $this->modelGetCategory($rows->category_id);
                            echo isset($category->name)?$category->name:"";
                         ?>
                    </td>
                    <td>
                        <?php echo number_format($rows->price); ?>
                    </td>
                    <td style="text-align: center;">
                        <?php if($rows->hotproduct == 1): ?>
                        <span class="glyphicon glyphicon-check">V</span>
                        <?php endif; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php if($rows->salesproduct == 1): ?>
                        <span class="glyphicon glyphicon-check">V</span>
                        <?php endif; ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?area=Backend&controller=Product&action=edit&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;&nbsp;&nbsp;
                        <a href="index.php?area=Backend&controller=Product&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?area=Backend&controller=Product&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>