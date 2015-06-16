<!DOCTYPE html>
<html lang="en">
  <head>

    <title>norefer.link</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/norefer.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-md-offset-2">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title" style="line-height:30px; vertical-align:middle;">
                            <i class="fa fa-eye-slash text-danger" style="font-size:1.5em; vertical-align:middle; margin-right:0.5em;"></i>
                            norefer.link
                        </h3>
                    </div>

                    <div class="panel-body">

                        <p>Add <a href="http://norefer.link">http://norefer.link</a> to the start of any URL in order to hide your site from the destination site's logs &amp; analytics.</p>
                        <p><strong>Example:</strong> <a href="http://norefer.link/https://google.com">http://norefer.link/https://google.com</a></p>
                        
                        <p>If you need to anonymize the referrer for all links on your webpage, use the following javascript:</p>
<textarea class="form-control" rows="4" readonly style="white-space:nowrap;"><script>
var x = document.getElementsByTagName("a");
for (i = 0; i < x.length; i++) { x[i].href = "http://norefer.link/"+x[i].href; }
</script></textarea>

                    </div>

                    <div class="panel-footer text-center">
                        &copy; 2015 <a href="http://sjstrutt.com">Steven Strutt</a>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

  </body>
</html>
