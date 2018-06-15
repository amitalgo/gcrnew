<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Mobile viewport optimized -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <!-- Website Title -->
    <title>GCR-Cloud | Page Not Found</title>
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.html">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700,800|Varela+Round" rel="stylesheet">

    <!-- CSS links -->
       <link href="{{asset('css/css/bootstrap.min.css')}}" rel="stylesheet">
    
<style>
	.one-page-header { margin: 25px auto;}
	section#page-not-found { background:url({{asset('images/front-images/cloud-rept.png')}}) left center repeat; text-align: center; height:100vh;}
	section#page-not-found h2, section#page-not-found2 h2 { font-size: 120px;}
	h3{ font-size: 26px;}
	.mt40 {margin-top: 40px;}
	.btn-blue { background: #009bdf; margin-top:15px;}
	.btn-blue:hover{ background:#0eaaef;}
	.btn {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    outline: 0;
    padding: 0 15px;
    position: relative;
    line-height: 35px;
    font-size: 14px;
    font-weight: 600;
    color: #f6f6f6 !important;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -ms-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}
.midlCenter{ margin-top:5%;}

</style>
</head>

<body>






    <!-- ===== Start of Page not Found Section ===== -->
    <section class="ptb160" id="page-not-found">
        <div class="container">
            <div class="one-page-header"><a href="{{route('home')}}"><img src="{{asset('images/front-images/logo.png')}}" alt="logo"></a></div>
            <div class="midlCenter">
            <!-- First Column -->
                <div class="col-md-12">
                    <h2>Oops!</h2>
                    <h3 class="capitalize">We can't seem to find the <br/> page you're looking for.</h3>
                </div>
       
            <!-- Second Column -->
            	<div class="col-md-12">
                <p class="mt40">Error code: 404.<br/>  </p>
                <a href="{{route('home')}}" class="btn btn-blue btn-effect mt20">Back To Home</a>
                <a href="{{route('contact')}}" class="btn btn-blue btn-effect mt20">Contact Us</a>
            </div>
            </div>
        </div>
    </section>
   

</body>



</html>