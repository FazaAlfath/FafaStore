<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/app.css">
    <title>Admin - Login</title>
</head>
<body>

<div id="form-wrap-admin" class="form-group">
    <form action="/login-verify" method="post" class="form-group">
    <input type="hidden" value="{{csrf_token()}}" name="_token">
    <div class="card card-header">Login</div>
        <label for="username">Username</label>
        <input type="username" id="username" class="form-control" name="username" autocomplete="off" required><br>

        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" autocomplete="off" required><br>

        <button type="submit" class="btn">Login</button>
    </form>
</div>
    
</body>
</html>