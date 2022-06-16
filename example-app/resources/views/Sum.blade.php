<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .form-group{
        width: 40%;
        height: 40%;
    }
</style>
</head>
<body>
<form method="post">
    @csrf
    <div class="form-group">
        <input type="number" class="form-control" placeholder="Number a..." name="soA">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="Number b..." name="soB">
    </div>
    <button type="submit" class="btn-btn-primary">Tinh</button>
    <div class="form-group">
        <input type="number" class="form-control"disabled="" value="<?php if(isset($sum)) echo $sum ?>">
    </div>
    </form>

</body>
</html>
