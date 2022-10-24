<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD with Bootstrap Modal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>    
<!-- Modal -->
    <div class="modal fade" id="studentAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Student data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <form action="insertcode.php" method="POST">
            <div class="modal-body">
                <div class="form-group">
                        <label > First Name </label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label > Last Name </label>
                        <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label > Course </label>
                        <input type="text" name="course" class="form-control" placeholder="Enter Course">
                    </div>
                    <div class="form-group">
                        <label > Phone Number </label>
                        <input type="number" name="contact" class="form-control" placeholder="Enter Phone Number">
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insertData" class="btn btn-primary">Save Data</button>
            </div>
        </form>

        </div>
    </div>
    </div>
    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <div class="" style="text-align: center;">
                    <h2>PHP CRUD Bootstrap Modal (POP UP Modal)</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentAddModal">Add Data</button>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <?php
                        $connection = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($connection, 'phpcrud');

                        $query = "SELECT * FROM student";
                        $query_run = mysqli_query($connection, $query);
                        
                    ?>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Contact No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if($query_run){
                            foreach ($query_run as $row) {
                                echo "<tr>";
                                    echo "<th> ". $row['id'] ." </th>";
                                    echo "<td> ". $row['fname'] ." </td>";
                                    echo "<td> ". $row['lname'] ." </td>";
                                    echo "<td> ". $row['course'] ." </td>";
                                    echo "<td> ". $row['contact'] ." </td>";
                                echo "</tr>";
                            }
                        }else{
                            echo "No Record Found";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>