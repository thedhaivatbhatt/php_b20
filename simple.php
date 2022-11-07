<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <div class="card-header bg-primary text-light">
                        <h2>
                            Simple intrest
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="form1.php" method="POST" name="myform">
                            <div class="mb-3">
                                <label for="amount" class="form-label">Enter your income </label>
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter your amount">
                            </div>
                            <div class="mb-3">
                                <label for="intrest" class="form-label">Enter Rate of intrest </label>
                                <input type="number" class="form-control" id="intrest" name="intrest" placeholder="Enter your Intrest rate">
                            </div>
                            <div class="mb-3">
                                <label for="year" class="form-label">Enter your Year </label>
                                <input type="number" class="form-control" id="year" name="year" placeholder="Enter your year">
                            </div>
                            <div class="text-end">
                                <input type="submit" value="Clac intrest" class="btn btn-danger">
                                <input type="reset" value="Clear all" class="btn btn-primary">
                            </div>
                            <div class="text-center">
                                <p>
                                    Your intrest is : <?php echo $_REQUEST['answer']; ?>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>