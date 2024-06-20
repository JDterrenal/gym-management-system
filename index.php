<html>
    <head>
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            .background {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: url(./images/loginBG.jpg);
                background-size: cover;
                filter: brightness(20%);
                z-index: -1;
            }
            .login-container {
                position: relative; 
                z-index: 1;
                background-color: white;
                padding: 20px; 
                width: 500px;
                border-radius: 1rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center

            }
            img {
                width: 200px;
            }
            input[type=text] {
                width: 100%;
                padding: 5px 5px;
                font-size: 1rem;
                font-family: "Poppins", sans-serif;
                border-radius: .5rem;
                border: 1px solid #808080;
            }
            .loginBTN {
                border: 1px solid #9a1c1f;
                background-color: #2e394b; 
                font-size: 1rem; 
                padding: 7px 20px; 
                font-family: 'Poppins', sans-serif;
                border-radius: .5rem;
                font-weight: 700;
                width: 100%;
                color: white;
                margin-bottom: 1.5rem;
            }
            .loginBTN:hover {
                background-color: #9a1c1f;
                transition: .2s ease-in;
                cursor: pointer;
            }
        </style>
    </head>
    <body style="margin: 0; display: flex; justify-content: center; align-items: center;">
        <div class="background"></div>
        <form method="post" id="loginForm">
            <div class="login-container">
                <img src="./images/logo gym.png">
                <div class="name-container" style="display: flex; flex-direction: column; width: 80%;">
                    <input type="text" id="name" name="usernameInput" placeholder="Enter Your Full Name">
                    <label style="color: #808080; margin-left: 4px; margin-bottom: 1.5rem; font-family: 'Poppins', sans-serif; font-size: .9rem;">* First name, Middle name, Last name</label>
                    <button type="submit" name="loginBtn" class="loginBTN">Log in</button>
                </div>
            </div>
        </form>
        <?php
            if(isset($_POST['loginBtn']) && isset($_POST['usernameInput'])) {
                $enteredUsername = $_POST['usernameInput'];
                if($enteredUsername === 'admin') {
                    echo '
                        <!-- Admin Modal -->
                        <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="adminModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="adminModalLabel">PASSWORD</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="display: flex; justify-content: center; align-items: center;">
                                <input type="password" id="password" name="password" style="width: 50%;">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script>
                            $(document).ready(function(){
                                $("#adminModal").modal("show");
                            });
                        </script>
                    ';
                }else if($enteredUsername === 'customer') {
                    echo '
                        <!-- Admin Modal -->
                        <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="adminModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="adminModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                You are logged in as cus.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script>
                            $(document).ready(function(){
                                $("#adminModal").modal("show");
                            });
                        </script>
                    ';
                }
            }
        ?>
    <!-- Javascript -->
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
