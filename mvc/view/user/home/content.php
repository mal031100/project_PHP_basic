<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">   
            <!-- <div class="container position-relative px-4 px-lg-5" >
                
            </div> -->
</header>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <?php 
                while ($tin = mysqli_fetch_array($data["content"]))
                {?>
                <div class="col-lg-12">
                    <h3><?php echo $tin["title"]; ?></h3>
                    <p><?php echo $tin["noi_dung"]; ?></p>
                </div>
                <?php
                }
                ?>
            </div>
        </div>