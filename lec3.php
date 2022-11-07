<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-8">
                <div class="card shadow">
                    <div class="card-header text-bg-denger">
                        <h3>Daynemic html table generator</h3>
                    </div>
                    <div class="card-body">
                        <form action="submit/table.php" method="post">
                            <div class="form-floating mb-3">
                                <input required type="number" class="form-control" id="row" placeholder="Rows" name="row">
                                <label for="row">Rows</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input required type="number" class="form-control" id="column" placeholder="Column" name="column">
                                <label for="column">Column</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input required type="text" class="form-control" id="message" placeholder="message" name="message">
                                <label for="message">Message</label>
                            </div>
                            <div class="form-check">
                                <input required class="form-check-input" type="radio" name="loop" id="while" value="while">
                                <label class="form-check-label" for="while">While loop</label>
                            </div>
                            <div class="form-check">
                                <input required class="form-check-input" type="radio" name="loop" id="forloop" value="for">
                                <label class="form-check-label" for="forloop">For loop</label>
                            </div>
                            <div class="form-check mb-3">
                                <input required class="form-check-input" type="radio" name="loop" id="dowhile" value="dowhile">
                                <label class="form-check-label" for="dowhile">Do while loop</label>
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Generate HTML table</button>
                            <button type="reset" class="btn btn-danger">clear all</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>