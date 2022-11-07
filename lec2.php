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
          <div class="card-header bg-danger text-light">
            <h2>Area clac</h2>
          </div>
          <div class="card-body">
            <form action="form2.php" method="GET" name="myform">
              <div class="mb-3">
                <label for="height" class="form-label">Enter Height </label>
                <input type="number" class="form-control" id="height" name="height" placeholder="Enter your height">
              </div>
              <div class="mb-3">
                <label for="base" class="form-label">Enter Base</label>
                <input type="number" class="form-control" id="base" name="base" placeholder="Enter your base">
              </div>
              <div class="text-end">
                <input type="submit" value="Calc area" name='btnsubmit' class="btn btn-danger">
                <input type="reset" value="Clear all" class="btn btn-primary">
              </div>
              <div class="text-center">
                <p>
                  Area of triangle is : <?php echo $_REQUEST['area']; ?>
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