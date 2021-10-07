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
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ten loai tin</th>
                </thead>
                <tbody>
                    <?php
                        $i=1;
                            while ($loai_tin = mysqli_fetch_array($data["loai_tin"])){ ?>
                                 <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $loai_tin["ten_loai"]; ?></td>
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