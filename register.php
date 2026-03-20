<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="col-md-5 mx-auto">

        <div class="card p-4 shadow">
            <h4 class="text-center mb-3">Registration Form</h4>

            <form action="send.php" method="post">

                <input type="text" class="form-control mb-3" name="name" placeholder="Enter Name" required>

                <input type="email" class="form-control mb-3" name="email" placeholder="Enter Email" required>

                <input type="password" class="form-control mb-3" name="password" placeholder="Enter Password" required>

                <select class="form-select mb-3" name="city" required>
                    <option value="">Select City</option>
                    <option>Delhi</option>
                    <option>Mumbai</option>
                    <option>Bangalore</option>
                    <option>Chandigarh</option>
                </select>

                <button type="submit" class="btn btn-success w-100 mb-2">Register</button>

                <a href="login.php" class="btn btn-outline-primary w-100">Login</a>

            </form>
        </div>

    </div>
</div>

</body>

</html>