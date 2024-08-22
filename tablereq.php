
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS LINK -->
    <link rel="stylesheet" href="../css/main.min.css">
    <!-- BOOTSTRAP ICON LINK -->
   
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.css">
    <!-- CSS LINK -->
    <link rel="stylesheet" href="../css/nstyle.css? ?>">
    <title>Print</title>
</head>

<body class="bg-light" id="print-page">

<?php
include_once'db.php';
//error_reporting(0);
     $e_id=$_GET['id'];
     if ($e_id != "") {
        # code...
     
$sql = "SELECT * FROM tasklist WHERE `id` = '$e_id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
$e_id = $row['id'];

}}}
?>


 <div class="my-2 toast-container position-fixed top-0 start-50 translate-middle-x" id="alert-messages"></div>
    <div class="container-fluid p-0 d-flex" style="overflow-x: hidden;">
     


        <div class="position-relative main-content" id="plot-content" style="width: 100%;">
            

            <div class="row g-2 px-3 my-1">
                <div class="col-12 col-lg-4">
                    <div class="card shadow-sm rounded-0 border-0">
                        <div class="card-header">
                            <strong>Task Management System</strong>
                        </div>
                        <div class="card-body">
                        <form action="Data.php" method="post">
                                <div class="my-2">
                              

<label for="">Date Posted</label>
<p style="font-size:30px; font-weight:300;"> <?php echo "'$posted'"; ?> </p>
<input type="hidden" class="form-control" name="id" value="<?php echo $e_id; ?>">

<label for="">Task in Particular</label>
<p style="font-size:30px; font-weight:300;"><?php echo "'$tas'"; ?></p>

<label for="">date Needed</label>
<p style="font-size:30px; font-weight:300;"><?php echo "'$Needed'"; ?></p>

<label for="">Create by</label>
<p style="font-size:30px; font-weight:300;"><?php echo "'$created'"; ?></p>

<label for="">Assigned to</label>
<p style="font-size:30px; font-weight:300;"><?php echo "'$Assigned'"; ?></p>


                                    <label class="form-label">Completion Rate</label>
                                    <input id="rate"
                                        class="text form-control"name="rate" value="<?php echo $rate; ?>">
                                    </input>
                                  
                              

<button  name="submit" class="btn btn-info"  >ADD </button>

                                </div>
                             
                                </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-0 border-0">
                        <div class="card-header">
                            <strong>Table</strong>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link nav-link-table active rounded-0 " id="section-tab"
                                        data-bs-toggle="tab" data-bs-target="#section-tab-pane" type="button"
                                        role="tab" aria-controls="section-tab-pane"
                                        aria-selected="true">Tasklist</button>
                                </li>
                        
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="my-2" id="print-timetable">
                                        <div class="my-2" id="print-section-timetable-teacher">
                                        <table class="table" align="center" style="width:100%; align-items:center; font-size:14px;">
    <tr>
        <th>Date Posted</th>
        <th>Task in Particular</th>
        <th>Date Needed</th>
        <th>Created by</th>
        <th>Assigned to</th>
        <th>Completion Rate</th>
        <th>Action</th>
    </tr>
    <?php
//error_reporting(0);


//echo "<tr><td>""</td>";
//echo "<td>""</td>";
//echo "<td>""</td>";
//echo "<td>""</td>";
//echo "<td>""</td>";
//echo "<td ><a class='button' href=index1.php?id=$e_id style='background:skyblue; border:black solid 1px; padding:5px;border-radius:10px; text-align:center; margin-left:10px;'>R</a> ""</td>";
//echo "<td><a class='button' href=delete.php?id=$e_id style='background:red; border:black solid 1px; padding:5px; border-radius:10px;'>&#128465</a> 
//<a class='button' href=index1.php?id=$e_id style='background:skyblue; border:black solid 1px; padding:5px;border-radius:10px; text-align:center; margin-top:10px;'>&#128394;</a></td>";

?>
</table>
                                        </div>

                                    


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="teacher-tab-pane-teacher" role="tabpanel"
                                    aria-labelledby="teacher-tab-teacher" tabindex="0">
                                    <div class="my-3 row justify-content-between">
                                        <div class="col-4 d-flex">
                                            <!-- <select class="form-select shadow-none rounded-0"
                                                id="print-select-teacher-teacher">
                                                <option value="">Select Teacher</option>
                                            </select> -->
                                           
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="my-2" id="print-timetable">
                                        <div class="my-2" id="print-teacher-timetable-teacher"></div>
                                        <button class="btn btn-danger" id="print-teacher-teacher">
                                                <!-- <i class="bi bi-arrow-down-square-fill mx-3 h1"></i> -->

                                                <b>Download File</b>
                                            </button>
                                    </div>
                                </div>
                                <!-- <div class="tab-pane fade" id="room-tab-pane" role="tabpanel" aria-labelledby="room-tab" tabindex="0">
                                    <div class="my-3 row justify-content-between">
                                        <div class="col-4 d-flex">
                                            <select class="form-select shadow-none rounded-0" id="print-select-room">
                                                <option value="">Select Room</option>
                                            </select>
                                            <button class="btn btn-success shadow-none rounded-0 mx-3" id="print-room">
                                                <i class="bi bi-printer"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="my-2" id="print-timetable">
                                        <div class="my-2" id="print-room-timetable"></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- BOOTSTRAP JS LINK -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- JQUERY JS LINK -->
    <script src="../js/jquery-3.6.4.min.js"></script>

</body>

</html>