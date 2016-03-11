<style>
    @import url(http://fonts.googleapis.com/css?family=Exo+2:300);
@import url(http://fonts.googleapis.com/css?family=Zeyada);

.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12{position:relative;padding: 0;}

html, body {
  height: 100%;
}

#accueil {
  background: #0000ff no-repeat center;
  background-size: cover;
  margin-top: 50px;
  height: 500px;
  height: 100%;
}

#accueil h1 {
  position: relative;
  top: 120px;
  font-size: 10em;
  font-family: "Zeyada";
  text-align: center;
  color: #fff;
  text-transform: uppercase;
}

#accueil h2 {
  position: relative;
  top: 150px;
  text-align: center;
  font-size: 3em;
  font-family: "Zeyada";
  text-transform: uppercase;
  color: #fff;
}

#gallery {
  height: 100%;
}

figure {
    height: 235px;
    width: 235px;
    display: block;
    overflow: hidden;
    z-index: 100;
}

figcaption {
    height: 250px;
    width: 100%;
    background: url(http://gridelicious.net/themes/treble/demo/assets/images/css/thumb_over.png) no-repeat center 150px black;
    text-align: center;
    position: absolute;
    bottom: 0;
    left: -500px;
    opacity: 0; 
    padding: 5px;
}



a:hover figcaption {
    opacity: 0.8;
    left: 0;
    color: #fff;
    transition: all 0.7s;
}


@media (max-width: 768px) { 
  #accueil h1, #contact h1 {
    font-size: 4.6em;
  }
}
</style>

<script>
    $(document).ready(function() {
    	
			$('ul a').click(function() {
			var $anchor = $(this);
			
			$('html, body').animate({
			scrollTop: $($anchor.attr('href')).offset().top
			}, 2000);
			return false;
			helpers : {
			}
			});
			});
    
</script>
<!--Carusel-->
<script>
    jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
    
</script>
<div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="Images/1.jpg"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="Images/2.jpg"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="Images/3.jpg"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="Images/4.jpg"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="Images/5.jpg"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="Images/6.jpg"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img src="http://placehold.it/470x480&text=6"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="http://placehold.it/470x480&text=7"></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img src="http://placehold.it/470x480&text=8"></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img src="http://placehold.it/470x480&text=9"></div>
                                    
                                    <div class="item" data-slide-number="10">
                                        <img src="http://placehold.it/470x480&text=10"></div>
                                    
                                    <div class="item" data-slide-number="11">
                                        <img src="http://placehold.it/470x480&text=11"></div>
                                    
                                    <div class="item" data-slide-number="12">
                                        <img src="http://placehold.it/470x480&text=12"></div>

                                    <div class="item" data-slide-number="13">
                                        <img src="http://placehold.it/470x480&text=13"></div>

                                    <div class="item" data-slide-number="14">
                                        <img src="http://placehold.it/470x480&text=14"></div>

                                    <div class="item" data-slide-number="15">
                                        <img src="http://placehold.it/470x480&text=15"></div>
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            
            <!--End of carusel-->









<div id="gallery">
    <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#">
      <img src="Images/1.jpg" class="img-rounded" alt="" width="304" height="236">
        <figcaption>
            <h2>Legend</h2>
            <p>Lorem ipsum dolor sit amet</p>
        </figcaption>
        </a>
    </figure>
    
    <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#">
      <img src="Images/2.jpg" class="img-rounded" alt="" width="304" height="236">
        <figcaption>
            <h2>Legend</h2>
            <p>Lorem ipsum dolor sit amet</p>
        </figcaption>
        </a>
    </figure>
    
    <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#">
      <img src="Images/3.jpg" class="img-rounded" alt="" width="304" height="236">
        <figcaption>
            <h2>Legend</h2>
            <p>Lorem ipsum dolor sit amet</p>
        </figcaption>
        </a>
    </figure>
    
    <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#">
      <img src="Images/4.jpg" class="img-rounded" alt="" width="304" height="236">
        <figcaption>
            <h2>Legend</h2>
            <p>Lorem ipsum dolor sit amet</p>
        </figcaption>
        </a>
    </figure>
    
    <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#">
      <img src="Images/5.jpg" class="img-rounded" alt="" width="304" height="236">
        <figcaption>
            <h2>Legend</h2>
            <p>Lorem ipsum dolor sit amet</p>
        </figcaption>
        </a>
    </figure>
    
    <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#">
      <img src="Images/6.jpg" class="img-rounded" alt="" width="304" height="236">
        <figcaption>
            <h2>Legend</h2>
            <p>Lorem ipsum dolor sit amet</p>
        </figcaption>
        </a>
    </figure>
    
    
    
   
</div>
