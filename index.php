<?php include('layouts/app.php') ?>



<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="fw-bold bg-dark p-3 text-white">Company workers</h2>
                        <a href="create.php" class="btn btn-info float-right">Create workers</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>contact</th>
                                    <th>address</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $conn = mysqli_connect('localhost','root','','company');
                                    $query = "SELECT * FROM workers";
                                    $query_run = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row['id'] ?></td>
                                                        <td><?php echo $row['name'] ?></td>
                                                        <td><?php echo $row['email'] ?></td>
                                                        <td><?php echo $row['contact'] ?></td>
                                                        <td><?php echo $row['address'] ?></td>
                                                        <td>
                                                            <a href="show.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary"> Show </a>
                                                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-success"> Edit </a>
                                                            <form action="code.php" method="post" style="display: inline-block;">
                                                                <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                                                <button type="submit" onclick="return confirm('Are you sure you want to Delete?');" class="btn btn-danger btn-sm" name="delete_btn"> Delete </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>