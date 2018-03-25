<?php
	include('../db.php'); 
	if($_REQUEST['payment_id']){
		// $payment_id = mysqli_real_escape_string($_REQUEST['payment_id']);
		$payment_id = $_REQUEST['payment_id'];
	}
	mysqli_report(MYSQLI_REPORT_STRICT); 

	$sqsp2 = "SELECT * FROM `auctions` WHERE `payment_id` = '$payment_id'";
	try{
		$newsp2 = $con->query($sqsp2);
		if($newsp2)
		{
			while($row_auction = $newsp2->fetch_assoc()){
				$auction_id = $row_auction['id'];
				$custom_page = base64_decode($row_auction['custom_page']);
				console.log($auction_id);
				break;
			}
		}
	}catch (Exception $e)
	{
		throw $e;
	}

?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/">
	<!-- Mirrored from allegro.pl/smartfon-cavion-base-5-0-lte-8gb-1gb-5-i7224715300.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Mar 2018 00:53:17 GMT -->
	<!-- Added by HTTrack -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<!-- /Added by HTTrack -->
	<head>
		<meta charset="utf-8">
		<link href="http://cdn.allegrostatic.com/fragments/showitem/css/index.min-2f00e466.css" rel="stylesheet">
		<link rel="publisher" href="https://plus.google.com/+allegro" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="keywords" content="">
		<meta name="robots" content="index,follow">
		<title>Smartfon CAVION Base 5.0 LTE _ 8gb 1gb 5&quot; (7224715300) - Allegro.pl - Więcej niż aukcje.</title>
		<meta name="description" content="Kup teraz na allegro.pl za 219,00 zł - Smartfon CAVION Base 5.0 LTE _ 8gb 1gb 5&quot; (7224715300). Allegro.pl - Radość zakupów i bezpieczeństwo dzięki Programowi Ochrony Kupujących!" />
		<meta property="og:site_name" content="http://allegro.pl/Allegro.pl" />
		<meta property="og:title" content="Smartfon CAVION Base 5.0 LTE _ 8gb 1gb 5&quot;" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="<?php echo $row_auction['photo1']; ?>" />
		<meta property="og:description" content="Kup teraz na allegro.pl za 219,00 zł - Smartfon CAVION Base 5.0 LTE _ 8gb 1gb 5&quot; (7224715300). Allegro.pl - Radość zakupów i bezpieczeństwo dzięki Programowi Ochrony Kupujących!" />
		<meta property="al:android:app_name" content="Allegro" />
		<meta property="al:android:package" content="pl.allegro" />
		<meta property="al:android:url" content="smartfon-cavion-base-5-0-lte-8gb-1gb-5-i7224715300.html" />
		<meta name="apple-itunes-app" content="app-id=305659772, app-argument=allegro-pl-buy://offer?id=7224715300">
		<link rel="canonical" href="smartfon-cavion-base-5-0-lte-8gb-1gb-5-i7224715300.html" />
		<link rel="alternate" href="http://allegro.pl/android-app://pl.allegro/http/allegro.pl/ShowItem2.php?item=7224715300" />
		<script type = "text/javascript">
			!function(a){var b,c,d;a.scope||(a.scope=window);c="https:"===document.location.protocol?"https://":"http://";
			    "http://"!==a.baseUrl.substring(0,7)&&"https://"!==a.baseUrl.substring(0,8)&&(a.baseUrl=c+a.baseUrl);
			    a.scope._cm=a;b="_cmEventsQueue";a.scope[b]=[];a.scope.cm={event:function(c,d){var e;
			        e={pay:c,cus:d,ts:(new Date).getTime()};return a.scope[b].push(e)
			    }};a.cmScript=document.createElement("script");a.cmScript.type="text/javascript";
			    a.cmScript.async=!0;a.cmScript.src=c+"ngastatic.com/s4c/collect.js";
			    d=document.getElementsByTagName("script")[0];return d.parentNode.insertBefore(a.cmScript,d)
			}({
			    "baseUrl": "ngacm.com/",
			    "account": "CM.991213.tz_pl",
			    "pv": false
			});
		</script>
		<script>
			function performanceMark(markName) {
			    if (window.performance && window.performance.mark && typeof requestAnimationFrame === "function") {
			        requestAnimationFrame(function () {
			            window.performance.mark(markName);
			        });
			    }
			}
		</script>
	</head>
	<body class="country-PL ssi ">
		<noscript>
			<iframe src="http://www.googletagmanager.com/ns.html?id=GTM-FXVJ"
				height="0"
				width="0"
				style="display:none;visibility:hidden"></iframe>
		</noscript>
		<script>
			dataLayer = [{"pageType":"detail","headNavigation":"Telefony i Akcesoria|Smartfony i telefony komórkowe|Inne marki","nameCategory":"Inne marki","sellerName":"gierland","active":"no","sma":false,"idCategory":170,"idItem":7224715300,"price":219.0}];
			(function(w,d,s,l,i){
			    w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
			    var f=d.getElementsByTagName(s)[0],
			        j=d.createElement(s),
			        dl=l!='dataLayer'?'&l='+l:'';
			        j.async=true;
			        j.src='http://www.googletagmanager.com/gtm.js?id='+i+dl;
			    f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-FXVJ');
		</script>
		<div class="side-nav vela"></div>
		<div class="main-wrapper responsive-content">
			<div class="opbox-fragment">
				<script>var opbox = opbox || {}; opbox.config = opbox.config || {"baseDomain":"allegro.pl","edgeHost":"https://edge.allegro.pl","lazyBoxNames":[],"canonicalRoute":"http://?:.allegro.pl/headerService/header","cookieMonster":{"host":"https://ngastatic.com/s4c/tracker.js","account":"CM.991213.tz_pl","boxViewDisabled":false,"defaultCustomParams":{"pv":{"canonicalRoute":"http://?:.allegro.pl/headerService/header","_opbox":{"routePath":"/headerService/header","analyticsTags":[],"traceId":"0902787c366b2db8"}},"ev":{"canonicalRoute":"http://?:.allegro.pl/headerService/header"}}}} || {};</script>
				<script nomodule="true" src="https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/placeholder-polyfill-external.js"></script>
				<script>!function(e){"use strict";function n(e){return Array.prototype.slice.call(e)}function r(e){var r=[],o=e?function(){var e=arguments;return new Promise(function(o,t){return r.push({args:n(e),resolve:o,reject:t})})}:function(){r.push({args:n(arguments)})};return o.__queue__=r,o}function o(e){return e===s?r():e===u?r(!0):!0===e||!1===e?e:Object.keys(e).reduce(function(n,r){return n[r]=o(e[r]),n},{})}function t(e,n){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:a;n[r]=n[r]||{},n[r].loaded||Object.assign(n[r],o(e))}function i(e){t(c,e,a)}Object.defineProperty(e,"__esModule",{value:!0}),e.default=t,e.init=i;var a="opbox",s=e.VOID_FN=Function,u=e.PROMISE_FN=Promise,c={analytics:{sendEvent:s},boxViewsMarker:{markBoxAsRendered:s,markBoxAsVisible:s,recursivelyMarkBoxAsVisible:s,markBoxAsHidden:s,recursivelyMarkBoxAsHidden:s,trackBoxScroll:s,isBoxInViewport:s},component:{init:s},onData:s,changeParams:s,tween:s,scrollTo:s,edge:{get:u,put:u,post:u},page:{getData:u},registerComponent:s,onDomReady:s,loaded:!0};i(window)}({});</script>
				<script>document.addEventListener("DOMContentLoaded",function(){function e(e){var t=document.createElement("script");t.setAttribute("src",e),document.head.appendChild(t)}window.opbox.initialized||document.querySelectorAll('script[src="https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/opbox-external.js"]').length||e("https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/opbox-external.js"),document.querySelectorAll('script[src="https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/vendors.js"]').length||e("https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/vendors.js")});</script>
				<script>!function(e){var n={};function o(i){if(n[i])return n[i].exports;var t=n[i]={i:i,l:!1,exports:{}};return e[i].call(t.exports,t,t.exports,o),t.l=!0,t.exports}o.m=e,o.c=n,o.d=function(e,n,i){o.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:i})},o.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(n,"a",n),n},o.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},o.p="",o(o.s=4)}([function(e,n,o){"use strict";e.exports={cookiePolicy:{id:"cookie-policy-banner",cookieName:"policyBannerHide",cookieExpireDate:365,hideBeforeNextVisit:!0,link:"https://allegro.pl/regulamin/pl/polityka-plikow-cookies",linkText:"plików cookies",message:"Strona korzysta z {{link}} w celu realizacji usług. Jeżeli nie zmienisz ustawień, będą one zapisywane w pamięci Twojego urządzenia.",allowOverwriteMessage:!1},installments:{id:"installments-banner",cookieName:"installmentsBannerHidden",cookieExpireDate:7,url:"https://dlakupujacych.allegro.pl/zaufane-platnosci/raty-0-procent?bi_s=allegro_so&bi_m=Top_Band_ALL&bi_c=raty",message:"Teraz prawdziwe <strong>RATY&nbsp;0%</strong> na Allegro",allowOverwriteMessage:!0},loyaltyProgram:{id:"loyalty-program-banner",cookieName:"loyaltyProgramBannerHidden",cookieExpireDate:7,url:"https://monety.allegro.pl/?bi_s=allegro_so&bi_m=Top_Band_ALL&bi_c=monetyzacja",iconLinkMessage:"Płać mniej! Zbieraj <strong>Monety</strong> i wymieniaj na kupony",detailsLinkMessage:"sprawdź szczegóły",allowOverwriteMessage:!0},technicalBreak:{id:"technical-break-banner",allowOverwriteMessage:!0}}},,,,function(e,n,o){"use strict";var i,t=o(0),r=(i=t)&&i.__esModule?i:{default:i};var a=function(e,n){(function(e){for(var n=e+"=",o=decodeURIComponent(document.cookie).split(";"),i=0;i<o.length;i++){for(var t=o[i];" "==t.charAt(0);)t=t.substring(1);if(0==t.indexOf(n))return t.substring(n.length,t.length)}return""})(n)||document.querySelector("html").classList.add(e+"-not-dismissed")};Object.keys(r.default).forEach(function(e){var n=r.default[e],o=n.id,i=n.cookieName;a(o,i)})}]);</script>
				<script>var googletag = googletag || {}; googletag.cmd = googletag.cmd || [];</script>
				<script>!function(e){"use strict";!function(n,t){if("object"==typeof exports&&"object"==typeof module)module.exports=t();else if("function"==typeof e&&e.amd)e([],t);else{var r=t();for(var o in r)("object"==typeof exports?exports:n)[o]=r[o]}}("undefined"!=typeof self?self:this,function(){return function(e){function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}var t={};return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:r})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},n.p="",n(n.s=33)}({13:function(e,n){var t={utf8:{stringToBytes:function(e){return t.bin.stringToBytes(unescape(encodeURIComponent(e)))},bytesToString:function(e){return decodeURIComponent(escape(t.bin.bytesToString(e)))}},bin:{stringToBytes:function(e){for(var n=[],t=0;t<e.length;t++)n.push(255&e.charCodeAt(t));return n},bytesToString:function(e){for(var n=[],t=0;t<e.length;t++)n.push(String.fromCharCode(e[t]));return n.join("")}}};e.exports=t},33:function(e,n,t){var r=t(34);new(function(e){return e&&e.__esModule?e:{default:e}}(r).default)("http://allegro.pl/allegro.pl").initialize(),window.headerJS=function(){},window.headerJSModuleConfig={path:"",name:""}},34:function(e,n,t){function r(e){return e&&e.__esModule?e:{default:e}}function o(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(n,"__esModule",{value:!0});var i=function(){function e(e,n){for(var t=0;t<n.length;t++){var r=n[t];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(n,t,r){return t&&e(n.prototype,t),r&&e(n,r),n}}(),u=t(5),a=r(u),s=t(35),f=r(s),c=function(){function e(n,t){o(this,e),this.domain=n.match(/^\./)?n:"."+n,this.hashPhrase=t}return i(e,[{key:"initialize",value:function(){if(a.default.get("ws3")){var e=a.default.get("ws3");return a.default.erase("ws3"),void a.default.set("ws3",e,{expires:365,domain:this.domain})}window&&window.cm&&window.cm("send","event","ws3-cookie-set"),a.default.set("ws3",this.getHash(this.hashPhrase),{expires:365,domain:this.domain})}},{key:"getHash",value:function(e){var n=new Date,t=Math.random()+n.getMilliseconds();return"O"+(0,f.default)(e||String(t))}}]),e}();n.default=c},35:function(e,n,t){!function(){var n=t(36),r=t(13).utf8,o=t(37),i=t(13).bin,u=function(e,t){e.constructor==String?e=t&&"binary"===t.encoding?i.stringToBytes(e):r.stringToBytes(e):o(e)?e=Array.prototype.slice.call(e,0):Array.isArray(e)||(e=e.toString());for(var a=n.bytesToWords(e),s=8*e.length,f=1732584193,c=-271733879,l=-1732584194,d=271733878,p=0;p<a.length;p++)a[p]=16711935&(a[p]<<8|a[p]>>>24)|4278255360&(a[p]<<24|a[p]>>>8);a[s>>>5]|=128<<s%32,a[14+(s+64>>>9<<4)]=s;for(var h=u._ff,g=u._gg,v=u._hh,y=u._ii,p=0;p<a.length;p+=16){var m=f,b=c,w=l,x=d;f=h(f,c,l,d,a[p+0],7,-680876936),d=h(d,f,c,l,a[p+1],12,-389564586),l=h(l,d,f,c,a[p+2],17,606105819),c=h(c,l,d,f,a[p+3],22,-1044525330),f=h(f,c,l,d,a[p+4],7,-176418897),d=h(d,f,c,l,a[p+5],12,1200080426),l=h(l,d,f,c,a[p+6],17,-1473231341),c=h(c,l,d,f,a[p+7],22,-45705983),f=h(f,c,l,d,a[p+8],7,1770035416),d=h(d,f,c,l,a[p+9],12,-1958414417),l=h(l,d,f,c,a[p+10],17,-42063),c=h(c,l,d,f,a[p+11],22,-1990404162),f=h(f,c,l,d,a[p+12],7,1804603682),d=h(d,f,c,l,a[p+13],12,-40341101),l=h(l,d,f,c,a[p+14],17,-1502002290),c=h(c,l,d,f,a[p+15],22,1236535329),f=g(f,c,l,d,a[p+1],5,-165796510),d=g(d,f,c,l,a[p+6],9,-1069501632),l=g(l,d,f,c,a[p+11],14,643717713),c=g(c,l,d,f,a[p+0],20,-373897302),f=g(f,c,l,d,a[p+5],5,-701558691),d=g(d,f,c,l,a[p+10],9,38016083),l=g(l,d,f,c,a[p+15],14,-660478335),c=g(c,l,d,f,a[p+4],20,-405537848),f=g(f,c,l,d,a[p+9],5,568446438),d=g(d,f,c,l,a[p+14],9,-1019803690),l=g(l,d,f,c,a[p+3],14,-187363961),c=g(c,l,d,f,a[p+8],20,1163531501),f=g(f,c,l,d,a[p+13],5,-1444681467),d=g(d,f,c,l,a[p+2],9,-51403784),l=g(l,d,f,c,a[p+7],14,1735328473),c=g(c,l,d,f,a[p+12],20,-1926607734),f=v(f,c,l,d,a[p+5],4,-378558),d=v(d,f,c,l,a[p+8],11,-2022574463),l=v(l,d,f,c,a[p+11],16,1839030562),c=v(c,l,d,f,a[p+14],23,-35309556),f=v(f,c,l,d,a[p+1],4,-1530992060),d=v(d,f,c,l,a[p+4],11,1272893353),l=v(l,d,f,c,a[p+7],16,-155497632),c=v(c,l,d,f,a[p+10],23,-1094730640),f=v(f,c,l,d,a[p+13],4,681279174),d=v(d,f,c,l,a[p+0],11,-358537222),l=v(l,d,f,c,a[p+3],16,-722521979),c=v(c,l,d,f,a[p+6],23,76029189),f=v(f,c,l,d,a[p+9],4,-640364487),d=v(d,f,c,l,a[p+12],11,-421815835),l=v(l,d,f,c,a[p+15],16,530742520),c=v(c,l,d,f,a[p+2],23,-995338651),f=y(f,c,l,d,a[p+0],6,-198630844),d=y(d,f,c,l,a[p+7],10,1126891415),l=y(l,d,f,c,a[p+14],15,-1416354905),c=y(c,l,d,f,a[p+5],21,-57434055),f=y(f,c,l,d,a[p+12],6,1700485571),d=y(d,f,c,l,a[p+3],10,-1894986606),l=y(l,d,f,c,a[p+10],15,-1051523),c=y(c,l,d,f,a[p+1],21,-2054922799),f=y(f,c,l,d,a[p+8],6,1873313359),d=y(d,f,c,l,a[p+15],10,-30611744),l=y(l,d,f,c,a[p+6],15,-1560198380),c=y(c,l,d,f,a[p+13],21,1309151649),f=y(f,c,l,d,a[p+4],6,-145523070),d=y(d,f,c,l,a[p+11],10,-1120210379),l=y(l,d,f,c,a[p+2],15,718787259),c=y(c,l,d,f,a[p+9],21,-343485551),f=f+m>>>0,c=c+b>>>0,l=l+w>>>0,d=d+x>>>0}return n.endian([f,c,l,d])};u._ff=function(e,n,t,r,o,i,u){var a=e+(n&t|~n&r)+(o>>>0)+u;return(a<<i|a>>>32-i)+n},u._gg=function(e,n,t,r,o,i,u){var a=e+(n&r|t&~r)+(o>>>0)+u;return(a<<i|a>>>32-i)+n},u._hh=function(e,n,t,r,o,i,u){var a=e+(n^t^r)+(o>>>0)+u;return(a<<i|a>>>32-i)+n},u._ii=function(e,n,t,r,o,i,u){var a=e+(t^(n|~r))+(o>>>0)+u;return(a<<i|a>>>32-i)+n},u._blocksize=16,u._digestsize=16,e.exports=function(e,t){if(void 0===e||null===e)throw new Error("Illegal argument "+e);var r=n.wordsToBytes(u(e,t));return t&&t.asBytes?r:t&&t.asString?i.bytesToString(r):n.bytesToHex(r)}}()},36:function(e,n){!function(){var n="http://allegro.pl/ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",t={rotl:function(e,n){return e<<n|e>>>32-n},rotr:function(e,n){return e<<32-n|e>>>n},endian:function(e){if(e.constructor==Number)return 16711935&t.rotl(e,8)|4278255360&t.rotl(e,24);for(var n=0;n<e.length;n++)e[n]=t.endian(e[n]);return e},randomBytes:function(e){for(var n=[];e>0;e--)n.push(Math.floor(256*Math.random()));return n},bytesToWords:function(e){for(var n=[],t=0,r=0;t<e.length;t++,r+=8)n[r>>>5]|=e[t]<<24-r%32;return n},wordsToBytes:function(e){for(var n=[],t=0;t<32*e.length;t+=8)n.push(e[t>>>5]>>>24-t%32&255);return n},bytesToHex:function(e){for(var n=[],t=0;t<e.length;t++)n.push((e[t]>>>4).toString(16)),n.push((15&e[t]).toString(16));return n.join("")},hexToBytes:function(e){for(var n=[],t=0;t<e.length;t+=2)n.push(parseInt(e.substr(t,2),16));return n},bytesToBase64:function(e){for(var t=[],r=0;r<e.length;r+=3)for(var o=e[r]<<16|e[r+1]<<8|e[r+2],i=0;i<4;i++)8*r+6*i<=8*e.length?t.push(n.charAt(o>>>6*(3-i)&63)):t.push("=");return t.join("")},base64ToBytes:function(e){e=e.replace(/[^A-Z0-9+\/]/gi,"");for(var t=[],r=0,o=0;r<e.length;o=++r%4)0!=o&&t.push((n.indexOf(e.charAt(r-1))&Math.pow(2,-2*o+8)-1)<<2*o|n.indexOf(e.charAt(r))>>>6-2*o);return t}};e.exports=t}()},37:function(e,n){function t(e){return!!e.constructor&&"function"==typeof e.constructor.isBuffer&&e.constructor.isBuffer(e)}function r(e){return"function"==typeof e.readFloatLE&&"function"==typeof e.slice&&t(e.slice(0,0))}/*!
					* Determine if an object is a Buffer
					*
					* @author   Feross Aboukhadijeh <https://feross.org>
					* @license  MIT
					*/
					e.exports=function(e){return null!=e&&(t(e)||r(e)||!!e._isBuffer)}},5:function(e,n){n.defaults={},n.set=function(e,t,r){var o=r||{},i=n.defaults,u=o.expires||i.expires,a=o.domain||i.domain,s=void 0!==o.path?o.path:void 0!==i.path?i.path:"/",f=void 0!==o.secure?o.secure:i.secure,c=void 0!==o.httponly?o.httponly:i.httponly,l=u?new Date("number"==typeof u?(new Date).getTime()+864e5*u:u):"";document.cookie=e.replace(/[^+#$&^`|]/g,encodeURIComponent).replace("(","%28").replace(")","%29")+"="+t.replace(/[^+#$&\/:<-\[\]-}]/g,encodeURIComponent)+(l&&l.getTime()>=0?";expires="+l.toUTCString():"")+(a?";domain="+a:"")+(s?";path="+s:"")+(f?";secure":"")+(c?";httponly":"")},n.get=function(e){for(var n=document.cookie.split(";"),t=0;t<n.length;t++){var r=n[t],o=r.length,i=r.indexOf("=");i=i<0?o:i;if(decodeURIComponent(r.substring(0,i).replace(/^\s+/,""))===e)return decodeURIComponent(r.substring(i+1,o))}return null},n.erase=function(e,t){n.set(e,"",{expires:-1,domain:t&&t.domain,path:t&&t.path,secure:0,httponly:0})},n.all=function(){for(var e={},n=document.cookie.split(";"),t=0;t<n.length;t++){var r=n[t],o=r.length,i=r.indexOf("=");i=i<0?o:i;e[decodeURIComponent(r.substring(0,i).replace(/^\s+/,""))]=decodeURIComponent(r.substring(i+1,o))}return e}}})})}(null);
				</script>
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-bar/1.2.4/styles/index.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-advertisement-box/1.3.3/styles/bundle.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-cart-status/1.0.0/styles/main.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-grid/1.6.1/styles/index.css">
				<link type="text/css" rel="stylesheet" href="http://cdn.allegrostatic.com/@metrum/button/main.m-b4fc724b.css">
				<link type="text/css" rel="stylesheet" href="http://cdn.allegrostatic.com/@metrum/choice/main.m-1cd3588d.css">
				<link type="text/css" rel="stylesheet" href="http://cdn.allegrostatic.com/@metrum/dropdown/main.m-b9624171.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-search/2.12.3/opbox-search.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-metrum-header/index__1a230705.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-skins/styles/fonts-c27b1842da.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-skins/styles/metrum-header-2160e7c341.css">
				<script> </script>
				<div data-box-name="cookie policy" data-prototype-id="allegro.bar" data-prototype-version="1.0" data-skin-class-name="cookie-policy-banner-bottom" data-implementation-version="1.2.4" data-analytics-enabled data-analytics-category="allegro.bar" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
					<a name="cookie-policy"></a>
					<div data-service-domain="allegro.pl" class="opbox-bar  cookie-policy-banner">
						<div class="bar-wrapper">
							<p class="message">Strona korzysta z <a href="https://allegro.pl/regulamin/pl/polityka-plikow-cookies" target="_blank" class="bar-link" data-analytics-clickable>plików cookies</a> w celu realizacji usług. Jeżeli nie zmienisz ustawień, będą one zapisywane w pamięci Twojego urządzenia.</p>
							<a class="close-bar" href="#cookie-policy-banner" data-analytics-interaction-value="closeCookiePolicy" data-analytics-interaction></a>
						</div>
					</div>
				</div>
				<div data-box-name="allegro.metrumHeader" data-prototype-id="allegro.metrumHeader" data-prototype-version="1.6" data-skin-class-name="" data-implementation-version="1.15.0" data-analytics-enabled data-analytics-category="allegro.metrumHeader" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
					<a name="allegro-metrumheader"></a>
					<nav class="fee54_CWqWO opbox-metrum-header--default "
						data-metrum-header-sticky-disabled>
						<div class="fee54_2mDvq">
							<div class="opbox-metrum-header__center fee54_15baT fee54_EjxZ1 fee54_y44_L fee54_16wEg fee54_101dP fee54_1_kHL">
								<h2 itemscope itemtype="http://schema.org/Organization" class="fee54_2N0im" data-description="header logo">
									<a href="https://allegro.pl/"
										class="fee54_LPPcP "
										title="Allegro.pl - aukcje internetowe, bezpieczne zakupy"
										data-analytics-click-value="logotype"
										data-analytics-clickable>
									<img class="fee54_1_FZs" src="http://cdn.allegrostatic.com/@metrum/brand/allegro-e2b1a7f8.svg" alt="Allegro.pl - aukcje internetowe, bezpieczne zakupy">
									</a>
								</h2>
								<div class="fee54_ThaHT opbox-metrum-header__search-slot">
									<div data-box-name="allegro.metrumHeader.search" data-prototype-id="allegro.metrumHeader.search" data-prototype-version="4.0" data-skin-class-name="" data-implementation-version="2.12.3" data-analytics-enabled data-analytics-category="allegro.metrumHeader.search" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
										<a name="allegro-metrumheader-search"></a>
										<div class="opbox-search">
											<form action="http://allegro.pl/listing" class="metrum-search">
												<input type="search" placeholder="czego szukasz?" class="metrum-search__query " value="" autocomplete="off" name="string" required > 
												<div class="metrum-search__filters _vfhoo">
													<button type="button" class="metrum-search__filter-button _pvtm2"><span class="metrum-search__current-filter">Inne marki</span></button> 
													<div class="metrum-search__drop _11qsv">
														<div class="metrum-search__caption">jak?</div>
														<input class="_3hrc8 _1f0i4 _1w4rj opbox-search__how" type="checkbox" id="search-how" autocomplete="off" > <label class="_1py99 metrum-search__option metrum-search__option--how" for="search-how">w opisach <span>ofert</span></label> 
														<div class="metrum-search__caption">gdzie?</div>
														<input id="all-0" class="metrum-search__filter" type="radio" value="/listing" name="where" autocomplete="off"> <label for="all-0" class="metrum-search__option metrum-search__option--where " tabindex="0"><span class="metrum-search__filter-label--maxi">wszystkie działy</span><span class="metrum-search__filter-label--mini">wszędzie</span></label> <input id="department-1" class="metrum-search__filter" type="radio" value="/kategoria/dom-i-zdrowie" name="where" autocomplete="off"> <label for="department-1" class="metrum-search__option metrum-search__option--where " tabindex="0">Dom i zdrowie</label> <input id="department-2" class="metrum-search__filter" type="radio" value="/kategoria/dziecko" name="where" autocomplete="off"> <label for="department-2" class="metrum-search__option metrum-search__option--where " tabindex="0">Dziecko</label> <input id="department-3" class="metrum-search__filter" type="radio" value="/kategoria/elektronika" name="where" autocomplete="off"> <label for="department-3" class="metrum-search__option metrum-search__option--where " tabindex="0">Elektronika</label> <input id="department-4" class="metrum-search__filter" type="radio" value="/kategoria/firma-i-uslugi" name="where" autocomplete="off"> <label for="department-4" class="metrum-search__option metrum-search__option--where " tabindex="0">Firma i usługi</label> <input id="department-5" class="metrum-search__filter" type="radio" value="/kategoria/kolekcje-i-sztuka" name="where" autocomplete="off"> <label for="department-5" class="metrum-search__option metrum-search__option--where " tabindex="0">Kolekcje i sztuka</label> <input id="department-6" class="metrum-search__filter" type="radio" value="/kategoria/kultura-i-rozrywka" name="where" autocomplete="off"> <label for="department-6" class="metrum-search__option metrum-search__option--where " tabindex="0">Kultura i rozrywka</label> <input id="department-7" class="metrum-search__filter" type="radio" value="/kategoria/moda-i-uroda" name="where" autocomplete="off"> <label for="department-7" class="metrum-search__option metrum-search__option--where " tabindex="0">Moda i uroda</label> <input id="department-8" class="metrum-search__filter" type="radio" value="/kategoria/motoryzacja" name="where" autocomplete="off"> <label for="department-8" class="metrum-search__option metrum-search__option--where " tabindex="0">Motoryzacja</label> <input id="department-9" class="metrum-search__filter" type="radio" value="/kategoria/sport-i-wypoczynek" name="where" autocomplete="off"> <label for="department-9" class="metrum-search__option metrum-search__option--where opbox-search__divider" tabindex="0">Sport i wypoczynek</label> <input id="CATEGORY-10" class="metrum-search__filter" type="radio" value="/kategoria/kategoria-170" name="where" checked autocomplete="off"> <label for="CATEGORY-10" class="metrum-search__option metrum-search__option--where opbox-search__divider" tabindex="0">Inne marki</label> <input id="users-11" class="metrum-search__filter" type="radio" value="" name="where" autocomplete="off"> <label for="users-11" class="metrum-search__option metrum-search__option--where " tabindex="0">Użytkownicy</label> <input id="ended-12" class="metrum-search__filter" type="radio" value="/zakonczone" name="where" autocomplete="off"> <label for="ended-12" class="metrum-search__option metrum-search__option--where " tabindex="0">Zakończone</label> 
													</div>
												</div>
												<input type="submit" value="szukaj" class="metrum-search__submit _xepa8 _1c5ga _1amu3" > 
											</form>
										</div>
										<script> window.__search_data = {"config":{"experiment":null,"mobileFeaturesEnabled":false},"search":{"phrase":"","typedPhrase":null,"isFocused":false,"isExpanded":false},"suggester":{"list":[],"activeIndex":null,"isExpanded":false},"filters":{"list":[{"name":"<span class=\"metrum-search__filter-label--maxi\">wszystkie działy</span><span class=\"metrum-search__filter-label--mini\">wszędzie</span>","url":"/listing","type":"all"},{"name":"Dom i zdrowie","code":"household.health","url":"/kategoria/dom-i-zdrowie","type":"department","id":"bfad3525-dd91-491a-a66f-036c77ca3269"},{"name":"Dziecko","code":"baby","url":"/kategoria/dziecko","type":"department","id":"11763"},{"name":"Elektronika","code":"electronics","url":"/kategoria/elektronika","type":"department","id":"42540aec-367a-4e5e-b411-17c09b08e41f"},{"name":"Firma i usługi","code":"company.services","url":"/kategoria/firma-i-uslugi","type":"department","id":"4bd97d96-f0ff-46cb-a52c-2992bd972bb1"},{"name":"Kolekcje i sztuka","code":"collections.art","url":"/kategoria/kolekcje-i-sztuka","type":"department","id":"a408e75a-cede-4587-8526-54e9be600d9f"},{"name":"Kultura i rozrywka","code":"culture.entertainment","url":"/kategoria/kultura-i-rozrywka","type":"department","id":"38d588fd-7e9c-4c42-a4ae-6831775eca45"},{"name":"Moda i uroda","code":"fashion.beauty","url":"/kategoria/moda-i-uroda","type":"department","id":"ea5b98dd-4b6f-4bd0-8c80-22c2629132d0"},{"name":"Motoryzacja","code":"automotive","url":"/kategoria/motoryzacja","type":"department","id":"3"},{"name":"Sport i wypoczynek","code":"sports.leisure","url":"/kategoria/sport-i-wypoczynek","type":"department","id":"889eca47-1df3-40f4-a655-150d6938488e","separator":true},{"name":"Inne marki","type":"CATEGORY","separator":true,"id":"170","url":"/kategoria/kategoria-170"},{"name":"Użytkownicy","url":"","type":"users"},{"name":"Zakończone","url":"/zakonczone","type":"ended"}],"displayIndex":10,"checkedFilter":{"name":"Inne marki","type":"CATEGORY","separator":true,"id":"170","url":"/kategoria/kategoria-170"},"inDescriptions":{"enabled":true,"value":false},"isExpanded":false,"isHowEnabled":true,"isSimplified":false}}; </script>
									</div>
								</div>
								<div class="fee54_1LzRP">
									<div class="fee54_3NVgZ fee54_2pfd3">
										<a href="https://allegro.pl/favourites/offers"
											class="fee54_LPPcP "
											rel="nofollow"
											title="Allegro - Obserwowane oferty"
											data-analytics-clickable><i class="fee54_Eh80L"></i></a>
									</div>
									<div class="fee54_3NVgZ">
										<div data-box-name="allegro.metrumHeader.cart" data-prototype-id="allegro.metrumHeader.cart" data-prototype-version="1.0" data-skin-class-name="" data-implementation-version="1.0.0" data-analytics-enabled data-analytics-category="allegro.metrumHeader.cart" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
											<a name="allegro-metrumheader-cart"></a>
											<div class="cart-wrapper">
												<a href="http://allegro.pl/cart" rel="nofollow" data-analytics-clickable>
												<span class="metrum-cart-status" data-cart-configuration='{"currentLanguage":"pl-PL","cacheTtl":180000,"domainName":"allegro.pl","translations":{"CART_CURRENCY":"zł","CART_IS_EMPTY":"koszyk jest pusty"}}'>
												<span class="cart-quantity m-notification m-notification--icon"></span>
												</span>
												</a>
											</div>
										</div>
									</div>
									<div class="fee54_kE_A4 fee54_3NVgZ fee54_2VJ3u" data-dropdown-id="account_dropdown" data-description="header dropdown account_dropdown">
										<button type="button" class="fee54_2iUzi fee54_2w7sa fee54_3vXlh"><span class="fee54_1E7NQ"><span class="opbox-metrum-header__account-name-wrapper">Moje Allegro</span><span data-notification-tag="total" class="fee54_3rwCT fee54_-h8c5 fee54_39KUd"></span></span></button>
										<div class="fee54_3RqiL fee54_2cRD9 fee54_2Jkdp">
											<a href="https://allegro.pl/offer/"
												class="fee54_1clM8 fee54_1J5td"
												rel="nofollow"
												data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">wystaw przedmiot</a>
											<div class="fee54_3cW8w fee54_1rrip"></div>
											<a href="https://allegro.pl/moje-konto"
												class="fee54_1clM8 fee54_1J5td"
												rel="nofollow"
												data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">moje konto</a>
											<a href="https://allegro.pl/dashboard/myorders/"
												class="fee54_1clM8 fee54_1J5td"
												rel="nofollow"
												data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">kupione</a>
											<a href="https://allegro.pl/favourites/offers"
												class="fee54_1clM8 fee54_1J5td"
												rel="nofollow"
												data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">obserwowane</a>
											<a href="https://allegro.pl/myaccount/bid.php"
												class="fee54_1clM8 fee54_1J5td"
												rel="nofollow"
												data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">licytujesz</a>
											<a href="https://allegro.pl/myaccount/sell.php"
												class="fee54_1clM8 fee54_1J5td"
												rel="nofollow"
												data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">sprzedajesz</a>
											<a href="https://allegro.pl/myaccount/sold.php"
												class="fee54_1clM8 fee54_1J5td"
												rel="nofollow"
												data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">sprzedane</a>
											<a href="https://allegro.pl/user-rating-landing-page/index"
												class="fee54_1clM8 fee54_1J5td"
												rel="nofollow"
												data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">wystaw ocenę</a>
											<a href="https://allegro.pl/seller-rating-dashboard/index"
												class="fee54_1clM8 fee54_1J5td"
												rel="nofollow"
												data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">moje oceny</a>
											<a href="https://allegro.pl/myaccount/bundles/Index.php"
												class="fee54_1clM8 fee54_1J5td"
												rel="nofollow"
												data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">centrum zniżek<span data-notification-tag="bundles" class="fee54_3rwCT fee54_-h8c5"></span></a>
											<a href="https://allegro.pl/myaccount/Coins.php"
												class="fee54_1clM8 fee54_1J5td"
												rel="nofollow"
												data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">monety i kupony</a>
											<div class="opbox-metrum-header__account-login">
												<div class="fee54_3cW8w fee54_1rrip"></div>
												<a href="https://allegro.pl/login/auth"
													class=" fee54_2NxiC fee54_1H33r"
													rel="nofollow"
													data-description="header login button"
													data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">zaloguj</a>
												<a href="https://allegro.pl/rejestracja/#/"
													class=" fee54_2NxiC fee54_1H33r"
													rel="nofollow"
													data-description="header register button"
													data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">załóż konto</a>
											</div>
											<div class="opbox-metrum-header__account-logout">
												<div class="fee54_3cW8w fee54_1rrip"></div>
												<a href="https://allegro.pl/logout.php"
													class=" fee54_2NxiC fee54_1H33r"
													rel="nofollow"
													data-description="header logout button"
													data-analytics-clickable data-analytics-click-opbox-custom-placement="account_dropdown_link">wyloguj</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fee54_2mDvq fee54_3BjQA ">
							<div class="opbox-metrum-header__center fee54_3o8jl fee54_EjxZ1">
								<div class="fee54_2mDvq fee54_1SADD fee54_3EtAX fee54_2uFef fee54_2mDvq">
									<div class="fee54_kE_A4 fee54_2Db0Z" data-dropdown-id="categories_dropdown" data-description="header dropdown categories_dropdown">
										<a href="https://allegro.pl/mapa-strony/kategorie" class="fee54_2iUzi fee54_2ZRG6 fee54_3Frg5 fee54_16wEg fee54_101dP fee54_1_kHL fee54_1LO11">Kategorie</a>
										<div class="fee54_3RqiL   fee54_33phb fee54_H7YH7 fee54_16wEg fee54_101dP fee54_1_kHL fee54_2olss">
											<div class="fee54_2Z1oc fee54_kF7w-">
												<div class="fee54_2DDmh fee54_243MO">
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Elektronika">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Elektronika">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="http://cdn.allegrostatic.com/@metrum/icon/category/electronic-mask-456be013.svg"/>
																	<a href="https://allegro.pl/dzial/elektronika"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Elektronika"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Elektronika
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/elektronika"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Elektronika</a>
															<a href="https://allegro.pl/kategoria/fotografia?ref=electronics-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Fotografia</a>
															<a href="https://allegro.pl/kategoria/komputery?ref=electronics-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Komputery</a>
															<a href="https://allegro.pl/kategoria/konsole-i-automaty?ref=electronics-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Konsole i automaty</a>
															<a href="https://allegro.pl/kategoria/microsoft-xbox-one-147134?ref=electronics-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Microsoft Xbox One</a>
															<a href="https://allegro.pl/kategoria/sony-playstation-4-ps4-146562?ref=electronics-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Sony Playstation 4 (PS4)</a>
															<a href="https://allegro.pl/kategoria/rtv-i-agd?ref=electronics-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">RTV i AGD</a>
															<a href="https://allegro.pl/kategoria/telefony-i-akcesoria?ref=electronics-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Telefony i Akcesoria</a>
															<a href="https://allegro.pl/kategoria/sprzet-estradowy-studyjny-i-dj-ski?ref=electronics-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Sprzęt estradowy, studyjny i DJ-ski</a>
															<a href="https://allegro.pl/kategoria/aparaty-cyfrowe-110618?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Aparaty cyfrowe</a>
															<a href="https://allegro.pl/kategoria/laptopy-491?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Laptopy</a>
															<a href="https://allegro.pl/kategoria/smartfony-i-telefony-komorkowe-165?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Smartfony</a>
															<a href="https://allegro.pl/kategoria/apple-iphone-x-257248?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">iPhone X</a>
															<a href="https://allegro.pl/kategoria/samsung-galaxy-s8-256962?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Samsung Galaxy S8</a>
															<a href="https://allegro.pl/kategoria/huawei-p10-256784?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Huawei P10</a>
															<a href="https://allegro.pl/kategoria/tablety-89253?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Tablety</a>
															<a href="https://allegro.pl/kategoria/czytniki-ebookow-czytniki-110212?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Czytniki ebooków</a>
															<a href="https://allegro.pl/kategoria/do-domu-odkurzacze-67466?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Odkurzacze</a>
															<a href="https://allegro.pl/kategoria/do-kuchni-wyciskarki-254958?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Wyciskarki do soków</a>
															<a href="https://allegro.pl/kategoria/higiena-i-pielegnacja-depilatory-67476?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Depilatory</a>
															<a href="https://allegro.pl/kategoria/tv-i-video-telewizory-5120?ref=electronics-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Telewizory</a>
														</div>
													</div>
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Moda">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Moda">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="http://cdn.allegrostatic.com/@metrum/icon/category/fashion-mask-acd0923a.svg"/>
																	<a href="https://allegro.pl/dzial/moda"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Moda"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Moda
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/moda"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Moda</a>
															<a href="https://allegro.pl/kategoria/odziez-obuwie-dodatki?ref=fashion.beauty-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Odzież, Obuwie, Dodatki</a>
															<a href="https://allegro.pl/kategoria/odziez-damska-76033?ref=fashion.beauty-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Odzież damska</a>
															<a href="https://allegro.pl/kategoria/bielizna-damska-75993?ref=fashion.beauty-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Bielizna damska</a>
															<a href="https://allegro.pl/kategoria/odziez-meska-1455?ref=fashion.beauty-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Odzież męska</a>
															<a href="https://allegro.pl/kategoria/bielizna-meska-256925?ref=fashion.beauty-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Bielizna męska</a>
															<a href="https://allegro.pl/kategoria/obuwie-1469?ref=fashion.beauty-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Obuwie</a>
															<a href="https://allegro.pl/kategoria/galanteria-i-dodatki-1487?ref=fashion.beauty-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Galanteria i dodatki</a>
															<a href="https://allegro.pl/kategoria/bizuteria-i-zegarki?ref=fashion.beauty-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Biżuteria i zegarki</a>
															<a href="https://allegro.pl/dzial/moda?ref=fashion.beauty-layer-popular#struktury"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zimowe trendy</a>
															<a href="https://allegro.pl/kategoria/odziez-obuwie-dodatki?ok=1&amp;order=qd&amp;ref=fashion.beauty-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Modowe okazje</a>
															<a href="https://allegro.pl/kategoria/odziez-obuwie-dodatki?freeShipping=1&amp;order=qd&amp;ref=fashion.beauty-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Oferty z darmową dostawą</a>
															<a href="https://allegro.pl/uzytkownik/SMA-4F/odziez-obuwie-dodatki?order=m"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">4F</a>
															<a href="https://allegro.pl/listing/user/listing.php?us_id=43162901"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Lancerto</a>
															<a href="https://allegro.pl/uzytkownik/sma_marilyn?order=m"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Marilyn</a>
															<a href="https://allegro.pl/listing/user/listing.php?us_id=5765040&amp;order=m"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Pako Lorente</a>
															<a href="https://allegro.pl/listing/user/listing.php?order=qd&amp;us_id=34539991"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Triumph</a>
															<a href="https://allegro.pl/listing/user/listing.php?id=1454&amp;order=qd&amp;us_id=28958272"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">WITTCHEN</a>
															<a href="https://allegro.pl/dzial/moda/marki?order=qd&amp;ok=1&amp;ref=fashion.beauty-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zobacz więcej marek</a>
														</div>
													</div>
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Dom i ogród">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Dom i ogród">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="http://cdn.allegrostatic.com/@metrum/icon/category/home-mask-0d64d0dc.svg"/>
																	<a href="https://allegro.pl/dzial/dom-i-ogrod"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Dom i ogród"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Dom i ogród
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/dom-i-ogrod"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Dom i ogród</a>
															<a href="https://allegro.pl/kategoria/delikatesy?ref=household.health-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Delikatesy</a>
															<a href="https://allegro.pl/kategoria/dom-i-ogrod?ref=household.health-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Dom i Ogród</a>
															<a href="https://allegro.pl/kategoria/nieruchomosci?ref=household.health-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Nieruchomości</a>
															<a href="https://allegro.pl/kategoria/zdrowie?ref=household.health-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zdrowie</a>
															<a href="https://allegro.pl/kategoria/wyposazenie-123?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Wyposażenie</a>
															<a href="https://allegro.pl/kategoria/ogrod-1532?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Ogród</a>
															<a href="https://allegro.pl/kategoria/budownictwo-i-akcesoria-1520?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Budownictwo i Akcesoria</a>
															<a href="https://allegro.pl/kategoria/meble-522?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Meble</a>
															<a href="https://allegro.pl/kategoria/narzedzia-1536?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Narzędzia</a>
															<a href="https://allegro.pl/kategoria/utrzymanie-czystosci-253343?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Utrzymanie czystości</a>
															<a href="https://allegro.pl/kategoria/zwierzeta-1528?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zwierzęta</a>
															<a href="https://allegro.pl/kategoria/dla-kotow-karmy-90039?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Karma dla kota</a>
															<a href="https://allegro.pl/kategoria/zdrowa-zywnosc-produkty-bezglutenowe-121637?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Produkty bezglutenowe</a>
															<a href="https://allegro.pl/kategoria/sciany-i-elewacje-tapety-46166?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Tapety</a>
															<a href="https://allegro.pl/kategoria/oswietlenie-lampy-5318?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Lampy</a>
															<a href="https://allegro.pl/kategoria/narzedzia-myjki-cisnieniowe-147652?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Myjki ciśnieniowe</a>
															<a href="https://allegro.pl/kategoria/przybory-kuchenne-garnki-i-patelnie-15978?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Garnki i patelnie</a>
															<a href="https://allegro.pl/kategoria/wyposazenie-posciel-i-koce-9017?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Pościele i koce</a>
															<a href="https://allegro.pl/kategoria/kabiny-brodziki-i-akcesoria-kabiny-253705?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Kabiny prysznicowe</a>
															<a href="https://allegro.pl/kategoria/ogrzewanie-grzejniki-111868?ref=household.health-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Grzejniki</a>
														</div>
													</div>
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Supermarket">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Supermarket">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="https://assets.allegrostatic.com/opbox/allegro.pl/homepage/Main Page/c55f62268fa136a82554a5ed04b2b6fe.svg"/>
																	<a href="https://allegro.pl/dzial/supermarket"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Supermarket"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Supermarket
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/supermarket"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Supermarket</a>
															<a href="https://allegro.pl/kategoria/dla-psow-karmy-90060?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Karma dla psa</a>
															<a href="https://allegro.pl/kategoria/dla-psow-klatki-i-kojce-90068?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Kojce dla psów</a>
															<a href="https://allegro.pl/kategoria/dla-kotow-karmy-90039?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Karma dla kota</a>
															<a href="https://allegro.pl/kategoria/dla-kotow-zwirki-90051?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Żwirek dla kota</a>
															<a href="https://allegro.pl/kategoria/dla-kotow-kuwety-90052?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Kuwety dla kotów</a>
															<a href="https://allegro.pl/kategoria/zwierzeta-akwarystyka-1118?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Akwarystyka</a>
															<a href="https://allegro.pl/kategoria/utrzymanie-czystosci-mopy-253348?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Mopy</a>
															<a href="https://allegro.pl/kategoria/utrzymanie-czystosci-kosze-na-smieci-253345?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Kosze na śmieci</a>
															<a href="https://allegro.pl/kategoria/utrzymanie-czystosci-suszarki-do-prania-253369?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Suszarki do prania</a>
															<a href="https://allegro.pl/kategoria/utrzymanie-czystosci-preparaty-do-zmywarek-253356?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Tabletki do zmywarek</a>
															<a href="https://allegro.pl/kategoria/delikatesy?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Delikatesy</a>
															<a href="https://allegro.pl/kategoria/kawy-74030?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Kawy</a>
															<a href="https://allegro.pl/kategoria/herbaty-74038?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Herbaty</a>
															<a href="https://allegro.pl/kategoria/yerba-mate-125772?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Yerba mate</a>
															<a href="https://allegro.pl/kategoria/dekoracje-cukiernicze-dodatki-spozywcze-dekoracje-cukiernicze-111075?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Dekoracje cukiernicze</a>
															<a href="https://allegro.pl/kategoria/zdrowa-zywnosc-74062?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zdrowa żywność</a>
															<a href="https://allegro.pl/kategoria/zdrowa-zywnosc-74062?order=m&amp;cechy=Produkt%20ekologiczny?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Żywność ekologiczna</a>
															<a href="https://allegro.pl/kategoria/bakalie-i-konfitury-bakalie-112641?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Bakalie</a>
															<a href="https://allegro.pl/kategoria/cukier-ksylitol-111090?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Ksylitol</a>
															<a href="https://allegro.pl/kategoria/oliwy-i-oleje-sosy-oleje-112625?ref=supermarket-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Oleje</a>
														</div>
													</div>
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Dziecko">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Dziecko">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="http://cdn.allegrostatic.com/@metrum/icon/category/child-mask-f43f5032.svg"/>
																	<a href="https://allegro.pl/dzial/dziecko"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Dziecko"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Dziecko
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/dziecko"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Dziecko</a>
															<a href="https://allegro.pl/kategoria/akcesoria-dla-mamy-i-dziecka-82595?ref=baby-layer-main&amp;order=m"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Dla mamy i dziecka</a>
															<a href="https://allegro.pl/kategoria/artykuly-szkolne-50673?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Artykuły szkolne</a>
															<a href="https://allegro.pl/kategoria/foteliki-samochodowe-82594?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Foteliki samochodowe</a>
															<a href="https://allegro.pl/kategoria/karmienie-dziecka-99333?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Karmienie dziecka</a>
															<a href="https://allegro.pl/kategoria/obuwie-25952?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Obuwie</a>
															<a href="https://allegro.pl/kategoria/odziez-11764?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Odzież</a>
															<a href="https://allegro.pl/kategoria/pokoj-dzieciecy-17272?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Pokój dziecięcy</a>
															<a href="https://allegro.pl/kategoria/rowery-i-pojazdy-86386?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Rowery i pojazdy</a>
															<a href="https://allegro.pl/kategoria/wozki-82593?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Wózki</a>
															<a href="https://allegro.pl/kategoria/zabawki-11818?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zabawki</a>
															<a href="https://allegro.pl/kategoria/zabawki-ogrodowe-86273?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zabawki ogrodowe</a>
															<a href="https://allegro.pl/kategoria/zdrowie-i-higiena-17285?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zdrowie i higiena</a>
															<a href="https://allegro.pl/kategoria/zabawki-puzzle-11840?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Puzzle</a>
															<a href="https://allegro.pl/kategoria/zabawki-edukacyjne-11821?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zabawki edukacyjne</a>
															<a href="https://allegro.pl/kategoria/zabawki-klocki-11823?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Klocki</a>
															<a href="https://allegro.pl/kategoria/zabawki-lalki-i-akcesoria-11825?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Lalki i akcesoria</a>
															<a href="https://allegro.pl/kategoria/zabawki-gry-123942?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Gry dla dzieci</a>
															<a href="https://allegro.pl/kategoria/zdrowie-i-higiena-kosmetyki-17294?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Kosmetyki dla dzieci</a>
															<a href="https://allegro.pl/kategoria/pokoj-dzieciecy-meble-17273?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Meble dla dzieci</a>
															<a href="https://allegro.pl/kategoria/rowery-i-pojazdy-hulajnogi-86394?ref=baby-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Hulajnogi</a>
														</div>
													</div>
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Uroda i zdrowie">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Uroda i zdrowie">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="https://assets.allegrostatic.com/opbox/allegro.pl/homepage/Main Page/3f506ba3575052eb5a7c55f1dc49d2fa.svg"/>
																	<a href="https://allegro.pl/dzial/uroda-i-zdrowie"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Uroda i zdrowie"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Uroda i zdrowie
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/uroda-i-zdrowie"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Uroda i zdrowie</a>
															<a href="https://allegro.pl/kategoria/uroda"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Uroda</a>
															<a href="https://allegro.pl/kategoria/makijaz-45657"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Makijaż</a>
															<a href="https://allegro.pl/kategoria/twarz-podklady-45668"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Podkłady</a>
															<a href="https://allegro.pl/kategoria/oczy-tusze-do-rzes-45666"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Tusze do rzęs</a>
															<a href="https://allegro.pl/kategoria/manicure-i-pedicure-45658"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Manicure i pedicure</a>
															<a href="https://allegro.pl/kategoria/manicure-i-pedicure-lakiery-hybrydowe-126042"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Lakiery hybrydowe</a>
															<a href="https://allegro.pl/kategoria/urzadzenia-lampy-uv-i-led-45698"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Lampy UV i LED</a>
															<a href="https://allegro.pl/kategoria/perfumy-i-wody-135"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Perfumy i wody</a>
															<a href="https://allegro.pl/kategoria/perfumy-i-wody-zapachy-dla-kobiet-17748"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zapachy dla kobiet</a>
															<a href="https://allegro.pl/kategoria/perfumy-i-wody-zapachy-dla-mezczyzn-17749"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zapachy dla mężczyzn</a>
															<a href="https://allegro.pl/kategoria/pielegnacja-1430"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Pielęgnacja</a>
															<a href="https://allegro.pl/kategoria/pielegnacja-wlosy-1436"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Włosy</a>
															<a href="https://allegro.pl/kategoria/pielegnacja-golenie-i-depilacja-1431"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Golenie i depilacja</a>
															<a href="https://allegro.pl/kategoria/zdrowie"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Zdrowie</a>
															<a href="https://allegro.pl/kategoria/korekcja-wzroku-soczewki-kontaktowe-122424"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Soczewki kontaktowe</a>
															<a href="https://allegro.pl/kategoria/urzadzenia-inhalatory-i-akcesoria-122585"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Inhalatory</a>
															<a href="https://allegro.pl/kategoria/urzadzenia-cisnieniomierze-i-akcesoria-122583"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Ciśnieniomierze</a>
															<a href="https://allegro.pl/kategoria/urzadzenia-termometry-122588"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Termometry</a>
															<a href="https://allegro.pl/kategoria/higiena-jamy-ustnej-257760"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Higiena jamy ustnej</a>
															<a href="https://allegro.pl/kategoria/zdrowie-medycyna-suplementy-diety-122564"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Suplementy diety</a>
														</div>
													</div>
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Kultura i rozrywka">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Kultura i rozrywka">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="https://assets.allegrostatic.com/opbox/allegro.pl/homepage/Main Page/b765f790e3566ef64d3f5fa2832e4622.svg"/>
																	<a href="https://allegro.pl/dzial/kultura-i-rozrywka"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Kultura i rozrywka"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Kultura i rozrywka
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/kultura-i-rozrywka"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Kultura i rozrywka</a>
															<a href="https://allegro.pl/kategoria/bilety?ref=culture.entertainment-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Bilety</a>
															<a href="https://allegro.pl/kategoria/filmy?ref=culture.entertainment-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Filmy</a>
															<a href="https://allegro.pl/kategoria/gry?ref=culture.entertainment-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Gry</a>
															<a href="https://allegro.pl/kategoria/instrumenty?ref=culture.entertainment-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Instrumenty</a>
															<a href="https://allegro.pl/kategoria/ksiazki-i-komiksy?ref=culture.entertainment-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Książki i Komiksy</a>
															<a href="https://allegro.pl/kategoria/podreczniki-do-szkol-podst-i-srednich-66820?ref=culture.entertainment-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Podręczniki szkolne</a>
															<a href="https://allegro.pl/kategoria/muzyka?ref=culture.entertainment-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Muzyka</a>
															<a href="https://allegro.pl/kategoria/plyty-kompaktowe-dla-dzieci-5608?ref=culture.entertainment-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Muzyka dla dzieci</a>
															<a href="https://allegro.pl/kategoria/ebooki-5893?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Ebooki</a>
															<a href="https://allegro.pl/kategoria/audiobooki-cd-66813?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Audiobooki na CD</a>
															<a href="https://allegro.pl/kategoria/komputerowe-pc-45713?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Gry komputerowe PC</a>
															<a href="https://allegro.pl/kategoria/gry-na-konsole-82326?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Gry na konsole</a>
															<a href="https://allegro.pl/kategoria/gry-na-konsole-microsoft-xbox-one-147123?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Gry na Xbox One</a>
															<a href="https://allegro.pl/kategoria/towarzyskie-planszowe-6051?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Gry planszowe</a>
															<a href="https://allegro.pl/kategoria/plyty-kompaktowe-rock-5602?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Rock</a>
															<a href="https://allegro.pl/kategoria/plyty-kompaktowe-pop-5603?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Pop</a>
															<a href="https://allegro.pl/kategoria/plyty-winylowe-279?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Płyty winylowe</a>
															<a href="https://allegro.pl/kategoria/plyty-dvd-100075?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Filmy na DVD</a>
															<a href="https://allegro.pl/kategoria/plyty-blu-ray-89054?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Filmy na Blu-ray</a>
															<a href="https://allegro.pl/kategoria/poradniki-i-albumy-79193?ref=culture.entertainment-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Poradniki i albumy</a>
														</div>
													</div>
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Sport i wypoczynek">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Sport i wypoczynek">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="http://cdn.allegrostatic.com/@metrum/icon/category/sport-mask-ffa99de4.svg"/>
																	<a href="https://allegro.pl/dzial/sport-i-wypoczynek"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Sport i wypoczynek"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Sport i wypoczynek
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/sport-i-wypoczynek"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Sport i wypoczynek</a>
															<a href="https://allegro.pl/kategoria/erotyka?ref=sports.leisure-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Erotyka</a>
															<a href="https://allegro.pl/kategoria/sport-i-turystyka?ref=sports.leisure-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Sport i Turystyka</a>
															<a href="https://allegro.pl/kategoria/wakacje?ref=sports.leisure-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Wakacje</a>
															<a href="https://allegro.pl/kategoria/sporty-druzynowe-pilka-nozna-13372?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Piłka nożna</a>
															<a href="https://allegro.pl/kategoria/rowery-i-akcesoria-16414?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Rowery i akcesoria</a>
															<a href="https://allegro.pl/kategoria/silownia-i-fitness-suplementy-i-odzywki-19655?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Suplementy i odżywki</a>
															<a href="https://allegro.pl/kategoria/silownia-i-fitness-silownia-110145?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Siłownia</a>
															<a href="https://allegro.pl/kategoria/silownia-i-fitness-fitness-110132?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Fitness</a>
															<a href="https://allegro.pl/kategoria/turystyka-3922?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Turystyka</a>
															<a href="https://allegro.pl/kategoria/bieganie-obuwie-147264?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Buty do biegania</a>
															<a href="https://allegro.pl/kategoria/akcesoria-turystyczne-latarki-102872?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Latarki</a>
															<a href="https://allegro.pl/kategoria/turystyka-walizki-102861?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Walizki</a>
															<a href="https://allegro.pl/kategoria/skating-slackline-wrotki-148320?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Wrotki</a>
															<a href="https://allegro.pl/kategoria/lyzwiarstwo-lyzwy-14075?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Łyżwy</a>
															<a href="https://allegro.pl/kategoria/akcesoria-turystyczne-kubki-termiczne-102870?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Kubki termiczne</a>
															<a href="https://allegro.pl/kategoria/sporty-zimowe-deski-snowboardowe-256741?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Deski snowboardowe</a>
															<a href="https://allegro.pl/kategoria/skating-slackline-deskorolki-148303?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Deskorolki</a>
															<a href="https://allegro.pl/kategoria/koszykowka-obuwie-13380?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Buty do koszykówki</a>
															<a href="https://allegro.pl/kategoria/militaria-noze-maczety-253949?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Noże i scyzoryki</a>
															<a href="https://allegro.pl/kategoria/militaria-asg-253882?ref=sports.leisure-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">ASG</a>
														</div>
													</div>
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Motoryzacja">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Motoryzacja">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="http://cdn.allegrostatic.com/@metrum/icon/category/motorization-mask-068f7678.svg"/>
																	<a href="https://allegro.pl/dzial/motoryzacja"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Motoryzacja"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Motoryzacja
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/motoryzacja"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Motoryzacja</a>
															<a href="https://allegro.pl/kategoria/czesci-samochodowe-620?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Części samochodowe</a>
															<a href="https://allegro.pl/kategoria/opony-samochodowe-zimowe-99203?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Opony zimowe</a>
															<a href="https://allegro.pl/kategoria/opony-samochodowe-caloroczne-99204?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Opony całoroczne</a>
															<a href="https://allegro.pl/kategoria/opony-i-felgi-felgi-i-kola-samochodowe-257312?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Felgi i koła</a>
															<a href="https://allegro.pl/kategoria/akcesoria-samochodowe-253498?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Akcesoria samochodowe</a>
															<a href="https://allegro.pl/kategoria/narzedzia-i-sprzet-warsztatowy-18554?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Narzędzia i sprzęt warsztatowy</a>
															<a href="https://allegro.pl/kategoria/chemia-18903?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Chemia</a>
															<a href="https://allegro.pl/kategoria/czesci-i-akcesoria-motocyklowe-156?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Części motocyklowe</a>
															<a href="https://allegro.pl/kategoria/czesci-i-akcesoria-motocyklowe-odziez-159?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Odzież motocyklowa</a>
															<a href="https://allegro.pl/kategoria/czesci-do-maszyn-99022?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Części do maszyn</a>
															<a href="https://allegro.pl/kategoria/czesci-samochodowe-czesci-karoserii-4094?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Części karoserii</a>
															<a href="https://allegro.pl/kategoria/elektronika-samochodowa-alkomaty-257394?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Alkomaty</a>
															<a href="https://allegro.pl/kategoria/elektronika-samochodowa-kamery-samochodowe-257398?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Kamery samochodowe</a>
															<a href="https://allegro.pl/kategoria/akcesoria-samochodowe-dywaniki-253563?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Dywaniki</a>
															<a href="https://allegro.pl/kategoria/akcesoria-samochodowe-pokrowce-253588?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Pokrowce</a>
															<a href="https://allegro.pl/kategoria/akcesoria-samochodowe-bagazniki-253538?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Bagażniki i uchwyty</a>
															<a href="https://allegro.pl/kategoria/chemia-oleje-silnikowe-253181?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Oleje silnikowe</a>
															<a href="https://allegro.pl/kategoria/samochody-149?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Samochody</a>
															<a href="https://allegro.pl/kategoria/motocykle-i-quady-5557?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Motocykle i quady</a>
															<a href="https://allegro.pl/kategoria/maszyny-252942?ref=automotive-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Maszyny</a>
														</div>
													</div>
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Ogłoszenia">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Ogłoszenia">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="https://assets.allegrostatic.com/opbox/allegro.pl/homepage/Main Page/dc35553cd9e93a0555a3d9cf43f79d23.svg"/>
																	<a href="https://allegro.pl/dzial/ogloszenia"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Ogłoszenia"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Ogłoszenia
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/ogloszenia"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Ogłoszenia</a>
															<a href="https://allegro.pl/kategoria/samochody-osobowe-4029?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Samochody osobowe</a>
															<a href="https://allegro.pl/kategoria/osobowe-audi-4031?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Audi</a>
															<a href="https://allegro.pl/kategoria/osobowe-bmw-4032?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">BMW</a>
															<a href="https://allegro.pl/kategoria/osobowe-mercedes-benz-4041?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Mercedes</a>
															<a href="https://allegro.pl/kategoria/osobowe-ford-4036?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Ford</a>
															<a href="https://allegro.pl/kategoria/osobowe-opel-4044?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Opel</a>
															<a href="https://allegro.pl/kategoria/osobowe-fiat-4035?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Fiat</a>
															<a href="https://allegro.pl/kategoria/osobowe-toyota-4054?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Toyota</a>
															<a href="https://allegro.pl/kategoria/osobowe-volvo-4056?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Volvo</a>
															<a href="https://allegro.pl/kategoria/samochody-dostawcze-do-3-5-t-257753?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Dostawcze (do 3,5t)</a>
															<a href="https://allegro.pl/kategoria/motocykle-i-quady-5557?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Motocykle</a>
															<a href="https://allegro.pl/kategoria/motocykle-i-quady-quady-atv-257567?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Quady</a>
															<a href="https://allegro.pl/kategoria/samochody-ciezarowe-pow-3-5-t-589?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Samochody ciężarowe</a>
															<a href="https://allegro.pl/kategoria/samochody-zabytkowe-594?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Samochody zabytkowe</a>
															<a href="https://allegro.pl/kategoria/samochody-autobusy-14685?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Autobusy</a>
															<a href="https://allegro.pl/kategoria/maszyny-maszyny-budowlane-252943?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Maszyny budowlane</a>
															<a href="https://allegro.pl/kategoria/maszyny-maszyny-rolnicze-252944?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Maszyny rolnicze</a>
															<a href="https://allegro.pl/kategoria/maszyny-wozki-widlowe-252945?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Wózki widłowe</a>
															<a href="https://allegro.pl/kategoria/przyczepy-naczepy-naczepy-18529?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Przyczepy, naczepy</a>
															<a href="https://allegro.pl/kategoria/inne-pojazdy-i-lodzie-4079?ref=classifieds-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Inne pojazdy i łodzie</a>
														</div>
													</div>
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Kolekcje i sztuka">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Kolekcje i sztuka">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="http://cdn.allegrostatic.com/@metrum/icon/category/collection-mask-e50552ba.svg"/>
																	<a href="https://allegro.pl/dzial/kolekcje-i-sztuka"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Kolekcje i sztuka"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Kolekcje i sztuka
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/kolekcje-i-sztuka"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Kolekcje i sztuka</a>
															<a href="https://allegro.pl/kategoria/antyki-i-sztuka?ref=collections.art-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Antyki i Sztuka</a>
															<a href="https://allegro.pl/kategoria/kolekcje?ref=collections.art-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Kolekcje</a>
															<a href="https://allegro.pl/kategoria/rekodzielo?ref=collections.art-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Rękodzieło</a>
															<a href="https://allegro.pl/kategoria/akcesoria-plastyczne-27940?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Akcesoria plastyczne</a>
															<a href="https://allegro.pl/kategoria/antykwariat-26098?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Antykwariat</a>
															<a href="https://allegro.pl/kategoria/decoupage-76685?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Decoupage</a>
															<a href="https://allegro.pl/kategoria/malarstwo-26271?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Malarstwo</a>
															<a href="https://allegro.pl/kategoria/militaria-691?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Militaria</a>
															<a href="https://allegro.pl/kategoria/modelarstwo-1061?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Modelarstwo</a>
															<a href="https://allegro.pl/kategoria/numizmatyka-85?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Numizmatyka</a>
															<a href="https://allegro.pl/kategoria/malarstwo-26271?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Malarstwo</a>
															<a href="https://allegro.pl/kategoria/trafika-47937?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Trafika</a>
															<a href="https://allegro.pl/kategoria/scrapbooking-76698?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Scrapbooking</a>
															<a href="https://allegro.pl/kategoria/przedmioty-recznie-wykonane-76741?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Przedmioty handmade</a>
															<a href="https://allegro.pl/kategoria/filatelistyka-76?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Filatelistyka</a>
															<a href="https://allegro.pl/kategoria/pamiatki-prl-u-47936?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Pamiątki PRL-u</a>
															<a href="https://allegro.pl/kategoria/porcelana-rosenthal-26171?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Porcelana Rosenthal</a>
															<a href="https://allegro.pl/kategoria/sztuka-wspolczesna-26281?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Sztuka współczesna</a>
															<a href="https://allegro.pl/kategoria/filcowanie-76693?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Filcowanie</a>
															<a href="https://allegro.pl/kategoria/szycie-i-dziewiarstwo-tkaniny-76725?ref=collections.art-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Tkaniny</a>
														</div>
													</div>
													<div class="fee54_2rIHW fee54_33vjU " data-accordion-id="Firma">
														<div class="fee54_3zkS7 opbox-metrum-header-accordion__panel-js" data-layer-id="Firma">
															<div class="fee54_3R33F fee54_3aDO6">
																<div class="fee54_JiKHW" data-description="header categories accordion title">
																	<img class="fee54_2790e" src="http://cdn.allegrostatic.com/@metrum/icon/category/firm-mask-8c8060af.svg"/>
																	<a href="https://allegro.pl/dzial/firma-i-uslugi"
																		class=" fee54_1rog4"
																		data-analytics-click-value="Firma"
																		data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_title"></a>
																	Firma
																</div>
															</div>
														</div>
														<div class="fee54_3uscM fee54_1976s">
															<a href="https://allegro.pl/dzial/firma-i-uslugi"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_link">Firma</a>
															<a href="https://allegro.pl/kategoria/biuro-i-reklama?ref=company.services-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Biuro i Reklama</a>
															<a href="https://allegro.pl/kategoria/przemysl?ref=company.services-layer-main"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Przemysł</a>
															<a href="https://allegro.pl/kategoria/akcesoria-biurowe-64478?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Akcesoria biurowe</a>
															<a href="https://allegro.pl/kategoria/artykuly-pismiennicze-64479?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Artykuły piśmiennicze</a>
															<a href="https://allegro.pl/kategoria/maszyny-i-urzadzenia-121334?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Maszyny i urządzenia</a>
															<a href="https://allegro.pl/kategoria/meble-biurowe-64480?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Meble biurowe</a>
															<a href="https://allegro.pl/kategoria/odziez-robocza-i-bhp-110233?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Odzież robocza i BHP</a>
															<a href="https://allegro.pl/kategoria/pakowanie-i-wysylka-64482?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Pakowanie i wysyłka</a>
															<a href="https://allegro.pl/kategoria/reklama-64485?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Reklama</a>
															<a href="https://allegro.pl/kategoria/maszyny-i-urzadzenia-automatyka-przemyslowa-121338?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Automatyka przemysłowa</a>
															<a href="https://allegro.pl/kategoria/odziez-robocza-i-bhp-110233?order=m?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Odzież robocza i BHP</a>
															<a href="https://allegro.pl/kategoria/maszyny-i-urzadzenia-poligraficzne-121337?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Maszyny Poligraficzne</a>
															<a href="https://allegro.pl/kategoria/maszyny-i-urzadzenia-gastronomiczne-121336?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Maszyny Gastronomiczne</a>
															<a href="https://allegro.pl/kategoria/materialy-i-akcesoria-przemysl-drzewny-121424?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Przemysł drzewny</a>
															<a href="https://allegro.pl/kategoria/materialy-i-akcesoria-przemysl-energetyczny-121433?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Przemysł energetyczny</a>
															<a href="https://allegro.pl/kategoria/materialy-i-akcesoria-przyrzady-pomiarowe-121432?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Przyrządy pomiarowe</a>
															<a href="https://allegro.pl/kategoria/wyposazenie-pomieszczen-magazyny-i-placowki-handlowe-121532?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Magazyny i placówki handlowe</a>
															<a href="https://allegro.pl/kategoria/meble-biurowe-sejfy-i-kasy-pancerne-64523?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Sejfy i kasy pancerne</a>
															<a href="https://allegro.pl/kategoria/pakowanie-i-wysylka-pudelka-i-kartony-64540?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Opakowania kartonowe</a>
															<a href="https://allegro.pl/kategoria/materialy-i-akcesoria-tworzywa-sztuczne-121436?ref=company.services-layer-popular"
																class="fee54_1clM8 fee54_1MoEt fee54_3GPbu fee54_296TH"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_accordion_subcategory_link">Tworzywa sztuczne</a>
														</div>
													</div>
													<div class="fee54_1fkFB"></div>
												</div>
											</div>
											<div class="fee54_2Z1oc fee54_3aVI1">
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Elektronika"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/elektronika"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Elektronika</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/fotografia?ref=electronics-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Fotografia"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Fotografia</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/komputery?ref=electronics-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Komputery"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Komputery</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/konsole-i-automaty?ref=electronics-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Konsole i automaty"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Konsole i automaty</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/microsoft-xbox-one-147134?ref=electronics-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Microsoft Xbox One"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Microsoft Xbox One</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/sony-playstation-4-ps4-146562?ref=electronics-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Sony Playstation 4 (PS4)"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Sony Playstation 4 (PS4)</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/rtv-i-agd?ref=electronics-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="RTV i AGD"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">RTV i AGD</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/telefony-i-akcesoria?ref=electronics-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Telefony i Akcesoria"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Telefony i Akcesoria</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/sprzet-estradowy-studyjny-i-dj-ski?ref=electronics-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Sprzęt estradowy, studyjny i DJ-ski"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Sprzęt estradowy, studyjny i DJ-ski</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/aparaty-cyfrowe-110618?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Aparaty cyfrowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Aparaty cyfrowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/laptopy-491?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Laptopy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Laptopy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/smartfony-i-telefony-komorkowe-165?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Smartfony"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Smartfony</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/apple-iphone-x-257248?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="iPhone X"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">iPhone X</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/samsung-galaxy-s8-256962?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Samsung Galaxy S8"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Samsung Galaxy S8</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/huawei-p10-256784?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Huawei P10"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Huawei P10</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/tablety-89253?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Tablety"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Tablety</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/czytniki-ebookow-czytniki-110212?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Czytniki ebooków"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Czytniki ebooków</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/do-domu-odkurzacze-67466?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Odkurzacze"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Odkurzacze</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/do-kuchni-wyciskarki-254958?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Wyciskarki do soków"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Wyciskarki do soków</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/higiena-i-pielegnacja-depilatory-67476?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Depilatory"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Depilatory</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/tv-i-video-telewizory-5120?ref=electronics-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Telewizory"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Telewizory</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/elektronika#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Elektronika" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="elektronika"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.electronics.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-electronics-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-6ff9cc97" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_electronics/330x400_layer","tagId":"div-gpt-ad-6ff9cc97","format":"banner","targeting":{},"fallback":{"imageAlt":"Aparaty cyfrowe","imageUrl":"https://assets.allegrostatic.com/opbox/allegro.pl/header/Layer%20electronics/electronics_layer_small.png","linkUrl":"https://allegro.pl/aparaty-cyfrowe-110618?order=qd&buyNew=1&offerTypeBuyNow=1"},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Moda"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/moda"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Moda</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/odziez-obuwie-dodatki?ref=fashion.beauty-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Odzież, Obuwie, Dodatki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Odzież, Obuwie, Dodatki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/odziez-damska-76033?ref=fashion.beauty-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Odzież damska"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Odzież damska</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/bielizna-damska-75993?ref=fashion.beauty-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Bielizna damska"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Bielizna damska</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/odziez-meska-1455?ref=fashion.beauty-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Odzież męska"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Odzież męska</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/bielizna-meska-256925?ref=fashion.beauty-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Bielizna męska"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Bielizna męska</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/obuwie-1469?ref=fashion.beauty-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Obuwie"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Obuwie</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/galanteria-i-dodatki-1487?ref=fashion.beauty-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Galanteria i dodatki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Galanteria i dodatki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/bizuteria-i-zegarki?ref=fashion.beauty-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Biżuteria i zegarki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Biżuteria i zegarki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/dzial/moda?ref=fashion.beauty-layer-popular#struktury"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zimowe trendy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zimowe trendy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/odziez-obuwie-dodatki?ok=1&amp;order=qd&amp;ref=fashion.beauty-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Modowe okazje"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Modowe okazje</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/odziez-obuwie-dodatki?freeShipping=1&amp;order=qd&amp;ref=fashion.beauty-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Oferty z darmową dostawą"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Oferty z darmową dostawą</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/uzytkownik/SMA-4F/odziez-obuwie-dodatki?order=m"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="4F"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">4F</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/listing/user/listing.php?us_id=43162901"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Lancerto"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Lancerto</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/uzytkownik/sma_marilyn?order=m"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Marilyn"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Marilyn</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/listing/user/listing.php?us_id=5765040&amp;order=m"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Pako Lorente"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Pako Lorente</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/listing/user/listing.php?order=qd&amp;us_id=34539991"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Triumph"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Triumph</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/listing/user/listing.php?id=1454&amp;order=qd&amp;us_id=28958272"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="WITTCHEN"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">WITTCHEN</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/dzial/moda/marki?order=qd&amp;ok=1&amp;ref=fashion.beauty-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zobacz więcej marek"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zobacz więcej marek</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/moda#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Moda" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="moda"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.fashion.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-fashion-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-abeff814" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_fashion/330x400_layer","tagId":"div-gpt-ad-abeff814","format":"banner","targeting":{},"fallback":{"imageAlt":"Swetry","imageUrl":"https://assets.allegrostatic.com/opbox/allegro.pl/header/Layer%20fashion%20beauty/fashion_layer_small.png","linkUrl":"https://allegro.pl/odziez-damska-swetry-76102?order=qd&buyNew=1&offerTypeBuyNow=1"},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Dom i ogród"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/dom-i-ogrod"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Dom i ogród</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/delikatesy?ref=household.health-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Delikatesy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Delikatesy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/dom-i-ogrod?ref=household.health-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Dom i Ogród"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Dom i Ogród</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/nieruchomosci?ref=household.health-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Nieruchomości"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Nieruchomości</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zdrowie?ref=household.health-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zdrowie"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zdrowie</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/wyposazenie-123?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Wyposażenie"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Wyposażenie</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/ogrod-1532?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Ogród"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Ogród</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/budownictwo-i-akcesoria-1520?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Budownictwo i Akcesoria"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Budownictwo i Akcesoria</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/meble-522?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Meble"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Meble</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/narzedzia-1536?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Narzędzia"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Narzędzia</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/utrzymanie-czystosci-253343?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Utrzymanie czystości"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Utrzymanie czystości</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zwierzeta-1528?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zwierzęta"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zwierzęta</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/dla-kotow-karmy-90039?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Karma dla kota"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Karma dla kota</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zdrowa-zywnosc-produkty-bezglutenowe-121637?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Produkty bezglutenowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Produkty bezglutenowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/sciany-i-elewacje-tapety-46166?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Tapety"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Tapety</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/oswietlenie-lampy-5318?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Lampy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Lampy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/narzedzia-myjki-cisnieniowe-147652?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Myjki ciśnieniowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Myjki ciśnieniowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/przybory-kuchenne-garnki-i-patelnie-15978?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Garnki i patelnie"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Garnki i patelnie</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/wyposazenie-posciel-i-koce-9017?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Pościele i koce"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Pościele i koce</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/kabiny-brodziki-i-akcesoria-kabiny-253705?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Kabiny prysznicowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Kabiny prysznicowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/ogrzewanie-grzejniki-111868?ref=household.health-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Grzejniki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Grzejniki</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/dom-i-ogrod#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Dom i ogród" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="dom-i-ogrod"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.household.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-household-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-8c4fac1e" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_household/330x400_layer","tagId":"div-gpt-ad-8c4fac1e","format":"banner","targeting":{},"fallback":{"imageAlt":"Kawy","imageUrl":"https://assets.allegrostatic.com/opbox/allegro.pl/header/Layer%20household/household_layer_small.png","linkUrl":"https://allegro.pl/kawy-74030?order=qd"},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Supermarket"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/supermarket"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Supermarket</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/dla-psow-karmy-90060?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Karma dla psa"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Karma dla psa</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/dla-psow-klatki-i-kojce-90068?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Kojce dla psów"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Kojce dla psów</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/dla-kotow-karmy-90039?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Karma dla kota"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Karma dla kota</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/dla-kotow-zwirki-90051?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Żwirek dla kota"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Żwirek dla kota</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/dla-kotow-kuwety-90052?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Kuwety dla kotów"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Kuwety dla kotów</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zwierzeta-akwarystyka-1118?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Akwarystyka"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Akwarystyka</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/utrzymanie-czystosci-mopy-253348?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Mopy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Mopy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/utrzymanie-czystosci-kosze-na-smieci-253345?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Kosze na śmieci"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Kosze na śmieci</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/utrzymanie-czystosci-suszarki-do-prania-253369?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Suszarki do prania"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Suszarki do prania</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/utrzymanie-czystosci-preparaty-do-zmywarek-253356?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Tabletki do zmywarek"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Tabletki do zmywarek</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/delikatesy?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Delikatesy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Delikatesy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/kawy-74030?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Kawy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Kawy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/herbaty-74038?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Herbaty"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Herbaty</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/yerba-mate-125772?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Yerba mate"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Yerba mate</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/dekoracje-cukiernicze-dodatki-spozywcze-dekoracje-cukiernicze-111075?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Dekoracje cukiernicze"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Dekoracje cukiernicze</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zdrowa-zywnosc-74062?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zdrowa żywność"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zdrowa żywność</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zdrowa-zywnosc-74062?order=m&amp;cechy=Produkt%20ekologiczny?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Żywność ekologiczna"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Żywność ekologiczna</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/bakalie-i-konfitury-bakalie-112641?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Bakalie"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Bakalie</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/cukier-ksylitol-111090?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Ksylitol"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Ksylitol</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/oliwy-i-oleje-sosy-oleje-112625?ref=supermarket-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Oleje"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Oleje</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/supermarket#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Supermarket" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="supermarket"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.supermarket.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-supermarket-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-1a2a7973" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_supermarket/330x400_layer","tagId":"div-gpt-ad-1a2a7973","format":"banner","targeting":{},"fallback":{},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Dziecko"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/dziecko"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Dziecko</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/akcesoria-dla-mamy-i-dziecka-82595?ref=baby-layer-main&amp;order=m"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Dla mamy i dziecka"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Dla mamy i dziecka</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/artykuly-szkolne-50673?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Artykuły szkolne"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Artykuły szkolne</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/foteliki-samochodowe-82594?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Foteliki samochodowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Foteliki samochodowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/karmienie-dziecka-99333?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Karmienie dziecka"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Karmienie dziecka</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/obuwie-25952?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Obuwie"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Obuwie</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/odziez-11764?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Odzież"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Odzież</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/pokoj-dzieciecy-17272?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Pokój dziecięcy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Pokój dziecięcy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/rowery-i-pojazdy-86386?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Rowery i pojazdy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Rowery i pojazdy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/wozki-82593?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Wózki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Wózki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zabawki-11818?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zabawki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zabawki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zabawki-ogrodowe-86273?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zabawki ogrodowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zabawki ogrodowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zdrowie-i-higiena-17285?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zdrowie i higiena"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zdrowie i higiena</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zabawki-puzzle-11840?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Puzzle"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Puzzle</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zabawki-edukacyjne-11821?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zabawki edukacyjne"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zabawki edukacyjne</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zabawki-klocki-11823?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Klocki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Klocki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zabawki-lalki-i-akcesoria-11825?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Lalki i akcesoria"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Lalki i akcesoria</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zabawki-gry-123942?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Gry dla dzieci"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Gry dla dzieci</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zdrowie-i-higiena-kosmetyki-17294?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Kosmetyki dla dzieci"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Kosmetyki dla dzieci</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/pokoj-dzieciecy-meble-17273?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Meble dla dzieci"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Meble dla dzieci</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/rowery-i-pojazdy-hulajnogi-86394?ref=baby-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Hulajnogi"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Hulajnogi</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/dziecko#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Dziecko" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="dziecko"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.baby.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-baby-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-38f60b2d" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_baby/330x400_layer","tagId":"div-gpt-ad-38f60b2d","format":"banner","targeting":{},"fallback":{"imageAlt":"Zabawki plastyczne","imageUrl":"https://assets.allegrostatic.com/opbox/allegro.pl/header/Layer%20baby/baby_layer_small.png","linkUrl":"https://allegro.pl/zabawki-plastyczne-11819?order=qd&buyNew=1&offerTypeBuyNow=1"},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Uroda i zdrowie"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/uroda-i-zdrowie"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Uroda i zdrowie</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/uroda"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Uroda"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Uroda</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/makijaz-45657"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Makijaż"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Makijaż</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/twarz-podklady-45668"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Podkłady"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Podkłady</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/oczy-tusze-do-rzes-45666"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Tusze do rzęs"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Tusze do rzęs</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/manicure-i-pedicure-45658"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Manicure i pedicure"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Manicure i pedicure</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/manicure-i-pedicure-lakiery-hybrydowe-126042"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Lakiery hybrydowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Lakiery hybrydowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/urzadzenia-lampy-uv-i-led-45698"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Lampy UV i LED"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Lampy UV i LED</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/perfumy-i-wody-135"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Perfumy i wody"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Perfumy i wody</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/perfumy-i-wody-zapachy-dla-kobiet-17748"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zapachy dla kobiet"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zapachy dla kobiet</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/perfumy-i-wody-zapachy-dla-mezczyzn-17749"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zapachy dla mężczyzn"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zapachy dla mężczyzn</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/pielegnacja-1430"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Pielęgnacja"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Pielęgnacja</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/pielegnacja-wlosy-1436"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Włosy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Włosy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/pielegnacja-golenie-i-depilacja-1431"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Golenie i depilacja"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Golenie i depilacja</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zdrowie"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Zdrowie"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Zdrowie</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/korekcja-wzroku-soczewki-kontaktowe-122424"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Soczewki kontaktowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Soczewki kontaktowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/urzadzenia-inhalatory-i-akcesoria-122585"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Inhalatory"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Inhalatory</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/urzadzenia-cisnieniomierze-i-akcesoria-122583"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Ciśnieniomierze"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Ciśnieniomierze</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/urzadzenia-termometry-122588"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Termometry"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Termometry</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/higiena-jamy-ustnej-257760"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Higiena jamy ustnej"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Higiena jamy ustnej</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/zdrowie-medycyna-suplementy-diety-122564"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Suplementy diety"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Suplementy diety</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/uroda-i-zdrowie#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Uroda i zdrowie" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="uroda-i-zdrowie"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.beauty.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-beauty-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-267e940f" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_health/330x400_layer","tagId":"div-gpt-ad-267e940f","format":"banner","targeting":{},"fallback":{"imageAlt":"Wszystko możesz zamienić w prezent","imageUrl":"https://assets.allegrostatic.com/opbox/allegro.pl/homepage/Main%20Page/1AzDex0ZnjrIiSNzBKtwEB-w330-h400.jpg","linkUrl":"https://allegro.pl/dzial/uroda-i-zdrowie"},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Kultura i rozrywka"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/kultura-i-rozrywka"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Kultura i rozrywka</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/bilety?ref=culture.entertainment-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Bilety"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Bilety</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/filmy?ref=culture.entertainment-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Filmy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Filmy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/gry?ref=culture.entertainment-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Gry"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Gry</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/instrumenty?ref=culture.entertainment-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Instrumenty"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Instrumenty</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/ksiazki-i-komiksy?ref=culture.entertainment-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Książki i Komiksy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Książki i Komiksy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/podreczniki-do-szkol-podst-i-srednich-66820?ref=culture.entertainment-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Podręczniki szkolne"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Podręczniki szkolne</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/muzyka?ref=culture.entertainment-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Muzyka"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Muzyka</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/plyty-kompaktowe-dla-dzieci-5608?ref=culture.entertainment-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Muzyka dla dzieci"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Muzyka dla dzieci</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/ebooki-5893?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Ebooki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Ebooki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/audiobooki-cd-66813?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Audiobooki na CD"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Audiobooki na CD</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/komputerowe-pc-45713?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Gry komputerowe PC"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Gry komputerowe PC</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/gry-na-konsole-82326?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Gry na konsole"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Gry na konsole</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/gry-na-konsole-microsoft-xbox-one-147123?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Gry na Xbox One"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Gry na Xbox One</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/towarzyskie-planszowe-6051?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Gry planszowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Gry planszowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/plyty-kompaktowe-rock-5602?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Rock"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Rock</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/plyty-kompaktowe-pop-5603?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Pop"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Pop</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/plyty-winylowe-279?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Płyty winylowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Płyty winylowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/plyty-dvd-100075?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Filmy na DVD"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Filmy na DVD</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/plyty-blu-ray-89054?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Filmy na Blu-ray"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Filmy na Blu-ray</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/poradniki-i-albumy-79193?ref=culture.entertainment-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Poradniki i albumy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Poradniki i albumy</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/kultura-i-rozrywka#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Kultura i rozrywka" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="kultura-i-rozrywka"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.culture.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-culture-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-2ac4bd7c" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_culture/330x400_layer","tagId":"div-gpt-ad-2ac4bd7c","format":"banner","targeting":{},"fallback":{"imageAlt":"Gitary i akcesoria elektryczne","imageUrl":"https://assets.allegrostatic.com/opbox/allegro.pl/header/Layer%20culture/WM-3208_330x400_gitarra.png","linkUrl":"https://allegro.pl/gitary-i-akcesoria-elektryczne-122675"},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Sport i wypoczynek"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/sport-i-wypoczynek"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Sport i wypoczynek</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/erotyka?ref=sports.leisure-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Erotyka"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Erotyka</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/sport-i-turystyka?ref=sports.leisure-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Sport i Turystyka"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Sport i Turystyka</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/wakacje?ref=sports.leisure-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Wakacje"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Wakacje</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/sporty-druzynowe-pilka-nozna-13372?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Piłka nożna"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Piłka nożna</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/rowery-i-akcesoria-16414?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Rowery i akcesoria"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Rowery i akcesoria</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/silownia-i-fitness-suplementy-i-odzywki-19655?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Suplementy i odżywki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Suplementy i odżywki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/silownia-i-fitness-silownia-110145?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Siłownia"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Siłownia</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/silownia-i-fitness-fitness-110132?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Fitness"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Fitness</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/turystyka-3922?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Turystyka"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Turystyka</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/bieganie-obuwie-147264?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Buty do biegania"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Buty do biegania</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/akcesoria-turystyczne-latarki-102872?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Latarki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Latarki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/turystyka-walizki-102861?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Walizki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Walizki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/skating-slackline-wrotki-148320?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Wrotki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Wrotki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/lyzwiarstwo-lyzwy-14075?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Łyżwy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Łyżwy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/akcesoria-turystyczne-kubki-termiczne-102870?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Kubki termiczne"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Kubki termiczne</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/sporty-zimowe-deski-snowboardowe-256741?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Deski snowboardowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Deski snowboardowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/skating-slackline-deskorolki-148303?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Deskorolki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Deskorolki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/koszykowka-obuwie-13380?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Buty do koszykówki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Buty do koszykówki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/militaria-noze-maczety-253949?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Noże i scyzoryki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Noże i scyzoryki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/militaria-asg-253882?ref=sports.leisure-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="ASG"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">ASG</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/sport-i-wypoczynek#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Sport i wypoczynek" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="sport-i-wypoczynek"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.sports.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-sports-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-b34b5ad3" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_sports/330x400_layer","tagId":"div-gpt-ad-b34b5ad3","format":"banner","targeting":{},"fallback":{"imageAlt":"Jogging bieganie obuwie","imageUrl":"https://assets.allegrostatic.com/opbox/allegro.pl/header/Layer%20sports/sports_layer_small.png","linkUrl":"https://allegro.pl/jogging-bieganie-obuwie-13448?order=qd&buyNew=1&offerTypeBuyNow=1"},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Motoryzacja"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/motoryzacja"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Motoryzacja</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/czesci-samochodowe-620?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Części samochodowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Części samochodowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/opony-samochodowe-zimowe-99203?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Opony zimowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Opony zimowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/opony-samochodowe-caloroczne-99204?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Opony całoroczne"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Opony całoroczne</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/opony-i-felgi-felgi-i-kola-samochodowe-257312?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Felgi i koła"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Felgi i koła</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/akcesoria-samochodowe-253498?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Akcesoria samochodowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Akcesoria samochodowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/narzedzia-i-sprzet-warsztatowy-18554?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Narzędzia i sprzęt warsztatowy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Narzędzia i sprzęt warsztatowy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/chemia-18903?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Chemia"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Chemia</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/czesci-i-akcesoria-motocyklowe-156?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Części motocyklowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Części motocyklowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/czesci-i-akcesoria-motocyklowe-odziez-159?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Odzież motocyklowa"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Odzież motocyklowa</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/czesci-do-maszyn-99022?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Części do maszyn"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Części do maszyn</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/czesci-samochodowe-czesci-karoserii-4094?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Części karoserii"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Części karoserii</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/elektronika-samochodowa-alkomaty-257394?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Alkomaty"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Alkomaty</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/elektronika-samochodowa-kamery-samochodowe-257398?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Kamery samochodowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Kamery samochodowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/akcesoria-samochodowe-dywaniki-253563?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Dywaniki"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Dywaniki</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/akcesoria-samochodowe-pokrowce-253588?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Pokrowce"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Pokrowce</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/akcesoria-samochodowe-bagazniki-253538?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Bagażniki i uchwyty"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Bagażniki i uchwyty</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/chemia-oleje-silnikowe-253181?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Oleje silnikowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Oleje silnikowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/samochody-149?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Samochody"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Samochody</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/motocykle-i-quady-5557?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Motocykle i quady"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Motocykle i quady</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/maszyny-252942?ref=automotive-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Maszyny"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Maszyny</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/motoryzacja#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Motoryzacja" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="motoryzacja"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.automotive.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-automotive-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-7d1711db" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_automotive/330x400_layer","tagId":"div-gpt-ad-7d1711db","format":"banner","targeting":{},"fallback":{"imageAlt":"Opony samochodowe","imageUrl":"https://assets.allegrostatic.com/opbox/allegro.pl/header/Layer%20automotive/automotive_layer_small.png","linkUrl":"https://allegro.pl/opony-opony-samochodowe-99194?buyNew=1&offerTypeBuyNow=1"},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Ogłoszenia"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/ogloszenia"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Ogłoszenia</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/samochody-osobowe-4029?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Samochody osobowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Samochody osobowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/osobowe-audi-4031?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Audi"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Audi</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/osobowe-bmw-4032?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="BMW"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">BMW</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/osobowe-mercedes-benz-4041?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Mercedes"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Mercedes</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/osobowe-ford-4036?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Ford"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Ford</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/osobowe-opel-4044?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Opel"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Opel</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/osobowe-fiat-4035?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Fiat"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Fiat</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/osobowe-toyota-4054?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Toyota"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Toyota</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/osobowe-volvo-4056?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Volvo"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Volvo</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/samochody-dostawcze-do-3-5-t-257753?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Dostawcze (do 3,5t)"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Dostawcze (do 3,5t)</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/motocykle-i-quady-5557?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Motocykle"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Motocykle</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/motocykle-i-quady-quady-atv-257567?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Quady"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Quady</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/samochody-ciezarowe-pow-3-5-t-589?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Samochody ciężarowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Samochody ciężarowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/samochody-zabytkowe-594?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Samochody zabytkowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Samochody zabytkowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/samochody-autobusy-14685?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Autobusy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Autobusy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/maszyny-maszyny-budowlane-252943?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Maszyny budowlane"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Maszyny budowlane</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/maszyny-maszyny-rolnicze-252944?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Maszyny rolnicze"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Maszyny rolnicze</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/maszyny-wozki-widlowe-252945?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Wózki widłowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Wózki widłowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/przyczepy-naczepy-naczepy-18529?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Przyczepy, naczepy"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Przyczepy, naczepy</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/inne-pojazdy-i-lodzie-4079?ref=classifieds-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Inne pojazdy i łodzie"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Inne pojazdy i łodzie</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/ogloszenia#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Ogłoszenia" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="ogloszenia"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.classifieds.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-classifieds-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-a77e6a35" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_classifieds/330x400_layer","tagId":"div-gpt-ad-a77e6a35","format":"banner","targeting":{},"fallback":{},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Kolekcje i sztuka"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/kolekcje-i-sztuka"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Kolekcje i sztuka</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/antyki-i-sztuka?ref=collections.art-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Antyki i Sztuka"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Antyki i Sztuka</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/kolekcje?ref=collections.art-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Kolekcje"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Kolekcje</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/rekodzielo?ref=collections.art-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Rękodzieło"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Rękodzieło</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/akcesoria-plastyczne-27940?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Akcesoria plastyczne"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Akcesoria plastyczne</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/antykwariat-26098?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Antykwariat"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Antykwariat</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/decoupage-76685?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Decoupage"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Decoupage</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/malarstwo-26271?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Malarstwo"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Malarstwo</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/militaria-691?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Militaria"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Militaria</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/modelarstwo-1061?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Modelarstwo"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Modelarstwo</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/numizmatyka-85?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Numizmatyka"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Numizmatyka</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/malarstwo-26271?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Malarstwo"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Malarstwo</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/trafika-47937?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Trafika"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Trafika</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/scrapbooking-76698?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Scrapbooking"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Scrapbooking</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/przedmioty-recznie-wykonane-76741?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Przedmioty handmade"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Przedmioty handmade</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/filatelistyka-76?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Filatelistyka"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Filatelistyka</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/pamiatki-prl-u-47936?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Pamiątki PRL-u"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Pamiątki PRL-u</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/porcelana-rosenthal-26171?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Porcelana Rosenthal"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Porcelana Rosenthal</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/sztuka-wspolczesna-26281?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Sztuka współczesna"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Sztuka współczesna</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/filcowanie-76693?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Filcowanie"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Filcowanie</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/szycie-i-dziewiarstwo-tkaniny-76725?ref=collections.art-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Tkaniny"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Tkaniny</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/kolekcje-i-sztuka#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Kolekcje i sztuka" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="kolekcje-i-sztuka"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.collections.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-collections-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-5d676296" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_art/330x400_layer","tagId":"div-gpt-ad-5d676296","format":"banner","targeting":{},"fallback":{"imageAlt":"Fotele","imageUrl":"https://assets.allegrostatic.com/opbox/allegro.pl/header/Layer%20collections/WM-3208_330x400_mebel.png","linkUrl":"https://allegro.pl/meble-fotele-26231?order=td"},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
												<div
													class="fee54_3U4XY [object Object]"
													data-layer-id="Firma"
													data-analytics-proxied>
													<div class="fee54_1Mrro">
														<h5 class="fee54_nTAMw fee54_3Tjt-">kategorie w dziale 
															<a href="https://allegro.pl/dzial/firma-i-uslugi"
																class="fee54_LPPcP fee54_3Tjt-"
																data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_category">Firma</a>
														</h5>
														<ul class="fee54_3NZWu fee54_3lLbn fee54_3OnM4">
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/biuro-i-reklama?ref=company.services-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Biuro i Reklama"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Biuro i Reklama</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/przemysl?ref=company.services-layer-main"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Przemysł"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Przemysł</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/akcesoria-biurowe-64478?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Akcesoria biurowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Akcesoria biurowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/artykuly-pismiennicze-64479?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Artykuły piśmiennicze"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Artykuły piśmiennicze</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/maszyny-i-urzadzenia-121334?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Maszyny i urządzenia"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Maszyny i urządzenia</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/meble-biurowe-64480?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Meble biurowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Meble biurowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/odziez-robocza-i-bhp-110233?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Odzież robocza i BHP"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Odzież robocza i BHP</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/pakowanie-i-wysylka-64482?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Pakowanie i wysyłka"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Pakowanie i wysyłka</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/reklama-64485?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Reklama"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Reklama</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/maszyny-i-urzadzenia-automatyka-przemyslowa-121338?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Automatyka przemysłowa"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Automatyka przemysłowa</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/odziez-robocza-i-bhp-110233?order=m?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Odzież robocza i BHP"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Odzież robocza i BHP</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/maszyny-i-urzadzenia-poligraficzne-121337?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Maszyny Poligraficzne"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Maszyny Poligraficzne</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/maszyny-i-urzadzenia-gastronomiczne-121336?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Maszyny Gastronomiczne"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Maszyny Gastronomiczne</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/materialy-i-akcesoria-przemysl-drzewny-121424?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Przemysł drzewny"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Przemysł drzewny</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/materialy-i-akcesoria-przemysl-energetyczny-121433?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Przemysł energetyczny"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Przemysł energetyczny</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/materialy-i-akcesoria-przyrzady-pomiarowe-121432?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Przyrządy pomiarowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Przyrządy pomiarowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/wyposazenie-pomieszczen-magazyny-i-placowki-handlowe-121532?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Magazyny i placówki handlowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Magazyny i placówki handlowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/meble-biurowe-sejfy-i-kasy-pancerne-64523?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Sejfy i kasy pancerne"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Sejfy i kasy pancerne</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/pakowanie-i-wysylka-pudelka-i-kartony-64540?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Opakowania kartonowe"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Opakowania kartonowe</a>
															</li>
															<li class="fee54_1NJil fee54_14dcF fee54_3GPbu">
																<a href="https://allegro.pl/kategoria/materialy-i-akcesoria-tworzywa-sztuczne-121436?ref=company.services-layer-popular"
																	class="fee54_LPPcP fee54_1MoEt"
																	title="Tworzywa sztuczne"
																	data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_subcategory">Tworzywa sztuczne</a>
															</li>
														</ul>
														<div class="fee54_3cW8w"></div>
														<a href="https://allegro.pl/dzial/firma-i-uslugi#to-category-map"
															class=" fee54_2NxiC fee54_1H33r"
															data-analytics-clickable data-analytics-click-opbox-custom-placement="categories_layers_all_categories">wszystkie kategorie</a>
													</div>
													<div class="fee54_3Lznh ">
														<noscript>
															<div data-box-name="Firma" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																<a name="firma"></a>
																<div class="grid">
																	<div class="grid__col grid__col--12">
																		<div data-box-name="header.layer.company.dfp" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
																			<a name="header-layer-company-dfp"></a>
																			<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
																				<div id="div-gpt-ad-e8d3b59e" class="div-gpt-ad dfp-card dfp-card--no-space">
																					<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/cat_services/330x400_layer","tagId":"div-gpt-ad-e8d3b59e","format":"banner","targeting":{},"fallback":{"imageAlt":"Pieczątki i akcesoria","imageUrl":"https://assets.allegrostatic.com/opbox/allegro.pl/header/Layer%20company/WM-3208_330x400_pieczatki.png","linkUrl":"https://allegro.pl/akcesoria-biurowe-pieczatki-i-akcesoria-64492?order=td&offerTypeBuyNow=1"},"fallbackOnBlockOnly":false,"size":[[330,400]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[992,0],"sizes":[[330,400]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
																				</div>
																			</div>
																			<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
																			<link rel="preconnect" href="http://tpc.googlesyndication.com/">
																			<link rel="preconnect" href="http://www.googletagservices.com/">
																		</div>
																	</div>
																</div>
															</div>
														</noscript>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fee54_hCEVX fee54_2Jkdp fee54_16wEg fee54_273li fee54_33Hg3">
									<div class="fee54_1Ns3d">
										<div class="fee54_2o1kg fee54_3YT6m fee54_3u41m"></div>
										<div class="fee54_3m5js">
											<div class="fee54_3znqn">
												<a href="https://allegro.pl/strefaokazji"
													class="fee54_LPPcP fee54_IFG6k"
													data-analytics-clickable data-analytics-click-opbox-custom-placement="navigation_link">Okazje do -70%</a>
												<a href="https://allegro.pl/inspiracje"
													class="fee54_LPPcP fee54_IFG6k"
													data-analytics-clickable data-analytics-click-opbox-custom-placement="navigation_link">Inspiracje</a>
												<a href="https://allegro.pl/artykuly"
													class="fee54_LPPcP fee54_IFG6k"
													data-analytics-clickable data-analytics-click-opbox-custom-placement="navigation_link">Poradniki</a>
											</div>
											<div href="#" class="fee54_i44Jx">
												<div data-box-name="allegro.advertisment.header" data-prototype-id="allegro.advertisement.slot" data-prototype-version="0.4" data-skin-class-name="" data-implementation-version="1.3.3" data-analytics-enabled data-analytics-category="allegro.advertisement.slot" data-analytics-tags="" data-analytics-groups="%5B%22allegro.header%22%5D">
													<a name="allegro-advertisment-header"></a>
													<div class="div-gpt-cnt div-gpt-cnt--banner lazyload">
														<div id="div-gpt-ad-9ed72828" class="div-gpt-ad dfp-card dfp-card--no-space">
															<script type="application/json">{"unitPath":"/21612525419/Allegro.pl/header/256_48_header_banner","tagId":"div-gpt-ad-9ed72828","format":"banner","targeting":{},"fallback":{},"fallbackOnBlockOnly":false,"size":[[256,48]],"sizeMapping":[{"viewport":[0,0],"sizes":[]},{"viewport":[808,0],"sizes":[[256,48]]}],"pageCategory":[],"pageFilters":[["navigationLinksDisabled","true"],["extraSearchFilterName","Inne%20marki"],["extraSearchFilter","category-170"]],"isLazy":true,"isScalable":false}</script>
														</div>
													</div>
													<link rel="preconnect" href="http://securepubads.g.doubleclick.net/">
													<link rel="preconnect" href="http://tpc.googlesyndication.com/">
													<link rel="preconnect" href="http://www.googletagservices.com/">
												</div>
											</div>
										</div>
										<div class="fee54_2o1kg fee54_Dxw8g fee54_3u41m"></div>
									</div>
								</div>
							</div>
						</div>
					</nav>
					<script>
						if (window.performance && typeof window.performance.mark === 'function' && typeof requestAnimationFrame === 'function') {
						    requestAnimationFrame(function() {
						        window.performance.mark('FirstContentfulPaint');
						    });
						}
					</script>
				</div>
				<script async="async" src="https://www.googletagservices.com/tag/js/gpt.js"></script>
				<script async="async" src="https://assets.allegrostatic.com/opbox-search/2.12.3/opbox-search.js"></script>
				<script src="https://assets.allegrostatic.com/opbox-cart-status/1.0.0/scripts/main.js"></script>
				<script>!function(e){var t={};function i(o){if(t[o])return t[o].exports;var n=t[o]={i:o,l:!1,exports:{}};return e[o].call(n.exports,n,n.exports,i),n.l=!0,n.exports}i.m=e,i.c=t,i.d=function(e,t,o){i.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:o})},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="",i(i.s=1)}([function(e,t,i){"use strict";e.exports={cookiePolicy:{id:"cookie-policy-banner",cookieName:"policyBannerHide",cookieExpireDate:365,hideBeforeNextVisit:!0,link:"https://allegro.pl/regulamin/pl/polityka-plikow-cookies",linkText:"plików cookies",message:"Strona korzysta z {{link}} w celu realizacji usług. Jeżeli nie zmienisz ustawień, będą one zapisywane w pamięci Twojego urządzenia.",allowOverwriteMessage:!1},installments:{id:"installments-banner",cookieName:"installmentsBannerHidden",cookieExpireDate:7,url:"https://dlakupujacych.allegro.pl/zaufane-platnosci/raty-0-procent?bi_s=allegro_so&bi_m=Top_Band_ALL&bi_c=raty",message:"Teraz prawdziwe <strong>RATY&nbsp;0%</strong> na Allegro",allowOverwriteMessage:!0},loyaltyProgram:{id:"loyalty-program-banner",cookieName:"loyaltyProgramBannerHidden",cookieExpireDate:7,url:"https://monety.allegro.pl/?bi_s=allegro_so&bi_m=Top_Band_ALL&bi_c=monetyzacja",iconLinkMessage:"Płać mniej! Zbieraj <strong>Monety</strong> i wymieniaj na kupony",detailsLinkMessage:"sprawdź szczegóły",allowOverwriteMessage:!0},technicalBreak:{id:"technical-break-banner",allowOverwriteMessage:!0}}},function(e,t,i){"use strict";var o=a(i(2)),n=a(i(0));function a(e){return e&&e.__esModule?e:{default:e}}Object.keys(n.default).forEach(function(e){var t=n.default[e],i=t.id,a=t.cookieName,r=t.hideBeforeNextVisit,s=t.cookieExpireDate,l=document.querySelector(".opbox-bar."+i);l&&new o.default(a,{baseElement:l,hideBeforeNextVisit:r,cookieExpireDate:s}).render()})},function(e,t,i){"use strict";var o,n=function(){function e(e,t){for(var i=0;i<t.length;i++){var o=t[i];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,i,o){return i&&e(t.prototype,i),o&&e(t,o),t}}(),a=i(3),r=(o=a)&&o.__esModule?o:{default:o};var s=function(){function e(t,i){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.cookieName=t,this.baseElement=i.baseElement,this.hideBeforeNextVisit=i.hideBeforeNextVisit,this.closeElement=this.baseElement.querySelector(".close-bar"),this.cookieExpireDate=i.cookieExpireDate||365,this.cookieDomain=e.getDomainForCookie(this.baseElement.getAttribute("data-service-domain"))}return n(e,[{key:"setHiddenBarCookie",value:function(){r.default.set(this.cookieName,"1",{expires:this.cookieExpireDate,domain:this.cookieDomain})}},{key:"attachListeners",value:function(){var e=this;this.closeElement&&this.closeElement.addEventListener("click",function(t){t.preventDefault(),e.baseElement.classList.add("disabled"),e.setHiddenBarCookie(),e.sendEvent(window,"resize")},!1)}},{key:"sendEvent",value:function(e,t){var i=document.createEvent("CustomEvent");i.initCustomEvent(t,!1,!1,{}),e.dispatchEvent(i)}},{key:"render",value:function(){r.default.get(this.cookieName)||(this.attachListeners(),this.hideBeforeNextVisit&&this.setHiddenBarCookie())}}],[{key:"getDomainForCookie",value:function(e){return"."+e}}]),e}();e.exports=s},function(e,t){t.defaults={},t.set=function(e,i,o){var n=o||{},a=t.defaults,r=n.expires||a.expires,s=n.domain||a.domain,l=void 0!==n.path?n.path:void 0!==a.path?a.path:"/",c=void 0!==n.secure?n.secure:a.secure,u=void 0!==n.httponly?n.httponly:a.httponly,d=void 0!==n.samesite?n.samesite:a.samesite,p=r?new Date("number"==typeof r?(new Date).getTime()+864e5*r:r):0;document.cookie=e.replace(/[^+#$&^`|]/g,encodeURIComponent).replace("(","%28").replace(")","%29")+"="+i.replace(/[^+#$&/:<-\[\]-}]/g,encodeURIComponent)+(p&&p.getTime()>=0?";expires="+p.toUTCString():"")+(s?";domain="+s:"")+(l?";path="+l:"")+(c?";secure":"")+(u?";httponly":"")+(d?";samesite="+d:"")},t.get=function(e){for(var t=document.cookie.split(";");t.length;){var i=t.pop(),o=i.indexOf("=");if(o=o<0?i.length:o,decodeURIComponent(i.slice(0,o).replace(/^\s+/,""))===e)return decodeURIComponent(i.slice(o+1))}return null},t.erase=function(e,i){t.set(e,"",{expires:-1,domain:i&&i.domain,path:i&&i.path,secure:0,httponly:0})},t.all=function(){for(var e={},t=document.cookie.split(";");t.length;){var i=t.pop(),o=i.indexOf("=");o=o<0?i.length:o,e[decodeURIComponent(i.slice(0,o).replace(/^\s+/,""))]=decodeURIComponent(i.slice(o+1))}return e}}]);</script>
				<script>(function () {
					window.opboxComponents = window.opboxComponents || [];
					window.opboxComponents.push({
					  slug: 'allegro-metrumheader',
					  props: JSON.parse('{"$box.slug":"allegro-metrumheader","navigationLinks":[{"children":[],"name":"Okazje do -70%","icon":"","separator":false,"url":"/strefaokazji","openInNewWindow":false},{"children":[],"name":"Inspiracje","icon":"","url":"/inspiracje","openInNewWindow":false},{"children":[],"name":"Poradniki","icon":"","separator":false,"url":"/artykuly","openInNewWindow":false}],"showNotificationBadge":true,"accountLinks":[{"children":[],"name":"wystaw przedmiot","icon":"","separator":true,"url":"http://allegro.pl/offer/","openInNewWindow":false},{"children":[],"name":"moje konto","icon":"","url":"/moje-konto","openInNewWindow":false},{"children":[],"name":"kupione","icon":"","url":"http://allegro.pl/dashboard/myorders/","openInNewWindow":false},{"children":[],"name":"obserwowane","icon":"","url":"/favourites/offers","openInNewWindow":false},{"children":[],"name":"licytujesz","icon":"","url":"http://allegro.pl/myaccount/bid.php","openInNewWindow":false},{"children":[],"name":"sprzedajesz","icon":"","url":"http://allegro.pl/myaccount/sell.php","openInNewWindow":false},{"children":[],"name":"sprzedane","icon":"","url":"http://allegro.pl/myaccount/sold.php","openInNewWindow":false},{"children":[],"name":"wystaw ocenę","icon":"","url":"/user-rating-landing-page/index","openInNewWindow":false},{"children":[],"name":"moje oceny","icon":"","url":"/seller-rating-dashboard/index","openInNewWindow":false},{"children":[],"name":"centrum zniżek","icon":"","notificationTag":"bundles","url":"http://allegro.pl/myaccount/bundles/Index.php","openInNewWindow":false},{"children":[],"name":"monety i kupony","icon":"","url":"http://allegro.pl/myaccount/Coins.php","openInNewWindow":false}],"isStickyDisabled":true,"simple":false,"layout":"default","navigationLayout":"disable-nav-links","$prototype":{"name":"allegro.metrumHeader","version":{"major":1,"minor":6}},"$variant":null,"$box.name":"allegro.metrumHeader","$box.lazy":false,"$page.locale":"pl_PL","$page.canonicalUrl":"http://allegro.pl/headerService/header","$page.renderDateTime":"2018-03-13T00:53:13.368Z","$page.edgeHost":"https://edge.allegro.pl/","$page.env":"prod","$page.pageUrl":{"protocol":"smartfon-cavion-base-5-0-lte-8gb-1gb-5-i7224715300.html","host":"http://allegro.pl/allegro.pl","href":"http://allegro.pl/headerService/header?navigationLinksDisabled=true&extraSearchFilterName=Inne+marki&extraSearchFilter=category-170"},"$page.serviceBaseDomain":"http://allegro.pl/allegro.pl","$page.isEsi":true,"$page.isDirect":true,"$page.traceId":"0902787c366b2db8"}'),
					  prototypeName: 'allegro.metrumHeader',
					});
					})();
				</script>
				<script src="https://assets.allegrostatic.com/opbox-metrum-header/index__89865408.js"></script>
				<script>!function(e){"use strict";!function(o,r){if("object"==typeof exports&&"object"==typeof module)module.exports=r();else if("function"==typeof e&&e.amd)e([],r);else{var t=r();for(var n in t)("object"==typeof exports?exports:o)[n]=t[n]}}("undefined"!=typeof self?self:this,function(){return function(e){function o(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,o),n.l=!0,n.exports}var r={};return o.m=e,o.c=r,o.d=function(e,r,t){o.o(e,r)||Object.defineProperty(e,r,{configurable:!1,enumerable:!0,get:t})},o.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(r,"a",r),r},o.o=function(e,o){return Object.prototype.hasOwnProperty.call(e,o)},o.p="",o(o.s=32)}({0:function(e,o,r){Object.defineProperty(o,"__esModule",{value:!0}),o.cx=o.createClassNameResolver=void 0;var t=r(3),n=function(e){return e&&e.__esModule?e:{default:e}}(t),a=o.createClassNameResolver=function(e){return function(){for(var o=arguments.length,r=Array(o),t=0;t<o;t++)r[t]=arguments[t];return r.map(function(o){return e[o]||o}).join(" ")}};o.cx=a(n.default)},1:function(e,o,r){function t(e,o){if(!(e instanceof o))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(o,"__esModule",{value:!0});var n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},a=function(){function e(e,o){for(var r=0;r<o.length;r++){var t=o[r];t.enumerable=t.enumerable||!1,t.configurable=!0,"value"in t&&(t.writable=!0),Object.defineProperty(e,t.key,t)}}return function(o,r,t){return r&&e(o.prototype,r),t&&e(o,t),o}}();Array.from||(Array.from=r(8));o.DOMUtils=function(){function e(o){t(this,e),this.document=o}return a(e,[{key:"createElement",value:function(e){return this.document.createElement(e)}},{key:"querySelector",value:function(e){return this.document.querySelector(e)}},{key:"querySelectorAll",value:function(e){return Array.from(this.document.querySelectorAll(e))}},{key:"findElementsByClassName",value:function(e){return Array.from(this.document.getElementsByClassName(e))}},{key:"findElementByClassName",value:function(e){var o=this.findElementsByClassName(e);return o.length>0?o[0]:null}},{key:"addListener",value:function(e,o,r){for(var t=arguments.length,a=Array(t>3?t-3:0),u=3;u<t;u++)a[u-3]=arguments[u];if("object"===(void 0===e?"undefined":n(e))&&"addEventListener"in e)e.addEventListener(o,r);else if("string"==typeof e){var i=Array.from(this.document.querySelectorAll(e));i.length>0&&i.forEach(function(e){return e.addEventListener.apply(e,[o,r].concat(a))})}}},{key:"removeListener",value:function(e,o,r){for(var t=arguments.length,a=Array(t>3?t-3:0),u=3;u<t;u++)a[u-3]=arguments[u];if("object"===(void 0===e?"undefined":n(e))&&"addEventListener"in e)e.removeEventListener(o,r);else if("string"==typeof e){var i=Array.from(this.document.querySelectorAll(e));i.length>0&&i.forEach(function(e){return e.removeEventListener.apply(e,[o,r].concat(a))})}}}],[{key:"toClassSelector",value:function(e){return"."+e}}]),e}()},11:function(e,o,r){function t(e,o){if(!(e instanceof o))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(o,"__esModule",{value:!0}),o.Account=void 0;var n=function(){function e(e,o){for(var r=0;r<o.length;r++){var t=o[r];t.enumerable=t.enumerable||!1,t.configurable=!0,"value"in t&&(t.writable=!0),Object.defineProperty(e,t.key,t)}}return function(o,r,t){return r&&e(o.prototype,r),t&&e(o,t),o}}(),a=r(1),u=r(6),i=r(0);o.Account=function(){function e(o,r){t(this,e),this.cookies=r,this.domUtils=new a.DOMUtils(o)}return n(e,[{key:"getUserIdentity",value:function(){var e=this.cookies.get("qeppo_login2");try{return JSON.parse(e)}catch(e){return null}}},{key:"showAccountName",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},o=this.domUtils.findElementsByClassName((0,i.cx)(u.accountNameClassNameWrapper)),r=e.username;r&&o.forEach(function(e){return e.innerHTML=r})}},{key:"hideAccountLoginButtons",value:function(){this.domUtils.findElementsByClassName((0,i.cx)(u.accountLoginButtonsClassName)).forEach(function(e){return e.innerHTML=""})}},{key:"hideAccountLogoutButton",value:function(){this.domUtils.findElementsByClassName((0,i.cx)(u.accountLogoutButtonClassName)).forEach(function(e){return e.innerHTML=""})}},{key:"render",value:function(){var e=this.getUserIdentity();e?(this.showAccountName(e),this.hideAccountLoginButtons()):this.hideAccountLogoutButton()}}]),e}()},3:function(e,o){e.exports={"opbox-metrum-header-accordion":"fee54_2DDmh",opboxMetrumHeaderAccordion:"fee54_2DDmh","opbox-metrum-header-accordion--animate":"fee54_243MO",opboxMetrumHeaderAccordionAnimate:"fee54_243MO","opbox-metrum-header-accordion__content":"fee54_3uscM",opboxMetrumHeaderAccordionContent:"fee54_1976s","opbox-metrum-header-accordion__group":"fee54_2rIHW",opboxMetrumHeaderAccordionGroup:"fee54_33vjU","is-open":"fee54_3TaXR",isOpen:"fee54_3TaXR","opbox-metrum-header-accordion__header":"fee54_3R33F",opboxMetrumHeaderAccordionHeader:"fee54_3aDO6","opbox-metrum-header-accordion__panel":"fee54_3zkS7",opboxMetrumHeaderAccordionPanel:"fee54_3zkS7","opbox-metrum-header-link":"fee54_LPPcP",opboxMetrumHeaderLink:"fee54_1J5td","opbox-metrum-header-link-signal":"fee54_1clM8",opboxMetrumHeaderLinkSignal:"fee54_1clM8","opbox-metrum-header-button":"fee54_2NxiC",opboxMetrumHeaderButton:"fee54_2NxiC","is-disabled":"fee54_19bdT",isDisabled:"fee54_19bdT","opbox-metrum-header-button--secondary":"fee54_1H33r",opboxMetrumHeaderButtonSecondary:"fee54_1H33r","opbox-metrum-header-divider":"fee54_3cW8w",opboxMetrumHeaderDivider:"fee54_1rrip","opbox-metrum-header-list":"fee54_3NZWu",opboxMetrumHeaderList:"fee54_3OnM4","opbox-metrum-header-list--unstyled":"fee54_3lLbn",opboxMetrumHeaderListUnstyled:"fee54_3lLbn","opbox-metrum-header-list__item":"fee54_1NJil",opboxMetrumHeaderListItem:"fee54_3GPbu","opbox-metrum-header-list__item--link":"fee54_14dcF",opboxMetrumHeaderListItemLink:"fee54_14dcF","opbox-metrum-header-list__item--flex":"fee54_YrDJ_",opboxMetrumHeaderListItemFlex:"fee54_YrDJ_","opbox-metrum-header-list__column":"fee54_dD2Hu",opboxMetrumHeaderListColumn:"fee54_dD2Hu","opbox-metrum-header-list__column--right":"fee54_3HNSE",opboxMetrumHeaderListColumnRight:"fee54_3HNSE","opbox-metrum-header-type":"fee54_nTAMw",opboxMetrumHeaderType:"fee54_nTAMw","opbox-metrum-header-type--xsmall":"fee54_3Tjt-",opboxMetrumHeaderTypeXsmall:"fee54_3Tjt-","opbox-metrum-header-dropdown":"fee54_kE_A4",opboxMetrumHeaderDropdown:"fee54_kE_A4","opbox-metrum-header-dropdown__toggle":"fee54_2iUzi",opboxMetrumHeaderDropdownToggle:"fee54_2iUzi","opbox-metrum-header-dropdown__drop":"fee54_3RqiL",opboxMetrumHeaderDropdownDrop:"fee54_3RqiL","opbox-metrum-header-dropdown__drop--right":"fee54_2cRD9",opboxMetrumHeaderDropdownDropRight:"fee54_2cRD9","opbox-metrum-header-dropdown__drop--columns":"fee54_33phb",opboxMetrumHeaderDropdownDropColumns:"fee54_33phb","opbox-metrum-header-dropdown__col":"fee54_2Z1oc",opboxMetrumHeaderDropdownCol:"fee54_2Z1oc","opbox-metrum-header-card":"fee54_16wEg",opboxMetrumHeaderCard:"fee54_16wEg","opbox-metrum-header-card--sticky":"fee54_2olss",opboxMetrumHeaderCardSticky:"fee54_2olss","opbox-metrum-header-card--no-space":"fee54_273li",opboxMetrumHeaderCardNoSpace:"fee54_273li","opbox-metrum-header-card--no-space-top":"fee54_101dP",opboxMetrumHeaderCardNoSpaceTop:"fee54_101dP","opbox-metrum-header-card--no-space-bottom":"fee54_1_kHL",opboxMetrumHeaderCardNoSpaceBottom:"fee54_1_kHL","opbox-metrum-header-card--no-space-right":"fee54_1LO11",opboxMetrumHeaderCardNoSpaceRight:"fee54_1LO11","opbox-metrum-header--allegrode":"fee54_2h2Fg",opboxMetrumHeaderAllegrode:"fee54_2h2Fg","opbox-metrum-header--simple":"fee54_3qdRv",opboxMetrumHeaderSimple:"fee54_3qdRv","opbox-metrum-header__tall@md":"fee54_y44_L",opboxMetrumHeaderTallMd:"fee54_y44_L","opbox-metrum-header__depts":"fee54_kF7w-",opboxMetrumHeaderDepts:"fee54_kF7w-","opbox-metrum-header__categories":"fee54_3aVI1",opboxMetrumHeaderCategories:"fee54_3aVI1","opbox-metrum-header-dropdown__categories":"fee54_2Db0Z",opboxMetrumHeaderDropdownCategories:"fee54_2Db0Z","opbox-metrum-header-dropdown__account":"fee54_3eIzt",opboxMetrumHeaderDropdownAccount:"fee54_3eIzt","opbox-metrum-header__divider":"fee54_1rrip","opbox-metrum-header__category":"fee54_3U4XY",opboxMetrumHeaderCategory:"fee54_3U4XY","opbox-metrum-header-dropdown--label-mini":"fee54_JEPvv",opboxMetrumHeaderDropdownLabelMini:"fee54_JEPvv","opbox-metrum-header-dropdown--label-midi":"fee54_dIDzM",opboxMetrumHeaderDropdownLabelMidi:"fee54_dIDzM","opbox-metrum-header__dropdown-toggle@sm":"fee54_3Frg5",opboxMetrumHeaderDropdownToggleSm:"fee54_3Frg5","opbox-metrum-header__icon--my-account":"fee54_2VJ3u",opboxMetrumHeaderIconMyAccount:"fee54_2VJ3u","opbox-metrum-header__icon-toggle":"fee54_2w7sa",opboxMetrumHeaderIconToggle:"fee54_2w7sa","opbox-metrum-header__search":"fee54_ThaHT",opboxMetrumHeaderSearch:"fee54_ThaHT","opbox-metrum-header__nav":"fee54_1LzRP",opboxMetrumHeaderNav:"fee54_1LzRP","opbox-metrum-header__icon":"fee54_3NVgZ",opboxMetrumHeaderIcon:"fee54_3NVgZ","opbox-metrum-header__apron":"fee54_H7YH7",opboxMetrumHeaderApron:"fee54_H7YH7","opbox-metrum-header__accordion-line":"fee54_1fkFB",opboxMetrumHeaderAccordionLine:"fee54_1fkFB","opbox-metrum-header-wrapper--allegrode":"fee54_3NYkf",opboxMetrumHeaderWrapperAllegrode:"fee54_3NYkf","headroom--not-top":"fee54_198yM",headroomNotTop:"fee54_198yM","opbox-metrum-header-wrapper":"fee54_1xreU",opboxMetrumHeaderWrapper:"fee54_15baT","opbox-metrum-header":"fee54_CWqWO",opboxMetrumHeader:"fee54_CWqWO","opbox-metrum-header__center":"fee54_EjxZ1",opboxMetrumHeaderCenter:"fee54_EjxZ1","opbox-metrum-header__wrapper":"fee54_15baT","opbox-metrum-header__logo-wrapper":"fee54_3Bsgp",opboxMetrumHeaderLogoWrapper:"fee54_2N0im","opbox-metrum-header__link":"fee54_1J5td","opbox-metrum-header__logo":"fee54_1_FZs",opboxMetrumHeaderLogo:"fee54_1_FZs","opbox-metrum-header__sub-brand":"fee54_2-R2q",opboxMetrumHeaderSubBrand:"fee54_2-R2q","opbox-metrum-header__inline@sm":"fee54_3o8jl",opboxMetrumHeaderInlineSm:"fee54_3o8jl","opbox-metrum-header__border-bottom":"fee54_2mDvq",opboxMetrumHeaderBorderBottom:"fee54_2mDvq","opbox-metrum-header__border-bottom-none@sm":"fee54_1SADD",opboxMetrumHeaderBorderBottomNoneSm:"fee54_1SADD","opbox-metrum-header__border-right@sm":"fee54_3EtAX",opboxMetrumHeaderBorderRightSm:"fee54_3EtAX","opbox-metrum-header__border-left@sm":"fee54_2uFef",opboxMetrumHeaderBorderLeftSm:"fee54_2uFef","opbox-metrum-header__wide":"fee54_2Jkdp",opboxMetrumHeaderWide:"fee54_2Jkdp","opbox-metrum-header__overflow-hidden":"fee54_hCEVX",opboxMetrumHeaderOverflowHidden:"fee54_hCEVX","opbox-metrum-header__bar":"fee54_3m5js",opboxMetrumHeaderBar:"fee54_3m5js","opbox-metrum-header__bar--animate":"fee54_3L49X",opboxMetrumHeaderBarAnimate:"fee54_3L49X","opbox-metrum-header__links":"fee54_3znqn",opboxMetrumHeaderLinks:"fee54_3znqn","opbox-metrum-header__inline-link":"fee54_IFG6k",opboxMetrumHeaderInlineLink:"fee54_IFG6k","opbox-metrum-header__link-icon":"fee54_2790e",opboxMetrumHeaderLinkIcon:"fee54_2790e","opbox-metrum-header__notification":"fee54_3rwCT",opboxMetrumHeaderNotification:"fee54_3rwCT","opbox-metrum-header__notification--bottom-right":"fee54_3Hkbe",opboxMetrumHeaderNotificationBottomRight:"fee54_3Hkbe","opbox-metrum-header__notification--icon":"fee54_2wHfT",opboxMetrumHeaderNotificationIcon:"fee54_2wHfT","opbox-metrum-header__link-notification":"fee54_-h8c5",opboxMetrumHeaderLinkNotification:"fee54_-h8c5","opbox-metrum-header__account-name-notification":"fee54_39KUd",opboxMetrumHeaderAccountNameNotification:"fee54_39KUd","opbox-metrum-header__list-item":"fee54_3GPbu","opbox-metrum-header__link-category":"fee54_1MoEt",opboxMetrumHeaderLinkCategory:"fee54_1MoEt","opbox-metrum-header__list":"fee54_3OnM4","opbox-metrum-header__padding-left":"fee54_296TH",opboxMetrumHeaderPaddingLeft:"fee54_296TH","opbox-metrum-header__strip":"fee54_1Ns3d",opboxMetrumHeaderStrip:"fee54_1Ns3d","opbox-metrum-header__banner":"fee54_i44Jx",opboxMetrumHeaderBanner:"fee54_i44Jx","opbox-metrum-header__icon--bag":"fee54_1YC-6",opboxMetrumHeaderIconBag:"fee54_1YC-6","opbox-metrum-header__close-button":"fee54_2_lXA",opboxMetrumHeaderCloseButton:"fee54_2_lXA","opbox-metrum-header__arrow":"fee54_2o1kg",opboxMetrumHeaderArrow:"fee54_2o1kg","opbox-metrum-header__arrow--left":"fee54_3YT6m",opboxMetrumHeaderArrowLeft:"fee54_3YT6m","opbox-metrum-header__arrow--right":"fee54_Dxw8g",opboxMetrumHeaderArrowRight:"fee54_Dxw8g","is-hidden":"fee54_3u41m",isHidden:"fee54_3u41m","opbox-metrum-header__dropdown-link":"fee54_2ZRG6",opboxMetrumHeaderDropdownLink:"fee54_2ZRG6","is-handheld":"fee54_3yfBe",isHandheld:"fee54_3yfBe","opbox-metrum-header__accordion-header":"fee54_3aDO6","opbox-metrum-header__description":"fee54_1Mrro",opboxMetrumHeaderDescription:"fee54_1Mrro","opbox-metrum-header__slot":"fee54_3Lznh",opboxMetrumHeaderSlot:"fee54_3Lznh","opbox-metrum-header__slot__hidden-categories":"fee54_3PyKa",opboxMetrumHeaderSlotHiddenCategories:"fee54_3PyKa","opbox-metrum-header__accordion-content":"fee54_1976s","opbox-metrum-header__accordion-group":"fee54_33vjU","is-active":"fee54_2YO4i",isActive:"fee54_2YO4i","opbox-metrum-header__accordion-title":"fee54_JiKHW",opboxMetrumHeaderAccordionTitle:"fee54_JiKHW","opbox-metrum-header__accordion-title@md":"fee54_1rog4",opboxMetrumHeaderAccordionTitleMd:"fee54_1rog4","opbox-metrum-header-navigation-bar--hide":"fee54_33Hg3",opboxMetrumHeaderNavigationBarHide:"fee54_33Hg3","opbox-metrum-header-observed-offers-star":"fee54_2pfd3",opboxMetrumHeaderObservedOffersStar:"fee54_2pfd3","observed-offers-star-icon":"fee54_Eh80L",observedOffersStarIcon:"fee54_Eh80L","opbox-metrum-header-logo-wrapper":"fee54_2N0im","opbox-metrum-header__account-name":"fee54_3vXlh",opboxMetrumHeaderAccountName:"fee54_3vXlh","opbox-metrum-header__account-name-with-notification":"fee54_1E7NQ",opboxMetrumHeaderAccountNameWithNotification:"fee54_1E7NQ","showcase-slider-namespace":"fee54_3ZXXU",showcaseSliderNamespace:"fee54_3ZXXU",carousel:"fee54_lGvLy","opbox-metrum-header-wrapper--simple":"fee54_3Md45",opboxMetrumHeaderWrapperSimple:"fee54_3Md45","opbox-metrum-header-navigation-bar":"fee54_3BjQA",opboxMetrumHeaderNavigationBar:"fee54_3BjQA","headroom--unpinned":"fee54_I0ofi",headroomUnpinned:"fee54_I0ofi"}},32:function(e,o,r){var t=r(5),n=function(e){return e&&e.__esModule?e:{default:e}}(t),a=r(11);document.addEventListener("DOMContentLoaded",function(){new a.Account(window.document,n.default).render()})},5:function(e,o){o.defaults={},o.set=function(e,r,t){var n=t||{},a=o.defaults,u=n.expires||a.expires,i=n.domain||a.domain,m=void 0!==n.path?n.path:void 0!==a.path?a.path:"/",d=void 0!==n.secure?n.secure:a.secure,f=void 0!==n.httponly?n.httponly:a.httponly,_=u?new Date("number"==typeof u?(new Date).getTime()+864e5*u:u):"";document.cookie=e.replace(/[^+#$&^`|]/g,encodeURIComponent).replace("(","%28").replace(")","%29")+"="+r.replace(/[^+#$&\/:<-\[\]-}]/g,encodeURIComponent)+(_&&_.getTime()>=0?";expires="+_.toUTCString():"")+(i?";domain="+i:"")+(m?";path="+m:"")+(d?";secure":"")+(f?";httponly":"")},o.get=function(e){for(var o=document.cookie.split(";"),r=0;r<o.length;r++){var t=o[r],n=t.length,a=t.indexOf("=");a=a<0?n:a;if(decodeURIComponent(t.substring(0,a).replace(/^\s+/,""))===e)return decodeURIComponent(t.substring(a+1,n))}return null},o.erase=function(e,r){o.set(e,"",{expires:-1,domain:r&&r.domain,path:r&&r.path,secure:0,httponly:0})},o.all=function(){for(var e={},o=document.cookie.split(";"),r=0;r<o.length;r++){var t=o[r],n=t.length,a=t.indexOf("=");a=a<0?n:a;e[decodeURIComponent(t.substring(0,a).replace(/^\s+/,""))]=decodeURIComponent(t.substring(a+1,n))}return e}},6:function(e,o,r){Object.defineProperty(o,"__esModule",{value:!0});o.accountNameClassNameWrapper="opbox-metrum-header__account-name-wrapper",o.accountNameClassName="opbox-metrum-header__account-name",o.accountLoginButtonsClassName="opbox-metrum-header__account-login",o.accountLogoutButtonClassName="opbox-metrum-header__account-logout",o.accountNameWithNotificationClassName="opbox-metrum-header__account-name-with-notification",o.accountNameNotificationClassName="opbox-metrum-header__account-name-notification",o.notificationClassName="opbox-metrum-header__notification",o.linkNotificationClassName="opbox-metrum-header__link-notification"},8:function(e,o,r){e.exports="function"==typeof Array.from?Array.from:r(9)},9:function(e,o){e.exports=function(){var e=function(e){return"function"==typeof e},o=function(e){var o=Number(e);return isNaN(o)?0:0!==o&&isFinite(o)?(o>0?1:-1)*Math.floor(Math.abs(o)):o},r=Math.pow(2,53)-1,t=function(e){var t=o(e);return Math.min(Math.max(t,0),r)},n=function(e){if(null!=e){if(["string","number","boolean","symbol"].indexOf(typeof e)>-1)return Symbol.iterator;if("undefined"!=typeof Symbol&&"iterator"in Symbol&&Symbol.iterator in e)return Symbol.iterator;if("@@iterator"in e)return"@@iterator"}},a=function(o,r){if(null!=o&&null!=r){var t=o[r];if(null==t)return;if(!e(t))throw new TypeError(t+" is not a function");return t}},u=function(e){var o=e.next();return!Boolean(o.done)&&o};return function(o){var r,i=this,m=arguments.length>1?arguments[1]:void 0;if(void 0!==m){if(!e(m))throw new TypeError("Array.from: when provided, the second argument must be a function");arguments.length>2&&(r=arguments[2])}var d,f,_=a(o,n(o));if(void 0!==_){d=e(i)?Object(new i):[];var p=_.call(o);if(null==p)throw new TypeError("Array.from requires an array-like or iterable object");f=0;for(var c,l;;){if(!(c=u(p)))return d.length=f,d;l=c.value,d[f]=m?m.call(r,l,f):l,f++}}else{var b=Object(o);if(null==o)throw new TypeError("Array.from requires an array-like object - not null or undefined");var s=t(b.length);d=e(i)?Object(new i(s)):new Array(s),f=0;for(var x;f<s;)x=b[f],d[f]=m?m.call(r,x,f):x,f++;d.length=s}return d}}()}})})}(null);</script>
				<script src="https://assets.allegrostatic.com/opbox-advertisement-box/1.3.3/scripts/bundle.js"></script>
			</div>
			<div id="showitem-main" class="container-fluid showitem-main"
				data-country="PL" data-visit='{"id":7224715300,"name":"Smartfon CAVION Base 5.0 LTE _ 8gb 1gb 5\"","buyNowPrice":"219,00 zł","bidPrice":"0,00 zł","buyNowActive":true,"catId":170,"freeShipping":0,"metaId":0,"prodId":0,"standard":0,"photoLink":"<?php echo $row_auction['thumb1']; ?>","photoLinkLarge":"https://2.allegroimg.com/s128/038ed5/509bc87d4514a6d58b334f6d6852"}'
				data-cm-pv-params='{"id": 7224715300, "_opbox": {"routePath": "/oferta/:id"}, "cs": [4, 165, 170], "t": "ssi", "cat": "PurchasingProcess", "pb":"false", "bv":"undef", "livebid":"no", "sma":"false", "bnp":"219.0" }'
				data-cm-event-params='{"id": 7224715300, "cs": [4, 165, 170], "t": "ssi", "sma":"false", "seller":2413880 }'
				data-cm-postbid-event-params='{"id": 7224715300, "pb":"false", "bv":"undef", "livebid":"no", "sma":"false" }'
				itemscope itemtype="http://schema.org/Product"
				>
				<meta itemprop="url" content="http://allegro.pl/smartfon-cavion-base-5-0-lte-8gb-1gb-5-i7224715300.html" />
				<meta itemprop="name" content="Smartfon CAVION Base 5.0 LTE _ 8gb 1gb 5&quot;" />
				<meta itemprop="image" content="<?php echo $row_auction['photo1']; ?>" />
				<meta itemprop="description" content="Kup teraz na allegro.pl za 219,00 zł - Smartfon CAVION Base 5.0 LTE _ 8gb 1gb 5&quot; (7224715300). Allegro.pl - Radość zakupów i bezpieczeństwo dzięki Programowi Ochrony Kupujących!" />
				<meta itemprop="sku" content="7224715300" />
				<section class="row">
					<div class="col-xm-12">
						<div id="options" class="options" data-favourite-enabled="true" data-favourite-offer-id="7224715300">
							<a id="edit" data-user-id="2413880" class="btn btn-default hidden"
								href="https://allegro.pl/offer/7224715300">edytuj</a>
						</div>
						<h1 class="title">
							<?php echo $row_auction['product_name']; ?>
							<small>(<?php echo $row_auction['product_id']; ?>)</small>
						</h1>
					</div>
				</section>
				<section class="row">
					<div class="col-xs-12">
						<div class="breadcrumb-container">
							<ol id="breadcrumbs-list" class="breadcrumb separator separator-bottom">
								<li><a href="http://allegro.pl/">Allegro</a></li>
								<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
									<a href="http://allegro.pl/kategoria/telefony-i-akcesoria" itemprop="url"><span itemprop="title">Telefony i Akcesoria</span></a>
								</li>
								<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
									<a href="http://allegro.pl/kategoria/smartfony-i-telefony-komorkowe-165" itemprop="url"><span itemprop="title">Smartfony i telefony komórkowe</span></a>
								</li>
								<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
									<a href="http://allegro.pl/kategoria/smartfony-i-telefony-komorkowe-inne-marki-170" itemprop="url"><span itemprop="title">Inne marki</span></a>
								</li>
							</ol>
						</div>
					</div>
				</section>
				<section class="row" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
					<meta itemprop="price" content="219.0" />
					<meta itemprop="priceCurrency" content="PLN" />
					<meta itemprop="itemCondition" itemtype="http://schema.org/OfferItemCondition" content="http://schema.org/NewCondition" />
					<div class="col-xs-12 col-sm-4 col-md-5">
					</div>
					<div id="preinfo-container" class="preinfo-container col-xs-12 col-sm-8 col-md-7">
						<div class="preinfo row">
							<div class="col-xs-12 col-sm-4 col-md-4 buyers-count">
								<i class="icon-font buyers-outline-pos"></i>
								<span>
								<strong>3 osoby</strong> kupiły <strong>3 sztuki</strong>
								</span>
							</div>
							<div class="col-xs-12 col-sm-5 col-md-5" id="time-info">
								<i class="icon-font watch-outline-pos"></i>
								<strong>6 dni do końca</strong>
							</div>
						</div>
					</div>
					<div id="gallery-main-container" class="gallery-wrapper col-xs-12 col-sm-4 col-md-5">
						<div id="gallery" data-active="1" data-langs='{"close": "zamknij" }'
							class="gallery">
							<div class="img-main-wrapper">
								<div class="img-container text-center">
									<div>
										<div class="list">
											<ul class="list-inline unstyled anim">
												<li >
													<a href="#imglayer">
														<noscript class="lazyGallery">
															<img src="<?php echo $row_auction['photo1']; ?>"
																class="img-responsive"
																data-img-large="<?php echo $row_auction['photo1']; ?>"
																data-img-medium="<?php echo $row_auction['photo1']; ?>"
																data-img-id="1"
																alt="Smartfon CAVION Base 5.0 LTE _ 8gb 1gb 5&quot;">
														</noscript>
													<a href="#imglayer">
													<img src="<?php echo $row_auction['photo1']; ?>"
														class="img-responsive"
														data-img-large="<?php echo $row_auction['photo1']; ?>"
														data-img-medium="<?php echo $row_auction['photo1']; ?>"
														data-img-id="1"
														alt="Smartfon CAVION Base 5.0 LTE _ 8gb 1gb 5&quot;"
														onload="performanceMark('VisuallyComplete')">
													</a>
													</a>
												</li>
												<li class="init">
													<a href="#imglayer">
														<noscript class="lazyGallery">
															<img src="<?php echo $row_auction['photo2']; ?>"
																class="img-responsive"
																data-img-large="<?php echo $row_auction['photo2']; ?>"
																data-img-medium="<?php echo $row_auction['photo2']; ?>"
																data-img-id="2"
																alt="Smartfon CAVION Base 5.0 LTE _ 8gb 1gb 5&quot;">
														</noscript>
													</a>
												</li>
												<li class="init">
													<a href="#imglayer">
														<noscript class="lazyGallery">
															<img src="<?php echo $row_auction['photo3']; ?>"
																class="img-responsive"
																data-img-large="<?php echo $row_auction['photo3']; ?>"
																data-img-medium="<?php echo $row_auction['photo3']; ?>"
																data-img-id="3"
																alt="Smartfon CAVION Base 5.0 LTE _ 8gb 1gb 5&quot;">
														</noscript>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="gallery-thumbs active">
								<div class="gallery-thumbs-cont">
									<ul class="list-inline unstyled anim">
										<li>
											<a href="#thumb/1" data-id="1">
											<img src="<?php echo $row_auction['thumb1']; ?>"
												data-img-large="<?php echo $row_auction['photo1']; ?>2"
												data-img-medium="<?php echo $row_auction['photo1']; ?>"
												class="thumb-1"
												alt="">
											</a>
										</li>
										<?php if(strlen($row_auction['photo2'])>0){ ?>
										<li>
											<a href="#thumb/2" data-id="2">
											<img src="<?php echo $row_auction['thumb2']; ?>"
												data-img-large="<?php echo $row_auction['photo2']; ?>"
												data-img-medium="<?php echo $row_auction['photo2']; ?>"
												class="thumb-2"
												alt="">
											</a>
										</li>
										<?php } ?>
										<?php if(strlen($row_auction['photo3'])>0){ ?>
										<li>
											<a href="#thumb/3" data-id="3">
											<img src="<?php echo $row_auction['thumb3']; ?>"
												data-img-large="<?php echo $row_auction['photo3']; ?>"
												data-img-medium="<?php echo $row_auction['photo3']; ?>"
												class="thumb-3"
												alt="">
											</a>
										</li>
										<?php } ?>
									</ul>
								</div>
								<i class="icon-font arrow-left thumb-prev"></i>
								<i class="icon-font arrow-right thumb-next"></i>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-7 buynow-container">
						<div class="row main aside-photo">
							<div class="col-xs-12">
								<div class="row">
									<form id="purchase-form" class="purchase-form" method="post" action="login.php?payment_id<?php echo $payment_id;?>&auction_id=<?php echo $row_auction['id'];?>">
										<input type="hidden" value="1" name="guest">
										<input type="hidden" name="item_id" value="7224715300">
										<div class="col-sm-7 col-xs-12">
											<div class="inline">
												<div class="above">cena kup teraz</div>
												<div class="price" data-price="<?php echo $row_auction['price'];?>"> <?php echo $row_auction['price'];?> zł</div>
												<link itemprop="availability" href="http://schema.org/InStock" />
											</div>
											<div class="inline">
												<input type="number" class="form-control small quantity"
													id="quantity" name="quantity"
													min="1" max="<?php echo $row_auction['num_pieces'];?>" value="1"
													data-placement="top" data-trigger="manual" data-animation="false"
													data-validation
													data-msg-not-proper="niepoprawna liczba"
													data-msg-lowamount="niepoprawna liczba"
													data-msg-highamount="niepoprawna liczba">
												<span class="no-wrap">z <?php echo $row_auction['num_pieces'];?> sztuk</span>
											</div>
										</div>
										<div class="col-sm-5 col-xs-12 text-right">
											<div class="row">
												<div class="col-sm-12 col-xs-6 col-xs-push-6 col-sm-push-0">
													<a  id="add-to-cart"  data-seller-id="2413880" class="btn btn-primary" href="#">dodaj do koszyka</a>
													<input id="buy-now" class="btn btn-primary" type="submit" value="kup teraz" name="login_for_purchase"/>
												</div>
												<div class="col-sm-12 col-xs-6 col-xs-pull-6 col-sm-pull-0">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="row offer-badges" id="offer-badges">
							<div class="col-xm-4">
								<div class="offer-badge badge-rating">
									<a href="http://allegro.pl/uzytkownik/2413880/oceny" class="cm-link" id="sellerBadge"
										data-action="SellerRatingPageShow" data-label="BadgeClick">
										<h3 class="m-type-header m-type-header--xsmall  m-color-green">99,6%</h3>
										<p class="m-type-secondary">poleca sprzedającego</p>
									</a>
								</div>
							</div>
							<div class="col-xm-4">
								<div class="offer-badge badge-shipping">
									<a href="#shippingInfo" class="badge-link cm-link" id="handlingTimeBadge"
										data-action="ShippingInfoShow" data-label="BadgeClick" data-value="handling-time">
										<h3 class="m-type-header m-type-header--xsmall m-color-blue">
											24 godziny
										</h3>
										<p class="m-type-secondary">czas wysyłki</p>
									</a>
								</div>
							</div>
						</div>
						<div class="row after">
							<div class="col-xs-12 col-ss-6">
								<strong>Dostawa</strong>
								<ul class="list-unstyled break-line deliverySummary" id="deliverySummary">
									<li>
										<span class="name">Allegro Paczkomaty InPost</span>
										<i class="icon-svg-xs free-return-pos" data-trigger="manual" data-placement="top" data-html="true" data-delay="200" data-content="&lt;strong&gt;Zwrot gratis&lt;/strong&gt; - wybierając dostawę z darmowym zwrotem, będziesz mógł oddać zakupiony towar bez dodatkowych kosztów. &lt;a href&#x3D;&quot;http://paczkomaty.pl/AllegroInPost_Kupuje&quot; target&#x3D;&quot;_blank&quot;&gt;Dowiedz się więcej o Allegro Przesyłkach InPost&lt;/a&gt;."></i>
										<span class="pull-right"><span class="badge clear">8,60 zł</span></span>
									</li>
									<li>
										<span class="name">Allegro Kurier InPost</span>
										<i class="icon-svg-xs free-return-pos" data-trigger="manual" data-placement="top" data-html="true" data-delay="200" data-content="&lt;strong&gt;Zwrot gratis&lt;/strong&gt; - wybierając dostawę z darmowym zwrotem, będziesz mógł oddać zakupiony towar bez dodatkowych kosztów. &lt;a href&#x3D;&quot;http://paczkomaty.pl/AllegroInPost_Kupuje&quot; target&#x3D;&quot;_blank&quot;&gt;Dowiedz się więcej o Allegro Przesyłkach InPost&lt;/a&gt;."></i>
										<span class="pull-right"><span class="badge clear">12,18 zł</span></span>
									</li>
									<li>
										<span class="name">Przesyłka kurierska</span>
										<span class="pull-right"><span class="badge clear">14,00 zł</span></span>
									</li>
								</ul>
								<dl class="freeShippingThreshold">
								</dl>
								<ul class="list-unstyled">
									<li>
										lokalizacja: <strong>Kalisz, Polska</strong>
									</li>
									<li>
										czas wysyłki: <strong>24 godziny</strong>
									</li>
								</ul>
								<ul class="list-unstyled">
									<li>
										<a href="#shippingInfo" id="delivery-shipping-info-link" class="cm-link"
											data-action="ShippingInfoShow" data-label="PageTopShow">
										szczegóły dostawy
										</a>
									</li>
								</ul>
							</div>
							<div class="col-xs-12 col-ss-6 ">
								<div class="seller-details"
									id="seller-details"
									data-itemid="7224715300"
									data-seller='{"id": "2413880", "isCompany": true }'
									data-langs='{
									"percentPositiveComments": "pozytywnych komentarzy",
									"seeComments" : "zobacz komentarze",
									"fromLastTwelveMonths" : "z ostatnich 12 miesięcy",
									"buyer" : "kupujący",
									"buyers" : "kupujących",
									"comment" : "komentarz",
									"comments" : "komentarze",
									"commentsGenitive" : "komentarzy",
									"recommendsSeller" : "poleca tego sprzedającego",
									"itemAsDescribed" : "zgodność przedmiotu z opisem",
									"contactWithSeller" : "kontakt ze Sprzedającym",
									"durationOfOrderProcessing" : "czas realizacji zamówienia",
									"shipmentCost" : "koszt wysyłki",
									"averageSaleLeastTenAssessments" : "Średnia z ocen sprzedaży będzie widoczna, gdy sprzedawca otrzyma co najmniej 10 ocen.",
									"company" : "firma"
									}'
									data-userrating='{&quot;uniqueRecommendCount&quot;:3554,&quot;uniqueNotRecommendCount&quot;:13,&quot;recommendCount&quot;:3638,&quot;notRecommendCount&quot;:13,&quot;recommendPercentage&quot;:0.996,&quot;averageRates&quot;:{&quot;delivery&quot;:5.0,&quot;description&quot;:5.0,&quot;service&quot;:5.0,&quot;deliveryCost&quot;:4.9}}'
									>
									<div class="btn btn-default btn-user">
										<a href="http://allegro.pl/uzytkownik/2413880/oceny" class="alleLink">
										<span>gierland</span>
										</a>
										<i class="icon-font arrow-right rotate90 tiny"></i>
										<div class="super-seller-info">
											<i class="icon-svg-md icon-super-seller standard-pos" data-trigger="manual" data-placement="right" data-html="true"
												data-delay="200" data-content="Tym symbolem wyróżniamy najlepsze sklepy w Allegro. Gdy kupujesz od Super Sprzedawcy, masz pewność doskonałej obsługi klienta i udanych zakupów."></i>
											<span class="super-seller-writing didascalia-color">Super Sprzedawca</span>
										</div>
									</div>
									<div class="user-rating-box">
									</div>
									<ul class="list-unstyled seller-details-links">
										<li>
											<a class="alleLink" href="http://allegro.pl/listing/user/listing.php?us_id=2413880&amp;id=170">
											<span><strong>Inne marki</strong> w przedmiotach sprzedającego</span>
											</a>
										</li>
										<li>
											<a class="alleLink" href="http://allegro.pl/listing/user/listing.php?us_id=2413880">
											<span>Wszystkie przedmioty sprzedającego</span>
											</a>
										</li>
										<li>
											<a id="sendMailToUserLink" class="alleLink" href="http://allegro.pl/SendMailToUser.php?itemId=7224715300&amp;userId=2413880" data-action='AskSellerClick' data-label='PageTopShow'>
											<span>Pytanie do sprzedającego</span>
											</a>
										</li>
										<li>
											<a id="companyDataLink" href="#" data-company='{"user": "2413880", "item": "7224715300", "category": "170"}' class="btn-link company-data-btn">
											<span>Dane firmy</span>
											<i class="icon-font arrow-right rotate90"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
				<script>
					performanceMark('FirstMeaningfulPaint')
				</script>        
				
				<div class="panel-group" id="accordion">
				</div>
				<div class="opbox-fragment">
					<script>var opbox = opbox || {}; opbox.config = opbox.config || {"baseDomain":"allegro.pl","edgeHost":"https://edge.allegro.pl","lazyBoxNames":[],"canonicalRoute":"http://allegro.pl/oferta/show-offer_esi/v6/:offerId","cookieMonster":{"host":"https://ngastatic.com/s4c/tracker.js","account":"CM.991213.tz_pl","boxViewDisabled":false,"defaultCustomParams":{"pv":{"itemId":"7224715300","superseller":true,"sellerId":"2413880","categoryPath":[{"id":"4","name":"Telefony i Akcesoria"},{"id":"165","name":"Smartfony i telefony komórkowe"},{"id":"170","name":"Inne marki"}],"canonicalRoute":"http://allegro.pl/oferta/show-offer_esi/v6/:offerId","_opbox":{"routePath":"/oferta/show-offer_esi/v6/:offerId","analyticsTags":[],"traceId":"0902787c366b2db8"}},"ev":{"itemId":"7224715300","superseller":true,"sellerId":"2413880","categoryPath":[{"id":"4","name":"Telefony i Akcesoria"},{"id":"165","name":"Smartfony i telefony komórkowe"},{"id":"170","name":"Inne marki"}],"canonicalRoute":"http://allegro.pl/oferta/show-offer_esi/v6/:offerId"}}}} || {};</script>
					<script nomodule="true" src="https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/placeholder-polyfill-external.js"></script>
					<script>!function(e){"use strict";function n(e){return Array.prototype.slice.call(e)}function r(e){var r=[],o=e?function(){var e=arguments;return new Promise(function(o,t){return r.push({args:n(e),resolve:o,reject:t})})}:function(){r.push({args:n(arguments)})};return o.__queue__=r,o}function o(e){return e===s?r():e===u?r(!0):!0===e||!1===e?e:Object.keys(e).reduce(function(n,r){return n[r]=o(e[r]),n},{})}function t(e,n){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:a;n[r]=n[r]||{},n[r].loaded||Object.assign(n[r],o(e))}function i(e){t(c,e,a)}Object.defineProperty(e,"__esModule",{value:!0}),e.default=t,e.init=i;var a="opbox",s=e.VOID_FN=Function,u=e.PROMISE_FN=Promise,c={analytics:{sendEvent:s},boxViewsMarker:{markBoxAsRendered:s,markBoxAsVisible:s,recursivelyMarkBoxAsVisible:s,markBoxAsHidden:s,recursivelyMarkBoxAsHidden:s,trackBoxScroll:s,isBoxInViewport:s},component:{init:s},onData:s,changeParams:s,tween:s,scrollTo:s,edge:{get:u,put:u,post:u},page:{getData:u},registerComponent:s,onDomReady:s,loaded:!0};i(window)}({});</script>
					<script>document.addEventListener("DOMContentLoaded",function(){function e(e){var t=document.createElement("script");t.setAttribute("src",e),document.head.appendChild(t)}window.opbox.initialized||document.querySelectorAll('script[src="https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/opbox-external.js"]').length||e("https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/opbox-external.js"),document.querySelectorAll('script[src="https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/vendors.js"]').length||e("https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/vendors.js")});</script>
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/typography/main-85a33e3503.m.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/button/main-695b7ac606.m.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/heading/main-4a8930fc85.m.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/link/main-083cad0ec5.m.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/list/main-f4bf2ab295.m.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/color/main-cfddd4ba57.m.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-rich-text/index__6d21e414.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-container/3.0.2/styles/index.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-showoffer-description/0.5.1/styles/index.css">
					<link type="text/css" rel="stylesheet" href="http://cdn.allegrostatic.com/@metrum/grid/main.m-8e52145a.css">
					<link type="text/css" rel="stylesheet" href="http://cdn.allegrostatic.com/@metrum/heading/main.m-92249397.css">
					<link type="text/css" rel="stylesheet" href="http://cdn.allegrostatic.com/@metrum/link/main.m-0f7df7a3.css">
					<link type="text/css" rel="stylesheet" href="http://cdn.allegrostatic.com/@metrum/select/main.m-9f4ed1f0.css">
					<link type="text/css" rel="stylesheet" href="http://cdn.allegrostatic.com/@metrum/table/main.m-1c308fc8.css">
					<link type="text/css" rel="stylesheet" href="http://cdn.allegrostatic.com/@metrum/typography/main.m-85a33e35.css">
					<link type="text/css" rel="stylesheet" href="http://cdn.allegrostatic.com/@metrum/message/main.m-932ba5bc.css">
					<link type="text/css" rel="stylesheet" href="http://cdn.allegrostatic.com/@metrum/color/main.m-1012466b.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-showoffer-delivery/1.4.2/styles/index.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-showoffer-payment-info/0.1.6/styles/index.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-offer-after-sales/0.6.1/styles/index.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-seller-rating-summary/0.3.5/styles/index.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-showoffer-about-seller/0.15.1/styles/index.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-accordion/0.5.3/styles/index.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-showoffer-footer-info/0.3.1/styles/index.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-offer/index__b5ee4913.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-carousel/styles/index-cca8645174.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-scroll-top/1.0.2/styles/index.css">
					<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-skins/styles/show-offer-1a392c02ee.css">
					<script> </script>
					<div data-box-name="Container Description" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="">
						<a name="container-description"></a>
						<div class="
							v2144 opbox-sheet-wrapper
							">
							<div class="opbox-sheet
								"
								style="margin-top:16px;background: white"
								>
								<div data-box-name="Description Container" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="">
									<a name="description-container"></a>
									<div class="
										v2144 opbox-sheet-wrapper
										">
										<div class="opbox-sheet
											card
											"
											style="margin-bottom:-22px;"
											>
											<div data-box-name="Description Container Title" data-prototype-id="allegro.richText" data-prototype-version="1.0" data-skin-class-name="" data-implementation-version="2.0.1" data-analytics-enabled data-analytics-category="allegro.richText" data-analytics-tags="">
												<a name="description-container-title"></a>
												<div class="_5c3c4_JckUR rich-text">
													<h3 class="_z853a _1uqbz">Opis</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div data-box-name="Component Description Container" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="">
									<a name="component-description-container"></a>
									<div class="
										v2144 opbox-sheet-wrapper
										">
										<div class="opbox-sheet
											"
											>
											<div data-box-name="Description" data-prototype-id="allegro.showoffer.description" data-prototype-version="0.5" data-skin-class-name="" data-implementation-version="0.5.1" data-analytics-enabled data-analytics-category="allegro.showoffer.description" data-analytics-tags="">
												<a name="description"></a><script type="application/javascript">window['__PROPS__ALLEGRO_SHOWOFFER_DESCRIPTION__']=(window['__PROPS__ALLEGRO_SHOWOFFER_DESCRIPTION__']||{});window['__PROPS__ALLEGRO_SHOWOFFER_DESCRIPTION__']['Description']={"standardized":null,"standardizedHtml":"\u003Cfieldset id=\"user_field\" style=\"overflow:auto;position:relative;top:0;border:none;margin:0;padding:0;text-align:left;\"\u003E\u003Carticle\u003E\n    \u003Cstyle\u003E\n    .description {\n        padding: 11px;\n        box-sizing: border-box;\n        max-width: 1200px;\n    }\n\n    .description .section {\n        padding: 15px 0;\n    }\n\n    @media (max-width: 991px) {\n        .description .section .item-6:nth-child(1) {\n            padding-bottom: 10px;\n        }\n    }\n\n    @media (min-width: 992px) {\n        .description .section {\n            display: flex;\n            align-items: center;\n        }\n\n        .description .item-6 {\n            width: 50%;\n            float: left;\n            position: relative;\n            min-height: 1px;\n        }\n    }\n\n    .description *, .description *::after, .description *::before {\n        box-sizing: border-box;\n    }\n\n    .description .item {\n        padding-left: 15px;\n        padding-right: 15px;\n    }\n\n    .description .item-12 {\n        width: 100%;\n        min-height: 1px;\n    }\n\n    .description .text-item h1, .description .text-item h2 {\n        display: block;\n        font-family: \"Roboto\", \"Open Sans\", sans-serif \u002F* once Roboto font is available globally on allegro sites, this fallback is not needed anymore *\u002F;\n        font-weight: 500;\n        margin: 18px 0;\n    }\n\n    .description .text-item p {\n        margin: 16px 0;\n        word-wrap: break-word;\n    }\n\n    .description .text-item h1 {\n        color: #444444;\n        font-size: 24px;\n        line-height: 24px;\n    }\n\n    .description .text-item h2 {\n        color: #444444;\n        font-size: 18px;\n        line-height: 18px;\n    }\n\n    .description .text-item ol, .description .text-item ul {\n        padding-left: 40px;\n        margin: 16px 0;\n    }\n\n    .description .text-item {\n        color: #444444;\n        font-family: \"Open Sans\", sans-serif;\n        font-size: 16px;\n        line-height: 22px;\n        width: 100%;\n        word-wrap: break-word;\n    }\n\n    .description .image-item img {\n        display: block;\n        margin-left: auto;\n        margin-right: auto;\n        max-width: 100%;\n    }\n\n    .description .video-item .yt-container {\n        margin-left: auto;\n        margin-right: auto;\n        max-width: 853px;\n    }\n\n    .description .video-item .yt-responsive-container {\n        position: relative;\n        padding-bottom: 56.25%;\n        padding-top: 30px;\n        height: 0;\n        overflow: hidden;\n    }\n\n    .description .video-item .yt-container .yt-responsive-container iframe {\n        position: absolute;\n        top: 0;\n        left: 0;\n        width: 100%;\n        height: 100%;\n    }\n\n    .hidden {\n        display: none;\n    }\n\u003C\u002Fstyle\u003E\n\n    \u003Cscript type=\"text\u002Fjavascript\"\u003E\n        function showHiddenVideos() {\n            var elements = document.getElementsByClassName('yt-container hidden');\n            for (var i = 0; i \u003C elements.length; i++) {\n                elements[i].classList.remove('hidden');\n            }\n        }\n    \u003C\u002Fscript\u003E\n    \u003Cdiv class=\"description\"\u003E\n        \n            \u003Csection class=\"section\"\u003E\n                \n                \u003Cdiv class=\"item item-6\"\u003E\n                    \u003Csection class=\"image-item\"\u003E\n    \u003Cimg src=\"https:\u002F\u002F2.allegroimg.com\u002Fs1440\u002F038ed5\u002F509bc87d4514a6d58b334f6d6852\" srcset=\"https:\u002F\u002F2.allegroimg.com\u002Fs360\u002F038ed5\u002F509bc87d4514a6d58b334f6d6852 360w, https:\u002F\u002F2.allegroimg.com\u002Fs720\u002F038ed5\u002F509bc87d4514a6d58b334f6d6852 640w\" sizes=\"(min-width: 1200px) 560px, (min-width: 992px) 50vw, 100vw\" width=\"640px\"\u002F\u003E\n\u003C\u002Fsection\u003E\n\n                \u003C\u002Fdiv\u003E\n                \n                \u003Cdiv class=\"item item-6\"\u003E\n                    \u003Csection class=\"text-item\"\u003E\n    \u003Ch1\u003ESmartfon CAVION Base 5.0 LTE\u003C\u002Fh1\u003E\n\u003Cul\u003E\n\u003Cli\u003EDual Sim\u003C\u002Fli\u003E\n\u003Cli\u003EEkran 5\" IPS\u003C\u002Fli\u003E\n\u003Cli\u003EAparat 5 MP + 2 MP\u003C\u002Fli\u003E\n\u003Cli\u003EROM 8 GB\u003C\u002Fli\u003E\n\u003Cli\u003ERAM 1 GB\u003C\u002Fli\u003E\n\u003Cli\u003EQuad Core 1.0Ghz\u003C\u002Fli\u003E\n\u003Cli\u003EAndroid 5.1\u003C\u002Fli\u003E\n\u003Cli\u003ELTE\u003C\u002Fli\u003E\n\u003C\u002Ful\u003E\n\u003C\u002Fsection\u003E\n\n                \u003C\u002Fdiv\u003E\n                \n            \u003C\u002Fsection\u003E\n        \n            \u003Csection class=\"section\"\u003E\n                \n                \u003Cdiv class=\"item item-6\"\u003E\n                    \u003Csection class=\"text-item\"\u003E\n    \u003Cul\u003E\n\u003Cli\u003ESmartfon Cavion Base 5.0 LTE wyposażony w LTE to szybki internet w Twoim telefonie i bezproblemowe przeglądanie ulubionych stron www.\u003C\u002Fli\u003E\n\u003Cli\u003EDual SIM pozwala na jednoczesne korzystanie z dwóch kart. \u003C\u002Fli\u003E\n\u003Cli\u003EMocna i elegancka, metalowa ramka ze stopu cynku w połączeniu z wysokiej jakości polimerowym szkłem to niepowtarzalny obraz i wytrzymałość w jednym urządzeniu\u003C\u002Fli\u003E\n\u003Cli\u003ESmartWake – funkcja Inteligentnego wybudzania, przy wygaszonym telefonie można uruchomić aplikację za pomocą znaków wyrysowanych na ekranie.\u003C\u002Fli\u003E\n\u003C\u002Ful\u003E\n\u003Cp\u003E\u003C\u002Fp\u003E\n\u003C\u002Fsection\u003E\n\n                \u003C\u002Fdiv\u003E\n                \n                \u003Cdiv class=\"item item-6\"\u003E\n                    \u003Csection class=\"image-item\"\u003E\n    \u003Cimg src=\"https:\u002F\u002F1.allegroimg.com\u002Fs1440\u002F031848\u002F43d550e545d09ea55edd9252c561\" srcset=\"https:\u002F\u002F1.allegroimg.com\u002Fs360\u002F031848\u002F43d550e545d09ea55edd9252c561 360w, https:\u002F\u002F1.allegroimg.com\u002Fs720\u002F031848\u002F43d550e545d09ea55edd9252c561 640w\" sizes=\"(min-width: 1200px) 560px, (min-width: 992px) 50vw, 100vw\" width=\"640px\"\u002F\u003E\n\u003C\u002Fsection\u003E\n\n                \u003C\u002Fdiv\u003E\n                \n            \u003C\u002Fsection\u003E\n        \n            \u003Csection class=\"section\"\u003E\n                \n                \u003Cdiv class=\"item item-6\"\u003E\n                    \u003Csection class=\"image-item\"\u003E\n    \u003Cimg src=\"https:\u002F\u002F4.allegroimg.com\u002Fs1440\u002F03e243\u002F5b8ff01e43faa9045a0f35816fd4\" srcset=\"https:\u002F\u002F4.allegroimg.com\u002Fs360\u002F03e243\u002F5b8ff01e43faa9045a0f35816fd4 360w, https:\u002F\u002F4.allegroimg.com\u002Fs720\u002F03e243\u002F5b8ff01e43faa9045a0f35816fd4 640w\" sizes=\"(min-width: 1200px) 560px, (min-width: 992px) 50vw, 100vw\" width=\"640px\"\u002F\u003E\n\u003C\u002Fsection\u003E\n\n                \u003C\u002Fdiv\u003E\n                \n                \u003Cdiv class=\"item item-6\"\u003E\n                    \u003Csection class=\"text-item\"\u003E\n    \u003Cp\u003E\u003Cb\u003ESpecyfikacja:\u003C\u002Fb\u003E\u003C\u002Fp\u003E\n\u003Cul\u003E\n\u003Cli\u003EPROCESOR: Quad Core MT6735\u003C\u002Fli\u003E\n\u003Cli\u003EKARTA GRAFICZNA: ARM Mali 760-MP2 500 MHz\u003C\u002Fli\u003E\n\u003Cli\u003EWYŚWIETLACZ: 5\" IPS HD 720x1280\u003C\u002Fli\u003E\n\u003Cli\u003EPAMIĘĆ RAM: 1GB\u003C\u002Fli\u003E\n\u003Cli\u003EPAMIĘĆ WEWNĘTRZNA: 8GB\u003C\u002Fli\u003E\n\u003Cli\u003ECZYTNIK KART PAMIĘCI: Karta MicroSD do 32 GB\u003C\u002Fli\u003E\n\u003Cli\u003EAPARAT\u002FKAMERA: Przód: 2 Mpx Tył: 5 Mpx\u003C\u002Fli\u003E\n\u003Cli\u003EAKUMULATOR: Li-poly 1950mAh\u003C\u002Fli\u003E\n\u003Cli\u003EMULTI-TOUCH: TAK – 2 punkty\u003C\u002Fli\u003E\n\u003Cli\u003ESENSORY: Akcelerometr, Czujnik Zbliżeniowy, Czujnik Światła\u003C\u002Fli\u003E\n\u003Cli\u003EZŁĄCZA: Bluetooth, Micro SD, Micro USB, Mini Jack\u003C\u002Fli\u003E\n\u003Cli\u003EPASMA PRACY LTE: 800\u002F900\u002F1800\u002F2100\u002F2600 MHz\u003C\u002Fli\u003E\n\u003Cli\u003EPASMA PRACY GSM: 800\u002F900\u002F1800\u002F2100\u002F2600 MHz\u003C\u002Fli\u003E\n\u003Cli\u003EPASMA PRACY UMTS\u002FWCDMA: 900\u002F2100 MHz\u003C\u002Fli\u003E\n\u003Cli\u003EWI-FI: 802.11 b\u002Fg\u002Fn\u003C\u002Fli\u003E\n\u003Cli\u003EWI-FI HOTSPOT: Tak\u003C\u002Fli\u003E\n\u003Cli\u003EBLUETOOTH: 4.0\u003C\u002Fli\u003E\n\u003Cli\u003EBLUETOOTH HOTSPOT: Tak\u003C\u002Fli\u003E\n\u003Cli\u003ESYSTEM OPERACYJNY: Android 5.1 Lollipop\u003C\u002Fli\u003E\n\u003Cli\u003EFUNKCJE: Gry 3D, Radio FM\u003C\u002Fli\u003E\n\u003C\u002Ful\u003E\n\u003Cp\u003E\u003C\u002Fp\u003E\n\u003C\u002Fsection\u003E\n\n                \u003C\u002Fdiv\u003E\n                \n            \u003C\u002Fsection\u003E\n        \n            \u003Csection class=\"section\"\u003E\n                \n                \u003Cdiv class=\"item item-12\"\u003E\n                    \u003Csection class=\"text-item\"\u003E\n    \u003Cp\u003E\u003Cb\u003EW zestawie:\u003C\u002Fb\u003E\u003C\u002Fp\u003E\n\u003Cul\u003E\n\u003Cli\u003ESmartfon\u003C\u002Fli\u003E\n\u003Cli\u003EBateria\u003C\u002Fli\u003E\n\u003Cli\u003EŁadowarka sieciowa\u003C\u002Fli\u003E\n\u003Cli\u003EKabel USB\u003C\u002Fli\u003E\n\u003Cli\u003EDokumentacja\u003C\u002Fli\u003E\n\u003C\u002Ful\u003E\n\u003C\u002Fsection\u003E\n\n                \u003C\u002Fdiv\u003E\n                \n            \u003C\u002Fsection\u003E\n        \n    \u003C\u002Fdiv\u003E\n\u003C\u002Farticle\u003E\n\u003C\u002Ffieldset\u003E","brandzone":null,"legacy":null};</script>
												<div class="app-container">
													<div class="cf9b0dcb _1f9594c7">
														<div>
															<fieldset id="user_field" style="overflow:auto;position:relative;top:0;border:none;margin:0;padding:0;text-align:left;">
																<?php echo $custom_page;?>
															</fieldset>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div data-box-name="scrollTopButton" data-prototype-id="allegro.navigation.scrollTop" data-prototype-version="1.0" data-skin-class-name="" data-implementation-version="1.0.2" data-analytics-enabled data-analytics-category="allegro.navigation.scrollTop" data-analytics-tags=""><a name="scrolltopbutton"></a><a class="scroll-top" title="Do góry">Do góry</a></div>
					<script src="https://assets.allegrostatic.com/opbox-showoffer-description/0.5.1/scripts/main.js"></script>
					<script src="https://assets.allegrostatic.com/opbox-showoffer-delivery/1.4.2/scripts/main.js"></script>
					<script async="async" src="https://assets.allegrostatic.com/opbox-offer-after-sales/0.6.1/scripts/main.js"></script>
					<script async="async" src="https://assets.allegrostatic.com/opbox-showoffer-about-seller/0.15.1/scripts/main.js"></script>
					<script src="https://assets.allegrostatic.com/opbox-accordion/0.5.3/scripts/main.js"></script>
					<script src="https://assets.allegrostatic.com/opbox-showoffer-footer-info/0.3.1/scripts/main.js"></script>
					<script src="https://assets.allegrostatic.com/opbox-offer/index__474fed36.js"></script>
					<script async="async" src="https://assets.allegrostatic.com/opbox-carousel/scripts/main-bd902e8223.js"></script>
					<script src="https://assets.allegrostatic.com/opbox-scroll-top/1.0.2/scripts/main.js"></script>
				</div>
			</div>
			<div class="opbox-fragment">
				<script>var opbox = opbox || {}; opbox.config = opbox.config || {"baseDomain":"allegro.pl","edgeHost":"https://edge.allegro.pl","lazyBoxNames":[],"canonicalRoute":"http://?:.allegro.pl/footerService/footer","cookieMonster":{"host":"https://ngastatic.com/s4c/tracker.js","account":"CM.991213.tz_pl","boxViewDisabled":false,"defaultCustomParams":{"pv":{"canonicalRoute":"http://?:.allegro.pl/footerService/footer","_opbox":{"routePath":"/footerService/footer","analyticsTags":[],"traceId":"0902787c366b2db8"}},"ev":{"canonicalRoute":"http://?:.allegro.pl/footerService/footer"}}}} || {};</script>
				<script nomodule="true" src="https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/placeholder-polyfill-external.js"></script>
				<script>!function(e){"use strict";function n(e){return Array.prototype.slice.call(e)}function r(e){var r=[],o=e?function(){var e=arguments;return new Promise(function(o,t){return r.push({args:n(e),resolve:o,reject:t})})}:function(){r.push({args:n(arguments)})};return o.__queue__=r,o}function o(e){return e===s?r():e===u?r(!0):!0===e||!1===e?e:Object.keys(e).reduce(function(n,r){return n[r]=o(e[r]),n},{})}function t(e,n){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:a;n[r]=n[r]||{},n[r].loaded||Object.assign(n[r],o(e))}function i(e){t(c,e,a)}Object.defineProperty(e,"__esModule",{value:!0}),e.default=t,e.init=i;var a="opbox",s=e.VOID_FN=Function,u=e.PROMISE_FN=Promise,c={analytics:{sendEvent:s},boxViewsMarker:{markBoxAsRendered:s,markBoxAsVisible:s,recursivelyMarkBoxAsVisible:s,markBoxAsHidden:s,recursivelyMarkBoxAsHidden:s,trackBoxScroll:s,isBoxInViewport:s},component:{init:s},onData:s,changeParams:s,tween:s,scrollTo:s,edge:{get:u,put:u,post:u},page:{getData:u},registerComponent:s,onDomReady:s,loaded:!0};i(window)}({});</script>
				<script>document.addEventListener("DOMContentLoaded",function(){function e(e){var t=document.createElement("script");t.setAttribute("src",e),document.head.appendChild(t)}window.opbox.initialized||document.querySelectorAll('script[src="https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/opbox-external.js"]').length||e("https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/opbox-external.js"),document.querySelectorAll('script[src="https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/vendors.js"]').length||e("https://assets.allegrostatic.com/opbox-web/1.52.0/scripts/vendors.js")});</script>
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/list/main-f4bf2ab295.m.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/link/main-63d170faa5.m.s.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-links/index__3d551dc8.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-container/3.0.2/styles/index.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-grid/1.6.1/styles/index.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/icon/main-26ef4880db.m.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-social-buttons/index__9948b5b6.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/typography/main-85a33e3503.m.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/button/main-695b7ac606.m.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/heading/main-4a8930fc85.m.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/link/main-083cad0ec5.m.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/metrum/color/main-cfddd4ba57.m.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-rich-text/index__6d21e414.css">
				<link type="text/css" rel="stylesheet" href="https://assets.allegrostatic.com/opbox-skins/styles/metrum-footer-partial-618a953e40.css">
				<script> </script>
				<div data-box-name="metrum-footer-partial" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="metrum-footer-partial" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
					<a name="metrum-footer-partial"></a>
					<div class="
						v2144 opbox-sheet-wrapper
						full-width
						">
						<div class="opbox-sheet
							"
							style="margin-top:48px;background: white"
							>
							<div data-box-name="f-links" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
								<a name="f-links"></a>
								<div class="
									v2144 opbox-sheet-wrapper
									">
									<div class="separator-top-wrapper"><span class="separator-top"></span></div>
									<div class="opbox-sheet
										card
										"
										>
										<div data-box-name="f-links-columns" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
											<a name="f-links-columns"></a>
											<div class="grid">
												<div class="grid__col grid__col--6 grid__col--4@sm grid__col--2@xl">
													<div data-box-name="f-links-column1" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
														<a name="f-links-column1"></a>
														<div class="
															v2144 opbox-sheet-wrapper
															">
															<div class="opbox-sheet
																"
																>
																<div class="header-wrapper">
																	<h3 class="container-header
																		size-4">
																		Allegro
																	</h3>
																</div>
																<div data-box-name="f-links-list1" data-prototype-id="allegro.navigation.links" data-prototype-version="1.0" data-skin-class-name="" data-implementation-version="1.6.0" data-analytics-enabled data-analytics-category="allegro.navigation.links" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
																	<a name="f-links-list1"></a>
																	<div class="
																		_2508c_1J3YM
																		_2508c_b8SA2
																		js-navigation-links
																		">
																		<ul class="
																			_2508c_1WGo-
																			_2508c_1uQS0
																			_1bk3w
																			_40gm3
																			">
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://magazyn.allegro.pl/3333-serwis-allegro-to-nasz-sposob-na-wasze-szybkie-i-wygodne-zakupy-przez-internet"
																					title="O nas"
																					data-analytics-click-custom-index-0="0"
																					data-analytics-clickable
																					>O nas</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://dlakupujacych.allegro.pl/"
																					title="Dla kupujących"
																					data-analytics-click-custom-index-0="1"
																					data-analytics-clickable
																					>Dla kupujących</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/dla-sprzedajacych"
																					title="Dla sprzedających"
																					data-analytics-click-custom-index-0="2"
																					data-analytics-clickable
																					>Dla sprzedających</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://reklama.allegro.pl/?utm_source=internal&amp;utm_medium=footer&amp;utm_campaign=link"
																					title="Reklama"
																					data-analytics-click-custom-index-0="3"
																					data-analytics-clickable
																					>Reklama</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/praca"
																					title="Praca"
																					data-analytics-click-custom-index-0="4"
																					data-analytics-clickable
																					>Praca</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="grid__col grid__col--6 grid__col--4@sm grid__col--2@xl">
													<div data-box-name="f-links-column2" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
														<a name="f-links-column2"></a>
														<div class="
															v2144 opbox-sheet-wrapper
															">
															<div class="opbox-sheet">
																<div class="header-wrapper">
																	<h3 class="container-header
																		size-4">
																		Serwisy
																	</h3>
																</div>
																<div data-box-name="f-links-list2" data-prototype-id="allegro.navigation.links" data-prototype-version="1.0" data-skin-class-name="" data-implementation-version="1.6.0" data-analytics-enabled data-analytics-category="allegro.navigation.links" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
																	<a name="f-links-list2"></a>
																	<div class="
																		_2508c_1J3YM
																		_2508c_b8SA2
																		js-navigation-links
																		">
																		<ul class="
																			_2508c_1WGo-
																			_2508c_1uQS0
																			_1bk3w
																			_40gm3
																			">
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/strefamarek"
																					title="Strefa marek"
																					data-analytics-click-custom-index-0="0"
																					data-analytics-clickable
																					>Strefa marek</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/artykuly"
																					title="Artykuły"
																					data-analytics-click-custom-index-0="1"
																					data-analytics-clickable
																					>Artykuły</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://archiwum.allegro.pl/"
																					title="Archiwum Allegro"
																					data-analytics-click-custom-index-0="2"
																					data-analytics-clickable
																					>Archiwum Allegro</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://monety.allegro.pl/"
																					title="Monety Allegro"
																					data-analytics-click-custom-index-0="3"
																					data-analytics-clickable
																					>Monety Allegro</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://karty.allegro.pl/"
																					title="Karty Allegro"
																					data-analytics-click-custom-index-0="4"
																					data-analytics-clickable
																					>Karty Allegro</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://ads.allegro.pl/?utm_source=allegro_internal&amp;utm_campaign=ads-promo&amp;utm_medium=allegro_footer"
																					title="Allegro Ads"
																					data-analytics-click-custom-index-0="5"
																					data-analytics-clickable
																					>Allegro Ads</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="grid__col grid__col--6 grid__col--4@sm grid__col--2@xl">
													<div data-box-name="f-links-column3" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
														<a name="f-links-column3"></a>
														<div class="
															v2144 opbox-sheet-wrapper
															">
															<div class="opbox-sheet
																"
																>
																<div class="header-wrapper">
																	<h3 class="container-header
																		size-4">
																		Centrum pomocy
																	</h3>
																</div>
																<div data-box-name="f-links-list3" data-prototype-id="allegro.navigation.links" data-prototype-version="1.0" data-skin-class-name="" data-implementation-version="1.6.0" data-analytics-enabled data-analytics-category="allegro.navigation.links" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
																	<a name="f-links-list3"></a>
																	<div class="
																		_2508c_1J3YM
																		_2508c_b8SA2
																		js-navigation-links
																		">
																		<ul class="
																			_2508c_1WGo-
																			_2508c_1uQS0
																			_1bk3w
																			_40gm3
																			">
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/pomoc"
																					title="Pomoc"
																					data-analytics-click-custom-index-0="0"
																					data-analytics-clickable
																					>Pomoc</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/regulamin/pl/polityka-plikow-cookies"
																					title="Informacja o cookies"
																					data-analytics-click-custom-index-0="1"
																					data-analytics-clickable
																					>Informacja o cookies</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/regulamin/pl"
																					title="Regulamin"
																					data-analytics-click-custom-index-0="2"
																					data-analytics-clickable
																					>Regulamin</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/mapa-strony"
																					title="Mapa strony"
																					data-analytics-click-custom-index-0="3"
																					data-analytics-clickable
																					>Mapa strony</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="grid__col grid__col--6 grid__col--4@sm grid__col--2@xl">
													<div data-box-name="f-links-column4" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
														<a name="f-links-column4"></a>
														<div class="
															v2144 opbox-sheet-wrapper
															">
															<div class="opbox-sheet
																"
																>
																<div class="header-wrapper">
																	<h3 class="container-header
																		size-4">
																		Na czasie
																	</h3>
																</div>
																<div data-box-name="f-links-list4" data-prototype-id="allegro.navigation.links" data-prototype-version="1.0" data-skin-class-name="" data-implementation-version="1.6.0" data-analytics-enabled data-analytics-category="allegro.navigation.links" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
																	<a name="f-links-list4"></a>
																	<div class="
																		_2508c_1J3YM
																		_2508c_b8SA2
																		js-navigation-links
																		">
																		<ul class="
																			_2508c_1WGo-
																			_2508c_1uQS0
																			_1bk3w
																			_40gm3
																			">
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/do-domu-oczyszczacze-powietrza-256842"
																					title="Oczyszczacze powietrza"
																					data-analytics-click-custom-index-0="0"
																					data-analytics-clickable
																					>Oczyszczacze powietrza</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/tapety-fototapety-68631"
																					title="Fototapety"
																					data-analytics-click-custom-index-0="1"
																					data-analytics-clickable
																					>Fototapety</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/do-samochodow-osobowych-letnie-257689"
																					title="Opony letnie"
																					data-analytics-click-custom-index-0="2"
																					data-analytics-clickable
																					>Opony letnie</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/tv-i-video-telewizory-257732?format-hd=4K+UHD"
																					title="Telewizory 4K"
																					data-analytics-click-custom-index-0="3"
																					data-analytics-clickable
																					>Telewizory 4K</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/alkomaty-alkomaty-257405"
																					title="Alkomaty"
																					data-analytics-click-custom-index-0="4"
																					data-analytics-clickable
																					>Alkomaty</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/rowery-i-akcesoria-rowery-16420"
																					title="Rowery"
																					data-analytics-click-custom-index-0="5"
																					data-analytics-clickable
																					>Rowery</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="grid__col grid__col--6 grid__col--4@sm grid__col--2@xl">
													<div data-box-name="f-links-column5" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
														<a name="f-links-column5"></a>
														<div class="
															v2144 opbox-sheet-wrapper
															">
															<div class="opbox-sheet
																"
																>
																<div class="header-wrapper">
																	<h3 class="container-header
																		size-4">
																		Nowości
																	</h3>
																</div>
																<div data-box-name="f-links-list5" data-prototype-id="allegro.navigation.links" data-prototype-version="1.0" data-skin-class-name="" data-implementation-version="1.6.0" data-analytics-enabled data-analytics-category="allegro.navigation.links" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
																	<a name="f-links-list5"></a>
																	<div class="
																		_2508c_1J3YM
																		_2508c_b8SA2
																		js-navigation-links
																		">
																		<ul class="
																			_2508c_1WGo-
																			_2508c_1uQS0
																			_1bk3w
																			_40gm3
																			">
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/opony-do-samochodow-osobowych-257688?string=Michelin%20Primacy%204"
																					title="Michelin Primacy 4"
																					data-analytics-click-custom-index-0="0"
																					data-analytics-clickable
																					>Michelin Primacy 4</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/sony-xperia-xz2-258008"
																					title="Sony XPERIA XZ2"
																					data-analytics-click-custom-index-0="1"
																					data-analytics-clickable
																					>Sony XPERIA XZ2</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/gry-na-konsole-82326?string=EA%20Sports%20UFC%203"
																					title="EA Sports UFC 3"
																					data-analytics-click-custom-index-0="2"
																					data-analytics-clickable
																					>EA Sports UFC 3</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/lg-v30-257584"
																					title="LG V30"
																					data-analytics-click-custom-index-0="3"
																					data-analytics-clickable
																					>LG V30</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/samsung-galaxy-s9-257671"
																					title="Samsung Galaxy S9"
																					data-analytics-click-custom-index-0="4"
																					data-analytics-clickable
																					>Samsung Galaxy S9</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/kategoria/xiaomi-redmi-5-258007"
																					title="Xiaomi Redmi 5"
																					data-analytics-click-custom-index-0="5"
																					data-analytics-clickable
																					>Xiaomi Redmi 5</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="grid__col grid__col--6 grid__col--4@sm grid__col--2@xl">
													<div data-box-name="f-links-column6" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
														<a name="f-links-column6"></a>
														<div class="
															v2144 opbox-sheet-wrapper
															">
															<div class="opbox-sheet
																"
																>
																<div class="header-wrapper">
																	<h3 class="container-header
																		size-4">
																		Wyjątkowe okazje
																	</h3>
																</div>
																<div data-box-name="f-links-list6" data-prototype-id="allegro.navigation.links" data-prototype-version="1.0" data-skin-class-name="" data-implementation-version="1.6.0" data-analytics-enabled data-analytics-category="allegro.navigation.links" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
																	<a name="f-links-list6"></a>
																	<div class="
																		_2508c_1J3YM
																		_2508c_b8SA2
																		js-navigation-links
																		">
																		<ul class="
																			_2508c_1WGo-
																			_2508c_1uQS0
																			_1bk3w
																			_40gm3
																			">
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/zobacz/ratyzero"
																					title="Raty 0%"
																					data-analytics-click-custom-index-0="0"
																					data-analytics-clickable
																					>Raty 0%</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/strefaokazji"
																					title="Okazje do -70%"
																					data-analytics-click-custom-index-0="1"
																					data-analytics-clickable
																					>Okazje do -70%</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/strefa/ogrodowa/ogrod-wiosna"
																					title="Ogród wiosną"
																					data-analytics-click-custom-index-0="2"
																					data-analytics-clickable
																					>Ogród wiosną</a>
																			</li>
																			<li class="_rryvz _2su03">
																				<a
																					class="_iglxu"
																					href="https://allegro.pl/inspiracje/dzien-liczby-pi"
																					title="Dzień Liczby Pi"
																					data-analytics-click-custom-index-0="3"
																					data-analytics-clickable
																					>Dzień Liczby Pi</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div data-box-name="f-social" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
								<a name="f-social"></a>
								<div class="
									v2144 opbox-sheet-wrapper
									">
									<div class="separator-top-wrapper"><span class="separator-top"></span></div>
									<div class="opbox-sheet
										card
										"
										>
										<div data-box-name="f-social-columns" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
											<a name="f-social-columns"></a>
											<div class="grid disable-horizontal-space grid--no-gutter">
												<div class="grid__col grid__col--12 grid__col--6@lg">
													<div data-box-name="f-social-icons" data-prototype-id="allegro.socialButtons" data-prototype-version="1.2" data-skin-class-name="social-buttons" data-implementation-version="0.7.1" data-analytics-enabled data-analytics-category="allegro.socialButtons" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
														<a name="f-social-icons"></a>
														<div class="
															_1J2XJ
															">
															<svg width="0" height="0">
																<filter id="social-filter-teal" color-interpolation-filters="sRGB">
																	<feColorMatrix values="0 0 0 0 0.4625 0 0 0 0 0.4625 0 0 0 0 0.4625 0 0 0 1 0"/>
																</filter>
															</svg>
															<ul
																class="_3hlgP"
																>
																<li>
																	<a class="
																		_vm9q5
																		_1jwo4
																		_3MK7i
																		"
																		href="https://www.facebook.com/allegro" target="_blank" data-analytics-clickable
																		>Facebook</a>
																</li>
																<li>
																	<a class="
																		_vm9q5
																		_1w8y6
																		_3MK7i
																		"
																		href="https://www.linkedin.com/company/grupa-allegro" target="_blank" data-analytics-clickable
																		>LinkedIn</a>
																</li>
																<li>
																	<a class="
																		_vm9q5
																		_1cc80
																		_3MK7i
																		"
																		href="https://www.instagram.com/allegropl/" target="_blank" data-analytics-clickable
																		>Instagram</a>
																</li>
																<li>
																	<a class="
																		_vm9q5
																		_glmoi
																		_3MK7i
																		"
																		href="https://www.pinterest.com/allegropl/" target="_blank" data-analytics-clickable
																		>Pinterest</a>
																</li>
																<li>
																	<a class="
																		_vm9q5
																		_5koqz
																		_3MK7i
																		"
																		href="https://www.youtube.com/allegro" target="_blank" data-analytics-clickable
																		>YouTube</a>
																</li>
																<li>
																	<a class="
																		_vm9q5
																		_av75c
																		_3MK7i
																		"
																		href="https://charytatywni.allegro.pl/" target="_blank" data-analytics-clickable
																		>Charytatywni Allegro</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="grid__col grid__col--12 grid__col--6@lg">
													<div data-box-name="f-social-apps" data-prototype-id="allegro.socialButtons" data-prototype-version="1.2" data-skin-class-name="social-buttons" data-implementation-version="0.7.1" data-analytics-enabled data-analytics-category="allegro.socialButtons" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
														<a name="f-social-apps"></a>
														<div class="
															_1J2XJ
															AOX_C
															">
															<svg width="0" height="0">
																<filter id="social-filter-teal" color-interpolation-filters="sRGB">
																	<feColorMatrix values="0 0 0 0 0.4625 0 0 0 0 0.4625 0 0 0 0 0.4625 0 0 0 1 0"/>
																</filter>
															</svg>
															<ul
																class="_3hlgP"
																>
																<li>
																	<a class="
																		_vm9q5
																		_oe90i
																		_3MK7i
																		_9KQBo
																		_3hd5x
																		"
																		href="https://itunes.apple.com/app/apple-store/id305659772?pt=167136&amp;ct=sg&amp;mt=8" target="_blank" data-analytics-clickable
																		>AppStore</a>
																</li>
																<li>
																	<a class="
																		_vm9q5
																		_1jbyw
																		_3MK7i
																		ue1vq
																		_3hd5x
																		"
																		href="https://play.google.com/store/apps/details?id=pl.allegro&amp;referrer=utm_source%3Dsg%26utm_medium%3Dlink" target="_blank" data-analytics-clickable
																		>GooglePlay</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div data-box-name="f-base" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
								<a name="f-base"></a>
								<div class="
									v2144 opbox-sheet-wrapper
									full-width
									">
									<div class="opbox-sheet
										"
										style="background: #3a4e58"
										>
										<div data-box-name="f-base-wrapper" data-prototype-id="layout.container" data-prototype-version="7.0" data-skin-class-name="" data-implementation-version="3.0.2" data-analytics-category="layout.container" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
											<a name="f-base-wrapper"></a>
											<div class="
												v2144 opbox-sheet-wrapper
												">
												<div class="opbox-sheet
													card
													"
													>
													<div data-box-name="f-base-columns" data-prototype-id="layout.grid" data-prototype-version="5.0" data-skin-class-name="" data-implementation-version="1.6.1" data-analytics-category="layout.grid" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
														<a name="f-base-columns"></a>
														<div class="grid disable-horizontal-space">
															<div class="grid__col grid__col--6">
																<div data-box-name="f-base-info" data-prototype-id="allegro.richText" data-prototype-version="1.0" data-skin-class-name="" data-implementation-version="2.0.1" data-analytics-enabled data-analytics-category="allegro.richText" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
																	<a name="f-base-info"></a>
																	<div class="_5c3c4_JckUR rich-text">
																		<p class="_1akfs _5c3c4_3eRqx"><span style="color:#ffffff;">Korzystanie z serwisu oznacza akceptację</span> <a href="http://allegro.pl/regulamin/pl" target="_blank" rel="follow,noopener" data-analytics-clickable class="_rvljx" role>regulaminu</a></p>
																	</div>
																</div>
															</div>
															<div class="grid__col grid__col--6">
																<div data-box-name="f-base-logo" data-prototype-id="allegro.richText" data-prototype-version="1.0" data-skin-class-name="" data-implementation-version="2.0.1" data-analytics-enabled data-analytics-category="allegro.richText" data-analytics-tags="" data-analytics-groups="%5B%22allegro.footer%22%5D">
																	<a name="f-base-logo"></a>
																	<div class="_5c3c4_JckUR rich-text">
																		<p class="_1akfs _5c3c4_3eRqx" style="text-align:right;"><a href="https://allegro.pl/" target="_self" data-analytics-clickable class="_rvljx" rel="follow,noopener" role><img class="_1akfs _5c3c4_1w9JC" src="https://assets.allegrostatic.com/opbox/allegro.pl/playground/Metrum Footer BETA/allegro-1.svg" alt="Allegro" width="116" height="40" /></a></p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script src="https://assets.allegrostatic.com/opbox-links/index__09fe6a46.js"></script>
				<script src="https://assets.allegrostatic.com/opbox-links/navLinks__17d7c82a.js"></script>
			</div>
		</div>
		<script>
			headerJS(['require', headerJSModuleConfig.path], function (require) {
			    require([headerJSModuleConfig.name], function (header) {
			        header();
			    });
			});
			var pagesJS = headerJS;
		</script>
		<script async defer src="http://cdn.allegrostatic.com/fragments/showitem/js/app-wp-4a484717.js"></script><script type="text/javascript" src="http://allegro.pl/idefix/js/idefix-init-2ce275b02a1c9b750ac0.js" async></script>
		<div id="variants-modal" class="variants-modal modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
					</div>
					<button class="m-modal__close-button" data-dismiss="modal">zamknij</button>
				</div>
			</div>
		</div>
		<style>
			.carousel-container li.dummy-padding-for-render{padding-bottom:1px}.carousel-container li .metrum-icon{display:inline-block;text-decoration:none;overflow:hidden;position:relative;top:3px;margin-top:-6px;width:18px;height:18px}.carousel-container li .metrum-icon.standard-icon{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 96 96' color='%23ff5a00' fill='%23ffffff'%3E%3Cpath fill='currentColor' d='M8,40H30L44.006,75.138Zm26,0H63L48,75Zm34,0H89L52,75ZM32,16H43L29.969,36.022,12,36Zm15.132.037,1.993,0,13,20h-28Zm5.993,0h11l20,20h-17Zm-21.971-4L2,40,46.048,84h4.021L94,40,64.963,12.04Z'/%3E%3C/svg%3E")}
		</style>
		<style>
			/* color palette */.carousel-container{display:block;overflow:hidden;width:100%;position:relative;margin-bottom:20px;transition:min-height .4s ease-in-out;height:auto;min-height:334px}@-webkit-keyframes fadeIn{from{opacity:0}to{opacity:1}}@keyframes fadeIn{from{opacity:0}to{opacity:1}}.carousel-container h2 a{text-decoration:none;color:#303030}.carousel-container h2 a:hover{text-decoration:underline}.carousel-container h2 a:hover span{text-decoration:inherit}.carousel-container.init{background:#fff}.carousel-container.empty{height:0;min-height:0;background:none}.no-cssgradients .carousel-container.empty.separator-top,.no-cssgradients .carousel-container.empty.separator-bottom{border:none}.carousel-container.empty:after{display:none}.carousel-container .carousel,.no-overflow.carousel-container .carousel{width:100%;position:relative;padding:0 40px}.touch .carousel-container .carousel,.ie-mobile.carousel-container .carousel{padding:0}.carousel-container .stripe-container,.no-overflow.carousel-container .stripe-container{display:block;width:100%;overflow:hidden}.touch .carousel-container .stripe-container,.ie-mobile.carousel-container .stripe-container{overflow-x:auto;-webkit-overflow-scrolling:touch;z-index:0}.carousel-container .stripe,.no-overflow.carousel-container .stripe{position:relative;display:block;left:0;width:200%;height:246px;margin:0 0 20px;padding:0;font-size:0;overflow:hidden;transition:-webkit-transform .3s ease-in-out;transition:-moz-transform .3s ease-in-out;transition:transform .3s ease-in-out;-webkit-backface-visibility:hidden}.touch .carousel-container .stripe,.ie-mobile.carousel-container .stripe{-webkit-transform:none !important;-moz-transform:none !important;-ms-transform:none !important;transform:none !important}.carousel-container .carousel-navigation,.no-overflow.carousel-container .carousel-navigation{position:absolute;display:block;top:50%;margin-top:-45px;width:40px;height:50px;z-index:100;text-indent:100%;white-space:nowrap;overflow:hidden}.touch .carousel-container .carousel-navigation,.ie-mobile.carousel-container .carousel-navigation{display:none}.carousel-container .carousel-navigation i{position:absolute;display:block;top:12px;left:10px;width:17px;height:26px;margin:0;outline:0;background:url('http://allegro.pl/carouselService/static/icons-sprite-bea754de71.png') 0 0 no-repeat transparent;text-indent:100%;white-space:nowrap;overflow:hidden}.carousel-container .carousel-navigation.inactive{cursor:default}.carousel-container .carousel-navigation.inactive i{opacity:.4}.carousel-container .carousel-navigation.previous{left:0}.carousel-container .carousel-navigation.previous i{background-position:-202px -18px}.carousel-container .carousel-navigation.next{right:0}.carousel-container .carousel-navigation.next i{left:auto;right:10px;background-position:-218px -18px}.carousel-container li{width:205px;height:244px;padding:0;float:left;text-align:left;overflow:hidden;margin-right:5px;padding-right:5px;-webkit-animation:fadeIn .4s;animation:fadeIn .4s}.carousel-container li:last-child{margin-right:0}.carousel-container li:last-child:after{display:none}.carousel-container .more{position:absolute;top:10px;right:10px;font-size:13px}.carousel-container.last-visited .placeholder{display:none}.carousel-container.last-visited.empty{height:220px}.carousel-container.last-visited.empty:after{display:block}.carousel-container.last-visited.empty .carousel{display:none}.carousel-container.last-visited.empty .placeholder{display:block;position:absolute;top:0;bottom:0;height:100px;margin:auto;width:100%;color:#a6a6a6}.carousel-container.last-visited.empty .placeholder span,.carousel-container.last-visited.empty .placeholder small{display:block;text-align:center;padding:3px}.carousel-container.last-visited.empty .placeholder span{font-size:26px;font-weight:bold}.carousel-container.last-visited.empty .placeholder small{font-size:14px}.carousel-container.grey-theme.init{background:#fff;background:-moz-linear-gradient(left, #ffffff 0, #f8f8f8 10%, #f8f8f8 90%, #ffffff 100%);background:linear-gradient(to right, #ffffff 0, #f8f8f8 10%, #f8f8f8 90%, #ffffff 100%)}.carousel-container.grey-theme li{border:1px solid #ddd;overflow:visible;margin-right:10px;padding:0;width:200px}.carousel-container.grey-theme li:last-child{margin-right:0}.carousel-container.grey-theme li .offer-box{width:100%;height:100%}.carousel-container.grey-theme li.separator-right:after{display:none}.carousel-container.grey-theme li .offer-box{background:#fff}.carousel-container.grey-theme li .price{bottom:10px}@media screen and (min-width:1140px){.carousel-container .stripe{transition:-webkit-transform .6s ease-in-out;transition:-moz-transform .6s ease-in-out;transition:transform .6s ease-in-out}}@media screen and (max-width:600px){.contains-more-link .carousel{padding-top:16px}.contains-more-link .more{left:0;right:auto;top:50px}}.carousel-container{font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;font-size:13px;line-height:1.25}.carousel-container *{-moz-box-sizing:border-box;box-sizing:border-box}.carousel-container *:before,.carousel-container *:after{-moz-box-sizing:border-box;box-sizing:border-box}.carousel-container html{font-size:62.5%;-webkit-tap-highlight-color:rgba(0,0,0,0)}.carousel-container body{font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;font-size:13px;line-height:1.42857143;color:#303030;background-color:#fff}.carousel-container input,.carousel-container button,.carousel-container select,.carousel-container textarea{font-family:inherit;font-size:inherit;line-height:inherit}.carousel-container a{color:#0083ff;text-decoration:none}.carousel-container a:hover,.carousel-container a:focus{color:#005cb3;text-decoration:underline}.carousel-container a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.carousel-container a:visited{color:#5e42c5}.carousel-container figure{margin:0}.carousel-container img{vertical-align:middle}.carousel-container .img-responsive{display:block;max-width:100%;height:auto}.carousel-container .img-rounded{-moz-border-radius:6px;border-radius:6px}.carousel-container .img-thumbnail{padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;-moz-border-radius:4px;border-radius:4px;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}.carousel-container .img-circle{-moz-border-radius:50%;border-radius:50%}.carousel-container hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.carousel-container .sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.carousel-container section.page-default{margin:20px 0}.carousel-container .status{color:#303030;font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;font-size:13px}.carousel-container .status.status-success i{vertical-align:baseline}.carousel-container .status.status-danger{color:#fe3c00}.carousel-container .status.status-validation-ok{color:#60a006}.carousel-container .didascalia{font-size:11px;color:#7f7f7f}.carousel-container .didascalia-color{color:#7f7f7f}.carousel-container .action-color{color:#ff5a00}.carousel-container .empathic-color{color:#60a006}.carousel-container .strong-color{color:#fe3c00}.carousel-container .base-color{color:#303030}.carousel-container h1,.carousel-container .h1,.carousel-container h2,.carousel-container .h2,.carousel-container h3,.carousel-container .h3,.carousel-container h4,.carousel-container .h4,.carousel-container h5,.carousel-container .h5,.carousel-container h6,.carousel-container .h6{font-weight:700;font-family:inherit;line-height:1.1;color:inherit;margin-top:1em;margin-bottom:1em}.carousel-container h1 small,.carousel-container .h1 small,.carousel-container h2 small,.carousel-container .h2 small,.carousel-container h3 small,.carousel-container .h3 small,.carousel-container h4 small,.carousel-container .h4 small,.carousel-container h5 small,.carousel-container .h5 small,.carousel-container h6 small,.carousel-container .h6 small,.carousel-container h1 .small,.carousel-container .h1 .small,.carousel-container h2 .small,.carousel-container .h2 .small,.carousel-container h3 .small,.carousel-container .h3 .small,.carousel-container h4 .small,.carousel-container .h4 .small,.carousel-container h5 .small,.carousel-container .h5 .small,.carousel-container h6 .small,.carousel-container .h6 .small{font-size:13px;font-weight:normal;line-height:1;color:#7f7f7f}.carousel-container h1 small a:visited,.carousel-container .h1 small a:visited,.carousel-container h2 small a:visited,.carousel-container .h2 small a:visited,.carousel-container h3 small a:visited,.carousel-container .h3 small a:visited,.carousel-container h4 small a:visited,.carousel-container .h4 small a:visited,.carousel-container h5 small a:visited,.carousel-container .h5 small a:visited,.carousel-container h6 small a:visited,.carousel-container .h6 small a:visited,.carousel-container h1 .small a:visited,.carousel-container .h1 .small a:visited,.carousel-container h2 .small a:visited,.carousel-container .h2 .small a:visited,.carousel-container h3 .small a:visited,.carousel-container .h3 .small a:visited,.carousel-container h4 .small a:visited,.carousel-container .h4 .small a:visited,.carousel-container h5 .small a:visited,.carousel-container .h5 .small a:visited,.carousel-container h6 .small a:visited,.carousel-container .h6 .small a:visited{color:#0083ff}.carousel-container h1,.carousel-container .h1{font-size:26px}.carousel-container h2,.carousel-container .h2{font-size:22px}.carousel-container h3,.carousel-container .h3{font-size:18px}.carousel-container h4,.carousel-container .h4{font-size:16px}.carousel-container h5,.carousel-container .h5{font-size:13px}.carousel-container h6,.carousel-container .h6{font-size:13px}@media (max-width:599px){.carousel-container h1,.carousel-container h2,.carousel-container h3,.carousel-container h4{font-size:16px}}.carousel-container .auto-number-headings{counter-reset:auto-number-headings 0}.carousel-container .auto-number-headings .auto-num:before{display:inline;counter-increment:auto-number-headings;content:counter(auto-number-headings) ". ";font-size:118%}.carousel-container p{margin:0 0 10px}.carousel-container .lead{margin-bottom:20px;font-size:16px;font-weight:200;line-height:1.4}@media (min-width:768px){.carousel-container .lead{font-size:21px}}.carousel-container small,.carousel-container .small{font-size:85%}.carousel-container cite{font-style:normal}.carousel-container .text-left{text-align:left}.carousel-container .text-right{text-align:right}.carousel-container .text-center{text-align:center}.carousel-container .text-justify{text-align:justify}.carousel-container .text-muted{color:#999}.carousel-container .text-primary{color:#ff7100}a.carousel-container .text-primary:hover{color:#cc5a00}.carousel-container .text-success{color:#303030}a.carousel-container .text-success:hover{color:#161616}.carousel-container .text-info{color:#31708f}a.carousel-container .text-info:hover{color:#245269}.carousel-container .text-warning{color:#8a6d3b}a.carousel-container .text-warning:hover{color:#66512c}.carousel-container .text-danger{color:#303030}a.carousel-container .text-danger:hover{color:#161616}.carousel-container .bg-primary{color:#fff;background-color:#ff7100}a.carousel-container .bg-primary:hover{background-color:#cc5a00}.carousel-container .bg-success{background-color:#fff}a.carousel-container .bg-success:hover{background-color:#e6e6e6}.carousel-container .bg-info{background-color:#d9edf7}a.carousel-container .bg-info:hover{background-color:#afd9ee}.carousel-container .bg-warning{background-color:#fcf8e3}a.carousel-container .bg-warning:hover{background-color:#f7ecb5}.carousel-container .bg-danger{background-color:#fff}a.carousel-container .bg-danger:hover{background-color:#e6e6e6}.carousel-container .page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}.carousel-container ul,.carousel-container ol{margin-top:0;margin-bottom:10px}.carousel-container ul ul,.carousel-container ol ul,.carousel-container ul ol,.carousel-container ol ol{margin-bottom:0}.carousel-container .list-unstyled{padding-left:0;list-style:none}.carousel-container .list-inline{padding-left:0;list-style:none;margin-left:-5px}.carousel-container .list-inline>li{display:inline-block;padding-left:5px;padding-right:5px}.carousel-container dl{margin-top:0;margin-bottom:20px}.carousel-container dt,.carousel-container dd{line-height:1.42857143}.carousel-container dt{font-weight:bold}.carousel-container dd{margin-left:0}@media (min-width:768px){.carousel-container .dl-horizontal dt{float:left;width:160px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.carousel-container .dl-horizontal dd{margin-left:180px}}.carousel-container abbr[title],.carousel-container abbr[data-original-title]{cursor:help;border-bottom:1px dotted #999}.carousel-container .initialism{font-size:90%;text-transform:uppercase}.carousel-container blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}.carousel-container blockquote p:last-child,.carousel-container blockquote ul:last-child,.carousel-container blockquote ol:last-child{margin-bottom:0}.carousel-container blockquote footer,.carousel-container blockquote small,.carousel-container blockquote .small{display:block;font-size:80%;line-height:1.42857143;color:#999}.carousel-container blockquote footer:before,.carousel-container blockquote small:before,.carousel-container blockquote .small:before{content:'\2014 \00A0'}.carousel-container .blockquote-reverse,.carousel-container blockquote.pull-right{padding-right:15px;padding-left:0;border-right:5px solid #eee;border-left:0;text-align:right}.carousel-container .blockquote-reverse footer:before,.carousel-container blockquote.pull-right footer:before,.carousel-container .blockquote-reverse small:before,.carousel-container blockquote.pull-right small:before,.carousel-container .blockquote-reverse .small:before,.carousel-container blockquote.pull-right .small:before{content:''}.carousel-container .blockquote-reverse footer:after,.carousel-container blockquote.pull-right footer:after,.carousel-container .blockquote-reverse small:after,.carousel-container blockquote.pull-right small:after,.carousel-container .blockquote-reverse .small:after,.carousel-container blockquote.pull-right .small:after{content:'\00A0 \2014'}.carousel-container blockquote:before,.carousel-container blockquote:after{content:""}.carousel-container address{margin-bottom:20px;font-style:normal;line-height:1.42857143}.carousel-container .clearfix:before,.carousel-container .clearfix:after{content:" ";display:table}.carousel-container .clearfix:after{clear:both}.carousel-container .center-block{display:block;margin-left:auto;margin-right:auto}.carousel-container .pull-right{float:right !important}.carousel-container .pull-left{float:left !important}.carousel-container .hide{display:none !important}.carousel-container .show{display:block !important}.carousel-container .invisible{visibility:hidden}.carousel-container .text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.carousel-container .hidden{display:none !important;visibility:hidden !important}.carousel-container .affix{position:fixed}.carousel-container i.icon,.carousel-container i.icon-as,.carousel-container i.icon-fs,.carousel-container i.icon-fb,.carousel-container i.icon-fr,.carousel-container i.icon-pi,.carousel-container i.icon-wr,.carousel-container i.icon-q,.carousel-container i.icon-lp,.carousel-container i.icon-pok,.carousel-container i.icon-completed,.carousel-container i.icon-v,.carousel-container i.icon-escrow,.carousel-container i.icon-payu,.carousel-container i.icon-back{display:inline-block;width:16px;height:16px;background:url('http://allegro.pl/carouselService/static/icons-sprite-bea754de71.png') no-repeat;vertical-align:text-top}.carousel-container i.icon-as{cursor:help}.aukro-ua .carousel-container i.icon-as,.aukro-cz .carousel-container i.icon-as{background-position:-32px 0}.carousel-container i.icon-fs{background-position:-16px 0;cursor:help}.carousel-container i.icon-fb{width:15px;height:14px;vertical-align:top;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAOCAMAAADHVLbdAAAAh1BMVEU2WJk7V503S403S43///+7u7s7V503S41zirY7WZh1i7hPaqP+/v7e4u45UpekpKTAwMDT2eiNoMVed65Xbqzu8PZVcalKaKT6+/2MnsNMXprd3d3i5vDL0+abq8u8xd7W3OrEzN/Cyt/+/v+2wNw4T5I7Vpvo6/Tu8ffn6vLS1+c3TI84TpEyWXaDAAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfdBRQKDAY9roUGAAAAUElEQVR42m3LuwqAMBBE0USH2S6VhQiiEnz7/9+ni5CNxFvNKcYVVZKq1YGpoH5n07cDaR6BKXdEN+cGFppXPG3mXX2YTwHk+v7Jf3uzd0U3UBAFDA1btVkAAAAASUVORK5CYII=)}.carousel-container i.icon-fr{background-position:-239px -18px}.carousel-container i.icon-pok{background-position:-64px 0}.carousel-container i.icon-pi{background-position:-255px -18px}.carousel-container i.icon-wr{background-position:-48px 0}.carousel-container i.icon-q{background-position:-80px 0}.carousel-container i.icon-lp{background-position:-112px 0;cursor:help}.carousel-container i.icon-completed{background-position:-144px 0}.carousel-container i.icon-v{background-position:-160px 0;transition-duration:.3s;transition-property:-webkit-transform;transition-property:-moz-transform;transition-property:transform;-webkit-transform:rotate(-180deg);-moz-transform:rotate(-180deg);-ms-transform:rotate(-180deg);transform:rotate(-180deg)}.carousel-container i.icon-v.up{-webkit-transform:rotate(0);-moz-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0)}.carousel-container i.icon-v.thin{background-position:-171px -16px;-moz-background-clip:content-box;background-clip:content-box;padding:1px 2px}.carousel-container i.icon-v.thin.up{background-position:-171px -16px}.carousel-container i.icon-escrow{background-position:-128px 0}.carousel-container i.icon-payu{background-position:-176px 0;width:38px}.carousel-container i.icon-back{width:21px;height:21px;background-position:-275px -3px}.carousel-container span.iconPayu,.carousel-container span.iconEscrow{display:inline-block;width:16px;height:16px;background:transparent url('/carouselService/static/icons-sprite-bea754de71.png') no-repeat;vertical-align:text-top}.carousel-container span.iconPayu span,.carousel-container span.iconEscrow span{display:none}.carousel-container span.iconEscrow{background-position:-214px 0;width:56px}.carousel-container span.iconPayu{background-position:-176px 0;width:38px}.carousel-container .separator{position:relative}.carousel-container .separator:before,.carousel-container .separator:after{content:'';display:block;position:absolute;width:25%}.carousel-container .separator:before{left:0;background:-moz-linear-gradient(left, #ffffff 0, rgba(255,255,255,0) 100%);background:linear-gradient(to right, #ffffff 0, rgba(255,255,255,0) 100%)}.carousel-container .separator:after{right:0;background:-moz-linear-gradient(left, rgba(255,255,255,0) 0, #ffffff 100%);background:linear-gradient(to right, rgba(255,255,255,0) 0, #ffffff 100%)}.carousel-container .separator.separator-top{border-top:1px solid #dcdcdc}.carousel-container .separator.separator-top>p:first-child{margin-top:0}.carousel-container .separator.separator-top:before,.carousel-container .separator.separator-top:after{top:-1px;bottom:auto;height:1px}.carousel-container .separator.separator-bottom{border-bottom:1px solid #dcdcdc}.carousel-container .separator.separator-bottom:before,.carousel-container .separator.separator-bottom:after{top:auto;bottom:-1px;height:1px}.carousel-container .separator.separator-dotted{-moz-border-image:url('..//carouselService/static/border-dotted.png') 1 repeat;-o-border-image:url('..//carouselService/static/border-dotted.png') 1 repeat;border-image:url('..//carouselService/static/border-dotted.png') 1 repeat}.carousel-container .separator.separator-dotted.separator-top{border-width:1px 0 0 0;border-top-style:dashed}.carousel-container .separator.separator-dotted.separator-bottom{border-width:0 0 1px 0;border-bottom-style:dashed}.carousel-container .separator.separator-right:after{top:0;width:1px;height:100%;background:-moz-linear-gradient(top, rgba(255,255,255,0.01), #F2F2F2 10%, #D4D4D4 40%, #D4D4D4 60%, #F2F2F2 90%, rgba(255,255,255,0.01));background:linear-gradient(to bottom, rgba(255,255,255,0.01), #F2F2F2 10%, #D4D4D4 40%, #D4D4D4 60%, #F2F2F2 90%, rgba(255,255,255,0.01))}.carousel-container .separator.separator-right:before{display:none}.no-cssgradients .carousel-container .separator.separator-right{border-right:solid 1px #D4D4D4}.carousel-container .offer-box{display:inline-block;list-style-type:none;width:200px;padding:10px;height:244px;position:relative}.carousel-container .offer-box h3{font-size:13px;margin:5px 0 2px 0;padding:0;font-weight:normal;max-height:51px;overflow:hidden;line-height:16px;padding:2px 0 0;margin:-2px 0 0}.carousel-container .offer-box h3 a{color:#0083ff}.carousel-container .offer-box .photo{text-align:center;display:block;position:relative;width:100%;height:144px;margin:0 0 10px}.carousel-container .offer-box .photo .no-photo,.carousel-container .offer-box .photo img{max-width:100%;max-height:100%;width:auto;height:auto;position:absolute;left:0;right:0;top:0;bottom:0;margin:auto}.carousel-container .offer-box .promo{display:block;position:absolute;top:12px;right:-11px;width:44px;height:24px;padding:1px 4px 0 0;color:#fff;background:#62ab00;font-size:15px;font-weight:bold;text-align:right}.carousel-container .offer-box .promo:after{position:absolute;content:'';width:0;height:0;border-top:8px solid transparent;border-bottom:8px solid transparent;border-left:8px solid #548503;bottom:-11px;right:5px;-webkit-transform:rotate(-135deg);-moz-transform:rotate(-135deg);-ms-transform:rotate(-135deg);transform:rotate(-135deg)}.carousel-container .offer-box .price{font-size:12px;bottom:12px;margin-left:2px;position:absolute}.carousel-container .offer-box .icon-as{position:relative;bottom:1px}.carousel-container .offer-box .icon-fs{margin-left:3px}.carousel-container .offer-box .buy-now{font-size:12px;color:#ff7100;font-weight:normal}.carousel-container .offer-box .price .old{padding-right:10px}.carousel-container img{outline:none;border-style:none}.carousel-container li{-webkit-backface-visibility:hidden;padding-bottom:0}.carousel-container li.dummy-padding-for-render{padding-bottom:1px}.carousel-container li .metrum-icon{display:inline-block;text-decoration:none;overflow:hidden;position:relative;width:18px;height:18px}.carousel-container li .metrum-icon.standard-icon{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 96 96' color='%23ff5a00' fill='%23ffffff'%3E%3Cpath fill='currentColor' d='M8,40H30L44.006,75.138Zm26,0H63L48,75Zm34,0H89L52,75ZM32,16H43L29.969,36.022,12,36Zm15.132.037,1.993,0,13,20h-28Zm5.993,0h11l20,20h-17Zm-21.971-4L2,40,46.048,84h4.021L94,40,64.963,12.04Z'/%3E%3C/svg%3E");top:3px;margin-top:-6px}.carousel-container li .metrum-icon.free-delivery{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 96 96' color='%2306ab4e' fill='%23ffffff'%3E%3Cg fill='currentColor'%3E%3Cpath d='M90.854,44l-8-20H68V12H0v4H64V68H47v.592A11.987,11.987,0,0,0,24.2,68H16V28H8v4h4V72H23.5a12,12,0,0,0,24,0h17a12,12,0,0,0,24,0H96V44ZM35.5,80a8,8,0,1,1,8-8A8.009,8.009,0,0,1,35.5,80Zm41,0a8,8,0,1,1,8-8A8.009,8.009,0,0,1,76.5,80ZM92,68H87.8A11.979,11.979,0,0,0,68,63.539V28H80.146l8,20H92Z'/%3E%3Crect x='4' y='20' width='16' height='4'/%3E%3C/g%3E%3C/svg%3E");top:5px;left:5px}
		</style>
		<script type="text/javascript">
			(function () {
			    !function(e,t){"use strict";e.ajax=t(),"function"==typeof define&&define.amd&&define("ajax",[],function(){return t()})}(this,function(){"use strict";var e=function(){};return e.prototype.isUrlExternal=function(e){var t=new RegExp("^(?:[a-z]+:)?//","i");return t.test(e)},e.prototype.createXHRObject=function(e,t){var n=new XMLHttpRequest,r=this.isUrlExternal(e);return"withCredentials"in n||!r?n.open(t,e,!0):"undefined"!=typeof XDomainRequest?(n=new XDomainRequest,n.open(t,e)):n=null,n},e.prototype.setRequestHeaders=function(e,t){for(var n in e)e.hasOwnProperty(n)&&t.setRequestHeader(n,e[n])},e.prototype.request=function(e){function t(){var e;4!==s.readyState||200!==s.status&&201!==s.status?"undefined"!=typeof XDomainRequest&&s instanceof XDomainRequest?-1!==s.contentType.indexOf("application/json")?r(JSON.parse(s.responseText)):r(s.responseText):4===s.readyState&&o(s.responseText):(e=s.getResponseHeader("Content-Type"),e&&-1!==e.indexOf("application/json")?r(JSON.parse(s.responseText)):r(s.responseText))}var n=e.url,r=e.callback,o=e.errorCallback?e.errorCallback:function(){},a=e.params?e.params:null,s=this.createXHRObject(n,e.method);void 0===s.onload?s.onreadystatechange=t:s.onload=t,s.onerror=function(){o()},this.setRequestHeaders(e.headers,s),a&&(a=this.dataSerializer(e,s)),s.send(a)},e.prototype.dataSerializer=function(e,t){return e.dataSerializer?e.dataSerializer(e.params):(t.setRequestHeader("Content-Type","application/json;charset=utf-8"),JSON.stringify(e.params))},e.prototype.get=function(e){e.method="GET",this.request(e)},e.prototype.post=function(e){e.method="POST",this.request(e)},e.prototype.put=function(e){e.method="PUT",this.request(e)},e.prototype.delete=function(e){e.method="DELETE",this.request(e)},e});
			    !function(e,t){"use strict";e.cookiesInterface=t(),"function"==typeof define&&define.amd&&define("cookies-interface",[],function(){return t()})}(this,function(){"use strict";var e=function(){};return e.prototype.set=function(e,t,n,r){var i=new Date;i.setTime(i.getTime()+24*n*60*60*1e3);var o="; expires="+i.toUTCString(),c=r?"; path="+r:"";document.cookie=e+"="+t+c+o},e.prototype.get=function(e){var t=e+"=",n=document.cookie;n=n.split(";");for(var r=0;r<n.length;r++){for(var i=n[r];" "===i.charAt(0);)i=i.substring(1);if(-1!==i.indexOf(t))return this.parse(i.substring(t.length,i.length))}return""},e.prototype.parse=function(e){var t=/\+/g;0===e.indexOf('"')&&(e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return decodeURIComponent(e.replace(t," "))}catch(n){}},e});
			    !function(e,t){"use strict";e.VelaCarousel=t(window.ajax),"function"==typeof define&&define.amd&&define("VelaCarousel",["ajax"],function(e){return t(e)})}(this,function(e){function t(){function t(){i(),b(),g(),K.itemInterval&&!K.isMobile&&(c(),u()),a()||(et=-it*$,m(),r()),D("resize")}function n(){clearInterval(tt),tt=setTimeout(t,100)}function i(){var e=j.getBoundingClientRect();J=e.width?e.width:e.right-e.left}function a(){return _.length<=nt}function r(){return at?(H.style.left=et+"px",void 0):(H.style.webkitTransform="translateX("+et+"px)",H.style.MozTransform="translateX("+et+"px)",H.style.msTransform="translateX("+et+"px)",H.style.OTransform="translateX("+et+"px)",H.style.transform="translateX("+et+"px)",void 0)}function o(e,t){var n=F.querySelector(".carousel-navigation"+e);if(n.className.match(/inactive/i)){if(t)return;return n.className=n.className.replace(/\sinactive/gi,""),void 0}t&&(n.className=n.className+" inactive")}function c(){Q=1e3*K.itemInterval*nt}function s(){return rt?(rt=!1,et=0,v(),r(),o(".next",!1),o(".previous",!0),void 0):(f(),m(),v(),r(),void 0)}function l(){clearInterval(U)}function u(){c(),l(),U=setInterval(s,Q)}function m(){return a()?(et=0,rt=!0,o(".previous",!0),o(".next",!0),void 0):J-G>et?(et=J-G,rt=!0,o(".previous",!1),o(".next",!0),void 0):et>=0?(et=0,o(".next",!1),o(".previous",!0),void 0):(o(".previous",!1),o(".next",!1),void 0)}function v(){it=Math.floor(Math.abs(et)/$)}function f(){et-=nt*$}function d(){et+=nt*$}function p(e,t,n){var i=300;setTimeout(function(){if(n)for(var i=0;i<e.length;i++)e[i].classList.add(t);else for(var a=0;a<e.length;a++)e[a].classList.remove(t)},i)}function h(e){var t="dummy-padding-for-render";if(e.length&&"object"==typeof e[0].classList)return e[0].classList.contains(t)?p(e,t,!1):p(e,t,!0)}function w(e){var t=e.currentTarget?e.currentTarget:e.srcElement;h(_),e.preventDefault?e.preventDefault():e.returnValue=!1,a()||(t.className.match(/next/i)?f():d(),m(),v(),r(),S("click"),L(),D("navigationClick"))}function y(e){R=e?e:K.items;var t,n=document.createDocumentFragment(),i=document.createElement("div");if(!ot){if(R.length<1)return F.className=F.className+" empty",void 0;for(var a=0;a<R.length;a++){var r;i.innerHTML=K.template(R[a]),r=i.querySelector("li"),n.appendChild(r),i.innerHTML=""}H.appendChild(n),B(),t=_[_.length-1],t.className=t.className+" last";var o=document.createEvent("CustomEvent");o.initCustomEvent("buildItemsListCompleted",!1,!1,{}),F.dispatchEvent(o)}}function g(){nt=Math.floor((J+W)/$),nt=nt>1?nt:1}function b(){_=H.querySelectorAll("li");var e=_[0].getBoundingClientRect();W=document.documentElement.currentStyle?parseInt(_[0].currentStyle.marginRight,10):parseInt(window.getComputedStyle(_[0],null).marginRight,10),$=e.width?W+e.width:W+e.right-e.left,G=$*_.length-W,i(),H.style.width=G+"px",g(),m()}function E(e){at=!0;for(var t=0;t<e.length;t++)e[t].attachEvent("onclick",w);window.attachEvent("resize",n),K.itemInterval&&!K.isMobile&&(H.attachEvent("mouseover",l),H.attachEvent("mouseout",u))}function C(){var e=document.querySelectorAll(K.el+" .carousel-navigation");if(F.className=F.className+" init",!document.addEventListener)return E(e),void 0;for(var t=0;t<e.length;t++)e[t].addEventListener("click",w,!1);j.addEventListener("scroll",z,!1),window.addEventListener("resize",n,!1),K.itemInterval&&!K.isMobile&&(H.addEventListener("mouseover",l,!1),H.addEventListener("mouseout",u,!1))}function x(){F.className=window.navigator.userAgent.match(/Android ([0-9]+)/)&&RegExp.$1<3?F.className+" no-overflow":F.className+" overflow"}function T(){navigator.userAgent.match(/IEMobile/)&&(F.className=F.className+" ie-mobile")}function k(){var e,t,n=document.createElement("div"),i={transition:"transitionend",OTransition:"otransitionend",MozTransition:"transitionend",WebkitTransition:"webkitTransitionEnd"};for(e in i)if(i.hasOwnProperty(e)&&n.style[e]!==t)return i[e]}function I(e){if("height"===e.propertyName||"min-height"===e.propertyName){var t=document.createEvent("CustomEvent");t.initCustomEvent("resize",!1,!1,null),window.dispatchEvent(t)}}function M(){if(document.addEventListener){var e=k();F.addEventListener(e,I,!1)}}function N(e){e=parseInt(e),!X||!K||0>e||"function"!=typeof K.itemViewCallback||K.itemViewCallback(X[e])}function L(){if(X)for(var e=A(et,$,J),t=e.firstDisplayed;t<e.firstDisplayed+e.displayedCount;t++)if(X[t]&&-1===Z.indexOf(X[t])){Z.push(X[t]),N(t);var n={carouselItemNumber:t,itemTitle:X[t].querySelector("h3 > a > span").innerHTML};X[t].getAttribute("data-analytics-custom-id")&&(n.analyticsCustomId=X[t].getAttribute("data-analytics-custom-id")),S("itemView",n)}}function V(e){return"function"==typeof window.cm&&K.cm&&K.cm.activeEvents.itemViewInOpBoxFormat&&K.cm.activeEvents.itemViewInOpBoxFormat.enabled&&"itemView"===e}function S(e,t){if(V(e)){var n=K.cm.activeEvents.itemViewInOpBoxFormat.suffix;t.viewData.forEach(function(e){window.cm("send","event",{category:K.cm.category,action:"itemView",label:"vela-carousel"+n,value:K.cm.value,customParams:e})})}if("undefined"!=typeof window.cm&&K.cm&&K.cm.activeEvents[e]){var i,a={cat:K.cm.category,a:"carousel_"+e,lab:K.cm.carouselId+"_"+K.cm.uniqueId,v:K.cm.value};if(K.cm.customParams||t){var r=K.cm.customParams;i=function(){var e;if(e=r&&"function"==typeof r&&r.apply(this,arguments)||{},t)for(var n in t)t.hasOwnProperty(n)&&(e[n]=t[n]);return e}(),window.cm.event&&window.cm.event(a,i)}else window.cm.event&&window.cm.event(a);"function"==typeof window.cm&&cm("send@","event",{category:a.cat,action:a.a,label:a.lab,value:a.v,customParams:i||null})}}function D(e){if(R){var t=A(et,$,J);q(R,e,t.firstDisplayed,t.displayedCount)}}function q(e,t,n,i){for(var a=[],r=0;i>r;r++){var o=n+r;if(e[o]&&ct[o]!==!0){N(o),ct[o]=!0;var c=e[o].viewData;c&&a.push(c)}}a.length&&S("itemView",{source:t,viewData:a})}function A(e,t,n){var i=.1*t,a=Math.abs(e)%t;return i>a?{displayedCount:Math.floor((n+i)/t),firstDisplayed:Math.ceil((Math.abs(e)-i)/t)}:{displayedCount:Math.floor((n+i-(t-a))/t),firstDisplayed:Math.ceil(Math.abs(e)/t)}}function O(){et=-j.scrollLeft,S("swipe"),D("swipe")}function z(){clearTimeout(Y),Y=setTimeout(O,100)}function P(t){if(K=t,K.parser=K.parser?K.parser:function(e){return e},K.errorCallback=K.errorCallback?K.errorCallback:function(e){return e},K.cm&&(K.cm.activeEvents=K.cm.activeEvents||st),F=document.querySelector(K.el),j=F.querySelector(".stripe-container"),H=j.querySelector(".stripe"),M(),x(),T(),o(".previous",!0),K.fallback&&K.fallbackTime&&setTimeout(function(){ot=!0,K.fallback()},K.fallbackTime),K.url){var n=new e;return n.get({url:K.url,headers:K.headers||{},callback:function(e){y(K.parser(e))},errorCallback:K.errorCallback}),void 0}return K.items&&K.template?(y(),void 0):(X=F.querySelectorAll(".stripe > li"),B(),L(),void 0)}function B(){b(),C(),K.itemInterval&&!K.isMobile&&u(),D("init")}var R,X,F,j,H,_,W,$,G,J,K,Q,U,Y,Z=[],et=0,tt=null,nt=1,it=0,at=!1,rt=!1,ot=!1,ct=[],st={itemView:!1,swipe:!0,click:!0};return{init:P}}return t});
			    !function(){(window.CST=window.CST||{})["default.html"]=function(obj){function print(){__p+=__j.call(arguments,"")}obj||(obj={});var __t,__p="",__j=Array.prototype.join;with(obj)__p+='<li class="separator separator-right">\n    <div class="offer-box  ',sponsored&&(__p+="sponsored"),__p+='">\n        <a class="photo ',""===imageUrl&&(__p+="no-photo"),__p+='" title="'+(null==(__t=name)?"":__t)+'" href="'+(null==(__t=url)?"":__t)+'">\n            ',""!==imageUrl?(__p+="\n            ",__p+=sponsored?'\n            <img width="128" height="96" alt="'+(null==(__t=name)?"":__t)+'" src="'+(null==(__t=imageUrl)?"":__t)+'">\n            ':'\n            <img width="192" height="144" alt="'+(null==(__t=name)?"":__t)+'" src="'+(null==(__t=imageUrl)?"":__t)+'">\n            ',__p+="\n            "):__p+='\n            <span class="no-photo"></span>\n            ',__p+="\n        </a>\n        ",sponsored&&(__p+='\n        <div class="sponsored-label">\n        <span class="didascalia">\n            '+(null==(__t=lang.sponsored)?"":__t)+'&nbsp;<a href="http://ads.allegro.pl" target="_blank"><i class="icon icon-q"></i></a>\n        </span>\n        </div>\n        '),__p+='\n        <h3>\n            <a href="'+(null==(__t=url)?"":__t)+'" title="'+(null==(__t=name)?"":__t)+'">\n                <span>'+(null==(__t=name)?"":__t)+'</span>\n            </a>\n        </h3>\n        <span class="price">\n            ',buyNowPrice&&isBuyNow?__p+='\n                <span class="buy-now">'+(null==(__t=lang.buyNow)?"":__t)+"&nbsp;</span><strong>"+(null==(__t=buyNowPrice)?"":__t)+"</strong>\n            ":bidPrice&&(__p+="\n                <strong>"+(null==(__t=bidPrice)?"":__t)+"</strong>\n            "),__p+="\n            ",freeShipping&&(__p+='\n                <i class="icon icon-fs"></i>\n            '),__p+="\n        </span>\n    </div>\n</li>\n";return __p}}();
			    !function(){(window.CST=window.CST||{})["bargain.html"]=function(obj){function print(){__p+=__j.call(arguments,"")}obj||(obj={});var __t,__p="",__j=Array.prototype.join;with(obj)__p+='<li class="separator separator-right">\n    <div class="offer-box">\n        <a class="photo" href="'+(null==(__t=url)?"":__t)+'">\n            <img src="'+(null==(__t=imageUrl)?"":__t)+'" alt="'+(null==(__t=imageAlt)?"":__t)+'">\n            <span class="promo sprite">-'+(null==(__t=percentage)?"":__t)+'%</span>\n        </a>\n        <h3>\n            <a href="'+(null==(__t=url)?"":__t)+'">\n                <span>'+(null==(__t=name)?"":__t)+'</span>\n            </a>\n        </h3>\n        <span class="price">\n            <del class="didascalia-color">'+(null==(__t=regularPrice)?"":__t)+'</del>\n            <strong class="empathic-color">'+(null==(__t=specialPrice)?"":__t)+"</strong>\n            ",freeShipping&&(__p+='\n                <i class="icon-fs"></i>\n            '),__p+="\n        </span>\n    </div>\n</li>\n";return __p}}();
			    !function(){"use strict";window.CarouselsUtils={sessionUID:16777216*(1+Math.random())|0,getUIDForSession:function(){return this.sessionUID}}}();
			})();
		</script>
		<style>
			@media screen and (max-width:599px){.carousel-container.advertising .more{left:0;right:auto;top:36px}}
		</style>
		<script>
			!function(e,t){"use strict";e.ajax=t(),"function"==typeof define&&define.amd&&define("ajax",[],function(){return t()})}(this,function(){"use strict";var e=function(){};return e.prototype.isUrlExternal=function(e){var t=new RegExp("^(?:[a-z]+:)?//","i");return t.test(e)},e.prototype.createXHRObject=function(e,t){var n=new XMLHttpRequest,r=this.isUrlExternal(e);return"withCredentials"in n||!r?n.open(t,e,!0):"undefined"!=typeof XDomainRequest?(n=new XDomainRequest,n.open(t,e)):n=null,n},e.prototype.setRequestHeaders=function(e,t){for(var n in e)e.hasOwnProperty(n)&&t.setRequestHeader(n,e[n])},e.prototype.request=function(e){function t(){var e;4!==s.readyState||200!==s.status&&201!==s.status?"undefined"!=typeof XDomainRequest&&s instanceof XDomainRequest?-1!==s.contentType.indexOf("application/json")?r(JSON.parse(s.responseText)):r(s.responseText):4===s.readyState&&o(s.responseText):(e=s.getResponseHeader("Content-Type"),e&&-1!==e.indexOf("application/json")?r(JSON.parse(s.responseText)):r(s.responseText))}var n=e.url,r=e.callback,o=e.errorCallback?e.errorCallback:function(){},a=e.params?e.params:null,s=this.createXHRObject(n,e.method);void 0===s.onload?s.onreadystatechange=t:s.onload=t,s.onerror=function(){o()},this.setRequestHeaders(e.headers,s),a&&(a=this.dataSerializer(e,s)),s.send(a)},e.prototype.dataSerializer=function(e,t){return e.dataSerializer?e.dataSerializer(e.params):(t.setRequestHeader("Content-Type","application/json;charset=utf-8"),JSON.stringify(e.params))},e.prototype.get=function(e){e.method="GET",this.request(e)},e.prototype.post=function(e){e.method="POST",this.request(e)},e.prototype.put=function(e){e.method="PUT",this.request(e)},e.prototype.delete=function(e){e.method="DELETE",this.request(e)},e});
			!function(e,t){"use strict";e.cookiesInterface=t(),"function"==typeof define&&define.amd&&define("cookies-interface",[],function(){return t()})}(this,function(){"use strict";var e=function(){};return e.prototype.set=function(e,t,n,r){var i=new Date;i.setTime(i.getTime()+24*n*60*60*1e3);var o="; expires="+i.toUTCString(),c=r?"; path="+r:"";document.cookie=e+"="+t+c+o},e.prototype.get=function(e){var t=e+"=",n=document.cookie;n=n.split(";");for(var r=0;r<n.length;r++){for(var i=n[r];" "===i.charAt(0);)i=i.substring(1);if(-1!==i.indexOf(t))return this.parse(i.substring(t.length,i.length))}return""},e.prototype.parse=function(e){var t=/\+/g;0===e.indexOf('"')&&(e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return decodeURIComponent(e.replace(t," "))}catch(n){}},e});
			!function(e,t){"use strict";e.VelaCarousel=t(window.ajax),"function"==typeof define&&define.amd&&define("VelaCarousel",["ajax"],function(e){return t(e)})}(this,function(e){function t(){function t(){i(),b(),g(),K.itemInterval&&!K.isMobile&&(c(),u()),a()||(et=-it*$,m(),r()),D("resize")}function n(){clearInterval(tt),tt=setTimeout(t,100)}function i(){var e=j.getBoundingClientRect();J=e.width?e.width:e.right-e.left}function a(){return _.length<=nt}function r(){return at?(H.style.left=et+"px",void 0):(H.style.webkitTransform="translateX("+et+"px)",H.style.MozTransform="translateX("+et+"px)",H.style.msTransform="translateX("+et+"px)",H.style.OTransform="translateX("+et+"px)",H.style.transform="translateX("+et+"px)",void 0)}function o(e,t){var n=F.querySelector(".carousel-navigation"+e);if(n.className.match(/inactive/i)){if(t)return;return n.className=n.className.replace(/\sinactive/gi,""),void 0}t&&(n.className=n.className+" inactive")}function c(){Q=1e3*K.itemInterval*nt}function s(){return rt?(rt=!1,et=0,v(),r(),o(".next",!1),o(".previous",!0),void 0):(f(),m(),v(),r(),void 0)}function l(){clearInterval(U)}function u(){c(),l(),U=setInterval(s,Q)}function m(){return a()?(et=0,rt=!0,o(".previous",!0),o(".next",!0),void 0):J-G>et?(et=J-G,rt=!0,o(".previous",!1),o(".next",!0),void 0):et>=0?(et=0,o(".next",!1),o(".previous",!0),void 0):(o(".previous",!1),o(".next",!1),void 0)}function v(){it=Math.floor(Math.abs(et)/$)}function f(){et-=nt*$}function d(){et+=nt*$}function p(e,t,n){var i=300;setTimeout(function(){if(n)for(var i=0;i<e.length;i++)e[i].classList.add(t);else for(var a=0;a<e.length;a++)e[a].classList.remove(t)},i)}function h(e){var t="dummy-padding-for-render";if(e.length&&"object"==typeof e[0].classList)return e[0].classList.contains(t)?p(e,t,!1):p(e,t,!0)}function w(e){var t=e.currentTarget?e.currentTarget:e.srcElement;h(_),e.preventDefault?e.preventDefault():e.returnValue=!1,a()||(t.className.match(/next/i)?f():d(),m(),v(),r(),S("click"),L(),D("navigationClick"))}function y(e){R=e?e:K.items;var t,n=document.createDocumentFragment(),i=document.createElement("div");if(!ot){if(R.length<1)return F.className=F.className+" empty",void 0;for(var a=0;a<R.length;a++){var r;i.innerHTML=K.template(R[a]),r=i.querySelector("li"),n.appendChild(r),i.innerHTML=""}H.appendChild(n),B(),t=_[_.length-1],t.className=t.className+" last";var o=document.createEvent("CustomEvent");o.initCustomEvent("buildItemsListCompleted",!1,!1,{}),F.dispatchEvent(o)}}function g(){nt=Math.floor((J+W)/$),nt=nt>1?nt:1}function b(){_=H.querySelectorAll("li");var e=_[0].getBoundingClientRect();W=document.documentElement.currentStyle?parseInt(_[0].currentStyle.marginRight,10):parseInt(window.getComputedStyle(_[0],null).marginRight,10),$=e.width?W+e.width:W+e.right-e.left,G=$*_.length-W,i(),H.style.width=G+"px",g(),m()}function E(e){at=!0;for(var t=0;t<e.length;t++)e[t].attachEvent("onclick",w);window.attachEvent("resize",n),K.itemInterval&&!K.isMobile&&(H.attachEvent("mouseover",l),H.attachEvent("mouseout",u))}function C(){var e=document.querySelectorAll(K.el+" .carousel-navigation");if(F.className=F.className+" init",!document.addEventListener)return E(e),void 0;for(var t=0;t<e.length;t++)e[t].addEventListener("click",w,!1);j.addEventListener("scroll",z,!1),window.addEventListener("resize",n,!1),K.itemInterval&&!K.isMobile&&(H.addEventListener("mouseover",l,!1),H.addEventListener("mouseout",u,!1))}function x(){F.className=window.navigator.userAgent.match(/Android ([0-9]+)/)&&RegExp.$1<3?F.className+" no-overflow":F.className+" overflow"}function T(){navigator.userAgent.match(/IEMobile/)&&(F.className=F.className+" ie-mobile")}function k(){var e,t,n=document.createElement("div"),i={transition:"transitionend",OTransition:"otransitionend",MozTransition:"transitionend",WebkitTransition:"webkitTransitionEnd"};for(e in i)if(i.hasOwnProperty(e)&&n.style[e]!==t)return i[e]}function I(e){if("height"===e.propertyName||"min-height"===e.propertyName){var t=document.createEvent("CustomEvent");t.initCustomEvent("resize",!1,!1,null),window.dispatchEvent(t)}}function M(){if(document.addEventListener){var e=k();F.addEventListener(e,I,!1)}}function N(e){e=parseInt(e),!X||!K||0>e||"function"!=typeof K.itemViewCallback||K.itemViewCallback(X[e])}function L(){if(X)for(var e=A(et,$,J),t=e.firstDisplayed;t<e.firstDisplayed+e.displayedCount;t++)if(X[t]&&-1===Z.indexOf(X[t])){Z.push(X[t]),N(t);var n={carouselItemNumber:t,itemTitle:X[t].querySelector("h3 > a > span").innerHTML};X[t].getAttribute("data-analytics-custom-id")&&(n.analyticsCustomId=X[t].getAttribute("data-analytics-custom-id")),S("itemView",n)}}function V(e){return"function"==typeof window.cm&&K.cm&&K.cm.activeEvents.itemViewInOpBoxFormat&&K.cm.activeEvents.itemViewInOpBoxFormat.enabled&&"itemView"===e}function S(e,t){if(V(e)){var n=K.cm.activeEvents.itemViewInOpBoxFormat.suffix;t.viewData.forEach(function(e){window.cm("send","event",{category:K.cm.category,action:"itemView",label:"vela-carousel"+n,value:K.cm.value,customParams:e})})}if("undefined"!=typeof window.cm&&K.cm&&K.cm.activeEvents[e]){var i,a={cat:K.cm.category,a:"carousel_"+e,lab:K.cm.carouselId+"_"+K.cm.uniqueId,v:K.cm.value};if(K.cm.customParams||t){var r=K.cm.customParams;i=function(){var e;if(e=r&&"function"==typeof r&&r.apply(this,arguments)||{},t)for(var n in t)t.hasOwnProperty(n)&&(e[n]=t[n]);return e}(),window.cm.event&&window.cm.event(a,i)}else window.cm.event&&window.cm.event(a);"function"==typeof window.cm&&cm("send@","event",{category:a.cat,action:a.a,label:a.lab,value:a.v,customParams:i||null})}}function D(e){if(R){var t=A(et,$,J);q(R,e,t.firstDisplayed,t.displayedCount)}}function q(e,t,n,i){for(var a=[],r=0;i>r;r++){var o=n+r;if(e[o]&&ct[o]!==!0){N(o),ct[o]=!0;var c=e[o].viewData;c&&a.push(c)}}a.length&&S("itemView",{source:t,viewData:a})}function A(e,t,n){var i=.1*t,a=Math.abs(e)%t;return i>a?{displayedCount:Math.floor((n+i)/t),firstDisplayed:Math.ceil((Math.abs(e)-i)/t)}:{displayedCount:Math.floor((n+i-(t-a))/t),firstDisplayed:Math.ceil(Math.abs(e)/t)}}function O(){et=-j.scrollLeft,S("swipe"),D("swipe")}function z(){clearTimeout(Y),Y=setTimeout(O,100)}function P(t){if(K=t,K.parser=K.parser?K.parser:function(e){return e},K.errorCallback=K.errorCallback?K.errorCallback:function(e){return e},K.cm&&(K.cm.activeEvents=K.cm.activeEvents||st),F=document.querySelector(K.el),j=F.querySelector(".stripe-container"),H=j.querySelector(".stripe"),M(),x(),T(),o(".previous",!0),K.fallback&&K.fallbackTime&&setTimeout(function(){ot=!0,K.fallback()},K.fallbackTime),K.url){var n=new e;return n.get({url:K.url,headers:K.headers||{},callback:function(e){y(K.parser(e))},errorCallback:K.errorCallback}),void 0}return K.items&&K.template?(y(),void 0):(X=F.querySelectorAll(".stripe > li"),B(),L(),void 0)}function B(){b(),C(),K.itemInterval&&!K.isMobile&&u(),D("init")}var R,X,F,j,H,_,W,$,G,J,K,Q,U,Y,Z=[],et=0,tt=null,nt=1,it=0,at=!1,rt=!1,ot=!1,ct=[],st={itemView:!1,swipe:!0,click:!0};return{init:P}}return t});
			!function(){(window.CST=window.CST||{})["default.html"]=function(obj){function print(){__p+=__j.call(arguments,"")}obj||(obj={});var __t,__p="",__j=Array.prototype.join;with(obj)__p+='<li class="separator separator-right">\n    <div class="offer-box  ',sponsored&&(__p+="sponsored"),__p+='">\n        <a class="photo ',""===imageUrl&&(__p+="no-photo"),__p+='" title="'+(null==(__t=name)?"":__t)+'" href="'+(null==(__t=url)?"":__t)+'">\n            ',""!==imageUrl?(__p+="\n            ",__p+=sponsored?'\n            <img width="128" height="96" alt="'+(null==(__t=name)?"":__t)+'" src="'+(null==(__t=imageUrl)?"":__t)+'">\n            ':'\n            <img width="192" height="144" alt="'+(null==(__t=name)?"":__t)+'" src="'+(null==(__t=imageUrl)?"":__t)+'">\n            ',__p+="\n            "):__p+='\n            <span class="no-photo"></span>\n            ',__p+="\n        </a>\n        ",sponsored&&(__p+='\n        <div class="sponsored-label">\n        <span class="didascalia">\n            '+(null==(__t=lang.sponsored)?"":__t)+'&nbsp;<a href="http://ads.allegro.pl" target="_blank"><i class="icon icon-q"></i></a>\n        </span>\n        </div>\n        '),__p+='\n        <h3>\n            <a href="'+(null==(__t=url)?"":__t)+'" title="'+(null==(__t=name)?"":__t)+'">\n                <span>'+(null==(__t=name)?"":__t)+'</span>\n            </a>\n        </h3>\n        <span class="price">\n            ',buyNowPrice&&isBuyNow?__p+='\n                <span class="buy-now">'+(null==(__t=lang.buyNow)?"":__t)+"&nbsp;</span><strong>"+(null==(__t=buyNowPrice)?"":__t)+"</strong>\n            ":bidPrice&&(__p+="\n                <strong>"+(null==(__t=bidPrice)?"":__t)+"</strong>\n            "),__p+="\n            ",freeShipping&&(__p+='\n                <i class="icon icon-fs"></i>\n            '),__p+="\n        </span>\n    </div>\n</li>\n";return __p}}();
			!function(){"use strict";window.CarouselsUtils={sessionUID:16777216*(1+Math.random())|0,getUIDForSession:function(){return this.sessionUID}}}();
		</script>
		<style>
			.carousel-container.recommended .offer-box.sponsored .sponsored-label{height:24px}.carousel-container.recommended .offer-box.sponsored .photo{max-height:120px}
		</style>
		<script>
			(function () {
			    !function(){(window.CST=window.CST||{})["default.html"]=function(obj){function print(){__p+=__j.call(arguments,"")}obj||(obj={});var __t,__p="",__j=Array.prototype.join;with(obj)__p+='<li class="separator separator-right">\n    <div class="offer-box  ',sponsored&&(__p+="sponsored"),__p+='">\n        <a class="photo ',""===imageUrl&&(__p+="no-photo"),__p+='" title="'+(null==(__t=name)?"":__t)+'" href="'+(null==(__t=url)?"":__t)+'">\n            ',""!==imageUrl?(__p+="\n            ",__p+=sponsored?'\n            <img width="128" height="96" alt="'+(null==(__t=name)?"":__t)+'" src="'+(null==(__t=imageUrl)?"":__t)+'">\n            ':'\n            <img width="192" height="144" alt="'+(null==(__t=name)?"":__t)+'" src="'+(null==(__t=imageUrl)?"":__t)+'">\n            ',__p+="\n            "):__p+='\n            <span class="no-photo"></span>\n            ',__p+="\n        </a>\n        ",sponsored&&(__p+='\n        <div class="sponsored-label">\n        <span class="didascalia">\n            '+(null==(__t=lang.sponsored)?"":__t)+'&nbsp;<a href="http://ads.allegro.pl" target="_blank"><i class="icon icon-q"></i></a>\n        </span>\n        </div>\n        '),__p+='\n        <h3>\n            <a href="'+(null==(__t=url)?"":__t)+'" title="'+(null==(__t=name)?"":__t)+'">\n                <span>'+(null==(__t=name)?"":__t)+'</span>\n            </a>\n        </h3>\n        <span class="price">\n            ',buyNowPrice&&isBuyNow?__p+='\n                <span class="buy-now">'+(null==(__t=lang.buyNow)?"":__t)+"&nbsp;</span><strong>"+(null==(__t=buyNowPrice)?"":__t)+"</strong>\n            ":bidPrice&&(__p+="\n                <strong>"+(null==(__t=bidPrice)?"":__t)+"</strong>\n            "),__p+="\n            ",freeShipping&&(__p+='\n                <i class="icon icon-fs"></i>\n            '),__p+="\n        </span>\n    </div>\n</li>\n";return __p}}();
			    !function(a,b){function c(a){return"[object Array]"===Object.prototype.toString.call(a)}function d(a){var b,d=encodeURIComponent,e=[];for(var f in a)if(b=a[f],c(b))for(var g=0,h=b.length;g<h;g++)e.push(d(f)+"["+g+"]="+d(b[g]));else"undefined"!=typeof b&&e.push(d(f)+"="+d(a[f]));return e.join("&")}function e(a){function b(a,b){var c=new XMLHttpRequest;return"withCredentials"in c?c.open(a,b,!0):"undefined"!=typeof XDomainRequest?(c=new XDomainRequest,c.open(a,b)):c=null,c}var c=(a.method||"GET").toLocaleUpperCase(),e=a.url||"",f=a.data||{},g=a.success||function(){},h=a.error||function(){},i="GET"===c?"?"+d(f):"",j=b(c,e+i);j&&(j.onload=function(){var a,b=j.responseText;200===j.status?(a=j.getResponseHeader("Content-Type"),g(a&&a.indexOf("application/json")!==-1?JSON.parse(b):b)):"undefined"!=typeof XDomainRequest&&j instanceof XDomainRequest?g(j.contentType.indexOf("application/json")!==-1?JSON.parse(b):b):h()},j.onerror=function(){h()},"POST"===c||"PUT"===c?(j.setRequestHeader("Content-Type","application/json"),j.send(JSON.stringify(f))):j.send(null))}function f(a){function b(a,b){if(b)for(var c in b)b.hasOwnProperty(c)&&(a[c]=b[c]);return a}return b(k,a)}function g(){var a="reco-script",b=document.getElementById(a),c=b?b.src:"",d=/\/\//.test(c);return d?c.split("/").slice(0,3).join("/"):""}function h(a,b,c){var d=k.configFor("get");d.data=a,d.success=b,d.error=c,e(d)}function i(a){return d({reco_id:a})}function j(){return{get:h,contextBuilder:l,config:f,buildQueryString:i}}var k={host:"",rest:{get:{uri:"/reco/api/v1/recommend",method:"GET"}},configFor:function(a){var b=this.rest[a]||{};return{method:b.method,url:this.host+b.uri}}},l=function(){function d(a){try{return JSON.parse(a)}catch(a){}}function e(a){var c=document.cookie,d=c.indexOf(a+"="),e=c.indexOf(";",d);if(~d)return decodeURIComponent(c.substring(d,~e?e:b).split("=")[1])}function f(){var a=e(l);return a?e(m):b}function g(){var a=d(e(k))||{};return a[n]}function h(){return e(j)}function i(){var b,d,e,i=g(),j=f(),k=h(),l=o,m=a.location.href,n=[];return{withUserId:function(a){return i=a,this},withEncodedUserId:function(a){return j=a,this},withUserHash:function(a){return k=a,this},withScenario:function(a){return b=a,this},withItemsLimit:function(a){return l=a,this},withSearchQuery:function(a){return d=a,this},withCategory:function(a){return isFinite(a)&&0!==parseInt(a,10)&&(e=a),this},withItems:function(a){return c(a)&&(n=a),this},withReferrer:function(a){return m=a,this},build:function(){if(!b)throw new Error("scenarioId must be specified");var a={userId:i,encodedUserId:j,userHash:k,itemsLimit:l,scenarioId:b,searchQuery:d,category:e,referrer:m};return n.length&&(a.items=n.join(",")),a}}}var j="ws3",k="userIdentity",l="dc2",m="dc1",n="id",o=20;return i}();f({host:g()}),a.RecoJS=j()}(function(){return this}());
			    !function(){(window.CST=window.CST||{})["recommendationMoreLikeThisPopup.html"]=function(obj){obj||(obj={});var __t,__p="";with(obj)__p+='<article>\n    <a class="mainItemLink" href="#">\n        <div class="offer clearfix">\n            <figure></figure>\n            <div class="details">\n                <h2></h2>\n                <p class="price"></p>\n            </div>\n        </div>\n    </a>\n    <p class="close-overlay">\n        <a>\n            <i class="icon-font close-panel"></i>\n            </a>\n        </p>\n    <aside class="related-offers"></aside>\n</article>';return __p}}();
			    !function(){(window.CST=window.CST||{})["moreLikeThisRelatedOfferBox.html"]=function(obj){obj||(obj={});var __t,__p="";with(obj)__p+='<a href="[[offerUrl]]">\n    <img src="[[offerImg]]" onerror="this.src=\'https://assets.allegrostatic.pl/reco/noPhoto.png\';">\n    <div class="caption">\n        <h3>[[offerName]]</h3>\n        <span class="buy-it-now">kup teraz</span>\n        <span class="price">[[offerPrice]]</span>\n    </div>\n</a>';return __p}}();
			})();
		</script>
		<style>
			div.modal-precart div.modal-content div.modal-body div.offer-box h3 a.offer-link {
			line-height: unset;
			}
			div[data-prototype-id="allegro.carousel"] a.offer-link.offer-tile__title,
			div[data-prototype-id="allegro.carousel"] a.offer-tile__link {
			text-decoration: none;
			}
			body.ssi div.modal-precart div.offer-box a.add-to-cart {
			background-color: rgb(248, 248, 248);
			background-image: linear-gradient(rgb(255, 255, 255) 5%, rgb(230, 230, 230));
			font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
			font-size: 12px;
			font-weight: 700;
			letter-spacing: normal;
			line-height: 12px;
			border-color: #d6d6d6;
			box-shadow: inset 0 1px 0 0 #fff;
			border-radius: 5px;
			border: 1px solid rgb(214, 214, 214);
			text-transform: lowercase;
			margin: 0 35px;
			display: block;
			background-repeat: repeat-x;
			}
			body.ssi div.modal-precart div.offer-box a.add-to-cart:hover {
			color: #333;
			text-decoration: none;
			background-position: 0 -15px;
			transition: background-position .1s linear;
			border-color: #d6d6d6;
			background-color: #e6e6e6;
			outline: 0;
			}
		</style>
	</body>
	<!-- Mirrored from allegro.pl/smartfon-cavion-base-5-0-lte-8gb-1gb-5-i7224715300.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Mar 2018 00:53:17 GMT -->
</html>
