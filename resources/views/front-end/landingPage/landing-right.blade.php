<?php use \App\Http\Controllers\Admin\LandingPageController; ?>
        {{--{{dd($page)}}--}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="{{$page->getMetaDescription()}}">
    <meta name="keywords" content="{{$page->getMetaKey()}}">
    <meta name="author" content="{{$page->getMetaTitle()}}">
    @section('title')
        {{$page->getTitle()}}
		@endsection
    @include('front-end.include.head')
</head>
<style>
.main-center .form-group {
    margin-bottom: 14px;
}
.main-center{max-width: 100%;}
	.pdnLeft{ padding:0px 6px 0px 5px;}
    .main-login .form-group p{ color:#fff;}
     #blog-sidebar { position:absolute;
        left:0%;
        top: 0;
        right: inherit;
        min-width:auto;
        height: 100%;
        color: white;
        background:transparent;
        padding-top:10px; 
    }
    .pdnNone{ padding:0px;}
    #blog-sidebar2{ margin-top:15px;}
	#blog-sidebar2 h3{ color:#fff;}
	.main-center2{overflow-y:auto; padding: 10px 25px;background:#0099cc;color: #FFF; text-shadow: none;-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);}
  .main-center2 label {  color: #fff; font-weight: 600; float: left;}
   .carousel-hide{display:none;}
   .red{ font-size:2em; margin-top: 7px; float:left;}
   
   @media only screen and (min-width:1200px){
		.container{ width:1260px;}
	}
	
   @media only screen and (min-width: 768px) and (max-width:1024px) {
      .main-center{max-width: 250px; float: left;}
      #blog-sidebar{min-width: 230px;}
  }
  @media only screen and (min-width:320px) and (max-width:732px) {
      .carousel-hide{display:block;}
      .main-center2{height: 100% !important;}
      .item blockquote img { width:100% !important;  height:100%!important;}
      .fade-carousel .slides{height:70vh;}
      .hero h1{font-size: 2.5em;}
      .main-center2 label {  color: #fff; font-weight: 600; font-size:0.96em;}
      .form-group{margin-bottom:8px;}
      .form-group .form-control{ font-size:12px;}
      .form-control {height: auto !important; padding: 4px 12px !important;}
      .carousel-hide{ padding-left:0px; padding-right:0px;}
       blockquote{ padding:0px;}
       .lanMrag{ margin-bottom:0px;}
       #blog-sidebar2 h3{font-size: 19px;}
	   .item blockquote img { width:100%!important;  height:100% !important;}
       
  }
  
   @media only screen and (min-width:320px) and (max-width:480px) {
       .fade-carousel .slides{height:50vh;}
      .hero h1{font-size: 2.5em;}
      .main-center2 label {  color: #fff; font-weight: 600; font-size:0.96em;}
	  
      
   }
   
   @media only screen and (max-width:414px) {
	   .item blockquote img { width:100%!important;  height:100% !important;}
   }
   
.stick {
    position: fixed !important;
    top: 0px !important;
}  
</style>
<body>

<!--- Banner Section ---->
<section>
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

        <div class="upper-container">
            <div class="container">
                <div class="col-md-2 col-sm-12 mobPdn">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <a href="{{route('home')}}">
                                <img src="{{asset('images/front-images/logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12 mobPdn">
                    <div class="navbar-collapse collapse">
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="{{route('home')}}" class="active">Home</a></li>
                                <li role="presentation"><a href="{{route('contact')}}">Contact</a></li>
                                <li role="presentation"><a href="{{route('about-GCR')}}">About GCR</a></li>
                                <li role="presentation"><a href="{{route('support')}}">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-inner">
            <?php $loop=0; ?>
            @foreach($page->getLandingPageBannerId()->getLandingBannerImages() as $banner)

            <div class="item slides slidess @if($loop==0) active @endif" style=" background-image:url({{asset($banner->getMediaUrl())}}) ;">
                <div class="hero">
                    <hgroup>
                        <h1>{{$banner->getTitle()}}</h1>
                        <h3>{{$banner->getDescription()}}</h3>
                    </hgroup>
                    @if($banner->getShowButton())
                    <button onclick="location.href='{{$banner->getButtonUrl()}}'" class="btn btn-hero btn-lg" role="button">{{$banner->getButtonText()}}</button>
                        @endif
                </div>
            </div>
                <?php $loop++; ?>
                @endforeach
        </div>

        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>
    </div>
</section>

<!--- Banner Section End ---->
<div class="clearfix"></div>

<!--- Product Name  ---->
<section>

    <div class="container">
        <!--- Product Name Ended ---->
        <!--- Contact Form ---->
        <div class="col-md-4 col-sm-4 pull-left col-xs-12">
            <div id="blog-sidebar2" data-spy="" class="" data-offset-top="80" >
                <div class="main-center2" id="boxscroll2">
                    <h3>Contact Form</h3>
                    @include('front-end.form.contactForm')
                </div>
            </div>
        </div>
		
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="landCorsl">
                {!! $content !!}
            </div>
        </div>
		
        <!--- Contact Form ---->
		
		</div>

</section>
<div class="clearfix"></div>

<footer>
    @include('front-end.include.footer')
</footer>

@include('front-end.include.jsLib')


<script type="text/javascript">

	// $(document).ready(function() {

            // var nice = $("html").niceScroll();  // The document page (body)

            // $("#div1").html($("#div1").html()+' '+nice.version);

            // $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#fff"}); // First scrollable DIV
            // $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#fff"});

            // $('.scroller').scrollify();
    // });


</script>

</body>

</html>
