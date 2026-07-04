<?php
/**
 * Template Name: Contact Us
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>

<style>
.map-wrap {
    overflow: hidden !important;
    position: relative !important;
    height: 405px !important; /* 480 - 75 */
}

.map-wrap iframe {
    position: relative !important;
        left: 0;
    width: 100% !important;

}
</style>

<?php 
	$banner = get_field('banner');
	$sec2 = get_field('section_2');
	$off = get_field('ofiices');
	$us_loc = $off['us_locations'];
	$ind_loc = $off['india_locations'];
	$mex_loc = $off['mexico_locations'];
	$uk_loc = $off['uk_locations'];

?>
<section id="contact-us">
	<div class="desktop">
		<div class="container-l-auto">
			<div class="sec-heading-wrap">
				<h2><?php echo $banner['heading']; ?></h2>
			</div>	
			<img src="<?php echo $banner['desktop_image']; ?>" alt="banner" class="img_width">
		</div>
	</div>
	<div class="mobile">
		<div class="container">
			<div class="sec-heading-wrap">
				<h2><?php echo $banner['heading']; ?></h2>
			</div>	
			<img src="<?php echo $banner['desktop_image']; ?>" alt="banner" class="img_width">
		</div>
	</div>
	
</section>	

<div class="container-l-auto">
	<div class="sec-gap"></div>
</div>

<section id="contact-form">
	<div class="desktop">
		<div class="container-l-auto">
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-12 p-0 br bl bb pos-rel">
			<div class="">
					<div class="cs-form-heading">
						<h2><?php echo $sec2['heading']; ?></h2>
					</div>
			  <div class="reach-info">
				<h4><?php echo $sec2['reach_text']; ?> : <a href="mailto:<?php echo $sec2['reach_out_link']; ?>" target="_blank"><?php echo $sec2['reach_out_link']; ?></a></h4>
			  </div>
			</div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12 p-0 bb">
					<div class="cs-form-wrap">
						<div class="sec-heading-wrap">
							<h4><?php echo $sec2['form_heading']; ?></h4>
						</div>	
						<?php 
						$frm = $sec2['form_shortcode'];
						echo do_shortcode($frm); 
						?>
					</div>			
				</div>
			</div>	
		</div>
	</div>
	<div class="mobile">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-12 p-0 br bl bb pos-rel">
			<div class="">
					<div class="cs-form-heading">
						<h2><?php echo $sec2['heading']; ?></h2>
					</div>
			  <div class="reach-info">
				<h4><?php echo $sec2['reach_text']; ?> : <a href="mailto:<?php echo $sec2['reach_out_link']; ?>" target="_blank"><?php echo $sec2['reach_out_link']; ?></a></h4>
			  </div>
			</div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12 p-0 bb">
					<div class="cs-form-wrap">
						<div class="sec-heading-wrap">
							<h4><?php echo $sec2['form_heading']; ?></h4>
						</div>	
						<?php 
						$frm = $sec2['form_shortcode'];
						echo do_shortcode($frm); 
						?>
					</div>			
				</div>
			</div>	
		</div>
	</div>	
</section>

<div class="container-l-auto">
	<div class="sec-gap"></div>
</div>

<section id="offices">
	<div class="desktop">
			<div class="container-l-auto">
		<div class="sec-heading-wrap">
			<h2><?php echo $off['heading']; ?></h2>
		</div>
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12 p-0 br bl bb map-wrap">
				<!-- <div id="map"></div> -->
				
<!--         <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1xuWEyumvrSBdAGGzGLXtnaA0HJ9qmoY&ehbc=2E312F" width="640" height="480" style=" margin-top: -75px;"></iframe> -->
				
				<iframe src="https://www.google.com/maps/d/u/1/embed?mid=15hd08ShL12O2y2-5tpe5sEe3bpBVnXs&ehbc=2E312F&ll=35,0&z=2" width="640" height="480" style=" margin-top: -75px;"></iframe>
				
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12 p-0 br bl">				
				<div class="loc-row-wrap">
					<div class="row">
						<h3 class="p-0">US</h3>
						<?php foreach($us_loc as $us){ ?>
						<div class="col-md-4 col-sm-4 col-xs-12 p-0 ">
							<a data-location="<?php echo $us['state'];?>">
								<div class="loc-wrap" id="a0">
									<h4><?php echo $us['state'];?></h4>
									<?php if($us['address']){ ?><p><?php echo $us['address'];?></p> <?php } ?>
								</div>
							</a>
						</div>
						<?php } ?> 
					</div>
				</div>		
				<div class="loc-row-wrap">
					<div class="row">
						<h3 class="p-0">India</h3>
						<?php foreach($ind_loc as $ind){ ?>
						<div class="col-md-4 col-sm-4 col-xs-12 p-0 ">
							<a data-location="<?php echo $ind['city'];?>">
								<div class="loc-wrap" id="a0">
									<h4><?php echo $ind['city'];?></h4>
									<?php if($ind['address']){ ?><p><?php echo $ind['address'];?></p> <?php } ?>
								</div>
							</a>
						</div>
						<?php } ?> 											
					</div>
				</div>	
        
<!--        <div class="loc-row-wrap">
          <div class="row">     
            <h3 class="p-0">Mexico</h3>
            <?php foreach($mex_loc as $mex){ ?>
            <div class="col-md-4 col-sm-4 col-xs-12 p-0 ">
              <a href="#" data-location="<?php echo $mex['city'];?>">
                <div class="loc-wrap" id="a0">
                  <h4><?php echo $mex['city'];?></h4>
                  <?php if($mex['address']){ ?><p><?php echo $mex['address'];?></p> <?php } ?>
                </div>
              </a>
            </div>
            <?php } ?>                      
          </div>
        </div>
        <div class="loc-row-wrap">
          <div class="row">     
            <h3 class="p-0">UK</h3>
            <?php foreach($uk_loc as $uk){ ?>
            <div class="col-md-4 col-sm-4 col-xs-12 p-0 ">
              <a href="#" data-location="<?php echo $uk['city'];?>">
                <div class="loc-wrap" id="a0">
                  <h4><?php echo $uk['city'];?></h4>
                  <?php if($uk['address']){ ?><p><?php echo $uk['address'];?></p> <?php } ?>
                </div>
              </a>
            </div>
            <?php } ?>          
          </div>
        </div> -->
			</div>
		</div>	
		
	</div>
	</div>
	<div class="mobile">
		<div class="container">
		<div class="sec-heading-wrap">
			<h2><?php echo $off['heading']; ?></h2>
		</div>
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12 p-0 br bl bb map-wrap">
				<!-- <div id="map"></div> -->
				
        <iframe src="https://www.google.com/maps/d/embed?mid=15hd08ShL12O2y2-5tpe5sEe3bpBVnXs&ehbc=2E312F&ll=35,0&z=2" width="640" height="480" style=" margin-top: -75px;"></iframe>
<!-- 				  <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1xuWEyumvrSBdAGGzGLXtnaA0HJ9qmoY&ehbc=2E312F" width="640" height="480" style=" margin-top: -75px;"></iframe>
				 <iframe src="https://www.google.com/maps/d/embed?mid=1xuWEyumvrSBdAGGzGLXtnaA0HJ9qmoY&ehbc=2E312F" width="640" height="480" style=" margin-top: -75px;"></iframe> 
				<iframe src="https://www.google.com/maps/d/u/1/embed?mid=1xuWEyumvrSBdAGGzGLXtnaA0HJ9qmoY&ehbc=2E312F" width="640" height="480"></iframe> -->
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12 p-0 br bl">				
				<div class="loc-row-wrap">
					<div class="row">
						<h3 class="p-0">US</h3>
						<?php foreach($us_loc as $us){ ?>
						<div class="col-md-4 col-sm-4 col-xs-12 p-0 ">
							<a data-location="<?php echo $us['state'];?>">
								<div class="loc-wrap" id="a0">
									<h4><?php echo $us['state'];?></h4>
									<?php if($us['address']){ ?><p><?php echo $us['address'];?></p> <?php } ?>
								</div>
							</a>
						</div>
						<?php } ?> 
					</div>
				</div>		
				<div class="loc-row-wrap">
					<div class="row">
						<h3 class="p-0">India</h3>
						<?php foreach($ind_loc as $ind){ ?>
						<div class="col-md-4 col-sm-4 col-xs-12 p-0 ">
							<a data-location="<?php echo $ind['city'];?>">
								<div class="loc-wrap" id="a0">
									<h4><?php echo $ind['city'];?></h4>
									<?php if($ind['address']){ ?><p><?php echo $ind['address'];?></p> <?php } ?>
								</div>
							</a>
						</div>
						<?php } ?> 											
					</div>
				</div>	
        
<!--        <div class="loc-row-wrap">
          <div class="row">     
            <h3 class="p-0">Mexico</h3>
            <?php foreach($mex_loc as $mex){ ?>
            <div class="col-md-4 col-sm-4 col-xs-12 p-0 ">
              <a href="#" data-location="<?php echo $mex['city'];?>">
                <div class="loc-wrap" id="a0">
                  <h4><?php echo $mex['city'];?></h4>
                  <?php if($mex['address']){ ?><p><?php echo $mex['address'];?></p> <?php } ?>
                </div>
              </a>
            </div>
            <?php } ?>                      
          </div>
        </div>
        <div class="loc-row-wrap">
          <div class="row">     
            <h3 class="p-0">UK</h3>
            <?php foreach($uk_loc as $uk){ ?>
            <div class="col-md-4 col-sm-4 col-xs-12 p-0 ">
              <a href="#" data-location="<?php echo $uk['city'];?>">
                <div class="loc-wrap" id="a0">
                  <h4><?php echo $uk['city'];?></h4>
                  <?php if($uk['address']){ ?><p><?php echo $uk['address'];?></p> <?php } ?>
                </div>
              </a>
            </div>
            <?php } ?>          
          </div>
        </div> -->
			</div>
		</div>	
		
	</div>
	</div>
	
</section>

<div class="container-l-auto">
	<div class="sec-gap"></div>
</div>

<!-- 

<section id="pre-footer">
	<div class="container">
		<div class="pre-footer-wrap">
			<img src="<?php echo get_field('image'); ?>" class="img_width">
		</div>
	</div>
</section> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>



<!-- <script>
function initialize() {

  var content = document.getElementById('iw');

  var lat = 41.80032967906445,
    lng = -88.14946597465998,
    latlng = new google.maps.LatLng(lat, lng);

  var mapOptions = {
    center: new google.maps.LatLng(lat, lng),
    zoom: 8,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var mapCanvas = document.getElementById('map');

  var map = new google.maps.Map(mapCanvas, mapOptions);
  for (var i = 0; i < locations.length; i++) {
    gmarkers[locations[i].name] =
      createMarker(
        new google.maps.LatLng(locations[i].location.lat, locations[i].location.lon),
        locations[i].name + "<br>" +
        locations[i].adress,
        locations[i].lable
      );
    var infowindow = new google.maps.InfoWindow({
      maxWidth: 350
    });
  }
  function createMarker(latlng, html, lable) {
    var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      icon: {
        url: 'data:image/svg+xml;charset=utf-8,' +
          encodeURIComponent('<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>'),
        scaledSize: new google.maps.Size(35, 35),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(35, 35),
        labelOrigin: new google.maps.Point(22, 18),
      },
      label: {
        text: lable,
        color: "#fff",
      }
    });
    marker.setOpacity(.75);
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.setContent(html);
      infowindow.open(map, marker);
    });
    google.maps.event.addListener(map, 'click', function() {

      infowindow.close();
    });
    return marker;
  }
}
function myclick(i) {
  google.maps.event.trigger(gmarkers[i], 'click');
};
google.maps.event.addDomListener(window, 'load', initialize);
$('.loc-row-wrap a').on('click', function(e) {
  e.preventDefault();
  var $this = $(this),
    loc = $this.data('location');
	
  myclick(loc);
});
$('.loc-row-wrap a').hover(
  function() {
    var $this = $(this),
      loc = $this.data('location');
    gmarkers[loc].setOpacity(1.0);
    gmarkers[loc].setIcon({
      url: 'data:image/svg+xml;charset=utf-8,' +
        encodeURIComponent('<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"><path fill="red" d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>'),
      scaledSize: new google.maps.Size(35, 35),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(35, 35),
      labelOrigin: new google.maps.Point(22, 18),
    })
  },
  function() {
    var $this = $(this),
      loc = $this.data('location');
    gmarkers[loc].setOpacity(.75);
    gmarkers[loc].setIcon({
      url: 'data:image/svg+xml;charset=utf-8,' +
        encodeURIComponent('<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>'),
      scaledSize: new google.maps.Size(35, 35),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(35, 35),
      labelOrigin: new google.maps.Point(22, 18),
    });
  }
);

var locations = [{
    'name': 'Naperville, IL (HQ)',
    'adress': '1755 Park St, Suite #200,Naperville IL 60563',
    'location': {
      'lat': 41.80032967906445,
      'lon': -88.14946597465998
    },
    
    'prev': 'https://images.unsplash.com/photo-1489706920962-640fcad4b463?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=057570f4673903ff39658ee6ac17a66a&auto=format&fit=crop&w=600&q=60',
  },
  {
    'name': 'Tulsa, OK',
    'adress': '4200 E. Skelly Drive Suite 1000 Tulsa, OK, USA 74135',
    'location': {
      'lat': 36.090965178561476,
      'lon': -95.9288954965404
    },
    
    'prev': 'https://images.unsplash.com/photo-1489706920962-640fcad4b463?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=057570f4673903ff39658ee6ac17a66a&auto=format&fit=crop&w=600&q=60',
  },	 				 
  {
    'name': 'Gurugram, HR (RO)',
    'adress': 'Level 1, Tower 10A, DLF Cybercity, Gurugram, Haryana - 122002',
    'location': {
      'lat': 28.496128767345013,
      'lon': 77.08843952718131
    },
    
    'prev': 'https://images.unsplash.com/photo-1483519396903-1ef292f4974a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=594ae239b7e8e8ed17d447a9950adeb4&auto=format&fit=crop&w=600&q=60',
  },
  {
    'name': 'Bengaluru, KA',
    'adress': 'CHBS Layout, Stage 2, Vijayanagar, Bengaluru, Karnataka 560040',
    'location': {
      'lat': 12.975147239373447,
      'lon': 77.53474339196141
    },
    
    'prev': 'https://images.unsplash.com/photo-1520803703785-bfb8d67060b1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5101b3f0270554cf6224f12e70cb7fb9&auto=format&fit=crop&w=600&q=60',
  },
	 {
    'name': 'Pune, Maharashtra',
    'adress': 'Unit No 601, 6th Floor, Pentagon 3 Magarpatta City, Hadapsar, Pune 411028, Maharashtra',
    'location': {
      'lat': 18.511791678024174, 
      'lon': 73.92333045323778
    },
    
    'prev': 'https://images.unsplash.com/photo-1520803703785-bfb8d67060b1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5101b3f0270554cf6224f12e70cb7fb9&auto=format&fit=crop&w=600&q=60',
  }			 
   {
    'name': 'Guadalajara',
    'adress': 'Guadalajara',
    'location': {
      'lat': 20.664535669283453,
      'lon': -103.35222526217989
    },
    
    'prev': 'https://images.unsplash.com/photo-1520803703785-bfb8d67060b1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5101b3f0270554cf6224f12e70cb7fb9&auto=format&fit=crop&w=600&q=60',
  },
   {
    'name': 'London',
    'adress': 'London',
    'location': {
      'lat': 51.51485441204494,
      'lon': -0.12083631474682549
    },
    
    'prev': 'https://images.unsplash.com/photo-1520803703785-bfb8d67060b1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5101b3f0270554cf6224f12e70cb7fb9&auto=format&fit=crop&w=600&q=60',
  }				 
];
gmarkers = [];
</script>  -->
<?php get_footer(); ?>