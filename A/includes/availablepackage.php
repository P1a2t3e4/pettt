<div class="container wow fadeInDown" style=" height:500px;">
    <div class="col-md-12" style="border: solid #D9D9D9 1px; padding: 10px; padding-top: 5px; box-shadow: #9F9F9F 2px 3px 5px; margin-top: 10px;">
        <div class="panel panel-success">
            <div class="panel-heading panel-title" >
                <span style="font-weight:bold; font-family:verdana;"><i class="glyphicon glyphicon-cog"></i> Pets </span>
            </div>
            <div class="panel-body" style="background-color:#fff;">
                <div class="col-lg-3">
                    <em style="color:red;">Note: Fields with (*) are required</em>
                </div>
                <div class="col-lg-6">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td style="text-align:right; font-weight:bold;">Animal name* : &emsp;</td>
                                <td style="text-align:center;">&emsp; <textarea class="form-control" name="cnpname" required></textarea></td>
                            </tr>
                            <tr>
                                <td style="text-align:right;font-weight:bold;">Origin Story* : &emsp;</td>
                                <td style="text-align:center;">&emsp; <textarea class="form-control" name="des" required></textarea></td>
                            </tr>
                            <tr>
                                <td style="text-align:right;font-weight:bold;">Image* : &emsp;</td>
                                <td style="text-align:center;">&emsp; <input type="file" name="image" required /></td>
                            </tr>
                            <tr>
                                <td style="text-align:right;font-weight:bold;">Status* : &emsp;</td>
                                <td style="text-align:center;">&emsp; 
                                    <select name="stat" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="available">Available</option>
                                        <option value="un-available">Un-Available</option>
                                    </select>
                                </td>
                            </tr>
                            <tr style="margin-top:20px;">
                                <td style="text-align:right;font-weight:bold;" colspan="2"><br /><p></p>
                                    <button class="btn btn-default" type="reset">Clear</button>
                                    <button class="btn btn-success" type="submit" name="save">Save</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</div>

<?php 
include('includes/dbconn.php');
if (isset($_POST['save'])) {
    // Get form data
    $name = mysqli_real_escape_string($con, $_POST['cnpname']);
    $des = mysqli_real_escape_string($con, $_POST['des']);
    $stat = mysqli_real_escape_string($con, $_POST['stat']);
    $quant = 1; // Quantity is always set to 1

    // Image upload logic
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);

        // Validate image size (Optional)
        if ($image_size[0] > 3000 || $image_size[1] > 3000) {
            echo '<script>alert("Image size is too large. Please upload an image with dimensions less than 3000x3000.");
                window.location.href="addcnp.php";</script>';
            exit();
        }

        // Move uploaded image to the correct location
        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
        $location = "upload/" . $_FILES["image"]["name"];
    } else {
        echo '<script>alert("Please select a valid image file.");
            window.location.href="addcnp.php";</script>';
        exit();
    }

    // Check if any required fields are empty
    if (empty($name) || empty($des) || empty($stat) || empty($location)) {
        echo '<script>alert("Fields with (*) are required.");
            window.location.href="addcnp.php";</script>';
    } else {
        // Insert new pet record into the database
        $sql = "INSERT INTO pet (name, quant, description, image, status) 
                VALUES ('$name', '$quant', '$des', '$location', '$stat')";
        
        $result = mysqli_query($con, $sql);
        
        if ($result) {
            echo '<script>alert("Saved successfully!");
                window.location.href="addcnp.php";</script>';
        } else {
            echo '<script>alert("Error: ' . mysqli_error($con) . '");
                window.location.href="addcnp.php";</script>';
        }
    }
}
?>
