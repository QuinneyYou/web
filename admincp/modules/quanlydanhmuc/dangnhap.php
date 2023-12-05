<?php
session_start();

// Include your database connection file if needed
// include "templates/connect.php";

// Simulate user authentication logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace this with your actual authentication logic
    // In a real scenario, you would check against a database.
    // If authentication is successful, set the user in the session.
    if ($username === 'user' && $password === 'password') {
        $_SESSION['current-user'] = [
            'TaiKhoan' => $username,
            // Add other user details if needed
        ];
        echo json_encode(['status' => 1, 'message' => 'Login successful']);
        exit;
    } else {
        echo json_encode(['status' => 0, 'message' => 'Invalid username or password']);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/phone/logo.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>3TN - Apple Shop</title>

    <!-- CSS -->
    <!-- Add your CSS links here -->

</head>

<body>
    <section class="banner-area organic-breadcrumb">
        <!-- Your banner content here -->
    </section>

    <?php if (empty($_SESSION['current-user'])): ?>
        <!-- Login form section -->
        <section class="login_box_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Your login box image and content here -->
                    </div>
                    <div class="col-lg-6">
                        <div class="login_form_inner">
                            <h3>Đăng nhập vào trang web</h3>
                            <form class="row login_form" id="login">
                                <div class="col-md-12 form-group">
                                    <input type="text" required class="form-control" id="username" name="username" placeholder="Tên đăng nhập" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tên đăng nhập'">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="password" required class="form-control" id="password" name="password" placeholder="Mật khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mật khẩu'">
                                </div>
                                <div class="mt-4 col-md-12 form-group">
                                    <input type="submit" value="Đăng nhập" name="submit" class="primary-btn"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Your script to handle form submission -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#login").submit(function(e) {
                    e.preventDefault()

                    username = $("#username").val()
                    password = $("#password").val()

                    $.ajax({
                        type: "POST",
                        url: "login.php",
                        dataType: "json",
                        data: {
                            username: username,
                            password: password,
                        },
                        success: function (data) {
                            if (data.status == 1) {
                                alert(data.message);
                                window.location.reload()
                            } else {
                                alert(data.message);
                            }
                        }
                    })
                })
            })
        </script>
    <?php else:
        // Redirect the user to the appropriate page based on their role
        $currentUser = $_SESSION['current-user'];
        if ($currentUser['MaQuyen'] == 1) {
            header("Location: admin/pages/dashboard.php");
        } else {
            header("Location: index.php");
        }
    endif; ?>

    <!-- Other scripts and content -->
    <!-- Add your other scripts and HTML content here -->

</body>

</html>