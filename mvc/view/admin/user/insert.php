<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        <a href="user/index" class="btn btn-success" style="margin-top: 10px;">Back</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="user/insert" method="POST">
                <div class="form-group">
                    <label for="">username</label>
                    <input type="text" name="username" id="" class="form-control" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="password">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="form-comtrol btn btn-warning"  value="add">
                </div>
            </form>
            <?php 
                if(isset($data["result"])){
                    if($data["result"]=="true"){ ?>
                        <h3 class="alert alert-success">
                            <?php echo "add success" ?>
                        </h3>
                   <?php }
                   else { ?>
                       <h3 class="alert alert-warning">
                           <?php echo "add error" ?>
                       </h3>
                  <?php }
                }
            ?>
        </div>
    </div>
</div>

</div>