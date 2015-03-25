<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">


    <title>Authentification</title>
</head>
<body>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" method="post" action="../../admin.php">
            <fieldset>

            <!-- Form Name -->
            <legend><h2>Authentification</h2></legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Login">Login</label>
              <div class="col-md-4">
              <input id="login" name="login" type="text" placeholder="" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="password">Password</label>
              <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">

              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="log"></label>
              <div class="col-md-4">
                <button id="log" name="log" class="btn btn-primary">Valider</button>
              </div>
            </div>

            </fieldset>
            </form>
        </div>
    </div>

</body>
</html>