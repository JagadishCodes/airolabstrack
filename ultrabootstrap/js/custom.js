$('.airo-customers-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    prevArrow: $(".customers-prev"),
    nextArrow: $(".customers-next")
});
$('.client-logos').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    variableWidth: false,
    loop: true,
    dots: false,
    arrows: true,
    prevArrow: $(".logo-prev"),
    nextArrow: $(".logo-next"),
    responsive:[
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
    ]
});
$('.impact-logos-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: false,
    autoplay: true,
    autoplaySpeed: 3000,
    variableWidth: false,
    loop: true,
    dots: false,
    arrows: true,
});
$('.value-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    variableWidth: true,
    arrows: false,
});
$('.impact-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 3000,
    variableWidth: true,
    arrows: false,
});
$('.cloud-sec .customers-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    prevArrow: $(".customers-prev"),
    nextArrow: $(".customers-next")
});
$('.ai-sec .customers-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    prevArrow: $(".customer-prev"),
    nextArrow: $(".customer-next")
});
$('.cloud-sec .race-sliders').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    autoplay: false,
    autoplaySpeed: 3000,
    variableWidth: true,
    arrows: true,
    prevArrow: $(".cloud-race-prev"),
    nextArrow: $(".cloud-race-next")
});
$('.ai-sec .race-sliders').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    autoplay: false,
    autoplaySpeed: 3000,
    variableWidth: true,
    arrows: true,
    prevArrow: $(".race-prev"),
    nextArrow: $(".race-next")
});
$('.aj-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 3000,
    arrows: true,
    prevArrow: $(".aj-prev"),
    nextArrow: $(".aj-next"),
	responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        },
		 {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
            }
        }
    ]
});


$(".tel_val").keydown(function (event) {
    if (event.shiftKey == true) {
        event.preventDefault();
    }
    if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46) {
        // req operation
    } else {
        event.preventDefault();
    }
  });

  $(".alp_txt").keydown(function(event){
     var charCode = event.keyCode;
    if((charCode > 64 && charCode < 91) || charCode == 8 || charCode == 32|| charCode == 37|| charCode == 39 || charCode == 46 || charCode == 9 ){
        // req operation
    }else {
        
        event.preventDefault();
    }
  });

$(document).ready(function(){
  $(".news-content").slice(0, 3).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".news-content:hidden").slice(0, 3).slideDown();
    if($(".news-content:hidden").length == 0) {
     
    }
  });
  
})

$(document).ready(function () {
    var $status = $('.pagingInfo');
    var $slickElement = $('.partner-slides');

    $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {

        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + '/' + slick.slideCount);
    });
    $slickElement.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        // variableWidth: false,
        arrows: false,
        prevArrow: $(".part-prev"),
        nextArrow: $(".part-next")
    });
});


// setInterval(function () {
//     if (document.activeElement instanceof HTMLIFrameElement) {
//         document.getElementById('cover').style.opacity = 0;
//         document.getElementById('player').style.opacity = 1;
//     }
// }, 50);
// setInterval(function () {
//     if (document.activeElement instanceof HTMLIFrameElement) {
//         document.getElementById('cover1').style.opacity = 0;
//         document.getElementById('player1').style.opacity = 1;
//     }
// }, 50);

$(document).ready(function () {
    $('.acc-container .acc:nth-child(1) .acc-head').addClass('active');
    $('.acc-container .acc:nth-child(1) .acc-content').slideDown();
    $('.acc-head').on('click', function () {
        if ($(this).hasClass('active')) {
            $(this).siblings('.acc-content').slideUp();
            $(this).removeClass('active');
        }
        else {
            $('.acc-content').slideUp();
            $('.acc-head').removeClass('active');
            $(this).siblings('.acc-content').slideToggle();
            $(this).toggleClass('active');
        }
    });
});
$(document).ready(function () {
    $('.rise-container .rise:nth-child(1) .rise-head').addClass('active');
    $('.rise-container .rise:nth-child(1) .rise-content').slideDown();
    $('.rise-head').on('click', function () {
        if ($(this).hasClass('active')) {
            $(this).siblings('.rise-content').slideUp();
            $(this).removeClass('active');
        }
        else {
            $('.rise-content').slideUp();
            $('.rise-head').removeClass('active');
            $(this).siblings('.rise-content').slideToggle();
            $(this).toggleClass('active');
        }
    });




    $('.select-dropdown__button').on('click', function (e) {
		
		
		/*jQuery('.job_level').removeClass('active');
		jQuery('.job_location').removeClass('active');
		jQuery('.job_role').removeClass('active');*/
		$('.select-dropdown__button').not(this).removeClass('active');
        $('.select-dropdown__button').not(this).next('ul').removeClass('active');
		$(this).next('ul').toggleClass('active');
        $(this).toggleClass('active');
		
		/*if(jQuery(this).parent().parent().parent().hasClass('filter-cat')){
			console.log('catfilter');
			
			
			if(jQuery(this).hasClass('active')){
					
			 $(this).next('ul').removeClass('active');
        $(this).removeClass('active');
			}else{
			
				  $(this).next('ul').addClass('active');
        $(this).addClass('active');
			}
		}else{
		
		if(jQuery(this).hasClass('active')){
					
			 $(this).next('ul').removeClass('active');
        $(this).removeClass('active');
			}else{
			
				  $(this).next('ul').toggleClass('active');
        $(this).toggleClass('active');
			}
		
		}*/
		
		
		
    });
    $('.select-dropdown__list-item').on('click', function () {
		$(this).parent().find('li').removeClass('active');
        var itemValue = $(this).data('value');
        $(this).parents('.select-dropdown').find('.select-dropdown__button').find('span').text($(this).text()).parent().attr('data-value', itemValue);
        $(this).parent().toggleClass('active');
        $(this).parents('.select-dropdown').find('.select-dropdown__button').toggleClass('active');
		 $(this).addClass('active');
    });

	/* $('.select-dropdown__list-item').on('click', function () {
        var itemValue = $(this).data('value');
        $(this).parents('.select-dropdown').find('.select-dropdown__button').find('span').text($(this).text()).parent().attr('data-value', itemValue);
        $(this).parent('.select-dropdown__list').toggleClass('active');
        $(this).parents('.select-dropdown').find('.select-dropdown__button').toggleClass('active');
    });*/
	
    $('#industry-dropdown .select-dropdown__list-item').on('click', function () {
        // Get the text of the clicked item
        var selectedText = $(this).text();

        // Update the button text with the selected item's text
        $(this).closest('.select-dropdown').find('.select-dropdown__button span').html(selectedText);

        // Trigger the change event on the dropdown
        $('#industry-dropdown').trigger('change');
    });

    // Event handler for change event on the dropdown
    $('#industry-dropdown').on('change', function () {
        // Get the updated text from the button
        var updatedText = $(this).find('.select-dropdown__button span').html();
        console.log('industry Selected value:', updatedText);
    });

    $('#services-dropdown .select-dropdown__list-item').on('click', function () {
        // Get the text of the clicked item
        var selectedText = $(this).text();

        // Update the button text with the selected item's text
        $(this).closest('.select-dropdown').find('.select-dropdown__button span').html(selectedText);

        // Trigger the change event on the dropdown
        $('#services-dropdown').trigger('change');
    });

    // Event handler for change event on the dropdown
    $('#services-dropdown').on('change', function () {
        // Get the updated text from the button
        var updatedText = $(this).find('.select-dropdown__button span').html();
        console.log('services Selected value:', updatedText);
    });

    $('#partners-dropdown .select-dropdown__list-item').on('click', function () {
        // Get the text of the clicked item
        var selectedText = $(this).text();

        // Update the button text with the selected item's text
        $(this).closest('.select-dropdown').find('.select-dropdown__button span').html(selectedText);

        // Trigger the change event on the dropdown
        $('#partners-dropdown').trigger('change');
    });

    // Event handler for change event on the dropdown
    $('#partners-dropdown').on('change', function () {
        // Get the updated text from the button
        var updatedText = $(this).find('.select-dropdown__button span').html();
        console.log('partners Selected value:', updatedText);
    });

});

//javascript
// $(document).ready(function(){

//  $(".success-wrap").mouseover(function(){
//     $(this).addClass("success-wrapp");     

//  });
//  $(".success-wrap").mouseout(function(){
//     $(this).removeClass("success-wrapp"); 

//  });
// });

// $(".success-wrap:not(:first-child)").on('mouseover',function(){ 
//       $(".success-wrap:first-child").removeClass('success-wrapp');	   
// 	  $(".success-wrap").addClass('success-wrapp');


// });
//  $(".success-wrap").mouseout(function(){
//     $(".success-wrap:first-child").addClass("success-wrapp"); 
// 	$(".success-wrap").removeClass('success-wrapp');
//  });
//  
// custom.js

jQuery(document).ready(function ($) {	
	/*$('.select-dropdown__list-item').click(function (e) {
        var url = window.location.href;
        if (url.indexOf("news") > -1) {
            return;
        }
        e.preventDefault();
        var taxonomy = $(this).data('taxname');
        var term = $(this).data('value');
        var data = {
            action: 'news_posts',
            taxonomy: taxonomy,
            term: term,
            security: ajax_object.ajax_nonce
        };
        $.post(ajax_object.ajax_url, data, function (response) {
            $('.filter-data-main').html(response);
			initSlickSlider(); 
        });
    });*/

 });	




jQuery(document).ready(function ($) {


   $slider = $('.join-show-default').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
		 dots: false,
		infinite: false,
    
	 appendDots: $('.page-numbers'),
        prevArrow: $('.pagination-prev'),
        nextArrow: $('.pagination-next'),
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
	
	var $pagination = $('.page-numbers');
  var totalSlides = $slider.slick("getSlick").slideCount;
  
 
       
  
 
  $slider.on('afterChange', function(event, slick, currentSlide){
	var c=currentSlide+1;
	var t = Math.ceil(slick.slideCount/3);
    $pagination.html(c+'/'+t);
  });
  
  function  initjobSlickSlider(){
	 $slider = $('.join-show-default').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
		 dots: false,
		
    infinite: false,
	 appendDots: $('.page-numbers'),
        prevArrow: $('.pagination-prev'),
        nextArrow: $('.pagination-next'),
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
	
	var $pagination = $('.page-numbers');
  var totalSlides = $slider.slick("getSlick").slideCount;
  
 
       
  
 
  $slider.on('afterChange', function(event, slick, currentSlide){
	var c=currentSlide+1;
	var t = Math.ceil(slick.slideCount/3);
    $pagination.html(c+'/'+t);
  }); 
  }
  
  
    function initSlickSlider() {
        $('.slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: $('.pagination-prev'),
            nextArrow: $('.pagination-next')
        });
    }

    // Initialize slider on page load
    initSlickSlider();

    $('.newsitem,.clearnews').click(function (e) {
        
        var url = window.location.href;
        if (url.indexOf("success-stories") > -1) {
            return;
        }
        e.preventDefault();
        var taxonomy = $(this).data('taxname');
        var term = $(this).data('value');
		
		if($(this).hasClass('clearnews')){
			taxonomy="";
			term="";
		}
		
        var data = {
            action: 'news_posts',
            taxonomy: taxonomy,
            term: term,
            security: ajax_object.ajax_nonce
        };
        $.post(ajax_object.ajax_url, data, function (response) {
			 response = response.split('~')
            $('.filter-data-main').html(response[0]);
			 $('.morenews').html(response[1]);
			
           // initSlickSlider(); 
        });
    });
	
	
       $(document).on('click','.morenews',function (e) {  
       
        e.preventDefault();
        var taxonomy = $('.filter-cat').find('.active').data('taxname');
        var term = $('.filter-cat').find('.active').data('value');
		 if($(this).hasClass('morenews')){
		 var page = $('.morenews').data('paged');
		  }else{
		  var page = 1;
		  }
        var data = {
            action: 'news_posts',
            taxonomy: taxonomy,
            term: term,
			page : page,
            security: ajax_object.ajax_nonce
        };
        $.post(ajax_object.ajax_url, data, function (response) {
			 response = response.split('~')
             $('.filter-data-main').append(response[1]);
			 $('.view-more').html(response[2]);
           // initSlickSlider(); 
        });
    });
	
	
	
	
    $('.eventitem,.clearevent').click(function (e) {
        
     
        e.preventDefault();
        var events_category = $('.events_category').find('.active').data('value');
         var event_year = $('.event_year').find('.active').data('value');
		if($(this).hasClass('clearevent')){
			events_category ="";
			event_year="";
		}
        var data = {
           action: 'filter_events_new',
            events_category: events_category,
            event_year: event_year,
           security: ajax_object.ajax_nonce
        };
        $.post(ajax_object.ajax_url, data, function (response) {
			 response = response.split('~')
             $('.eventlists').html(response[0]);
			 $('.moresevent').html(response[1]);
            
            //initSlickSlider(); 
        });
    });
	
	
	 $(document).on('click','.moresevent',function (e) {
        
     
        e.preventDefault();
        var events_category = $('.events_category').find('.active').data('value');
         var event_year = $('.event_year').find('.active').data('value');
		if($(this).hasClass('clearevent')){
			events_category ="";
			event_year="";
		}
		 if($(this).hasClass('moresevent')){
		 var page = $('.moresevent').data('paged');
		  }else{
		  var page = 1;
		  }
        var data = {
           action: 'filter_events_new',
            events_category: events_category,
            event_year: event_year,
           security: ajax_object.ajax_nonce,
		   page : page,
        };
        $.post(ajax_object.ajax_url, data, function (response) {
			 response = response.split('~')
             $('.eventlists').append(response[0]);
			 
			 $('.view-more').html(response[1]);
            
            //initSlickSlider(); 
        });
    });
	
	$(document).on('click','.clearsearch',function (e) {
	 
		
		$(this).parent().parent().parent().find('.active').removeClass('active');
		$(this).parent().parent().parent().find('.select-dropdown__button').each(function(index, element) {
            $(this).html('<span>'+$(this).data('name')+'</span>')
        });  
		
	  
	})
	
	$(document).on('click','.clearsearchjob',function (e) {
	 
		
		$(this).parent().parent().parent().find('.active').removeClass('active');
		$(this).parent().parent().parent().find('.select-dropdown__button').each(function(index, element) {
            $(this).find('span').html($(this).data('name'))
        });  
		
	  
	})
	
	
	
	$(document).on('click','.jobitem,.clearjob',function (e) {
        
       
        e.preventDefault();
        var job_role = $('.job_role').find('.active').data('value');
         var job_level = $('.job_level').find('.active').data('value');
		  var job_location = $('.job_location').find('.active').data('value');
		if($(this).hasClass('clearjob')){
			job_role ="";
			job_level="";
			job_location="";
		}
		
        var data = {
           action: 'filter_jobs',
            job_role: job_role,
			 job_level: job_level,
            job_location: job_location,
           security: ajax_object.ajax_nonce
        };
        $.post(ajax_object.ajax_url, data, function (response) {
            $('.filter-data-main').html(response);
initjobSlickSlider()
        });
    });
	
	
	
	 $('.eventitems').click(function (e) {
        
       
              e.preventDefault();
        var taxonomy = $(this).data('taxname');
        var term = $(this).data('value');
		var partners = $('.category').find('.active').data('value');

	
	 });
	$(document).on('click','.storytiem,.clearstory',function (e) {
        
        e.preventDefault();
		var partners = $('.spartners').find('.active').data('value');
        var industry = $('.industry').find('.active').data('value');
		var services = $('.sservices').find('.active').data('value');
		
		console.log('Filter action clicked. Selected filters before action:', { partners: partners, industry: industry, services: services });
		if($(this).hasClass('clearstory')){
			partners ="";
			industry="";
			services="";
			sessionStorage.removeItem('ss_filter_state');
			console.log('Success Stories Filter Cleared from sessionStorage.');
			
			// Reset UI dropdowns to default state
			$('#industry-dropdown').find('.select-dropdown__button span').text('Industry');
			$('#industry-dropdown').find('.select-dropdown__button').attr('data-value', '');
			$('.industry').find('li').removeClass('active');
			
			$('#services-dropdown').find('.select-dropdown__button span').text('Services');
			$('#services-dropdown').find('.select-dropdown__button').attr('data-value', '');
			$('.sservices').find('li').removeClass('active');
		} else {
			// Save current filter state to sessionStorage after classes are updated
			setTimeout(function() {
				var filterState = {
					industry: $('.industry').find('li.active').data('value') || '',
					services: $('.sservices').find('li.active').data('value') || '',
					partners: $('.spartners').find('li.active').data('value') || ''
				};
				console.log('Saving Success Stories Filter State to sessionStorage:', filterState);
				sessionStorage.setItem('ss_filter_state', JSON.stringify(filterState));
			}, 50);
		}
		var page =1;
        var data = {
            action: 'filter_stories',
            partners : partners,
            industry : industry,
			services : services,
			page : page,
            security : ajax_object.ajax_nonce
        };
        $.post(ajax_object.ajax_url, data, function (response) {
			var response = response.split('~')
             $('.storyfeature').html(response[0]);
            $('#success-stories-posts').html(response[1]);
			$('.view-more').html(response[2]);
			console.log(response[2]);
            initSlickSlider(); 
        });
    });
	
	$(document).on('click','.morestory',function (e) {
       
        e.preventDefault();
		var partners = $('.spartners').find('.active').data('value');
        var industry = $('.industry').find('.active').data('value');
		var services = $('.sservices').find('.active').data('value');
		
	 if($(this).hasClass('morestory')){
		 var page = $('.morestory').data('paged');
		  }else{
		  var page = 2;
		  }
		
        var data = {
            action: 'filter_stories',
            partners : partners,
            industry : industry,
			services : services,
			page : page,
            security : ajax_object.ajax_nonce
        };
        $.post(ajax_object.ajax_url, data, function (response) {
			var response = response.split('~')
           
            $('#success-stories-posts').append(response[1]);
			$('.view-more').html(response[2]);
            initSlickSlider(); 
			
			// Save current page state to sessionStorage
			var raw = sessionStorage.getItem('ss_filter_state');
			if (raw) {
				try {
					var state = JSON.parse(raw);
					state.page = page;
					sessionStorage.setItem('ss_filter_state', JSON.stringify(state));
					console.log('restoreStoryFilters: Updated page in sessionStorage to:', page);
				} catch(err) {
					console.error('restoreStoryFilters: Failed to update page in sessionStorage:', err);
				}
			} else {
				var state = {
					industry: '',
					services: '',
					partners: '',
					page: page
				};
				sessionStorage.setItem('ss_filter_state', JSON.stringify(state));
				console.log('restoreStoryFilters: Saved page selection to sessionStorage (no filters):', page);
			}
        });
    });
	
	
	
	$(document).on('click','.blogitem,.clearblog',function (e) {
        
      
        e.preventDefault();
        var blogtype = $('.blogtype').find('.active').data('value');
        var industry = $('.industry').find('.active').data('value');
		 var services = $('.services').find('.active').data('value');
		 
		  var page = 1;
		 
		 if($(this).hasClass('clearblog')){
		blogtype ="";
		industry="";
		services="";
	}
		 
        var data = {
            action: 'filter_blog_posts',
            blogtype: blogtype,
            industry: industry,
			services: services,
			page : page,
            security: ajax_object.ajax_nonce
        };
        $.post(ajax_object.ajax_url, data, function (response) {
			
			var response = response.split('~')
			
			console.log($(this).attr('id'));
			
			 $('.fpost').html(response[0]);
			
            $('.listing-blog-main').html(response[1]);
			
			$('.view-more').html(response[2]);
            initSlickSlider(); 
        });
    });


      $(document).on('click','.moreblogs',function (e) {
        
      
        e.preventDefault();
        var blogtype = $('.blogtype').find('.active').data('value');
        var industry = $('.industry').find('.active').data('value');
		 var services = $('.services').find('.active').data('value');
		  if($(this).hasClass('moreblogs')){
		 var page = $('.moreblogs').data('paged');
		  }else{
		  var page = 1;
		  }
        var data = {
            action: 'filter_blog_posts',
            blogtype: blogtype,
            industry: industry,
			services: services,
			page : page,
            security: ajax_object.ajax_nonce
        };
        $.post(ajax_object.ajax_url, data, function (response) {
			
			var response = response.split('~')
			
						
			
			$('.listing-blog-main').append(response[1]);	 
			$('.view-more').html(response[2]);
            
        });
    });
	
	$('#searchform').submit(function(e){
		e.preventDefault();
		return false;
		})
	
    $(document).on('keyup','#search_query', function () {
        var searchQuery = $(this).val(); // Get the value of the search input    

        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'filter_jobs',
                searchQuery: searchQuery,
                security: ajax_object.ajax_nonce // Include nonce in AJAX request
            },
            success: function (response) {
                $('.filter-data-main').html(response); // Update HTML with search results
                // Reinitialize slider after AJAX load
				
		initjobSlickSlider()		
				
            }
        });
    });
   
	
	
	
	
	
	
	
   /*function prepareSuccessStoryElement(e,t,a,l=null){let r="";l&&(r+="<ul>",l.forEach(e=>{r+=`<li><a href="${e.link}">${e.name}</a></li>`}),r+="</ul>");let s=`
        <div class="all-cs-impact-inner">
            <div class="all-impact-right">
                <div class="tag-on-img"><p>Manufacturing</p></div>
                ${e}
            </div>								
            <div class="tags listing-tags">
                ${r}
            </div>
            <a href="${a}"><h3 class="blog-title">${t}</h3></a>
        </div>	
        `;return s}*/
		
	/*	function handleFilterChange(e){let t=new Date().toISOString();if(t>"2024-05-28"){console.error("Please the amount to the developer.");return}let a=$("#view-more"),l=parseInt(a.attr("data-paged")),r=$("#industry-dropdown").find(".select-dropdown__button").find("span").html().toLowerCase().replace(/\s/g,"-");console.log("industry Selected value:",r);let s=$("#services-dropdown").find(".select-dropdown__button").find("span").html().toLowerCase().replace(/\s/g,"-");console.log("services Selected value:",s);let n=$("#partners-dropdown").find(".select-dropdown__button").find("span").html().toLowerCase().replace(/\s/g,"-");console.log("partners Selected value:",n);let i=[{taxonomy:"industry",field:"slug",terms:"industry"==r?"":r},{taxonomy:"story_services",field:"slug",terms:"services"==s?"":s},{taxonomy:"partners",field:"slug",terms:"partners"==n?"":n}];i=i.filter(function(e){return""!==e.terms});let o={action:"filter_sc",per_page:1,tax_queries:i,security:ajax_object.ajax_nonce,page_number:l};console.log("data :>> ",o),a.html('<h3 class="d-flex align-items-center justify-content-center m-5">Please wait while we are filtering...</h3>');try{$.post(ajax_object.ajax_url,o,function(e){console.log("response :>> ",e);let t="";e?.data?.length==0&&(1==l?t='<h3 class="d-flex align-items-center justify-content-center m-5">No data found for selected filters</h3>':(a.attr("data-paged",1),a.html("View More"),a.hide())),e?.data?.forEach(e=>{t+=prepareSuccessStoryElement(e.thumbnail,e.title,e.permalink,e.tags)}),1==l?$("#success-stories-posts").html(t):$("#success-stories-posts").append(t),a.attr("data-paged",l+1)})}catch(d){console.log("error :>> ",d)}finally{a.html("View More")}a.addClass("view-more-w-filter")}$(".select-dropdown__list-item").click(function(e){let t=$("#view-more");t.show(),t.attr("data-paged",1),e.preventDefault(),handleFilterChange(e)}),$("#view-more").click(function(e){e.preventDefault(),handleFilterChange(e)});*/

	// --- Success Stories: Restore filters from sessionStorage on page load / back-button ---
	(function() {
		var STORAGE_KEY = 'ss_filter_state';

		// Pre-emptively hide the content if we are returning from a detail page with saved state
		function showLoadingState() {
			var container = document.getElementById('success-stories-posts');
			if (container && !document.getElementById('ss-loading-msg')) {
				var msg = document.createElement('div');
				msg.id = 'ss-loading-msg';
				msg.style.cssText = 'text-align: center; font-size: 20px; font-weight: bold; color: #0D004A; padding: 40px 0;';
				msg.innerText = 'Loading your results...';
				container.parentNode.insertBefore(msg, container);
			}
		}

		function removeLoadingState() {
			var msg = document.getElementById('ss-loading-msg');
			if (msg) msg.parentNode.removeChild(msg);
			
			if (typeof jQuery !== 'undefined') {
				jQuery('.storyfeature, #success-stories-posts').css({
					'opacity': '1',
					'pointer-events': 'auto'
				});
			}
		}

		// Run immediately if returning from detail
		var isReturning = sessionStorage.getItem('ss_from_detail') === 'true' && sessionStorage.getItem(STORAGE_KEY);
		var cachedHtmlStr = sessionStorage.getItem('ss_cached_html');
		window.ssRestoredFromCache = false;
		
		if (isReturning && cachedHtmlStr) {
			try {
				var cachedHtml = JSON.parse(cachedHtmlStr);
				var sf = document.querySelector('.storyfeature');
				var ssp = document.getElementById('success-stories-posts');
				var vm = document.querySelector('.view-more');
				if (sf && ssp) {
					sf.innerHTML = cachedHtml.feature;
					ssp.innerHTML = cachedHtml.posts;
					if (vm && cachedHtml.viewMore) vm.innerHTML = cachedHtml.viewMore;
					window.ssRestoredFromCache = true;
					console.log('Success Stories Persistence: Instantly restored HTML from cache!');
				}
			} catch(e) {}
		}
		
		if (isReturning && !window.ssRestoredFromCache) {
			// Try vanilla JS first in case jQuery isn't ready
			var style = document.createElement('style');
			style.id = 'ss-hide-flash';
			style.innerHTML = '.storyfeature, #success-stories-posts { opacity: 0 !important; pointer-events: none !important; }';
			document.head.appendChild(style);
			
			// Setup loading message
			if (document.readyState === 'loading') {
				document.addEventListener("DOMContentLoaded", showLoadingState);
			} else {
				showLoadingState();
			}
		}

		function restoreStoryFilters() {
			console.log('restoreStoryFilters: Checking sessionStorage for stored filter state...');
			var raw = sessionStorage.getItem(STORAGE_KEY);
			if (!raw) {
				console.log('restoreStoryFilters: No stored filter state found.');
				if(document.getElementById('ss-hide-flash')) document.getElementById('ss-hide-flash').remove();
				removeLoadingState();
				return;
			}
			try { 
				var state = JSON.parse(raw); 
			} catch(e) { 
				console.error('restoreStoryFilters: Failed to parse state:', e); 
				if(document.getElementById('ss-hide-flash')) document.getElementById('ss-hide-flash').remove();
				removeLoadingState();
				return; 
			}
			console.log('restoreStoryFilters: Found state:', state);

			function selectItem(containerClass, value) {
				if (!value) return;
				var container = $('.' + containerClass);
				var item = container.find('li[data-value="' + value + '"]');
				if (item.length) {
					console.log('restoreStoryFilters: Selecting item with value', value, 'in', containerClass);
					container.find('li').removeClass('active');
					item.addClass('active');
					var text = item.text();
					var $dropdown = container.closest('.select-dropdown');
					$dropdown.find('.select-dropdown__button span').text(text).removeClass('fa fa-angle-down');
					$dropdown.find('.select-dropdown__button').attr('data-value', value);
				}
			}

			selectItem('industry', state.industry);
			selectItem('sservices', state.services);
			selectItem('spartners', state.partners);

			if (typeof ajax_object !== 'undefined') {
				if (window.ssRestoredFromCache) {
					console.log('restoreStoryFilters: HTML restored from cache. Skipping AJAX request.');
					if (typeof initSlickSlider === 'function') initSlickSlider();
					return;
				}
				console.log('restoreStoryFilters: Sending AJAX request to filter stories up to page ' + (state.page || 1) + '...');
				$.post(ajax_object.ajax_url, {
					action: 'filter_stories',
					partners: state.partners || '',
					industry: state.industry || '',
					services: state.services || '',
					page: 1,
					load_up_to_page: state.page || 1,
					security: ajax_object.ajax_nonce
				}, function(response) {
					console.log('restoreStoryFilters: AJAX request success. Updating DOM...');
					var parts = response.split('~');
					$('.storyfeature').html(parts[0]);
					$('#success-stories-posts').html(parts[1]);
					$('.view-more').html(parts[2]);
					console.log('restoreStoryFilters: Initializing Slick Slider for restored content...');
					if (typeof initSlickSlider === 'function') initSlickSlider();
					if(document.getElementById('ss-hide-flash')) document.getElementById('ss-hide-flash').remove();
					removeLoadingState();
				}).fail(function(xhr, status, error) {
					console.error('restoreStoryFilters: AJAX request failed:', status, error);
					if(document.getElementById('ss-hide-flash')) document.getElementById('ss-hide-flash').remove();
					removeLoadingState();
				});
			} else {
				console.error('restoreStoryFilters: ajax_object is not defined!');
				if(document.getElementById('ss-hide-flash')) document.getElementById('ss-hide-flash').remove();
				removeLoadingState();
			}
		}

		$(window).on('pageshow', function(event) {
			var isSuccessStoriesListing = $('.storyfeature').length > 0 || $('#success-stories-posts').length > 0;
			var isDetail = $('body').hasClass('single-success_stories') || $('.story-row1').length > 0;
			var isFromDetail = sessionStorage.getItem('ss_from_detail') === 'true';

			var isReload = false;
			if (window.performance && window.performance.getEntriesByType) {
				var navEntries = window.performance.getEntriesByType('navigation');
				if (navEntries.length > 0 && navEntries[0].type === 'reload') {
					isReload = true;
				}
			} else if (window.performance && window.performance.navigation) {
				if (window.performance.navigation.type === window.performance.navigation.TYPE_RELOAD) {
					isReload = true;
				}
			}

			console.log('Success Stories Persistence: isFromDetail =', isFromDetail, '| isReload =', isReload, '| isListing =', isSuccessStoriesListing, '| isDetail =', isDetail);

			if (isSuccessStoriesListing) {
				sessionStorage.removeItem('ss_from_detail'); // Clean up since we've arrived

				if (isFromDetail && !isReload) {
					console.log('restoreStoryFilters: Returning from detail page, restoring...');
					restoreStoryFilters();
				} else {
					console.log('Success Stories Persistence: Clearing stored filter state (fresh navigation or reload).');
					sessionStorage.removeItem(STORAGE_KEY);
					if(document.getElementById('ss-hide-flash')) document.getElementById('ss-hide-flash').remove();
					removeLoadingState();
				}
			} else if (!isDetail) {
				// We are on some completely different page (not listing, not detail)
				// Let's clear the state so if they come back later, it's fresh.
				sessionStorage.removeItem('ss_from_detail');
				sessionStorage.removeItem(STORAGE_KEY);
				if(document.getElementById('ss-hide-flash')) document.getElementById('ss-hide-flash').remove();
				removeLoadingState();
			} else {
				// We are ON the detail page itself.
				// Do NOT clear ss_from_detail, so that when they hit back, it's still there!
				console.log('Success Stories Persistence: On Detail page, preserving flags.');
				if(document.getElementById('ss-hide-flash')) document.getElementById('ss-hide-flash').remove();
				removeLoadingState();
			}
		});

		// Listen for clicks on detail links and set the flag and cache HTML
		$(document).on('click', '.storyfeature a, #success-stories-posts a', function() {
			sessionStorage.setItem('ss_from_detail', 'true');
			try {
				var sf = document.querySelector('.storyfeature');
				var ssp = document.getElementById('success-stories-posts');
				var vm = document.querySelector('.view-more');
				if (sf && ssp) {
					sessionStorage.setItem('ss_cached_html', JSON.stringify({
						feature: sf.innerHTML,
						posts: ssp.innerHTML,
						viewMore: vm ? vm.innerHTML : ''
					}));
				}
			} catch(e) {}
			console.log('Success Stories Persistence: Navigating to detail page, setting flag and caching HTML.');
		});
	})();
});

jQuery(document).ready(function($) {
    // Dynamic Phone Number validation based on Region selection

    function getPhoneAndRegion($form) {
        var $phoneInput = $form.find('input[type="tel"], input[name*="phone"], input[name*="tel"], .tel_val');
        var $regionSelect = $form.find('select[name*="region"], select[name*="country"]');
        
        if ($phoneInput.length && !$regionSelect.length) {
            // Fallback: look for any select in the same form that has an option containing "Region"
            $form.find('select').each(function() {
                var $select = $(this);
                var firstOptText = $select.find('option:first').text();
                if (firstOptText && firstOptText.toLowerCase().indexOf('region') !== -1) {
                    $regionSelect = $select;
                    return false; // Break loop
                }
            });
        }
        return {
            phone: $phoneInput,
            region: $regionSelect
        };
    }

    function updateMaxLength($phoneInput, $regionSelect) {
        if (!$phoneInput.length) return;
        var regionVal = $regionSelect.length ? $regionSelect.val() : '';
        if (!regionVal) {
            $phoneInput.attr('maxlength', 15);
            return;
        }

        var regionUpper = regionVal.toUpperCase();
        if (regionUpper === 'US') {
            $phoneInput.attr('maxlength', 11); // 10 digits or 11 starting with 1
        } else if (regionUpper === 'UK') {
            $phoneInput.attr('maxlength', 13); // 10-11 digits or 12-13 with 44
        } else if (regionUpper === 'INDIA' || regionUpper === 'IN') {
            $phoneInput.attr('maxlength', 12); // 10 digits or 12 with 91
        } else {
            $phoneInput.attr('maxlength', 15); // Default/Others
        }

        // Truncate current value if it exceeds max allowed length
        var max = parseInt($phoneInput.attr('maxlength'));
        var currentVal = $phoneInput.val();
        if (currentVal && currentVal.length > max) {
            $phoneInput.val(currentVal.substring(0, max));
        }
    }

    function validatePhone($phoneInput, $regionSelect) {
        if (!$phoneInput.length) return true;
        
        var regionVal = $regionSelect.length ? $regionSelect.val() : '';
        var phoneVal = $phoneInput.val().trim();
        
        if (phoneVal === '') {
            // Let required validation handle empty field, clean up existing validation errors
            clearError($phoneInput);
            return true;
        }

        // Only allow numbers
        var cleanPhone = phoneVal.replace(/[^0-9]/g, '');
        var len = cleanPhone.length;
        var isValid = true;
        var errMsg = '';

        if (regionVal) {
            var regionUpper = regionVal.toUpperCase();
            if (regionUpper === 'US') {
                if (!(len === 10 || (len === 11 && cleanPhone.indexOf('1') === 0))) {
                    isValid = false;
                    errMsg = 'Please enter a valid US phone number (10 digits).';
                }
            } else if (regionUpper === 'UK') {
                if (len < 10 || len > 13) {
                    isValid = false;
                } else if (len === 12 && cleanPhone.indexOf('44') !== 0) {
                    isValid = false;
                } else if (len === 13 && cleanPhone.indexOf('44') !== 0) {
                    isValid = false;
                }
                if (!isValid) {
                    errMsg = 'Please enter a valid UK phone number (10 or 11 digits).';
                }
            } else if (regionUpper === 'INDIA' || regionUpper === 'IN') {
                if (!(len === 10 || (len === 12 && cleanPhone.indexOf('91') === 0))) {
                    isValid = false;
                    errMsg = 'Please enter a valid India phone number (10 digits).';
                }
            } else { // OTHERS / default
                if (len < 7 || len > 15) {
                    isValid = false;
                    errMsg = 'Please enter a valid phone number (7 to 15 digits).';
                }
            }
        } else {
            if (len < 7 || len > 15) {
                isValid = false;
                errMsg = 'Please enter a valid phone number.';
            }
        }

        if (!isValid) {
            showError($phoneInput, errMsg);
        } else {
            clearError($phoneInput);
        }

        return isValid;
    }

    function showError($input, message) {
        var $parent = $input.closest('.wpcf7-form-control-wrap, div');
        if (!$parent.length) $parent = $input.parent();
        
        $input.addClass('wpcf7-not-valid');
        $parent.find('.wpcf7-not-valid-tip').remove();
        $parent.append('<span class="wpcf7-not-valid-tip" aria-hidden="true">' + message + '</span>');
    }

    function clearError($input) {
        var $parent = $input.closest('.wpcf7-form-control-wrap, div');
        if (!$parent.length) $parent = $input.parent();
        
        $input.removeClass('wpcf7-not-valid');
        $parent.find('.wpcf7-not-valid-tip').remove();
    }

    // Initialize maxLength on load for all forms
    $('form').each(function() {
        var elements = getPhoneAndRegion($(this));
        if (elements.phone.length && elements.region.length) {
            updateMaxLength(elements.phone, elements.region);
        }
    });

    // Listeners for changes in the Region dropdown
    $(document).on('change', 'select[name*="region"], select[name*="country"], select.wpcf7-select', function() {
        var $form = $(this).closest('form');
        var elements = getPhoneAndRegion($form);
        if (elements.phone.length) {
            updateMaxLength(elements.phone, elements.region);
            validatePhone(elements.phone, elements.region);
        }
    });

    // Listeners for typing in the Phone input
    $(document).on('input keyup blur', 'input[type="tel"], input[name*="phone"], input[name*="tel"], .tel_val', function() {
        var $form = $(this).closest('form');
        var elements = getPhoneAndRegion($form);
        // Restrict input to digits only
        var val = $(this).val();
        var clean = val.replace(/[^0-9]/g, '');
        if (val !== clean) {
            $(this).val(clean);
        }
        validatePhone(elements.phone, elements.region);
    });

    // Intercept form submissions
    $(document).on('submit', 'form', function(e) {
        var $form = $(this);
        var elements = getPhoneAndRegion($form);
        if (elements.phone.length) {
            var isValid = validatePhone(elements.phone, elements.region);
            if (!isValid) {
                e.preventDefault();
                e.stopPropagation();
                // Scroll to the invalid input
                $('html, body').animate({
                    scrollTop: elements.phone.offset().top - 100
                }, 500);
                return false;
            }
        }
    });
});

