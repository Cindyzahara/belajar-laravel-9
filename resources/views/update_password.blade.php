<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Password</title>
</head>
<body>
    @method('patch')
    @csrf
    <form action="" method="post">
        <input type="password" name="new_password">
        <input type="password" name="new_password_confirmation">
        <button type="sumbit">Change</button>
    </form>
</body>
</html>