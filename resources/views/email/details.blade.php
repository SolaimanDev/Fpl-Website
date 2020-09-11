<!DOCTYPE html>
<html lang="en">
<head>
  <title>Email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="panel panel-success">
            <h2>{{$data['name']}}</h2>
            <div class="panel-heading">{{$data['email']}}</div>
            <div class="panel-body">
                <h3>{{$data['subject']}}</h3>
                <hr>

                 <p>{{$data['message']}}</p>


            </div>
            <div class="panel-footer">FPL Limited</div>
          </div>
        </div>
    </div>
</div>

</body>
</html>
