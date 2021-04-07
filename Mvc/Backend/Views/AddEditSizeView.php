<?php 
    //load template
    $this->layout = "Mvc/Backend/Views/Layout.php";
 ?>
<div class="col-md-12">  
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="font-size: 25px;">Size</div>
                            <div class="panel-body">
                            <form method="post" action="<?php echo $formAction; ?>">
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Name</div>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php echo isset($record)?$record->name:''; ?>" name="name" class="form-control" required>
                                    </div>
                                </div>
                                
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="submit" value="Process" class="btn btn-primary">
                                    </div>
                                </div>
                                <!-- end rows -->
                            </form>
                            </div>
                        </div>
                    </div>