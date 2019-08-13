<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CommentDownload</title>
    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
	
	</head>
	
	<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="/">CommentDownload</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          
        </div>
      </nav>

<div class="jumbotron text-center" >
<form class="form-inline mt-2 mt-md-0" action="video.php" method="post">
        <input class="form-control form-control-lg" type="text" placeholder="Enter URL..." name="come">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="submit" name="submit">Submit</button>
      </form>
      
</div>
</body>