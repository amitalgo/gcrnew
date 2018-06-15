<div class="navbar navbar-default navbar-fixed-top" role="navigation">
 <div class="navigation">
    <div class="container">
<div class="">
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
                                <img src="{{asset('images/front-images/logo.png')}}" alt="logo"></a>
                        </div>
						
					
                    <div class="social-icon hidden-md hidden-lg">
					
                        <ul class="social-network">
							<div class="search-icon" id="show" style="display: none;">
                                <div>
								<form action="{{route('solution.searchFilter.submit')}}">
								<input type="text" placeholder="Search.." name="slug" id="searchBox">
								<button id="f-search" type="submit" class="btn btn-default">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
								<div class="mobClosebtn"><i class="fa fa-times fa-lg"></i></div>
								</form>
								
								</div>
                            </div>
                            <li><a href="#" class="openSerch"> <img src="{{asset('images/front-images/search-icon.jpg')}}" class="secon" width="21" height="19" alt="search-icon"></a></li>
                            <li><a href="https://www.facebook.com/GCRIndia" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/gcr-india" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                    </div>
                    </div>
					
					
                </div>
				
		 <div class="col-md-8 col-sm-12 col-xs-12 col-pdn mobPdn desk">		
        <div class="collapse navbar-collapse">
            
            <ul class="nav navbar-nav">
                
                <li>
                    <a href="#" class="dropdown-toggle @if((substr(Route::current()->getName(),0,strpos(Route::current()->getName(),'.')))=='solution') active-menu  @endif )" data-toggle="dropdown">Solutions <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu multi-level">
                        @foreach($solutiontags as $solutiontag)
                            @if($solutiontag->getIsActive())
                        <li class="{{!$solutiontag->getChildren()->isEmpty()?'dropdown-submenu':''}}">
                            <a href="{{route('solution.show', ['id'=>$solutiontag->getUrlSlug()])}}" class="{{!$solutiontag->getChildren()->isEmpty()?'dropdown-toggle':''}}" data-toggle="{{!$solutiontag->getChildren()->isEmpty()?'dropdown':''}}">{{$solutiontag->getTagName()}}</a>
                            @if(!$solutiontag->getChildren()->isEmpty())
                                {!! view('front-end.component.submenu',['subsolution'=>$solutiontag])  !!}
                            @endif
                        </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
				<li class="dropdown simple-menu">
                                <a href="{{route('experience-centre')}}" class="dropdown-toggle @if(Route::current()->getName()=='experience-centre') active-menu  @endif">Experience Centre</a>
                            </li>
							<li class="dropdown simple-menu">
                                <a href="{{route('support')}}" class="dropdown-toggle @if(Route::current()->getName()=='support') active-menu  @endif">Support</a>
                            </li>
                <li>
				<a href="#" class="dropdown-toggle @if(Route::current()->getName()=='solution-partners' || Route::current()->getName()=='channel-partners') active-menu  @endif" data-toggle="dropdown">Partners <i class="fa fa-angle-down"></i></a>
                    
                    <ul class="dropdown-menu">
                        <li><a href="{{route('channel-partners')}}" class="Navshow">Integration Partners</a></li>
                       <li class=""><a href="{{route('solution-partners')}}">Technology Partners</a></li>
                    </ul>
                </li>
				<li class="dropdown simple-menu">
                                <a href="{{route('news')}}" class="dropdown-toggle @if(Route::current()->getName()=='news') active-menu  @endif" role="button">News</a>
                            </li>
							<li class="dropdown simple-menu">
                                <a href="{{route('about-GCR')}}" class="dropdown-toggle @if(Route::current()->getName()=='about-GCR') active-menu  @endif" role="button">About GCR</a>
                            </li>

                            <li class="dropdown simple-menu">
                                <a href="{{route('contact')}}" class="dropdown-toggle @if(Route::current()->getName()=='contact') active-menu  @endif" role="button">Contact Us</a>
                            </li>
                            <!-- Simple Menu Item -->
                         <li class="dropdown simple-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-lock"></i> login <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
                                    <li><a href="http://www.gcrcpsp.com/user/login" target="_balnk" class="Navshow">CPSP</a></li>
                                    <li class=""><a href="javascript:void(0)">Forum</a></li>
                                  
                                </ul>
                         </li>
            </ul>
        </div>
		</div>
		<div class="col-md-2 col-sm-2 hidden-sm hidden-xs col-xs-12">
                   <!--  <div class="search-icon" id="show">

                        <div ><input type="text" placeholder="Search.."></div>
                    </div> -->
                   <!--  <div class="search-icon" id="show" style="display: block;">
                        <div><form action="{{route('solution.searchFilter.submit')}}"><input type="text" placeholder="Search.." name="slug"><button id="f-search" type="submit">search</button></form></div>
                    </div> -->
                    <div class="social-icon">
                     
                        <ul class="social-network">
							<div class="search-icon" id="show" style="display: block;">
                                <div>
								<form action="{{route('solution.searchFilter.submit')}}">
								<input type="text" placeholder="Search.." name="slug" id="searchBox">
								<button id="f-search" type="submit" class="btn btn-default">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
								</form>
								
								</div>
                            </div>
						
                            <!-- <li><a href="#"> <img src="{{asset('images/front-images/search-icon.jpg')}}" class="secon" width="21" height="19" alt="search-icon"></a></li> -->
                            <li><a href="https://www.facebook.com/GCRIndia" class="fb tool-tip" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.twitter.com/gcr_india" target="_blank" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter" ></i></a></li>
                            <li><a href="https://www.linkedin.com/company/gcr-india" class="linkedin tool-tip" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                    </div>
                </div>
				</div>
		<!--/.nav-collapse -->
    </div>
	</div>
</div>
    @include('alert');
	<div  class="lodForm" style="position: fixed;display: none;">
		 <div class="popupcontact"></div>
	</div>
   <script>
$(document).ready(function(){
	
if($("#searchBox").val().length<=0){
			$("#f-search").attr("disabled",true);	
		}
	$("#searchBox").keyup(function(){
		if($("#searchBox").val().length>0){
		
			$("#f-search").attr("disabled",false);	
		}else{

			$("#f-search").attr("disabled",true);
		}		
	});		
	
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
  
   //Search
	
	$(".openSerch").click(function(e){
		$("#show").show();
	});
	
	$(".mobClosebtn").click(function(){
        $("#show").hide();
    });
	
});

</script>