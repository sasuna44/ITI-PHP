<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-6 regist-right-box px-5 py-5 text-center">
            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2 class="title">Register</h2>
                </div>
                <form id="register-form" action="data.php" method="POST">
                <div class="row p-0 m-0">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" id="first-name" placeholder="First Name">
                            <label class="" for="first-name">First Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" id="last-name" placeholder="Last Name">
                            <label for="last-name">Last Name</label>
                        </div>
                    </div>
                    <!-- textarea -->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Address</label>
                    </div>
                    <!-- country -->
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Select Country</option>
                            <option value="1">Egypt</option>
                            <option value="2">Canada</option>
                            <option value="3">USA</option>
                        </select>
                        <label for="floatingSelect">Country</label>
                    </div>

                    <!-- skills  -->
                    <div class="row text-start mb-3 mx-auto">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="PostgreeSQL" id="flexCheckDefault" name="PostgreeSQL">
                                <label class="form-check-label" for="flexCheckDefault">
                                    PostgreeSQL
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="J2SE" id="flexCheckDefault" name="J2SE">
                                <label class="form-check-label" for="flexCheckDefault">
                                    J2SE
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="PHP" id="flexCheckDefault" name="PHP">
                                <label class="form-check-label" for="flexCheckDefault">
                                    PHP
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="MYSQL" id="flexCheckDefault" name="MYSQL">
                                <label class="form-check-label" for="flexCheckDefault">
                                   MYSQL
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control form-control-lg bg-light fs-6" id="email" placeholder="enter your email address">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" id="password" placeholder="enter your password">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" id="department" placeholder="Open Source">
                    <label for="confirm-password">Department</label>
                </div>
                <div class="row">
                    <div class="col-6 text-start">
                        <div class="form-check mb-3">
                            <input class="form-radio-input" type="radio" value="MR." id="service-owner-checkbox" name="Male" >
                            <label class="form-radio-label m-0" for="service-owner-checkbox">
                                Male
                            </label>
                        </div>
                    </div>
                    <div class="col-6 text-start">
                        <div class="form-check mb-3">
                            <input class="form-radio-input" type="radio" value="MS." id="customer-checkbox" name="Female">
                            <label class="form-radio-label m-0" for="customer-checkbox">
                                Female 
                            </label>
                        </div>
                    </div>
                </div>
                <!-- skills  -->                
                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" id="login-btn">Submit</button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" id="reset-btn">Reset</button>
                        </div>
                    </div>
                </div>
</from>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        function validateForm() {
    
            var firstName = document.getElementById("first-name").value;
            var lastName = document.getElementById("last-name").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;

            if (firstName === "") {
                alert("Please enter your first name");
                return false;
            }
            if (lastName === "") {
                alert("Please enter your last name");
                return false;
            }
            if (email === "") {
                alert("Please enter your email address");
                return false;
            }
            if (password === "") {
                alert("Please enter a password");
                return false;
            }
            if (confirmPassword === "") {
                alert("Please confirm your password");
                return false;
            }
            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }

            return true;
        }

        document.getElementById("login-btn").addEventListener("click", function(event) {
            event.preventDefault(); 
            if (validateForm()) {
                document.getElementById("register-form").submit();
            }
        });
    </script>

</body>
</html>
