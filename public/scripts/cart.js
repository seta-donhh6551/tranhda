$(document).ready(function(){
    //Adjust panel height
	$.fn.adjustPanel = function(){
                $(this).find("div, .subpanel").css({ 'height' : 'auto'}); //Reset subpanel and ul height

                var windowHeight = $(window).height(); //Get the height of the browser viewport
                var panelsub = $(this).find(".subpanel").height(); //Get the height of subpanel
                var panelAdjust = windowHeight - 100; //Viewport height - 100px (Sets max height of subpanel)
                var ulAdjust =  panelAdjust - 25; //Calculate ul size after adjusting sub-panel (27px is the height of the base panel)

                if ( panelsub >= panelAdjust ) {	 //If subpanel is taller than max height...
                        $(this).find(".subpanel").css({ 'height' : panelAdjust }); //Adjust subpanel to max height
                        $(this).find("div.subpanel").css({ 'height' : ulAdjust}); //Adjust subpanel ul to new size
                }
                else if ( panelsub < panelAdjust ) { //If subpanel is smaller than max height...
                        $(this).find("div.subpanel").css({ 'height' : 'auto'}); //Set subpanel ul to auto (default size)
                }
        };

        //Execute function on load
        $("#cartpanel").adjustPanel(); //Run the adjustPanel function on #cartpanel

        //Each time the viewport is adjusted/resized, execute the function
        $(window).resize(function () {
                $("#cartpanel").adjustPanel();
        });

        $("#cartpanel .type_btnss, .subpanel h3").click(function() {
                if($(this).next(".subpanel").is(':visible')){
                        $(this).next(".subpanel").hide();
                        $("#Compare-foot li a").removeClass('active');
                }
                else { //if subpanel is not active...
                        $(".subpanel").hide(); //Hide all subpanels
                        $(this).next(".subpanel").toggle(); //Toggle the subpanel to make active
                        $("#Compare-foot li a").removeClass('active'); //Remove active class on all subpanel trigger
                        $(this).toggleClass('active'); //Toggle the active class on the subpanel trigger
                }
                return false; //Prevent browser jump to link anchor
        });

        //Click event outside of subpanel
        $(document).click(function() { //Click anywhere and...
              //  $(".subpanel").hide(); //hide subpanel
              //  $("#Compare-foot li a").removeClass('active'); //remove active class on subpanel trigger
        });
        $('.subpanel ul').click(function(e) {
                e.stopPropagation(); //Prevents the subpanel ul from closing on click
        });
});