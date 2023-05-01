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
            
<div class="project-block">
<div class="text-block text-center">
    <h1>News Post</h1>
</div>
    <div class="project-item ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-3">
                    <div class="mb-3">
                        <label for="newstitle" class="form-label">News Title</label>
                        <input type="text" class="form-control" id="newstitle" placeholder="News Title">
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">News Image</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                      
                      <div class="mb-3">
                        <label for="newstext" class="form-label">News Content</label>
                        <textarea class="form-control" id="newstext" rows="8"></textarea>
                      </div>
                      <div class="mb-3">
                        <button type="submit" class="btn btn-site">Post News</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


        </div>
    </div>

</body>


</html>


<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>
