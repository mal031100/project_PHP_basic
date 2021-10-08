<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <a href="user/view_insert" class="btn btn-warning" style="margin-bottom: 10px;">Add User</a>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>username</th>
                </thead>
                <?php 
                if(isset($data["result"])){
                    if($data["result"]=="true"){ ?>
                        <h3 class="alert alert-success">
                            <?php echo "Delete success" ?>
                        </h3>
                   <?php }
                   else { ?>
                       <h3 class="alert alert-warning">
                           <?php echo "Delete error" ?>
                       </h3>
                  <?php }
                }
            ?>
                <tbody>
                    <?php
                        $i=1;
                            while ($user = mysqli_fetch_array($data["user"])){ ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $user["username"]; ?></td>
                                    <th><td><a href="user/edit/<?php echo $user["id"]; ?>" class="btn btn-primary">Edit</a></td></th>
                                    <th><td><a href="user/delete/<?php echo $user["id"]; ?>" class="btn btn-danger">Delete</a></td></th>
                                </tr>
                    <?php 
                       $i++; }
                    ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>