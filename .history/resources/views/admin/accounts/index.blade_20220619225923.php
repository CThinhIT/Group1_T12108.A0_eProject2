<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="{{route('account.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">User Name:</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="">Password:</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="">Role:</label>
                <select name="role" id="" class="form-control">
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>