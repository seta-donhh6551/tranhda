function checkBrowserEnableCookie(){var cookieEnabled=(navigator.cookieEnabled)?true:false
if(typeof navigator.cookieEnabled=="undefined"&&!cookieEnabled){document.cookie="testcookie"
cookieEnabled=(document.cookie.indexOf("testcookie")!=-1)?true:false}
if(cookieEnabled)return true;else return false;}
function createCookie(name,value,days){
    if(days){
        var date=new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires="; expires="+date.toGMTString();
    }
    else
        var expires="";
	document.cookie=name+"="+value+expires+"; path=/";
}
function readCookie(name){
    var nameEQ=name+"=";
    var ca=document.cookie.split(';');    
    for(var i=0;i<ca.length;i++){
        var c=ca[i];
        while(c.charAt(0)==' ')
            c=c.substring(1,c.length);
        if(c.indexOf(nameEQ)==0)
            return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name){createCookie(name,"",-1);}

var Base64 = {
 
	// private property
	_keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
 
	// public method for encoding
	encode : function (input) {
		var output = "";
		var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
		var i = 0;
 
		input = Base64._utf8_encode(input);
 
		while (i < input.length) {
 
			chr1 = input.charCodeAt(i++);
			chr2 = input.charCodeAt(i++);
			chr3 = input.charCodeAt(i++);
 
			enc1 = chr1 >> 2;
			enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
			enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
			enc4 = chr3 & 63;
 
			if (isNaN(chr2)) {
				enc3 = enc4 = 64;
			} else if (isNaN(chr3)) {
				enc4 = 64;
			}
 
			output = output +
			this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
			this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);
 
		}
 
		return output;
	},
 
	// public method for decoding
	decode : function (input) {
		var output = "";
		var chr1, chr2, chr3;
		var enc1, enc2, enc3, enc4;
		var i = 0;
 
		input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
 
		while (i < input.length) {
 
			enc1 = this._keyStr.indexOf(input.charAt(i++));
			enc2 = this._keyStr.indexOf(input.charAt(i++));
			enc3 = this._keyStr.indexOf(input.charAt(i++));
			enc4 = this._keyStr.indexOf(input.charAt(i++));
 
			chr1 = (enc1 << 2) | (enc2 >> 4);
			chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
			chr3 = ((enc3 & 3) << 6) | enc4;
 
			output = output + String.fromCharCode(chr1);
 
			if (enc3 != 64) {
				output = output + String.fromCharCode(chr2);
			}
			if (enc4 != 64) {
				output = output + String.fromCharCode(chr3);
			}
 
		}
 
		output = Base64._utf8_decode(output);
 
		return output;
 
	},
 
	// private method for UTF-8 encoding
	_utf8_encode : function (string) {
		string = string.replace(/\r\n/g,"\n");
		var utftext = "";
 
		for (var n = 0; n < string.length; n++) {
 
			var c = string.charCodeAt(n);
 
			if (c < 128) {
				utftext += String.fromCharCode(c);
			}
			else if((c > 127) && (c < 2048)) {
				utftext += String.fromCharCode((c >> 6) | 192);
				utftext += String.fromCharCode((c & 63) | 128);
			}
			else {
				utftext += String.fromCharCode((c >> 12) | 224);
				utftext += String.fromCharCode(((c >> 6) & 63) | 128);
				utftext += String.fromCharCode((c & 63) | 128);
			}
 
		}
 
		return utftext;
	},
 
	// private method for UTF-8 decoding
	_utf8_decode : function (utftext) {
		var string = "";
		var i = 0;
		var c = c1 = c2 = 0;
 
		while ( i < utftext.length ) {
 
			c = utftext.charCodeAt(i);
 
			if (c < 128) {
				string += String.fromCharCode(c);
				i++;
			}
			else if((c > 191) && (c < 224)) {
				c2 = utftext.charCodeAt(i+1);
				string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
				i += 2;
			}
			else {
				c2 = utftext.charCodeAt(i+1);
				c3 = utftext.charCodeAt(i+2);
				string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
				i += 3;
			}
 
		}
 
		return string;
	}
 
}
function countShoppingCompare(name){
    if(readCookie(name)==null){
        document.getElementById('Compare-foot').style.display = 'none';
        createCookie(name,'',1);
        document.getElementById('count_shopping_Compare').innerHTML=0;
    }else{     
        var current_cart=readCookie(name);
        var ca=current_cart.split(',');
        number_product=ca.length;
        if(number_product-1==0)
            document.getElementById('Compare-foot').style.display = 'none';
        else
            document.getElementById('Compare-foot').style.display = 'block';
        
        document.getElementById('count_shopping_Compare').innerHTML=number_product-1;

        /*
		var Parent = document.getElementById('Coppare_list');
        Parent.innerHTML = '';
        var NewTD;
        for(var i=0;i<ca.length;i++) {            
            var arr_cart = ca[i].split('|');
            if(arr_cart[0]) {
                NewTD = document.createElement("td");
							NewTD.innerHTML +='<a id="close" href="javascript:;" onClick="deleteShoppingCompareItem('+arr_cart[0]+')">&nbsp;</a>';
							NewTD.innerHTML += '<div id="compare_img"><a href="'+Base64.decode(arr_cart[3])+'"><img src="'+Base64.decode(arr_cart[4])+'" border="0" /></a></div>';
							NewTD.innerHTML += '<div id="compare_name"><a class="textLeft" href="'+Base64.decode(arr_cart[3])+'">'+Base64.decode(arr_cart[2])+'</a></div>';
				Parent.appendChild(NewTD);
            }
        }
		var Parent = document.getElementById('btn_list');
		Parent.innerHTML = ''; 
		var NewTD;
        	NewTD = document.createElement("td");
			    if(number_product >= 3)
				   	NewTD.innerHTML += '<a class="btn_sosanh_active" href="so-sanh.html"></a>';
				else
					NewTD.innerHTML += '<a class="btn_sosanh"></a>';
        	Parent.appendChild(NewTD);
		*/
		var Parent ='';
        for(var i=0;i<ca.length;i++) {            
            var arr_cart = ca[i].split('|');
            if(arr_cart[0]) {
                Parent += "<td>";
							Parent +='<div id="div_close"><a id="close" href="javascript:;" onClick="deleteShoppingCompareItem('+arr_cart[0]+')">&nbsp;</a></div>';
							Parent+= '<div id="compare_img"><a href="'+Base64.decode(arr_cart[3])+'"><img src="'+Base64.decode(arr_cart[4])+'" border="0" /></a></div>';
							Parent += '<div id="compare_name"><a class="textLeft" href="'+Base64.decode(arr_cart[3])+'">'+Base64.decode(arr_cart[2])+'</a></div>';
				Parent += "</td>";
            }
        }
		$('#Coppare_list').html(Parent);
        var ssss ='';	
			ssss += "<td>";
			    	if(number_product >= 3)
				   		ssss += '<a class="btn_sosanh_active" href="/vn/compare.php"></a>';
					else
						ssss += '<a class="btn_sosanh"></a>';
        	ssss += "</td>";
		$('#btn_list').html(ssss);	
    }
}

function countShoppingCart_pro(name){
        var current_cart=readCookie(name);
        var ca=current_cart.split(',');
        number_product=ca.length;
		//alert(number_product);
        document.getElementById('aaaxxx').innerHTML=number_product-1;
}
function countShoppingCart(name){
    if(readCookie(name)==null){
        document.getElementById('footpanel').style.display = 'none';
        createCookie(name,'',1);
        document.getElementById('count_shopping_cart').innerHTML=0;
    }else{     
        var current_cart=readCookie(name);
        var ca=current_cart.split(',');
        number_product=ca.length;
        if(number_product-1==0)
            document.getElementById('footpanel').style.display = 'none';
        else
            document.getElementById('footpanel').style.display = 'block';
        
        document.getElementById('count_shopping_cart').innerHTML=number_product-1;

        var Parent = document.getElementById('cart_ul');
        Parent.innerHTML = '';
        var NewLI;
        for(var i=0;i<ca.length;i++) {            
            var arr_cart = ca[i].split('|');
            if(arr_cart[0]) {
                NewLI = document.createElement("li");                
                if(arr_cart[7] == '')
                    NewLI.innerHTML = '<a href="'+arr_cart[6]+'">'+arr_cart[5]+'</a>';
                else
                    NewLI.innerHTML = '<a class="textLeft" href="'+arr_cart[6]+'"><img src="/data/products/small_'+arr_cart[7]+'" width="22" height="22" border="0" />'+Base64.decode(arr_cart[5])+'</a>';
                Parent.appendChild(NewLI);
            }
        }
        
        NewLI = document.createElement("li");
        NewLI.innerHTML = '<a href="Gio-hang.html?payment=1" style="border-top:1px solid #FF0000;text-align:right">Thanh toán</a>';
        Parent.appendChild(NewLI);
    }
}
function emptyShoppingCart(name){createCookie(name,'-',1);}

function addToShoppingCartNew1(pid,quantity,combo_id){
	
	 if(readCookie('shopping_cart')==null){createCookie('shopping_cart',',',1);}
	var current_cart=readCookie('shopping_cart');
        if(current_cart.search(','+pid+'-')==-1){
            var new_cart=current_cart+','+pid+'-'+quantity+'-'+combo_id;
            createCookie('shopping_cart',new_cart,1);
            window.location = '/?option=cart';
        }else{alert('Sản phẩm đã có trong giỏ hàng!');}}

function addToShoppingCartNew(pid,quantity){
	if(readCookie('shopping_cart')==null){
		createCookie('shopping_cart',',',1);
	}
	var current_cart=readCookie('shopping_cart');
	
	if(current_cart.search(','+pid+'-')==-1){
		var new_cart=current_cart+','+pid+'-'+quantity;
		createCookie('shopping_cart',new_cart,1);
		countShoppingCart('shopping_cart');
		//document.getElementById('item_'+pid).innerHTML='Đã thêm vào giỏ hàng';
		window.location = '?option=cart';
	}else{
		alert('Sản phẩm đã có trong giỏ hàng!');
	}
}
function addToCompare(pid,catid,pname,plink,img){
	if(readCookie('shopping_compare')==null){
		createCookie('shopping_compare','|',1);
	}
	var current_cart=readCookie('shopping_compare');
	 var ca=current_cart.split(',');
     number_product=ca.length;
	//if(current_cart.search(','+pid+'-')==-1){
	if(current_cart.search(','+pid+'')==-1){
		if(number_product-1 >= 4){
			alert('Quá giới hạn cho phép !');
		}else{	
            if(img == '')
				var new_cart=current_cart+','+pid+'|'+catid+'|'+Base64.encode(pname)+'|'+Base64.encode(plink)+'|'+'';
            else
                var new_cart=current_cart+','+pid+'|'+catid+'|'+Base64.encode(pname)+'|'+Base64.encode(plink)+'|'+Base64.encode(img);
		
			createCookie('shopping_compare',new_cart,1);
			countShoppingCompare('shopping_compare');
			alert('Đã chọn sản phẩm vào cột so sánh !');
			//document.getElementById('item_'+pid).innerHTML='Đã thêm vào giỏ hàng';
			//window.location = '?option=cart';
			//location.reload();
		}
	}else{
		alert('Bạn đã chọn sản phẩm này !');
	}
	//deleteShoppingCompareItem(275);
	//eraseCookie('shopping_compare');	
}
function deleteShoppingCompareALL(){
	if(confirm('Bạn muốn xóa tất cả danh sách đã chọn ? ')){
		eraseCookie('shopping_compare');
		countShoppingCompare('shopping_compare');
	}
}
function deleteShoppingCompareItem(pid){
	//if(confirm('Bạn muốn xóa bỏ sản phẩm này khỏi danh sách ? ')){
		var current_cart=readCookie('shopping_compare');
		
		new_cart=current_cart.replace(","+pid,"");
		
		createCookie('shopping_compare',new_cart,1);
		countShoppingCompare('shopping_compare');
		 var ca=current_cart.split(',');
		 number_product=ca.length;
		 if(number_product==2) eraseCookie('shopping_compare');
	//}
}
function addToShoppingCart(pid,pgia,psoluong){
    var psoluong = 1;
	if(readCookie('shopping_cart')==null){
		createCookie('shopping_cart','|',1);
	}
	var current_cart=readCookie('shopping_cart');
	if(current_cart.search(','+pid+'')==-1){
           	var new_cart=current_cart+','+pid+'|'+pgia+'|'+psoluong;
            createCookie('shopping_cart',new_cart,1);
	}else{
		alert('Sản phẩm đã có trong giỏ hàng!');
	}
    $(window.location).attr('href', '/Gio-hang.html');
}
function addToShoppingCartType(pid,quantity,type){
	if(readCookie('shopping_cart')==null){
		createCookie('shopping_cart',',',1);
	}
	var current_cart=readCookie('shopping_cart');
	//alert(current_cart.search(','+pid+'-'));
	if(current_cart.search(','+type+'-')==-1){
		var new_cart=current_cart+','+pid+'-'+quantity+'-'+type;
		createCookie('shopping_cart',new_cart,1);
		countShoppingCart('shopping_cart');
		document.getElementById('item_'+type).innerHTML='Đã vào giỏ hàng';
	}else{
		alert('Sản phẩm đã có trong giỏ hàng!');
	}
}
function checkItemInCart(pid){var current_cart=readCookie('shopping_cart');if(current_cart != null && current_cart.search(','+pid+'-')!=-1){document.write('[Trong giỏ hàng]');}else{}}
function checkItemInCartGrid(pid){var current_cart=readCookie('shopping_cart');if(current_cart != null && current_cart.search(','+pid+'-')!=-1){}else{}}

function checkItemInCartHome(pid){var current_cart=readCookie('shopping_cart');if(current_cart != null && current_cart.search(','+pid+'-')!=-1){}else{}}

function checkItemInCartType(type){var current_cart=readCookie('shopping_cart');if(current_cart != null && current_cart.search(','+type+'-')!=-1){document.write('[Trong giỏ hàng]');}else{}}

function deleteShoppingCart(){
	if(confirm('Bạn muốn xóa bỏ Tất cả giỏ hàng ? ')){
		eraseCookie('shopping_cart');
		window.location.href='?option=cart';
	}
}
function deleteShoppingCartItem(pid){
	if(confirm('Bạn muốn xóa bỏ sản phẩm này khỏi giỏ hàng ? ')){
		var current_cart=readCookie('shopping_cart');
		new_cart=current_cart.replace(","+pid,"");
		
		createCookie('shopping_cart',new_cart,1);
		countShoppingCart('shopping_cart');
		window.location.href='?option=cart';
	}
}

function deleteShoppingCartItemType(pid,quantity,type){
	if(confirm('Bạn muốn xóa bỏ sản phẩm này khỏi giỏ hàng ? ')){
		var current_cart=readCookie('shopping_cart');
		
		new_cart=current_cart.replace(","+pid+'-'+quantity+'-'+type,"");
		//alert(new_cart);
		createCookie('shopping_cart',new_cart,1);
		countShoppingCart('shopping_cart');
		window.location.href='?option=cart';
	}
}


function showSub(groupId){
	var check = document.getElementById(groupId).style.display;	
	if(check =="none"){
		document.getElementById("icon_"+groupId).innerHTML = "<img src=\"/images/circle_open.gif\">";
		$("#"+groupId).slideDown("slow");
	}else{
		document.getElementById("icon_"+groupId).innerHTML = "<img src=\"/images/invi.gif\">";
		$("#"+groupId).slideUp("slow");
	}
}
 
 
function showDateTime(showDate, dateFormat, showTime, showAsGMT)
{
	var days = new Array("Ch&#7911; nh&#7853;t","Th&#7913; hai","Th&#7913; ba","Th&#7913; t&#432;","Th&#7913; n&#259;m","Th&#7913; s&#225;u","Th&#7913; b&#7843;y");
	var months = new Array("01","02","03","04","05","06","07","08","09","10","11","12");
	var datetime = getDateTime(showDate, dateFormat, showTime, showAsGMT, days, months, "/", "/");
	document.write("<nobr>&nbsp;" + datetime + "&nbsp;</nobr>");
}

function getDateTime(showDate, dateFormat, showTime, showAsGMT)
{
	var days = arguments[4]||new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	var months = arguments[5]||new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	var monthSeperate = arguments[6]||"-";
	var yearSeperate = arguments[7]||"-";
	var now = new Date();
	var month = "";
	var day = "";
	var time = "";
	var first_date_num ="";
	var result = "";

  // show date
	if(showDate)
	{
		// long date
		if(dateFormat!="0")
			day = days[now.getDay()] + ", ";
		month = months[now.getMonth()];
		if (now.getDate() < 10)
			first_date_num = "0";
		result += day + first_date_num + now.getDate() + monthSeperate + month + yearSeperate + now.getFullYear();
	}
	
	// show time
	if(showTime)
	{
		var symbol = "AM";
		if(showAsGMT)
			time = new String(now.getUTCHours());
		else
			time = new String(now.getHours());
		if(time>=12)
		{
			time = time - 12;
			symbol = "PM";
		}
		if (time.length < 2)
			time = "0" + time;
		var minute = new String(now.getMinutes());
		if (minute.length < 2)
			minute = "0"+ minute;
		time = time  + ":" + minute + "&nbsp;" + symbol;
		if(showAsGMT)
			time += " (GMT)";
		if(result!="")
			result += "&nbsp;&nbsp;";
		result += time;
	}
	
	return result;
}

function createPriceSearch(min_max){
	var price_array = min_max.split(",");
	var max_price = price_array[1];
	var min_price = price_array[0];
	document.getElementById('max_price').value = max_price;
	document.getElementById('min_price').value = min_price;
}

function show(elementId){
	var checked = document.getElementById(elementId).style.display;	
	if(checked == "none"){
		 document.getElementById(elementId).style.display = "block";
	}else{
		document.getElementById(elementId).style.display = "none";
	}
}

function chooseShippingOption(method_id){
    document.getElementById('selectShippingMethod').value = method_id;
}

function choosePaymentOption(option) {
     var checked = document.getElementById(option).checked;
     var instId = document.getElementById(option).value;
     if (checked) {
         document.getElementById("selectPaymentMethod").value = instId;
         
        //Hide other options
         for (var i in paymentOptionList) {
             if (option != paymentOptionList[i]) {
                 document.getElementById("pay_" + paymentOptionList[i]).style.display = "none";
                 document.getElementById(paymentOptionList[i]).checked = false;
             }
         }
         //show the instruction
         document.getElementById("block_" + instId).style.display = "block";
     } else {
        document.getElementById("selectPaymentMethod").value = "0";
        //Uncheck, show other options again
        for (var i in paymentOptionList) {
             document.getElementById("pay_" + paymentOptionList[i]).style.display = "block";
             document.getElementById(paymentOptionList[i]).checked = false;
             var elt = document.getElementById(paymentOptionList[i]).value;
             document.getElementById("block_"+elt).style.display = "none";
         }
     }
 }

