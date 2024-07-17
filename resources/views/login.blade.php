<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body{
        background-image: url("https://img.freepik.com/premium-vector/blue-digital-technology-background-with-white-building-logo-bank_666034-682.jpg");
        background-size: cover;
        background-position: center;
    }
    .box{
        background-color: transparent;
        backdrop-filter: blur(10px);
        box-shadow: -0.5rem -0.5rem 1rem white, 0.5rem 0.5rem 1rem black;
    }
</style>
<body class="d-flex justify-content-center align-items-center w-100 vh-100">
    <div class="box rounded p-3 w-50 text-light">
        <h1 class="text-center">Login</h1>
        <form action="/login" method="post">
            @csrf
            <table class="w-100">
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="name" class="form-control border-3 border-dark" autocomplete="off"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="password" class="form-control border-3 border-dark" autocomplete="off"></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <button class="btn btn-primary">Login</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <label>Don't have an account? <a href="/register">Register</a></label>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>