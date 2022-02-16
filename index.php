<?php
require_once "cal.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Calculator</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid col-md-6 mt-5">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First
                    Number</label>
                <input type="number" class="form-control" name="fNum">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Second
                    Number</label>
                <input type="number" class="form-control" name="sNum">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Choose
                    Operator</label>
                <select class="form-select" aria-label="Default select
                        example" name="cal">
                    <option selected>Open this select menu</option>
                    <option value="add"> + </option>
                    <option value="sub"> - </option>
                    <option value="mul"> * </option>
                    <option value="div"> / </option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="btnCal">Cal</button>
        </form>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>