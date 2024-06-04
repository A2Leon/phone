    <html lang="en">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <center>
            <h1 class="mt-5">Phone register </h1>
            <a class="btn btn-outline-success" role="a" href="index.php">Name</a>
                <a class="btn btn-outline-danger" role="a" href="index.php">Display</a>
        </center>
        <?php
        error_reporting(1);
        include ("connection.php");
        extract($_POST);
        if ($save) {
            $img = $_FILES['img']['name'];
            $insertq = "insert into phonelist values('','$n','$b','$p','$ph','$img')";
            $con->query($insertq);
            mkdir("image/$n");
            move_uploaded_file($_FILES['img']['tmp_name'], "image/$n/" . $_FILES['img']['name']);
            header("location:display.php");
        }
        ?>




        <div class="row mt-3">
            <div class="col-4"></div>
            <div class="col-4">
                <form method="post" enctype="multipart/form-data">
                    <table class="table table-info">


                        <tr>
                            <td>Enter your Phone name</td>
                            <td><input type="text" required name="n"></td>



                        </tr>
                        <tr>
                            <td>Enter your Phone Brand</td>
                            <td><input type="text" required name="b"></td>



                        </tr>
                        <tr>
                            <td>Enter your Phone Price</td>
                            <td><input type="text" required name="p"></td>



                        </tr>
                        <tr>
                            <td>Enter your Phone number</td>
                            <td><input type="text" required name="ph"></td>



                        </tr>
                        <tr>
                            <td>Enter your Phone image</td>
                            <td><input type="file" required name="img"></td>



                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" class="btn btn-outline-dark" name="save" value="Insert Data">
                            </td>

                        </tr>
                    </table>
                </form>
            </div>

            <div class="col-4"></div>


        </div>
    </body>

    </html>