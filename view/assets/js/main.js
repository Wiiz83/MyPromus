var added = [];

function clearFields() {
	document.getElementById( "invited" ).value = "";
}

function stringInAdded( string ) {
	for ( var i = 0; i < added.length; i++ ) {
		if ( string.localeCompare( added[ i ] ) == 0 ) {
			return true;
		}
	}
	return false;
}

function inviteFriend() {
	var index = document.getElementById( "friends-list" ).options.selectedIndex;
	var invited = document.getElementById( "invited" ).value;
	var friend = document.getElementById( "friends-list" ).options[ index ].text;
	
	if ( ! stringInAdded( friend ) ) {
		added[ added.length ] = friend;

		if ( invited == "" ) {
			invited = friend;
		
		} else {
			invited += ", " + friend;
		}

		document.getElementById( "invited" ).value = invited;
		document.getElementById("already-added").innerHTML = "";

	} else {
		document.getElementById("already-added").innerHTML = friend + " is already in the list.";
	}

	
}

function clearFriends() {
	document.getElementById( "invited" ).value = "";
	document.getElementById("already-added").innerHTML = "";
	added = [];


}

function enableArea() {
	document.getElementById( "invited" ).disabled = false;
}

function deleteFriend() {
	var index = document.getElementById( "friends-list" ).options.selectedIndex;
	document.getElementById( "friends-list" ).remove( index );

	
}



 $(document).ready(function() {
             
              var owl1 = $("#incoming");
             
              owl1.owlCarousel({
                  items : 5, //10 items above 1000px browser width
                  itemsDesktop : [1000,5], //5 items between 1000px and 901px
                  itemsDesktopSmall : [900,3], // betweem 900px and 601px
                  itemsTablet: [600,2], //2 items between 600 and 0
                  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
              });
             
              // Custom Navigation Events
              $(".next-inco").click(function(){
                owl1.trigger('owl.next');
              })
              $(".prev-inco").click(function(){
                owl1.trigger('owl.prev');
              })



              var owl2 = $("#created");
             
              owl2.owlCarousel({
                  items : 5, //10 items above 1000px browser width
                  itemsDesktop : [1000,5], //5 items between 1000px and 901px
                  itemsDesktopSmall : [900,3], // betweem 900px and 601px
                  itemsTablet: [600,2], //2 items between 600 and 0
                  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
              });
             
              // Custom Navigation Events
              $(".next-created").click(function(){
                owl2.trigger('owl.next');
              })
              $(".prev-created").click(function(){
                owl2.trigger('owl.prev');
              })
             

             var owl3 = $("#past");
             
              owl3.owlCarousel({
                  items : 5, //10 items above 1000px browser width
                  itemsDesktop : [1000,5], //5 items between 1000px and 901px
                  itemsDesktopSmall : [900,3], // betweem 900px and 601px
                  itemsTablet: [600,2], //2 items between 600 and 0
                  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
              });
             
              // Custom Navigation Events
              $(".next-past").click(function(){
                owl3.trigger('owl.next');
              })
              $(".prev-past").click(function(){
                owl3.trigger('owl.prev');
              })
             
             
            });


       $(document).ready(function() {
      $("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
    });