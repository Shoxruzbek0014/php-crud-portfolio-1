<?php include('layouts/app.php'); ?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="fw-bold bg-dark p-3 text-white">Show company workers</h2>
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($_GET['id']))
                            {
                                $conn = mysqli_connect('localhost','root','','company');
                                $id = $_GET['id'];
                                $query = "SELECT * FROM workers where id='$id'";
                                $query_run = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $row)
                                    {
                                        ?>
                                                <form method="POST" action="code.php">
                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email address</label>
                                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="contact">Contact</label>
                                                        <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $row['contact']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']; ?>">
                                                    </div>
                                                    <a href="index.php" class="btn btn-secondary float-right">back</a>
                                                </form>
                                        <?php
                                    }
                                }
                            }
                        ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>