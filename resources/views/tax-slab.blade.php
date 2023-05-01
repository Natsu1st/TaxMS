<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{asset('cssFile/styles.min.css')}}">
<link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
<link rel="icon" type="image/x-icon" href="img/favicon.ico"/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500;700&family=Inter:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet"> 

<title>TMS</title>

<meta name="title" content="TMS">

</head>

<body class=" dashboard ">
    <x-sidebar></x-sidebar>
        <div class="inner">
            
<div class="text-block">
    <h1>Tax Slab</h1>
</div>
<h3>Ummaried Person</h3>
<table class="table table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th scope="col">Tax Banding</th>
            <th scope="col"> Income  </th>
            <th scope="col"> Tax Rate  </th>
              </tr>
       
    </thead>
    <tbody>
        <tr>
           <td> <input class="form-control" type="text" placeholder="Band 1"</td>
            <td><input class="form-control" type="text" placeholder="500,000"</td>
            <td><input class="form-control" type="text" placeholder="1%"</td>
        </tr>
        <tr>
           <td> <input class="form-control" type="text" placeholder="Band 2"</td>
            <td><input class="form-control" type="text" placeholder="200,000"</td>
            <td><input class="form-control" type="text" placeholder="10%"</td>
        </tr>
         <tr>
            <td> <input class="form-control" type="text" placeholder="Band 3"</td>
            <td><input class="form-control" type="text" placeholder="300,000"</td>
            <td><input class="form-control" type="text" placeholder="20%"</td>
        </tr>
         <tr>
             <td> <input class="form-control" type="text" placeholder="Band 4"</td>
            <td><input class="form-control" type="text" placeholder="10,000,000"</td>
            <td><input class="form-control" type="text" placeholder="30%"</td>
        </tr>
    </tbody>
    
</table>
<h3>Married Person</h3>
<table class="table table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th scope="col">Tax Banding</th>
            <th scope="col"> Income  </th>
            <th scope="col"> Tax Rate  </th>
              </tr>
    </thead>

    <tbody>
        <tr>
            <td> <input class="form-control" type="text" placeholder="Band 1"</td>
            <td><input class="form-control" type="text" placeholder="600,000"</td>
            <td><input class="form-control" type="text" placeholder="1%"</td>
        </tr>
        <tr>
           <td> <input class="form-control" type="text" placeholder="Band 2"</td>
            <td><input class="form-control" type="text" placeholder="200,000"</td>
            <td><input class="form-control" type="text" placeholder="10%"</td>
        </tr>
         <tr>
            <td> <input class="form-control" type="text" placeholder="Band 3"</td>
            <td><input class="form-control" type="text" placeholder="300,000"</td>
            <td><input class="form-control" type="text" placeholder="20%"</td>
        </tr>
         <tr>
           <td> <input class="form-control" type="text" placeholder="Band 4"</td>
            <td><input class="form-control" type="text" placeholder="10,00,000"</td>
            <td><input class="form-control" type="text" placeholder="30%"</td>
        </tr>
    </tbody>
    
</table>
<div class="mb-1 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

        </div>
    </div>

</body>


</html>


<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src="js/app.min.js"></script>
