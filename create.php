<?php include('layouts/app.php'); ?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="fw-bold bg-dark p-3 text-white">Create company workers</h2>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="code.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <button type="submit" class="btn btn-info" name="insert_btn">create workers</button>
                        <a href="index.php" class="btn btn-secondary float-right">back</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>