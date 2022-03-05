<?php

$conn = mysqli_connect('localhost','root','','company');


if(isset($_POST['insert_btn']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];

    $query = "INSERT INTO workers (name,email,contact,address) VALUES ('$name','$email','$contact','$address')";
    $query_run = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if($query_run)
    {
        header('location: index.php');
    }
    else
    {
        header('location: create.php');
    }

}

if(isset($_POST['update_btn']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $query = "UPDATE workers SET name='$name', email='$email', contact='$contact', address='$address' WHERE id='$id'";
    $query_run = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if($query_run)
    {
        header('location: index.php');
    }
    else
    {
        header('location: edit.php');
    }
}




if(isset($_POST['delete_btn']))
{
    $id = $_POST['id'];
    
    $query = "DELETE FROM workers WHERE ID='$id'";
    $query_run = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if($query_run)
    {
        header('location: index.php');
    }
    else
    {
        header('location: index.php');
    }
}





?>