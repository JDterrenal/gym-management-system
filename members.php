<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./assets/style.css">
        
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">

        <!-- DATATABLE -->
        <link href="./assets/datatable/datatables.min.css" rel="stylesheet">

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <title>TRIPLE J FITNESS CENTER | Members</title>
    </head>

    <body>
        <div class="grid-container">
            <!-- Sidebar -->
            <?php include 'extension/sidebar.php'; ?>

            <!-- Main -->
            <main class="main-container" id="main-container">
                <div class="main-title">
                    <h2>MEMBERS LIST</h2>
                </div>

                <div class="table-button" style="display: flex; justify-content: end; ">
                    <button class="btn btn-success d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#AddMemberModal"><i class="material-icons-outlined" style="margin-right: 3px;">person_add</i>New Member</button>
                </div>

                <div class="table-container">
                    <table id="adminTable" class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th> 
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Birthday</th>
                                <th>Gender</th>
                                <th>Type</th>
                                <th>Membership Start</th>
                                <th>Membership End</th>
                                <th>Payment Status</th>
                                <th>Active Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Anna</td>
                                <td>Reyes</td>
                                <td>Santos</td>
                                <td>123 Maysan, Valenzuela City</td>
                                <td>09123456789</td>
                                <td>01/01/2000</td>
                                <td>Female</td>
                                <td>Regular</td>
                                <td>03/03/2024</td>
                                <td>04/03/2024</td>
                                <td>Paid</td>
                                <td>Active</td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center" style="column-gap: 3px;">
                                        <button name="view_btn" style="background: #3457D5" class="view_btn" data-bs-toggle="modal" data-bs-target=""><span class="material-icons-outlined">visibility</span></button>
                                        <button name="edit_btn" style="background: #ffc107" class="edit_btn" data-bs-toggle="modal" data-bs-target=""><span class="material-icons-outlined">edit</span></button>
                                        <button name="del_btn" style="background: #BA0021" class="del_btn" data-bs-toggle="modal" data-bs-target=""><span class="material-icons-outlined">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ADD MEMBER MODAL -->
                <div class="modal fade" id="AddMemberModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <?php include './modals/add_member.php';?>
                </div>
            </main>
        </div>

        <!-- CSS -->
        <style>
            th {
                align-items: center;
                vertical-align: middle;
                font-weight: 400;
            }

            td {
                align-items: center;
                vertical-align: middle;
            }

            .main-title h2 {
                font-weight: 700;
                padding-left: 1rem;
                margin-bottom: 0;
            }

            .table-button{
                padding-right: 1rem;
            }

            td button span{
                font-size: 1.4rem;
                color: white;
            }

            td button{
                border-radius: 4px;
                border: 0px;
            }
        </style>

        <!-- Javascript -->
        <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/jquery/jquery-3.6.0.min.js"></script>
        <script src="./assets/datatable/datatables.min.js"></script>
        <script src="./assets/table_misc/pdfmake.min.js"></script>
        
        <script>
            $(document).ready(function(){
                var table = $('.table').DataTable({
                    autoWidth: true
                });
            });
        </script>
    </body>
</html>