@extends('front-end.layouts.frontLayout')
@section('title','SaaS Connected IoT Solutions | Business Transformation – The Digital Way')
@section('des','GCR is the leading SaaS connected IoT solutions provider in India. We offer multi-function IoT solutions across different business verticals. Visit website for more details
')
@section('banner-image',asset($banner->getImage()))

    @section('content')
        <style>.overlay p{color:#fff!important}.grecaptcha-badge{display: none!important;}</style>

        <section class="secMrgTop">
            <div class="feature" style="padding:10px 0;">
                <div class="container">
                    <div class="col-md-2 col-md-12 hidden-sm hidden-xs">
            <div class="admRtop">
                                <div class="banrAd">
                                    <a href="{{route('solution.show',['id'=>25])}}">
                                        <img src="{{asset('images/front-images/irevo.jpg')}}" class="img-responsive image">
                                        <!-- <div class="ad-leftCorn"><i class="fa fa-info-circle" aria-hidden="true"> Product </i></div> -->
                                        <div class="overlay">
                      <p>Digital Signage</p>
                    </div>
                                    </a>
                                </div>
                                <div class="banrAd">
                                    <a href="{{route('solution.show',['id'=>42])}}">
                                    <img src="{{asset('images/front-images/index.png')}}" class="img-responsive image">
                                    <!-- <div class="ad-leftCorn"><i class="fa fa-info-circle" aria-hidden="true"></i></div> -->
                                    <div class="overlay"><p>Ethernet Switches</p></div>
                                    </a>
                                </div>
                        </div>  
          </div>
          <div class="col-md-8 col-md-12 col-pdn padg">
            <div class="flt">
            <h2 style="text-align: center;">GCR Ecosystem</h2>
              <hr>
            </div>  
            <div class="flt">
                            <p>{!! $content->getDescription() !!}</p>
                        </div>
            
            <div class="grid">
                    <div class="text-center">
          
          <div class="bx-wrapper">
                    <div style=" float: left; margin-right:5px;"> 
            
            <img src="{{asset('images/front-images/vart-text.jpg')}}" class="img-responsive solumobhide" alt="socail-vsit">
          </div>
          
          <h2 class="text-center soluText">Solutions </h2>
              <div class="owl-carousel owl-theme homeowl">


                        @forelse($solutions as $solution)
                                <div class="item">
                                 <div class="fortSolut" >
                                <div class="hi-icon-wrap hi-icon-effect wow" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <a href="{{route('solution.index',['solutionId'=>$solution->getscenarioTitleSlug()->geturlSlug()])}}" >
                                    <figure class="effect-zoe toggler">

                                        <?php $images =  json_decode($solution->getVerticalImages()->getImage(),true);?>
                                        <img src="{{asset($images['tiles'])}}" class="img-responsive" alt="vertical tiles">
                                    <!-- <figcaption>
                                    <h2>{{$solution->getName()}}</h2>
                                    {{--<p>{!! \Illuminate\Support\Str::words($solution->getDescription(),10,'...') !!}</p>--}}
                                </figcaption>  -->

                <figcaption>
                                    <h2>{{$solution->getName()}}</h2>
                                   
                                </figcaption>  
                
                            </figure>
                                    </a>
                          </div>
                         </div>
                     </div>
                     @empty
                     @endforelse  
                    </div>
          </div>
          </div>
         <div class="clearfix"></div>
         <div class="og-expander">
          <div class="row">
          <a title="Close" class="fancybox-item closebtn fancybox-close" href="javascript:;">X</a>
            <div class="col-md-12 col-sm-12 col-xs-12 ">
            <p><a href="#">Content</a></p>
            </div>
          </div>
         </div>
        </div>
          </div>
          <div class="col-md-2 col-md-12 hidden-sm hidden-xs">
                        {!! view('front-end.component.ads',['ads'=>$ads]) !!}

          </div>
            </div>
      <!----Mobile Show Add--->
      
      <div class="col-md-2 col-xs-6 comdskHide">
      <div class="admRtop">
                <div class="banrAd">
                   <a href="{{route('solution.show',['id'=>25])}}">
                       <img src="{{asset('images/front-images/irevo.jpg')}}" class="img-responsive image">
                       <!-- <div class="ad-leftCorn"><i class="fa fa-info-circle" aria-hidden="true"> Product </i></div> -->
                       <div class="overlay">
            <p>Digital Signage</p>
        </div>
            </a>
</div>
 <div class="banrAd">
                 <a href="{{route('solution.show',['id'=>42])}}">
                 <img src="{{asset('images/front-images/Trackrover1.jpg')}}" class="img-responsive image">
                 <!-- <div class="ad-leftCorn"><i class="fa fa-info-circle" aria-hidden="true"></i></div> -->
                 <div class="overlay"><p>Ethernet Switches</p></div>
               </a>
  </div>
 </div> 
</div>

<div class="col-md-2 col-xs-6 comdskHide">
    {!! view('front-end.component.ads',['ads'=>$ads]) !!}
</div>
      
      
      
      
      
</div>



        </section>



<div class="about">
   <div id="example" class="video">
        <h2>Our Videos</h2><hr/>
        <carousel-3d :controls-visible="true" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'" 
        controls-width="30" :controls-height="60" :clickable="false">
        @forelse($videos as $key=>$video)
        <slide :index="{{$key}}">
        <div>
        <iframe width="100%" height="270" src=" {!! $video->getMediaUrl() !!}" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" frameborder="0" controls ></iframe>
        </div>
    </slide>
        @empty-
    @endforelse
  </carousel-3d>
</div>      
<!------ Video Code---------->
</div>

<div class="clearfix"></div>
        <div class="lates">
    <div class="container contMobil">
            <div class="col-md-4 col-sm-2 hidden-xs col-xs-12 "></div>
      <div class="col-md-4 col-sm-8 col-xs-12 contMobil">
        <!--<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="testMonil">
                    <h1>Customer Testimonial <br/><hr/></h1>
                    <div class="clearfix"></div>
                    <div id="myCarousel" class="carousel slide " data-ride="carousel">

                        <div class="carousel-inner">
                            @forelse($testimonials as $key=>$testimonial)
                            <div class="item testi {{$key==0?'active':''}}">
                                <div class="tesHeg">
                                    <p>{!! $testimonial->getTestimonial() !!}</p>
                                    <div class="arrow-down"></div>
                                </div>
                                <div class="profile-circle">
                                    <img src="{{asset($testimonial->getImage())}}" alt="client-img">
                                    <h3>{{$testimonial->getName()}}</h3>
                                    <p>{{$testimonial->getDesignation()}}</p>
                                </div>

                            </div>
                            @empty
                            @endforelse
                        </div>
                        
                    </div>
                </div>
               </div>-->
         
         <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
         <div class="testMonil">
        <h1>Let’s Get Social<br/><hr/></h1>
          
                    <div class="clearfix"></div>
                      <!-- <div class="fb-page" data-href="https://www.facebook.com/GCRIndia" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-width="288" data-height="320" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/GCRIndia" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/GCRIndia">GCR India</a>
                            </blockquote>
                        </div> -->
                        <div style=" margin-top:15px;">
              <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                   <script type="IN/CompanyProfile" data-id="13711233" data-width="288" data-height="420" data-format="inline" data-related="false"></script>
                   <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                   <script type="IN/FollowCompany" data-id="13711233" data-width="288" data-height="420" data-counter="right"></script>
                   <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                   <script type="IN/Share" data-width="288" data-height="420" data-url="https://www.linkedin.com/company/gcr-india"></script>
            </div>
         </div>
         </div>
      </div>
      <div class="col-md-4 col-sm-2 hidden-xs col-xs-12"></div>
      </div>
        </div>
<div class="clearfix"></div>
        <section id="partner">
            <div class="container">
                  <!--<div class="wow fadeInDown">
                    <h2>Our Platform Ecosystem Partners</h2>
          <hr/ style=" width:100px;">
                  
                </div>-->

             <div class="">
         <!--<div id="demo5" class="scroll-img">
      
  <div class="owl-carousel owl-theme">
    @forelse($partners as $partner)
    <div class="item botitm"><a class="partnerspop" href="javascript:void(0)" data-id="{{$partner->getId()}}" data-route="{{url('/partners-popup')}}"><img class="" src="{{asset($partner->getLogo())}}"></a></div>
    @empty
      @endforelse
    </div>
     
       
        
      
    </div>-->
  
    <div id="myModal-partner"" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header">
                    <a class="btn btn-default" data-dismiss="modal">
            <i class="fa fa-times" aria-hidden="true"></i>
          </a>
                    <h4 class="modal-title">Partner</h4>
                </div>
                <div class="modal-body">
                   
                </div>
                
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div><!-- /.modal -->

       
       <!--<div class="center slider">
       @forelse($partners as $partner)
        <div>
          <img class="img-responsive wow"  src="{{asset($partner->getLogo())}}">
        </div>
        @empty
                        @endforelse
       </div>
       
                    <div class="nbs-flexisel-container-one">
                            <div class="nbs-flexisel-inner-one" style="width:100%;">
                                <ul id="flexiselDemo7" class="nbs-flexisel-ul" style="display: block; left: -219.6px;">
                                    @forelse($partners as $partner)
                        <li><a href="#"><img class="img-responsive wow"  src="{{asset($partner->getLogo())}}"></a></li>
                            @empty
                        @endforelse
                                </ul>
                            </div>

                        </div>-->
                </div>
                
                
                
                
                
            </div>
            
            
            
        </section>
        
        
       
  
</div>

<div class="modal fade" id="popup-form" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      
          <h4 class="modal-title"> Contact Us</h4>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button> -->
        </div>
        <br/>
        <br/>
      </div>
    </div>
</div>

<div class="modal fade windload" id="popTemp" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        {!! view('front-end.component.popTemp')!!}
                    </div>
                </div>
            </div>
        </div>



        <!--/#partner-->

        <script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "Organization",
  "name": "Global Channel Resources India Pvt. Ltd. (GCR India)",
  "url": "http://www.gcrcloud.co.in/",
  "logo": "http://www.gcrcloud.co.in/images/front-images/logo.png",
  "image": "http://www.gcrcloud.co.in/images/front-images/logo.png",
  "description": "Global Channel Resources India Pvt. Ltd. (GCR India) is a leading Global, SaaS connected IOT solutions and Networking Infrastructure online B2B market place. We collaborate with worldwide cloud-based/networking solution providers to enable channel partners providing IoT solutions and cloud services.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Office 1007, Universal majestic, PL Lokhande Marg, Chembur (West)",
    "postOfficeBoxNumber": "400043",
    "addressLocality": "Mumbai",
    "addressRegion": "Maharashtra",
    "postalCode": "400043",
    "addressCountry": "India"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "19.061575",
    "longitude": "72.912927"
  },
  "hasMap": "https://goo.gl/maps/mx7oSXtdN1F2",
  "openingHours": "Mo, Tu, We, Th, Fr 09:30-18:00"
}
 </script>
        @endsection