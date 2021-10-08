<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        <a href="loai_tin/index" class="btn btn-success" style="margin-top: 10px;">Back</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">

                <?php 
                    while ($loai_tin = mysqli_fetch_array($data["edit"])){?>
                        <form action="loai_tin/update/<?php echo  $loai_tin["id"]; ?>" method="POST">
                            <div class="form-group">
                                <label for="">Trademark</label>
                                <input type="text" name="loai_tin" id="" class="form-control" placeholder="Trademark" value="
                                <?php echo $loai_tin["ten_loai"]; ?>
                                ">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="form-comtrol btn btn-warning"  value="update">
                            </div>
                        </form>
                <?php    }
                ?>

            
            <?php 
                if(isset($data["result"])){
                    if($data["result"]=="true"){ ?>
                        <h3 class="alert alert-success">
                            <?php echo "update success" ?>
                        </h3>
                   <?php }
                   else { ?>
                       <h3 class="alert alert-warning">
                           <?php echo "update error" ?>
                       </h3>
                  <?php }
                }
            ?>
        </div>
    </div>
</div>

</div>