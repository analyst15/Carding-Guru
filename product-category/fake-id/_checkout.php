<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>


<!DOCTYPE html>
<!--[if IE 9 ]> <html lang="en-US" class="ie9 loading-site no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="en-US" class="ie8 loading-site no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en-US" class="loading-site no-js"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="https://cardingstore.com/xmlrpc.php" />
<script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
<script>window._wca = window._wca || [];</script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<title>Store Home &mdash; Carding Guru</title>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="canonical" href="https://cardingstore.com/" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Store Home &mdash; Carding Store" />
<meta property="og:url" content="https://cardingstore.com/" />
<meta property="og:site_name" content="Carding Store" />
<meta property="article:modified_time" content="2022-02-26T11:33:57+00:00" />
<!--<meta property="og:image" content="https://cardingstore.com/wp-content/uploads/2022/02/baner-image-new1_1512x.png" />-->
<meta property="og:image:width" content="1512" />
<meta property="og:image:height" content="528" />
<meta property="og:image:type" content="image/png" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:label1" content="Est. reading time" />
<meta name="twitter:data1" content="3 minutes" />
<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://cardingstore.com/#website","url":"https://cardingstore.com/","name":"Carding Store","description":"A fully trusted carding store (shop) where to buy all related carding tools and products, paypal, cash app, western union, non VBV CC, CVV and all other Money transfer services.","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://cardingstore.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"ImageObject","@id":"https://cardingstore.com/#primaryimage","inLanguage":"en-US","url":"https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/baner-image-new1_1512x.png?fit=1512%2C528&ssl=1","contentUrl":"https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/baner-image-new1_1512x.png?fit=1512%2C528&ssl=1","width":1512,"height":528,"caption":"Carding Store"},{"@type":"WebPage","@id":"https://cardingstore.com/#webpage","url":"https://cardingstore.com/","name":"Store Home &mdash; Carding Store","isPartOf":{"@id":"https://cardingstore.com/#website"},"primaryImageOfPage":{"@id":"https://cardingstore.com/#primaryimage"},"datePublished":"2013-08-06T20:13:19+00:00","dateModified":"2022-02-26T11:33:57+00:00","breadcrumb":{"@id":"https://cardingstore.com/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://cardingstore.com/"]}]},{"@type":"BreadcrumbList","@id":"https://cardingstore.com/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]}]}</script>

<link rel='dns-prefetch' href='//stats.wp.com' />
<link rel='dns-prefetch' href='//www.googletagmanager.com' />
<link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='dns-prefetch' href='//i0.wp.com' />
<link rel='dns-prefetch' href='//c0.wp.com' />
<link rel="alternate" type="application/rss+xml" title="Carding Store &raquo; Feed" href="https://cardingstore.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Carding Store &raquo; Comments Feed" href="https://cardingstore.com/comments/feed/" />
<link rel="prefetch" href="https://cardingstore.com/wp-content/themes/flatsome/assets/js/chunk.countup.fe2c1016.js" />
<link rel="prefetch" href="https://cardingstore.com/wp-content/themes/flatsome/assets/js/chunk.sticky-sidebar.a58a6557.js" />
<link rel="prefetch" href="https://cardingstore.com/wp-content/themes/flatsome/assets/js/chunk.tooltips.29144c1c.js" />
<link rel="prefetch" href="https://cardingstore.com/wp-content/themes/flatsome/assets/js/chunk.vendors-popups.947eca5c.js" />
<link rel="prefetch" href="https://cardingstore.com/wp-content/themes/flatsome/assets/js/chunk.vendors-slider.f0d2cbc9.js" />
<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/cardingstore.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.1"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<style id='wp-block-library-inline-css' type='text/css'>
:root{--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,161;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px}@media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#00d084,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}.has-text-align-center{text-align:center}.has-text-align-left{text-align:left}.has-text-align-right{text-align:right}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{clip:rect(1px,1px,1px,1px);word-wrap:normal!important;border:0;-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.screen-reader-text:focus{clip:auto!important;background-color:#ddd;-webkit-clip-path:none;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color){border-style:solid}html :where([style*=border-width]){border-style:solid}html :where(img){height:auto;max-width:100%}
.has-text-align-justify{text-align:justify;}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='https://cardingstore.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.5.6' type='text/css' media='all' />
<link rel='stylesheet' id='wc_coinbase_commerce_styles-css' href='https://cardingstore.com/wp-content/plugins/woocommerce-coinbase-commerce/assets/dist/css/public/wc-coinbase-commerce-styles.min.css?ver=5.9.1' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='wt-smart-coupon-css' href='https://cardingstore.com/wp-content/plugins/wt-smart-coupons-for-woocommerce/public/css/wt-smart-coupon-public.css?ver=1.3.7' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-woocommerce-wishlist-css' href='https://cardingstore.com/wp-content/themes/flatsome/inc/integrations/wc-yith-wishlist/wishlist.css?ver=3.10.2' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-main-css' href='https://cardingstore.com/wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.15.2' type='text/css' media='all' />
<style id='flatsome-main-inline-css' type='text/css'>
@font-face {
				font-family: "fl-icons";
				font-display: block;
				src: url(https://cardingstore.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot?v=3.15.2);
				src:
					url(https://cardingstore.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot#iefix?v=3.15.2) format("embedded-opentype"),
					url(https://cardingstore.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.woff2?v=3.15.2) format("woff2"),
					url(https://cardingstore.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.ttf?v=3.15.2) format("truetype"),
					url(https://cardingstore.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.woff?v=3.15.2) format("woff"),
					url(https://cardingstore.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.svg?v=3.15.2#fl-icons) format("svg");
			}
</style>
<link rel='stylesheet' id='flatsome-shop-css' href='https://cardingstore.com/wp-content/themes/flatsome/assets/css/flatsome-shop.css?ver=3.15.2' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-style-css' href='https://cardingstore.com/wp-content/themes/flatsome-child/style.css?ver=3.0' type='text/css' media='all' />
<link rel='stylesheet' id='flatsome-googlefonts-css' href='//fonts.googleapis.com/css?family=-apple-system%2C+BlinkMacSystemFont%2C+%22Segoe+UI%22%2C+Roboto%2C+Oxygen-Sans%2C+Ubuntu%2C+Cantarell%2C+%22Helvetica+Neue%22%2C+sans-serif%3Aregular%2Cregular%7CLato%3Aregular%2C400%2C700%7CDancing+Script%3Aregular%2C400&#038;display=swap&#038;ver=3.9' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css' href='https://c0.wp.com/p/jetpack/10.6/css/jetpack.css' type='text/css' media='all' />
<link rel="stylesheet" href="assets/css/flatsome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<script type="text/javascript">
            window._nslDOMReady = function (callback) {
                if ( document.readyState === "complete" || document.readyState === "interactive" ) {
                    callback();
                } else {
                    document.addEventListener( "DOMContentLoaded", callback );
                }
            };
            </script><script type='text/javascript' src='https://c0.wp.com/c/5.9.1/wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/5.9.1/wp-includes/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>
<script type='text/javascript' id='wt-smart-coupon-js-extra'>
/* <![CDATA[ */
var WTSmartCouponOBJ = {"ajaxurl":"https:\/\/cardingstore.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://cardingstore.com/wp-content/plugins/wt-smart-coupons-for-woocommerce/public/js/wt-smart-coupon-public.js?ver=1.3.7' id='wt-smart-coupon-js'></script>
<script defer type='text/javascript' src='https://stats.wp.com/s-202208.js' id='woocommerce-analytics-js'></script>

<script type='text/javascript' src='https://www.googletagmanager.com/gtag/js?id=UA-220922708-1' id='google_gtagjs-js' async></script>
<script type='text/javascript' id='google_gtagjs-js-after'>
window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
gtag('set', 'linker', {"domains":["cardingstore.com"]} );
gtag("js", new Date());
gtag("set", "developer_id.dZTNiMT", true);
gtag("config", "UA-220922708-1", {"anonymize_ip":true});
gtag("config", "G-0XB60X49FT");
</script>

<link rel="https://api.w.org/" href="https://cardingstore.com/wp-json/" /><link rel="alternate" type="application/json" href="https://cardingstore.com/wp-json/wp/v2/pages/106" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://cardingstore.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://cardingstore.com/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.9.1" />
<meta name="generator" content="WooCommerce 6.2.1" />
<link rel='shortlink' href='https://cardingstore.com/' />
<link rel="alternate" type="application/json+oembed" href="https://cardingstore.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcardingstore.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://cardingstore.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcardingstore.com%2F&#038;format=xml" />
<meta name="generator" content="Site Kit by Google 1.68.0" /><style type='text/css'>img#wpstats{display:none}</style>
<style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style><!--[if IE]><link rel="stylesheet" type="text/css" href="https://cardingstore.com/wp-content/themes/flatsome/assets/css/ie-fallback.css"><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script><script>var head = document.getElementsByTagName('head')[0],style = document.createElement('style');style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);</script><script src="https://cardingstore.com/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script><![endif]--> <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<link rel="icon" href="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/cropped-0x0-1-1.png?fit=32%2C32&#038;ssl=1" sizes="32x32" />
<link rel="icon" href="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/cropped-0x0-1-1.png?fit=192%2C192&#038;ssl=1" sizes="192x192" />
<link rel="apple-touch-icon" href="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/cropped-0x0-1-1.png?fit=180%2C180&#038;ssl=1" />
<meta name="msapplication-TileImage" content="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/cropped-0x0-1-1.png?fit=270%2C270&#038;ssl=1" />
<style id="custom-css" type="text/css">:root {--primary-color: #2e042b;}.header-main{height: 113px}#logo img{max-height: 113px}#logo{width:356px;}.header-top{min-height: 30px}.transparent .header-main{height: 90px}.transparent #logo img{max-height: 90px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 90px;}.header.show-on-scroll,.stuck .header-main{height:70px!important}.stuck #logo img{max-height: 70px!important}.header-bg-color {background-color: #07001e}.header-bottom {background-color: #f1f1f1}.header-bottom-nav > li > a{line-height: 84px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #2e042b;}/* Color !important */[data-text-color="primary"]{color: #2e042b!important;}/* Background Color */[data-text-bg="primary"]{background-color: #2e042b;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .header-vertical-menu__opener ,.is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #2e042b;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #2e042b}.nav-tabs > li.active > a{border-top-color: #2e042b}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #2e042b }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #2e042b }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #2e042b;}/* Background Color */[data-icon-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.icon-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button, .current .breadcrumb-step{ background-color:#a42e03; }[data-text-bg="secondary"]{background-color: #a42e03;}/* Color */.secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary{color: #a42e03}/* Color !important */[data-text-color="secondary"]{color: #a42e03!important;}/* Border */.secondary.is-outline:hover{border-color:#a42e03}.success.is-underline:hover,.success.is-outline:hover,.success{background-color: #03533f}.success-color, .success.is-link, .success.is-outline{color: #03533f;}.success-border{border-color: #03533f!important;}/* Color !important */[data-text-color="success"]{color: #03533f!important;}/* Background Color */[data-text-bg="success"]{background-color: #03533f;}body{font-family:"Lato", sans-serif}body{font-weight: 400}.nav > li > a {font-family:"Lato", sans-serif;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-family:"Lato", sans-serif;}.nav > li > a {font-weight: 700;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 0;}.alt-font{font-family: "Dancing Script", sans-serif;}.alt-font{font-weight: 400!important;}.has-equal-box-heights .box-image {padding-top: 100%;}.pswp__bg,.mfp-bg.mfp-ready{background-color: #1a0041}@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 200px!important;width: 200px!important;}}button[name='update_cart'] { display: none; }.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style>
<link rel="stylesheet" href="style.css">
</head>


<body class="home page-template-default page page-id-106 page-child parent-pageid-78 theme-flatsome woocommerce-no-js boxed box-shadow lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
<a class="skip-link screen-reader-text" href="#main">Skip to content</a>
<div id="wrapper">






<header id="header" class="header header-full-width has-sticky sticky-jump">
<div class="header-wrapper">
<div id="masthead" class="header-main nav-dark">
<div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

<div id="logo" class="flex-col logo">

<a href="https://cardingguru.com/" title="Carding Store - A fully trusted carding store (shop) where to buy all related carding tools and products, paypal, cash app, western union, non VBV CC, CVV and all other Money transfer services." rel="home">
<img width="1020" height="335" src="" class="header_logo header-logo" alt="Carding Store" /><img width="1020" height="335" src="Logo.png" class="header-logo-dark" alt="Carding Store" /></a>
</div>

<div class="flex-col show-for-medium flex-left">
<ul class="mobile-nav nav nav-left ">
<li class="nav-icon has-icon">
<a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
    <i class="fa-solid fa-align-justify" id="icon-menu"></i>
</a>
</li> </ul>
</div>

<div class="flex-col hide-for-medium flex-left
            flex-grow">
<ul class="header-nav header-nav-main nav nav-left  nav-line-grow nav-uppercase nav-prompts-overlay">
<li id="menu-item-572" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-106 current_page_item menu-item-572 active menu-item-design-container-width has-icon-left"><a href="#" aria-current="page" class="nav-top-link"><img class="ux-menu-icon" width="20" height="20" src="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/kisspng-retail-point-of-sale-marketing-business-5b3fca46a3ebb9.8456182915309072066714.png?resize=280%2C280&ssl=1" alt="Storehome" />Store Home</a></li>
<li id="menu-item-571" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-571 menu-item-design-default has-dropdown has-icon-left"><a href="" class="nav-top-link"><img class="ux-menu-icon" width="20" height="20" src="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/computer-icons-online-shopping-shopping-cart-service-shopping-cart-icon-64bdd8ba938644d420b5c46104ec023a.png?resize=280%2C280&ssl=1" alt="" />Product Categories<i class="fa-solid fa-chevron-down" id="chevron-down" style="font-size: 1em;padding: 0.223em;"></i></a>
<ul class="sub-menu nav-dropdown nav-dropdown-bold">
<li id="menu-item-612" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-612"><a href="product-category/bank-drops/banklogs.php">Bank Logs</a></li>
<li id="menu-item-599" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-599"><a href="product-category/btc-hack-script/btchack.php">BTC Hack Script</a></li>
<li id="menu-item-611" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-611"><a href="product-category/carded-e-gift-cards/cardedgift.php">Carded E–Gift Cards</a></li>
<li id="menu-item-606" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-606"><a href="product-category/carded-products/cardedproduct.php">Carded Products</a></li>
<li id="menu-item-609" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-609"><a href="product-category/cash-app/cashApp.php">Cash App</a></li>
<li id="menu-item-607" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-607"><a href="product-category/credit-debit-cards/credit.php">Credit/Debit Cards</a></li>
<li id="menu-item-605" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-605"><a href="product-category/debit-checks/">Deposit Checks</a></li>
<li id="menu-item-603" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-page-parent menu-item-603"><a href="product-category/dumps/dumps.php">Dumps</a></li>
<li id="menu-item-601" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-601"><a href="product-category/fake-id/">Fake ID</a></li>
<li id="menu-item-615" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-615"><a href="product-category/mentorship-coaching/mentorship.php">Mentorship &amp; Coaching</a></li>
<li id="menu-item-610" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-610"><a href="product-category/paypal/paypal.php">PayPal</a></li>
<li id="menu-item-602" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-602"><a href="product-category/software/">Softwares</a></li>
<li id="menu-item-594" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-594"><a href="product-category/ssn-fullz/ssnfullz.php">SSN Fullz</a></li>
<li id="menu-item-600" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-600"><a href="product-category/venmo/">Venmo</a></li>
<li id="menu-item-608" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-608"><a href="product-category/western-union/wetsernunion.php">Western Union</a></li>
</ul>
</li>
<li id="menu-item-562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-562 menu-item-design-default has-icon-left"><a href="#" class="nav-top-link"><img class="ux-menu-icon" width="20" height="20" src="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/Track_my_bus.png?resize=194%2C155&ssl=1" alt="Carding Store" />Track your order</a></li>
<li id="menu-item-573" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-573 menu-item-design-default has-icon-left"><a href="#" class="nav-top-link"><img class="ux-menu-icon" width="20" height="20" src="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/wishlist-icon-18.png?resize=280%2C280&ssl=1" alt="Carding Store" />Wishlist</a></li>
</ul>
</div>

<div class="flex-col hide-for-medium flex-right">
<ul class="header-nav header-nav-main nav nav-right  nav-line-grow nav-uppercase nav-prompts-overlay">
<li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
<a href="#" aria-label="Search" class="is-small"><i class="fa-solid fa-magnifying-glass" style="font-size: 1em;"></i></a>
<ul class="nav-dropdown nav-dropdown-bold">
<li class="header-search-form search-form html relative has-icon">
<div class="header-search-form-wrapper">
<div class="searchform-wrapper ux-search-box relative is-normal"><form role="search" method="get" class="searchform" action="https://cardingstore.com/">
<div class="flex-row relative">
<div class="flex-col flex-grow">
<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
<input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Search&hellip;" value="" name="s" />
<input type="hidden" name="post_type" value="product" />
</div>
<div class="flex-col">
<button type="submit" value="Search" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
    <i class="fa-solid fa-magnifying-glass"></i>
</div>
</div>
<div class="live-search-results text-left z-top"></div>
</form>
</div> </div>
</li> </ul>
</li>
<li class="header-divider"></li><li class="cart-item has-icon has-dropdown">
<div class="header-button">
<a href="cart.php" title="Cart" class="header-cart-link icon button circle is-outline is-small">
<span class="header-cart-title">
Cart / <span class="cart-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>0.00</bdi></span></span>
</span>
<i class="fa-solid fa-cart-shopping" id="cart" style="font-size: 1em;" data-icon-label="0">
</i>
</a>
</div>
<ul class="nav-dropdown nav-dropdown-bold">
<li class="html widget_shopping_cart">
<div class="widget_shopping_cart_content">
<p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
</div>
</li>
</ul>
</li>
</ul>
</div>

<div class="flex-col show-for-medium flex-right">
<ul class="mobile-nav nav nav-right ">
<li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
<a href="#" aria-label="Search" class="is-small"><i class="fa-solid fa-magnifying-glass"></i></a>
<ul class="nav-dropdown nav-dropdown-bold">
<li class="header-search-form search-form html relative has-icon">
<div class="header-search-form-wrapper">
<div class="searchform-wrapper ux-search-box relative is-normal"><form role="search" method="get" class="searchform" action="https://cardingstore.com/">
<div class="flex-row relative">
<div class="flex-col flex-grow">
<label class="screen-reader-text" for="woocommerce-product-search-field-1">Search for:</label>
<input type="search" id="woocommerce-product-search-field-1" class="search-field mb-0" placeholder="Search&hellip;" value="" name="s" />
<input type="hidden" name="post_type" value="product" />
</div>
<div class="flex-col">
<button type="submit" value="Search" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
    <i class="fa-solid fa-magnifying-glass"></i>
</div>
</div>
<div class="live-search-results text-left z-top"></div>
</form>
</div> </div>
</li> </ul>
</li>
<li class="cart-item has-icon">
<div class="header-button"> <a href="cart.php" class="header-cart-link off-canvas-toggle nav-top-link icon button circle is-outline is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Cart" data-pos="right">
<i class="fa-solid fa-cart-shopping" id="cart" data-icon-label="0">
</i>
</a>
</div>

<div id="cart-popup" class="mfp-hide widget_shopping_cart">
<div class="cart-popup-inner inner-padding">
<div class="cart-popup-title text-center">
<h4 class="uppercase">Cart</h4>
<div class="is-divider"></div>
</div>
<div class="widget_shopping_cart_content">
<p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
</div>
<div class="cart-sidebar-content relative"></div><div class="payment-icons inline-block"><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M45.023 7.359c0.837 0.845 0.837 2.038 0.837 2.038 0 1.193-0.845 2.038-0.845 2.038l-6.514 6.522c-0.845 0.837-2.038 0.837-2.038 0.837-1.193 0-2.038-0.837-2.038-0.837-0.845-0.845-0.845-2.038-0.845-2.038 0-1.193 0.845-2.038 0.845-2.038l1.586-1.586h-6.084c-1.208 0-2.052-0.845-2.052-0.845-0.852-0.852-0.852-2.052-0.852-2.052 0-1.201 0.852-2.045 0.852-2.045 0.845-0.852 2.052-0.852 2.052-0.852h6.084l-1.586-1.579c-0.845-0.845-0.845-2.038-0.845-2.038 0-1.193 0.845-2.038 0.845-2.038 0.845-0.845 2.038-0.845 2.038-0.845 1.193 0 2.038 0.845 2.038 0.845l6.522 6.514zM21.553 5.38c-1.593 0-2.719 1.126-2.719 1.126-1.126 1.126-1.126 2.719-1.126 2.719 0 1.593 1.126 2.719 1.126 2.719 1.126 1.126 2.719 1.126 2.719 1.126 1.593 0 2.719-1.126 2.719-1.126 1.126-1.126 1.126-2.719 1.126-2.719 0-1.593-1.126-2.719-1.126-2.719-1.126-1.126-2.719-1.126-2.719-1.126zM11.222 29.801c0.163-0.035 0.221-0.116 0.221-0.244v-0.71c0-0.128-0.081-0.186-0.209-0.175 0 0-0.477 0.070-0.931 0.070-0.744 0-1.012-0.431-1.012-1.082v-1.571c0-0.628 0.244-1.070 1-1.070 0.43 0 0.931 0.070 0.931 0.070 0.139 0.012 0.221-0.058 0.221-0.186v-0.71c0-0.128-0.070-0.209-0.221-0.233 0 0-0.489-0.105-1.012-0.105-1.42 0-2.199 0.768-2.199 2.211v1.629c0 1.443 0.791 2.211 2.199 2.211 0.478 0.001 1.013-0.104 1.013-0.104zM13.316 29.789c0.128 0 0.221-0.093 0.221-0.221v-7.818c0-0.129-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v7.818c0 0.128 0.093 0.221 0.221 0.221h0.838zM15.585 29.789c0.128 0 0.221-0.093 0.221-0.221v-5.375c0-0.128-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v5.375c0 0.128 0.093 0.221 0.221 0.221h0.838zM15.585 22.809c0.128 0 0.221-0.093 0.221-0.221v-0.838c0-0.129-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v0.838c0 0.128 0.093 0.221 0.221 0.221h0.838zM20.006 29.801c0.163-0.035 0.221-0.116 0.221-0.244v-0.71c0-0.128-0.081-0.186-0.209-0.175 0 0-0.477 0.070-0.931 0.070-0.744 0-1.012-0.431-1.012-1.082v-1.571c0-0.628 0.244-1.070 1-1.070 0.431 0 0.931 0.070 0.931 0.070 0.14 0.012 0.221-0.058 0.221-0.186v-0.71c0-0.128-0.070-0.209-0.221-0.233 0 0-0.488-0.105-1.012-0.105-1.419 0-2.199 0.768-2.199 2.211v1.629c0 1.443 0.791 2.211 2.199 2.211 0.477 0.001 1.012-0.104 1.012-0.104zM25.206 29.789c0.128 0 0.209-0.116 0.151-0.221l-1.594-3.060 1.443-2.315c0.070-0.105 0-0.221-0.128-0.221h-0.943c-0.128 0-0.233 0.116-0.303 0.221l-1.443 2.339 1.582 3.036c0.058 0.116 0.163 0.221 0.291 0.221h0.943zM22.101 29.789c0.128 0 0.221-0.093 0.221-0.221v-7.818c0-0.129-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v7.818c0 0.128 0.093 0.221 0.221 0.221h0.838zM28.662 28.51c-0.337 0.175-0.733 0.314-1.094 0.314-0.512 0-0.768-0.256-0.768-0.698 0-0.5 0.256-0.768 0.884-0.768h0.977v1.152zM29.72 29.789c0.128 0 0.221-0.093 0.221-0.221v-3.595c0-1.396-0.512-2.118-2.059-2.118-0.977 0-1.734 0.244-1.734 0.244-0.14 0.035-0.221 0.116-0.221 0.244v0.709c0 0.129 0.081 0.221 0.221 0.186 0 0 0.873-0.198 1.559-0.198s0.954 0.326 0.954 0.931v0.465c-0.151-0.024-0.721-0.070-1.117-0.070-1.291 0-2.024 0.593-2.024 1.791 0 1.175 0.663 1.745 1.791 1.745 0.547 0 1.036-0.209 1.408-0.442v0.104c0 0.128 0.093 0.221 0.221 0.221h0.781zM35.131 29.789c0.128 0 0.221-0.093 0.221-0.221v-3.734c0-1.21-0.431-1.978-1.699-1.978-0.663 0-1.163 0.256-1.5 0.512v-0.175c0-0.128-0.093-0.221-0.221-0.221h-0.78c-0.128 0-0.221 0.093-0.221 0.221v5.375c0 0.128 0.093 0.221 0.221 0.221h0.838c0.128 0 0.221-0.093 0.221-0.221v-4.177c0.326-0.175 0.721-0.338 1.082-0.338 0.616 0 0.779 0.349 0.779 0.896v3.618c0 0.128 0.093 0.221 0.221 0.221h0.837zM39.249 28.498c-0.314 0.151-0.663 0.267-0.977 0.267-0.64 0-0.885-0.407-0.885-0.989v-1.803c0-0.582 0.245-0.989 0.885-0.989 0.314 0 0.663 0.093 0.977 0.221v3.293zM40.308 29.789c0.128 0 0.221-0.093 0.221-0.221v-7.818c0-0.129-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v2.42c-0.349-0.175-0.768-0.314-1.245-0.314-1.291 0-1.896 0.791-1.896 2.036v1.978c0 1.245 0.605 2.036 1.896 2.036 0.501 0 0.942-0.186 1.303-0.407v0.070c0 0.128 0.093 0.221 0.221 0.221h0.779zM44.659 27.719c0 0.582-0.267 0.966-0.966 0.966h-0.895v-3.432c0.314-0.151 0.675-0.268 0.989-0.268 0.64 0 0.873 0.407 0.873 0.989v1.745zM43.81 29.789c1.443 0 2.129-0.768 2.129-2.036v-1.862c0-1.245-0.593-2.036-1.885-2.036-0.477 0-0.907 0.151-1.256 0.36v-2.466c0-0.129-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v7.818c0 0.128 0.093 0.221 0.221 0.221h2.070zM51.128 29.789c0.128 0 0.221-0.093 0.221-0.221v-5.375c0-0.128-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v4.177c-0.326 0.175-0.722 0.337-1.082 0.337-0.616 0-0.779-0.349-0.779-0.895v-3.618c0-0.128-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v3.734c0 1.21 0.431 1.978 1.699 1.978 0.663 0 1.163-0.256 1.501-0.512v0.175c0 0.128 0.093 0.221 0.221 0.221h0.779zM57.050 24.205c0.047-0.116-0.035-0.233-0.175-0.233h-0.919c-0.128 0-0.209 0.093-0.256 0.209l-1.245 3.688-1.187-3.688c-0.035-0.128-0.128-0.209-0.256-0.209h-0.919c-0.139 0-0.209 0.105-0.175 0.221l1.85 5.642-0.663 1.943c-0.046 0.117 0.047 0.221 0.175 0.221h0.943c0.128 0 0.198-0.093 0.245-0.209l2.582-7.585z"></path>
</svg>
</div><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M14.127 17.572c-0.405 1.693-1.351 2.984-2.842 3.87-1.494 0.888-3.084 1.13-4.778 0.726-1.774-0.403-3.105-1.37-3.991-2.903-0.889-1.531-1.131-3.144-0.726-4.838 0.403-1.693 1.37-2.982 2.903-3.87 1.53-0.886 3.144-1.128 4.838-0.726 1.693 0.404 2.981 1.372 3.87 2.903 0.887 1.532 1.129 3.144 0.726 4.838zM9.41 13.46l0.242-1.089-0.726-0.242-0.242 1.21c-0.081-0.079-0.284-0.121-0.605-0.121l0.363-1.21-0.726-0.121-0.242 1.089c-0.242 0-0.405-0.040-0.484-0.121l-0.968-0.242-0.121 0.847 0.484 0.121c0.161 0 0.242 0.121 0.242 0.363l-0.242 1.331-0.483 1.814c0 0.242-0.121 0.284-0.363 0.121l-0.484-0.121-0.363 0.847 0.968 0.242c0.242 0 0.403 0.042 0.484 0.121l-0.363 1.089 0.726 0.242 0.363-1.21c0.079 0.081 0.242 0.121 0.484 0.121l-0.242 1.21 0.726 0.121 0.242-1.089c1.288 0.242 2.096-0.079 2.419-0.968 0.321-0.726 0.121-1.289-0.605-1.693 0.563-0.161 0.847-0.484 0.847-0.968 0.078-0.726-0.364-1.288-1.331-1.693zM8.2 16.362c0.804 0.242 1.128 0.565 0.968 0.968-0.163 0.484-0.889 0.565-2.177 0.242l0.484-1.452c0.484 0.081 0.726 0.163 0.726 0.242zM8.563 14.064c0.726 0.242 1.007 0.565 0.847 0.968-0.163 0.565-0.768 0.686-1.814 0.363l0.363-1.452c0.321 0.081 0.523 0.121 0.605 0.121zM19.872 13.52c-0.121 0.042-0.224 0.060-0.302 0.060-0.163 0-0.405 0.081-0.726 0.242l1.089-4.112-2.54 0.363-2.782 11.611c0.321 0.242 0.644 0.363 0.968 0.363 0.079 0 0.242 0.020 0.484 0.060 0.242 0.042 0.403 0.102 0.484 0.181h1.451c0.645 0 1.331-0.121 2.056-0.363 0.563-0.242 1.128-0.645 1.693-1.21 0.645-0.805 1.007-1.37 1.089-1.693 0.242-0.563 0.363-1.249 0.363-2.056 0-0.645-0.042-1.089-0.121-1.331-0.081-0.403-0.284-0.765-0.605-1.089-0.242-0.403-0.526-0.644-0.847-0.726-0.484-0.242-0.968-0.363-1.451-0.363-0.081 0.002-0.182 0.022-0.303 0.062zM17.877 20.353h-0.484l0.968-4.475 0.726-0.363h0.605c0.484 0 0.765 0.121 0.847 0.363 0.242 0.404 0.363 0.806 0.363 1.21 0 0.323-0.081 0.726-0.242 1.21-0.081 0.242-0.284 0.605-0.605 1.089-0.323 0.323-0.605 0.565-0.847 0.726-0.484 0.163-0.847 0.242-1.089 0.242h-0.242zM27.794 13.701h-2.419l-1.935 8.467h2.419l1.935-8.467zM27.552 12.492c0.321-0.161 0.524-0.282 0.605-0.363 0.161-0.161 0.282-0.321 0.363-0.484 0-0.079 0.018-0.181 0.060-0.302 0.040-0.121 0.060-0.221 0.060-0.302 0-0.403-0.163-0.726-0.484-0.968-0.323-0.161-0.605-0.242-0.847-0.242-0.323 0-0.526 0.042-0.605 0.121-0.081 0-0.181 0.042-0.302 0.121-0.121 0.081-0.224 0.163-0.302 0.242-0.163 0.163-0.284 0.323-0.363 0.484 0 0.081-0.020 0.181-0.060 0.302-0.042 0.121-0.060 0.223-0.060 0.302 0 0.404 0.161 0.726 0.484 0.968 0.321 0.163 0.605 0.242 0.847 0.242 0.32 0 0.523-0.040 0.604-0.121zM28.278 18.177c-0.081 0.404-0.121 0.927-0.121 1.572-0.081 0.404-0.042 0.847 0.121 1.331 0.321 0.484 0.645 0.767 0.968 0.847 0.321 0.242 0.886 0.363 1.693 0.363 0.645 0 1.089-0.040 1.331-0.121 0.079 0 0.242-0.019 0.484-0.060 0.242-0.040 0.403-0.101 0.484-0.181l-0.121-1.935c-0.323 0.163-0.565 0.242-0.726 0.242-0.163 0.081-0.405 0.121-0.726 0.121-0.163 0-0.323 0-0.484 0l-0.242-0.121-0.363-0.363c0-0.079-0.020-0.181-0.060-0.302-0.042-0.121-0.060-0.221-0.060-0.302 0-0.079 0.018-0.2 0.060-0.363 0.040-0.161 0.060-0.282 0.060-0.363l0.726-2.903h2.661l0.484-1.935h-2.661l0.605-2.54-2.54 0.363-1.572 6.652zM34.567 20.111c0.079 0.323 0.282 0.726 0.605 1.21 0.484 0.323 0.886 0.565 1.21 0.726 0.242 0.163 0.804 0.242 1.693 0.242 0.563 0 0.968-0.040 1.21-0.121 0.242 0 0.605-0.079 1.089-0.242l-0.242-1.935c-0.081 0.081-0.202 0.121-0.363 0.121-0.163 0-0.284 0.042-0.363 0.121-0.081 0-0.242 0.020-0.484 0.060-0.242 0.042-0.405 0.060-0.484 0.060-0.484 0-0.889-0.161-1.21-0.484-0.242-0.321-0.363-0.765-0.363-1.331 0-0.886 0.2-1.652 0.605-2.298 0.484-0.484 1.128-0.726 1.935-0.726h0.847c0.321 0.163 0.523 0.242 0.605 0.242l0.847-1.814c-0.163-0.079-0.484-0.2-0.968-0.363-0.242-0.079-0.686-0.121-1.331-0.121-0.726 0-1.411 0.121-2.056 0.363-0.807 0.484-1.373 0.888-1.693 1.21-0.484 0.646-0.806 1.21-0.968 1.693-0.242 0.646-0.363 1.331-0.363 2.056 0 0.406 0.079 0.848 0.242 1.331zM47.025 21.805c0.563-0.321 1.046-0.726 1.452-1.21 0.484-0.645 0.765-1.21 0.847-1.693 0.242-0.726 0.363-1.37 0.363-1.935 0-0.321-0.081-0.805-0.242-1.452-0.081-0.242-0.284-0.605-0.605-1.089-0.242-0.403-0.605-0.645-1.089-0.726-0.484-0.161-0.968-0.242-1.452-0.242-0.806 0-1.494 0.163-2.056 0.484-0.806 0.646-1.29 1.048-1.452 1.21-0.565 0.888-0.889 1.493-0.968 1.814-0.163 0.806-0.242 1.451-0.242 1.935 0 0.646 0.079 1.089 0.242 1.331 0.161 0.565 0.363 0.927 0.605 1.089 0.242 0.323 0.563 0.565 0.968 0.726 0.321 0.163 0.804 0.242 1.452 0.242 0.886 0 1.612-0.161 2.177-0.484zM47.025 15.878c0.161 0.484 0.242 0.927 0.242 1.331 0 0.404-0.042 0.726-0.121 0.968l-0.363 1.089-0.726 0.726c-0.242 0.242-0.565 0.363-0.968 0.363-0.405 0-0.686-0.161-0.847-0.484-0.163-0.161-0.242-0.563-0.242-1.21 0-0.484 0.040-0.847 0.121-1.089 0-0.161 0.121-0.484 0.363-0.968 0.321-0.403 0.563-0.684 0.726-0.847 0.161-0.161 0.442-0.242 0.847-0.242 0.484 0 0.804 0.121 0.968 0.363zM54.282 13.701h-2.419l-1.935 8.467h2.298l2.056-8.467zM54.040 12.492c0.242-0.161 0.403-0.282 0.484-0.363 0.242-0.161 0.363-0.321 0.363-0.484 0.079-0.161 0.121-0.363 0.121-0.605 0-0.403-0.121-0.726-0.363-0.968-0.323-0.161-0.605-0.242-0.847-0.242-0.323 0-0.565 0.042-0.726 0.121l-0.242 0.121c-0.163 0.081-0.242 0.163-0.242 0.242-0.163 0.163-0.284 0.323-0.363 0.484-0.081 0.163-0.121 0.363-0.121 0.605 0 0.404 0.121 0.726 0.363 0.968 0.484 0.163 0.804 0.242 0.968 0.242 0.242 0 0.442-0.040 0.605-0.121zM54.040 22.168h2.419l1.572-6.531c0.161-0.079 0.484-0.121 0.968-0.121 0.321 0 0.523 0.042 0.605 0.121 0.242 0.081 0.363 0.242 0.363 0.484v0.726c0 0.081-0.020 0.202-0.060 0.363-0.042 0.163-0.060 0.323-0.060 0.484l-1.089 4.475h2.419l1.089-4.596c0.242-1.37 0.161-2.377-0.242-3.024-0.484-0.726-1.373-1.089-2.661-1.089-0.484 0-0.847 0.042-1.089 0.121-0.484 0-0.806 0.042-0.968 0.121-0.081 0-0.202 0.020-0.363 0.060-0.163 0.042-0.284 0.060-0.363 0.060-0.323 0.163-0.526 0.242-0.605 0.242l-1.936 8.104z"></path>
</svg>
</div><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M35.255 12.078h-2.396c-0.229 0-0.444 0.114-0.572 0.303l-3.306 4.868-1.4-4.678c-0.088-0.292-0.358-0.493-0.663-0.493h-2.355c-0.284 0-0.485 0.28-0.393 0.548l2.638 7.745-2.481 3.501c-0.195 0.275 0.002 0.655 0.339 0.655h2.394c0.227 0 0.439-0.111 0.569-0.297l7.968-11.501c0.191-0.275-0.006-0.652-0.341-0.652zM19.237 16.718c-0.23 1.362-1.311 2.276-2.691 2.276-0.691 0-1.245-0.223-1.601-0.644-0.353-0.417-0.485-1.012-0.374-1.674 0.214-1.35 1.313-2.294 2.671-2.294 0.677 0 1.227 0.225 1.589 0.65 0.365 0.428 0.509 1.027 0.404 1.686zM22.559 12.078h-2.384c-0.204 0-0.378 0.148-0.41 0.351l-0.104 0.666-0.166-0.241c-0.517-0.749-1.667-1-2.817-1-2.634 0-4.883 1.996-5.321 4.796-0.228 1.396 0.095 2.731 0.888 3.662 0.727 0.856 1.765 1.212 3.002 1.212 2.123 0 3.3-1.363 3.3-1.363l-0.106 0.662c-0.040 0.252 0.155 0.479 0.41 0.479h2.147c0.341 0 0.63-0.247 0.684-0.584l1.289-8.161c0.040-0.251-0.155-0.479-0.41-0.479zM8.254 12.135c-0.272 1.787-1.636 1.787-2.957 1.787h-0.751l0.527-3.336c0.031-0.202 0.205-0.35 0.41-0.35h0.345c0.899 0 1.747 0 2.185 0.511 0.262 0.307 0.341 0.761 0.242 1.388zM7.68 7.473h-4.979c-0.341 0-0.63 0.248-0.684 0.584l-2.013 12.765c-0.040 0.252 0.155 0.479 0.41 0.479h2.378c0.34 0 0.63-0.248 0.683-0.584l0.543-3.444c0.053-0.337 0.343-0.584 0.683-0.584h1.575c3.279 0 5.172-1.587 5.666-4.732 0.223-1.375 0.009-2.456-0.635-3.212-0.707-0.832-1.962-1.272-3.628-1.272zM60.876 7.823l-2.043 12.998c-0.040 0.252 0.155 0.479 0.41 0.479h2.055c0.34 0 0.63-0.248 0.683-0.584l2.015-12.765c0.040-0.252-0.155-0.479-0.41-0.479h-2.299c-0.205 0.001-0.379 0.148-0.41 0.351zM54.744 16.718c-0.23 1.362-1.311 2.276-2.691 2.276-0.691 0-1.245-0.223-1.601-0.644-0.353-0.417-0.485-1.012-0.374-1.674 0.214-1.35 1.313-2.294 2.671-2.294 0.677 0 1.227 0.225 1.589 0.65 0.365 0.428 0.509 1.027 0.404 1.686zM58.066 12.078h-2.384c-0.204 0-0.378 0.148-0.41 0.351l-0.104 0.666-0.167-0.241c-0.516-0.749-1.667-1-2.816-1-2.634 0-4.883 1.996-5.321 4.796-0.228 1.396 0.095 2.731 0.888 3.662 0.727 0.856 1.765 1.212 3.002 1.212 2.123 0 3.3-1.363 3.3-1.363l-0.106 0.662c-0.040 0.252 0.155 0.479 0.41 0.479h2.147c0.341 0 0.63-0.247 0.684-0.584l1.289-8.161c0.040-0.252-0.156-0.479-0.41-0.479zM43.761 12.135c-0.272 1.787-1.636 1.787-2.957 1.787h-0.751l0.527-3.336c0.031-0.202 0.205-0.35 0.41-0.35h0.345c0.899 0 1.747 0 2.185 0.511 0.261 0.307 0.34 0.761 0.241 1.388zM43.187 7.473h-4.979c-0.341 0-0.63 0.248-0.684 0.584l-2.013 12.765c-0.040 0.252 0.156 0.479 0.41 0.479h2.554c0.238 0 0.441-0.173 0.478-0.408l0.572-3.619c0.053-0.337 0.343-0.584 0.683-0.584h1.575c3.279 0 5.172-1.587 5.666-4.732 0.223-1.375 0.009-2.456-0.635-3.212-0.707-0.832-1.962-1.272-3.627-1.272z"></path>
</svg>
</div><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M9.315 16.3c-0.401 0.401-0.901 0.803-1.502 1.202-0.101 0.1-0.251 0.15-0.451 0.15-0.3-0.3-0.652-0.751-1.052-1.352-1.002 0.901-2.103 1.352-3.305 1.352-2.005 0-3.005-1-3.005-3.005 0-1.502 0.7-2.604 2.103-3.305 0.3-0.099 1.552-0.3 3.756-0.601v-0.3c0-0.7-0.101-1.15-0.3-1.352-0.101-0.399-0.451-0.601-1.052-0.601-0.901 0-1.453 0.401-1.652 1.202 0 0.202-0.1 0.3-0.3 0.3l-1.953-0.15c-0.202 0-0.3-0.15-0.3-0.451 0.399-2.003 1.902-3.005 4.507-3.005 1.301 0 2.303 0.352 3.005 1.051 0.5 0.502 0.751 1.603 0.751 3.305v3.155c0 0.502 0.25 1.103 0.751 1.803 0.198 0.202 0.198 0.401-0.001 0.601zM5.859 12.244c-2.004 0-3.005 0.701-3.005 2.103 0 0.901 0.399 1.352 1.202 1.352 0.601 0 1.101-0.3 1.502-0.901 0.2-0.399 0.3-1.101 0.3-2.103v-0.451zM39.962 20.957c0-0.399-0.251-0.5-0.751-0.3-4.307 1.704-8.614 2.554-12.92 2.554-6.11 0-11.668-1.45-16.676-4.357l-0.451-0.15c-0.3 0.1-0.3 0.3 0 0.601 4.808 4.207 10.416 6.31 16.826 6.31 5.508 0 10.066-1.352 13.672-4.056 0.2-0.2 0.3-0.399 0.3-0.601zM11.268 17.652h1.953c0.3 0 0.451-0.15 0.451-0.451v-5.409c0-1.803 0.451-2.704 1.352-2.704 0.801 0 1.202 0.901 1.202 2.704v5.409c0 0.1 0.099 0.251 0.3 0.451h2.103c0.2 0 0.3-0.15 0.3-0.451v-5.409c0-0.901 0.049-1.552 0.15-1.953 0.3-0.5 0.7-0.751 1.202-0.751 0.7 0 1.101 0.3 1.202 0.901v7.212c0 0.1 0.15 0.251 0.451 0.451h1.953c0.2 0 0.3-0.15 0.3-0.451v-6.46c0-1.601-0.15-2.652-0.451-3.155-0.601-0.7-1.352-1.052-2.253-1.052-1.403 0-2.305 0.601-2.704 1.803-0.601-1.202-1.453-1.803-2.554-1.803-1.302 0-2.204 0.601-2.704 1.803v-1.202c0-0.3-0.1-0.451-0.3-0.451h-1.953c-0.202 0-0.3 0.15-0.3 0.451v10.066c-0.001 0.1 0.099 0.251 0.3 0.451zM31.85 10.441c0-0.7-0.101-1.15-0.3-1.352-0.101-0.399-0.451-0.601-1.052-0.601-0.901 0-1.453 0.401-1.652 1.202 0 0.1-0.101 0.251-0.3 0.451l-1.953-0.3c-0.202 0-0.3-0.15-0.3-0.451 0.399-2.003 1.902-3.005 4.507-3.005 1.202 0 2.153 0.352 2.854 1.051 0.601 0.502 0.901 1.603 0.901 3.305v3.155c0 0.502 0.25 1.103 0.751 1.803 0.2 0.202 0.2 0.401 0 0.601-0.1 0.1-0.326 0.3-0.676 0.601-0.351 0.3-0.627 0.502-0.826 0.601-0.1 0.1-0.251 0.15-0.451 0.15-0.3-0.2-0.551-0.451-0.751-0.751-0.202-0.3-0.351-0.5-0.451-0.601-0.901 0.901-1.953 1.352-3.155 1.352-2.004 0-3.005-1-3.005-3.005 0-1.502 0.7-2.604 2.103-3.305 0.3-0.099 1.552-0.3 3.756-0.601v-0.301zM31.85 12.244c-2.004 0-3.005 0.701-3.005 2.103 0 0.901 0.399 1.352 1.202 1.352 0.601 0 1.052-0.3 1.352-0.901 0.3-0.399 0.451-1.101 0.451-2.103v-0.451zM40.488 18.028c-1.453 0.052-2.68 0.376-3.681 0.977-0.401 0.401-0.351 0.601 0.15 0.601 2.503-0.3 3.956-0.248 4.357 0.15 0.2 0.3-0.15 1.704-1.051 4.207 0.099 0.202 0.25 0.251 0.451 0.15 0.901-0.7 1.552-1.728 1.953-3.080 0.399-1.352 0.451-2.179 0.15-2.479-0.102-0.4-0.878-0.576-2.33-0.527zM44.019 14.798c-0.901-0.5-2.103-0.751-3.606-0.751l3.305-4.808c0.3-0.399 0.451-0.7 0.451-0.901v-1.202c0-0.3-0.1-0.451-0.3-0.451h-6.459c-0.3 0-0.451 0.15-0.451 0.451v1.352c0 0.3 0.15 0.451 0.451 0.451h3.305l-3.906 5.558c-0.1 0.202-0.15 0.552-0.15 1.052v1.352c0 0.3 0.15 0.451 0.451 0.451 2.202-1.202 4.507-1.202 6.911 0 0.3 0 0.451-0.15 0.451-0.451v-1.502c0.001-0.3-0.15-0.5-0.451-0.601zM54.385 12.244c0 1.603-0.427 2.929-1.277 3.981-0.852 1.052-1.929 1.578-3.23 1.578-1.403 0-2.504-0.549-3.305-1.652-0.803-1.101-1.202-2.453-1.202-4.056 0-1.601 0.399-2.929 1.202-3.981 0.801-1.052 1.902-1.578 3.305-1.578 1.402 0 2.503 0.552 3.305 1.653 0.801 1.104 1.202 2.456 1.202 4.056zM51.38 12.244c0-1.202-0.1-2.103-0.3-2.704-0.1-0.601-0.502-0.901-1.202-0.901-1.002 0-1.502 1.052-1.502 3.155 0 2.606 0.501 3.906 1.502 3.906 1 0 1.502-1.15 1.502-3.456zM61.146 6.535c-1.202 0-2.103 0.653-2.704 1.953v-1.502c0-0.2-0.15-0.3-0.451-0.3h-1.803c-0.202 0-0.3 0.101-0.3 0.3v10.216c0 0.1 0.099 0.251 0.3 0.451h1.953c0.3 0 0.451-0.15 0.451-0.451v-5.409c0-0.901 0.099-1.552 0.3-1.953 0.2-0.601 0.601-0.901 1.202-0.901 0.801 0 1.202 0.953 1.202 2.854v5.409c0 0.1 0.099 0.251 0.3 0.451h1.953c0.3 0 0.451-0.15 0.451-0.451v-6.31c0-1.601-0.202-2.652-0.601-3.155-0.401-0.801-1.152-1.202-2.253-1.202z"></path>
</svg>
</div><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M32 27.099c-10.36 0-20.721 0-31.082 0-0.278 0-0.278 0-0.278-0.273 0-7.221 0-14.442 0-21.663 0-0.264 0-0.264 0.269-0.264 20.727 0 41.454 0 62.181 0 0.269 0 0.269 0 0.269 0.264 0 7.227 0 14.454-0.001 21.681 0 0.295 0.040 0.255-0.259 0.255-10.366 0.001-20.733 0.001-31.099 0.001zM6.005 7.949c0.019 0.002 0.037 0.004 0.056 0.006 0.047 0.319 0.097 0.637 0.142 0.956 0.054 0.38 0.103 0.76 0.156 1.139 0.043 0.302 0.090 0.604 0.134 0.906 0.038 0.255 0.074 0.51 0.114 0.764 0.021 0.128 0.024 0.129 0.163 0.13 0.21 0.001 0.42 0.001 0.63 0.001 0.552 0 1.105 0.001 1.656-0.001 0.147 0 0.147-0.003 0.178-0.141 0.038-0.169 0.078-0.338 0.115-0.508 0.119-0.557 0.235-1.114 0.355-1.67 0.097-0.451 0.198-0.9 0.296-1.351 0.090-0.416 0.179-0.832 0.268-1.249 0.075-0.351 0.151-0.703 0.228-1.053 0.015-0.071-0.008-0.097-0.081-0.097-0.63 0.001-1.26 0.002-1.891 0-0.086 0-0.127 0.026-0.137 0.12-0.032 0.292-0.074 0.582-0.113 0.874-0.103 0.76-0.205 1.52-0.31 2.28-0.024 0.173-0.061 0.343-0.097 0.54-0.027-0.040-0.042-0.052-0.045-0.067-0.063-0.378-0.128-0.755-0.184-1.133-0.093-0.622-0.18-1.245-0.27-1.867-0.031-0.214-0.070-0.426-0.096-0.64-0.010-0.086-0.044-0.116-0.125-0.106-0.024 0.003-0.048 0-0.072 0-0.69 0-1.381 0-2.070 0.001-0.042 0-0.087-0.008-0.125 0.005-0.034 0.011-0.070 0.040-0.086 0.070-0.020 0.035-0.019 0.081-0.025 0.122-0.040 0.285-0.079 0.57-0.121 0.854-0.053 0.355-0.113 0.71-0.166 1.065-0.067 0.45-0.127 0.901-0.195 1.352-0.017 0.116-0.051 0.229-0.077 0.343-0.054-0.141-0.088-0.28-0.107-0.42-0.060-0.427-0.113-0.855-0.17-1.282-0.088-0.659-0.179-1.318-0.267-1.976-0.017-0.128-0.014-0.131-0.15-0.131-0.612-0.001-1.224-0.001-1.837-0.001-0.132 0-0.137 0.004-0.111 0.129 0.084 0.411 0.169 0.821 0.259 1.231 0.111 0.509 0.228 1.017 0.339 1.526 0.087 0.397 0.168 0.796 0.254 1.194 0.054 0.252 0.115 0.502 0.169 0.754 0.081 0.381 0.159 0.762 0.236 1.144 0.013 0.063 0.042 0.096 0.109 0.091 0.030-0.002 0.060 0 0.090 0 0.739 0 1.476 0 2.215 0 0.036 0 0.076 0.008 0.107-0.003 0.034-0.012 0.070-0.038 0.088-0.069 0.020-0.035 0.023-0.080 0.029-0.122 0.081-0.593 0.161-1.187 0.243-1.78 0.068-0.486 0.138-0.972 0.211-1.458 0.023-0.159 0.059-0.315 0.090-0.472zM30.034 16.759c-0.015 0.001-0.030 0.003-0.045 0.004-0.052-0.125-0.108-0.25-0.154-0.377-0.117-0.327-0.229-0.655-0.343-0.983-0.251-0.717-0.502-1.434-0.753-2.15-0.046-0.131-0.051-0.14-0.19-0.141-0.864-0.001-1.728-0.001-2.592 0-0.123 0-0.126 0.003-0.127 0.135-0.002 0.234-0.001 0.468-0.001 0.702 0 1.68 0 3.36 0 5.040 0 0.172 0.001 0.174 0.165 0.174 0.534 0.001 1.068 0.001 1.602-0.001 0.138 0 0.138-0.003 0.142-0.139 0.001-0.018 0.001-0.036 0.001-0.054 0-1.044-0.001-2.088 0.001-3.132 0-0.117 0.017-0.234 0.027-0.351 0.074 0.097 0.124 0.197 0.163 0.302 0.126 0.348 0.248 0.698 0.37 1.048 0.247 0.712 0.493 1.425 0.739 2.138 0.065 0.189 0.065 0.189 0.264 0.189 0.816 0 1.632 0.001 2.448 0 0.237 0 0.22 0.031 0.22-0.223 0.001-1.746 0-3.492 0-5.238 0-0.15 0.003-0.3 0-0.45-0.003-0.136-0.006-0.14-0.143-0.14-0.54-0.001-1.080-0.001-1.62-0.001-0.156 0-0.158 0.003-0.158 0.16-0.001 1.062 0 2.124-0.001 3.185 0 0.1-0.008 0.201-0.013 0.302zM48.181 8.173c0.013-0.002 0.026-0.003 0.038-0.005 0.036 0.086 0.078 0.17 0.109 0.257 0.136 0.39 0.267 0.781 0.403 1.171 0.248 0.712 0.501 1.422 0.746 2.135 0.031 0.088 0.069 0.122 0.163 0.122 0.864-0.003 1.729-0.001 2.593-0.003 0.135 0 0.138-0.003 0.138-0.141 0.001-0.444 0.001-0.888 0.001-1.332 0-1.471 0-2.941-0.001-4.412 0-0.182-0.002-0.182-0.178-0.183-0.522-0.001-1.044-0.001-1.567 0-0.159 0.001-0.161 0.003-0.161 0.157-0.001 0.528-0.001 1.056-0.001 1.585 0 0.564 0.001 1.128-0.001 1.693 0 0.073 0.015 0.152-0.053 0.237-0.036-0.077-0.069-0.133-0.091-0.193-0.054-0.146-0.104-0.293-0.156-0.44-0.177-0.502-0.354-1.004-0.531-1.507-0.166-0.474-0.334-0.947-0.496-1.422-0.028-0.080-0.060-0.113-0.149-0.113-0.864 0.003-1.729 0.001-2.593 0.003-0.145 0-0.146 0.004-0.146 0.156 0 1.35 0 2.701-0.001 4.051 0 0.576-0.001 1.153 0.001 1.729 0 0.127 0.003 0.131 0.128 0.131 0.546 0.001 1.093 0.001 1.638 0 0.139 0 0.139-0.003 0.143-0.139 0.001-0.048 0.001-0.096 0.001-0.144-0.001-1.056-0.003-2.113-0.002-3.169 0.001-0.075 0.015-0.15 0.023-0.225zM48.184 15.484c0.013-0.001 0.026-0.003 0.040-0.004 0.048 0.127 0.097 0.253 0.143 0.381 0.13 0.36 0.261 0.72 0.387 1.082 0.237 0.684 0.47 1.37 0.709 2.053 0.058 0.167 0.021 0.168 0.24 0.168 0.822 0 1.644 0 2.467 0 0.036 0 0.072-0.001 0.108-0.001 0.058 0.001 0.091-0.024 0.092-0.084 0.001-0.030 0.001-0.060 0.001-0.090 0-1.902 0.001-3.804 0-5.707 0-0.168-0.002-0.17-0.169-0.17-0.516-0.001-1.032-0.001-1.548-0.001-0.207 0-0.189-0.012-0.189 0.2 0 1.020 0 2.040-0.001 3.060 0 0.090 0.002 0.18-0.003 0.27-0.002 0.035-0.020 0.069-0.030 0.104-0.067-0.080-0.106-0.159-0.136-0.243-0.093-0.259-0.184-0.52-0.276-0.78-0.129-0.366-0.259-0.733-0.387-1.1-0.164-0.469-0.327-0.938-0.488-1.408-0.027-0.078-0.062-0.109-0.154-0.109-0.852 0.006-1.704 0.004-2.556 0.004-0.182 0-0.183-0.001-0.183 0.175-0.001 1.902-0.002 3.804-0.002 5.707 0 0.168 0.001 0.17 0.17 0.17 0.522 0.001 1.044 0.001 1.566 0 0.173 0 0.173-0.001 0.175-0.18 0-0.036-0.001-0.072-0.001-0.108 0-1.038-0.001-2.076 0.001-3.114 0.002-0.092 0.017-0.184 0.025-0.276zM43.196 8.794c-0.001-0.012-0.001-0.024-0.001-0.036 0.094-0.037 0.188-0.074 0.282-0.11 0.449-0.175 0.749-0.479 0.847-0.964 0.057-0.282 0.042-0.557-0.024-0.836-0.085-0.364-0.305-0.614-0.622-0.793-0.197-0.111-0.411-0.172-0.63-0.198-0.297-0.037-0.596-0.067-0.895-0.070-0.792-0.010-1.584-0.003-2.376-0.003-0.312 0-0.624-0.001-0.936 0.001-0.12 0.001-0.12 0.005-0.125 0.12-0.001 0.030 0 0.060 0 0.090 0 1.866 0 3.732 0 5.599 0 0.048 0.003 0.096-0.001 0.144-0.006 0.084 0.026 0.116 0.114 0.115 0.696-0.003 1.392-0.001 2.088-0.002 0.12 0 0.122-0.006 0.127-0.119 0.002-0.042 0.001-0.084 0.001-0.126-0.003-0.606-0.005-1.212-0.010-1.818-0.001-0.084 0.032-0.125 0.117-0.119 0.149 0.011 0.3 0.012 0.446 0.037 0.198 0.034 0.314 0.159 0.346 0.361 0.042 0.272 0.083 0.545 0.129 0.816s0.094 0.542 0.15 0.811c0.033 0.157 0.040 0.157 0.203 0.157 0.66 0.001 1.32 0.001 1.98 0 0.045 0 0.092-0.007 0.146-0.012-0.010-0.053-0.016-0.094-0.026-0.134-0.121-0.472-0.179-0.953-0.237-1.435-0.027-0.22-0.053-0.441-0.102-0.656-0.093-0.41-0.342-0.675-0.768-0.755-0.075-0.014-0.148-0.043-0.222-0.065zM23.835 15.324c0.001 0 0.003 0 0.003 0 0-0.684 0.001-1.368-0.001-2.052 0-0.158-0.003-0.158-0.159-0.161-0.048-0.001-0.096 0-0.144 0-0.648 0-1.296-0.001-1.944-0.001-0.115 0-0.118 0-0.119 0.115-0.002 0.228-0.001 0.456-0.001 0.684 0 1.032 0.002 2.064-0.003 3.096-0.001 0.136-0.019 0.276-0.059 0.405-0.069 0.218-0.228 0.321-0.445 0.321-0.204 0-0.352-0.108-0.44-0.308-0.067-0.154-0.070-0.314-0.070-0.476 0-1.164 0-2.328 0-3.492 0-0.066 0.001-0.132 0-0.198-0.003-0.141-0.003-0.141-0.137-0.145-0.012-0.001-0.024 0-0.036 0-0.678 0-1.356 0-2.034-0.001-0.024 0-0.048-0.001-0.072-0.001-0.058 0.002-0.086 0.033-0.087 0.091 0 0.036-0.001 0.072-0.001 0.108 0 1.242-0.001 2.485 0.001 3.726 0 0.15 0.008 0.3 0.027 0.449 0.090 0.687 0.442 1.185 1.070 1.491 0.416 0.202 0.857 0.297 1.314 0.324 0.419 0.025 0.839 0.031 1.256-0.032 0.363-0.055 0.714-0.145 1.043-0.316 0.689-0.36 1.015-0.943 1.035-1.701 0.016-0.642 0.003-1.284 0.003-1.926zM41.254 19.312c0.579 0.011 1.094-0.076 1.582-0.298 0.428-0.195 0.779-0.488 1.045-0.874 0.349-0.507 0.502-1.085 0.545-1.69 0.035-0.492-0.006-0.981-0.142-1.459-0.158-0.556-0.448-1.032-0.895-1.399-0.411-0.338-0.898-0.523-1.418-0.597-0.523-0.074-1.049-0.072-1.571 0.049-0.651 0.15-1.194 0.454-1.606 0.998-0.269 0.354-0.426 0.748-0.527 1.167-0.095 0.392-0.109 0.796-0.084 1.198 0.045 0.719 0.23 1.389 0.712 1.951 0.241 0.282 0.53 0.502 0.867 0.653 0.488 0.219 1.002 0.32 1.492 0.301zM19.32 10.020v-0.001c-0.318 0-0.636 0-0.954 0-0.042 0-0.084 0-0.126 0.002-0.053 0.002-0.077 0.035-0.070 0.083 0.037 0.298 0.082 0.593 0.24 0.858 0.31 0.519 0.795 0.779 1.359 0.918 0.356 0.088 0.719 0.125 1.087 0.128 0.663 0.005 1.316-0.053 1.928-0.337 0.342-0.159 0.631-0.383 0.829-0.711 0.237-0.394 0.316-0.819 0.264-1.275-0.046-0.412-0.22-0.753-0.532-1.024-0.296-0.257-0.656-0.39-1.023-0.499-0.465-0.136-0.936-0.251-1.403-0.381-0.108-0.030-0.218-0.074-0.312-0.134-0.221-0.139-0.216-0.449 0.010-0.577 0.085-0.049 0.189-0.068 0.288-0.085 0.076-0.013 0.155-0.005 0.234-0.002 0.243 0.009 0.375 0.116 0.433 0.352 0.037 0.151 0.037 0.151 0.195 0.151 0.42 0 0.84 0 1.26 0 0.192 0 0.384-0.001 0.576 0.001 0.069 0.001 0.095-0.026 0.094-0.096-0.006-0.365-0.113-0.696-0.34-0.981-0.337-0.422-0.812-0.598-1.318-0.696-0.323-0.063-0.652-0.081-0.984-0.079-0.568 0.003-1.124 0.073-1.649 0.294-0.425 0.179-0.763 0.465-0.963 0.891-0.15 0.319-0.17 0.657-0.146 1.002 0.032 0.468 0.241 0.835 0.624 1.1 0.212 0.148 0.454 0.234 0.703 0.303 0.421 0.118 0.84 0.243 1.258 0.369 0.183 0.055 0.367 0.111 0.541 0.187 0.273 0.12 0.339 0.446 0.148 0.671-0.19 0.224-0.438 0.255-0.704 0.196-0.262-0.058-0.388-0.245-0.415-0.502-0.013-0.122-0.020-0.13-0.16-0.129-0.322 0.002-0.646 0.001-0.97 0.001zM32.269 8.809c0 0.822 0 1.644 0 2.466 0 0.15-0.002 0.3 0.001 0.45 0.002 0.12 0.004 0.121 0.117 0.125 0.042 0.001 0.084 0.001 0.126 0.001 1.35 0 2.7 0 4.050 0 0.084 0 0.168 0.002 0.252-0.001 0.119-0.003 0.123-0.004 0.125-0.122 0.003-0.192 0.001-0.384 0.001-0.576 0-0.24 0.001-0.48-0.001-0.72-0.001-0.115-0.004-0.116-0.123-0.12-0.036-0.001-0.072 0-0.108 0-0.642 0-1.284 0-1.926 0-0.048 0-0.096-0.002-0.144 0-0.075 0.003-0.108-0.032-0.107-0.108 0.003-0.12-0.001-0.24 0-0.36 0.003-0.292-0.035-0.262 0.256-0.262 0.57-0.001 1.14 0 1.71-0.001 0.171-0.001 0.173-0.003 0.173-0.17 0.001-0.216 0.001-0.432 0.001-0.648 0-0.198 0.001-0.396-0.001-0.594-0.002-0.126-0.006-0.127-0.134-0.133-0.030-0.001-0.060 0-0.090 0-0.564 0-1.128 0-1.692 0-0.042 0-0.084-0.001-0.126 0-0.069 0.001-0.097-0.035-0.097-0.101 0.001-0.15-0.002-0.3 0-0.45 0.002-0.139 0.003-0.142 0.139-0.143 0.288-0.002 0.576-0.001 0.864-0.001 0.39 0 0.78 0.001 1.17-0.001 0.139-0.001 0.159-0.016 0.16-0.134 0.003-0.432 0.003-0.864 0-1.296-0.001-0.115-0.016-0.123-0.124-0.129-0.024-0.001-0.048 0.001-0.072 0.001-1.398 0-2.795-0.001-4.194-0.001-0.212 0-0.207-0.026-0.207 0.201 0.001 0.942 0.001 1.884 0.001 2.826zM11.983 8.815v0c-0.001 0.192-0.001 0.384-0.001 0.576 0 0.768-0.001 1.536 0.001 2.304 0 0.153 0.003 0.156 0.146 0.156 1.458 0.001 2.916 0.001 4.374 0 0.14 0 0.142-0.003 0.143-0.138 0.002-0.336 0.001-0.672 0.001-1.008 0-0.096-0.003-0.192 0-0.288 0.002-0.077-0.033-0.109-0.108-0.104-0.042 0.003-0.084 0-0.126 0-0.564 0-1.128 0-1.692 0-0.12 0-0.24-0.003-0.36 0-0.077 0.002-0.107-0.034-0.106-0.109 0.002-0.12-0.003-0.24-0.001-0.36 0.003-0.295-0.037-0.261 0.255-0.262 0.576-0.002 1.152 0 1.728-0.003 0.168-0.001 0.172-0.007 0.173-0.174 0.001-0.402 0.001-0.804-0.001-1.206-0.001-0.158-0.005-0.158-0.163-0.162-0.030-0.001-0.060 0-0.090 0-0.558 0-1.116 0-1.674 0-0.042 0-0.084-0.001-0.126-0.001-0.065 0.001-0.101-0.026-0.101-0.095 0.001-0.174 0.001-0.348 0.001-0.522 0-0.051 0.024-0.079 0.075-0.079 0.036-0.001 0.072 0.002 0.108 0.002 0.654 0 1.308 0.001 1.962 0.001 0.172 0 0.172-0.001 0.173-0.182 0.001-0.318 0-0.636 0-0.954 0-0.102-0.002-0.204 0.001-0.306 0.002-0.084-0.036-0.122-0.119-0.118-0.030 0.001-0.060 0-0.090 0-1.392 0-2.784 0-4.176 0-0.036 0-0.072 0.003-0.108 0-0.070-0.005-0.097 0.033-0.098 0.097 0 0.042-0.001 0.084-0.001 0.126 0.002 0.937 0.002 1.873 0.002 2.809zM27.949 5.783c-0.042 0-0.084 0-0.126 0-0.792 0-1.584 0.001-2.376 0-0.239 0-0.193 0.024-0.193 0.199-0.002 0.42-0.002 0.84-0.001 1.26 0.001 0.139 0.003 0.142 0.141 0.143 0.372 0.002 0.744 0.001 1.116 0.001 0.275 0 0.254-0.021 0.254 0.251 0 1.35 0 2.699 0 4.049 0 0.164 0.001 0.165 0.166 0.165 0.654 0.001 1.308 0.001 1.962 0 0.259-0.001 0.238 0.028 0.238-0.246 0-1.338-0.001-2.675-0.001-4.013 0-0.205 0.001-0.206 0.209-0.207 0.378-0.001 0.756 0.001 1.134-0.001 0.157-0.001 0.167-0.008 0.168-0.16 0.003-0.438 0.002-0.875 0-1.314-0.001-0.12-0.005-0.122-0.119-0.127-0.042-0.002-0.084-0.001-0.126-0.001-0.814 0.001-1.63 0.001-2.446 0.001zM36.364 16.147c0-0.931 0-1.861 0-2.791 0-0.036 0.001-0.072 0-0.108-0.003-0.132-0.004-0.132-0.127-0.137-0.030-0.001-0.060 0-0.090 0-0.643 0-1.285 0-1.927 0-0.242 0-0.224-0.019-0.224 0.223 0 1.873 0 3.746 0 5.619 0 0.036 0.001 0.072 0.001 0.108 0.001 0.065 0.030 0.101 0.098 0.101 0.042 0 0.084 0.001 0.126 0.001 0.595 0 1.188 0 1.783 0 0.084 0 0.168-0.005 0.252 0.001 0.090 0.006 0.118-0.035 0.109-0.117-0.003-0.029-0.001-0.060-0.001-0.090 0-0.936 0-1.873 0-2.81zM54.108 12.38c0 2.058 0 4.116 0 6.175 0 0.138 0.004 0.276 0.001 0.414-0.002 0.083 0.026 0.121 0.114 0.118 0.126-0.005 0.252 0 0.378-0.001 0.236-0.002 0.223 0.031 0.223-0.222 0-4.296 0-8.593 0.001-12.889 0-0.054-0.003-0.108 0-0.162 0.004-0.074-0.025-0.109-0.104-0.108-0.168 0.003-0.336 0.003-0.504-0.001-0.079-0.002-0.107 0.032-0.106 0.106 0.001 0.15-0.002 0.3-0.002 0.449-0.001 2.040-0.001 4.081-0.001 6.12zM59.541 12.452c0 2.131 0 4.262 0 6.393 0 0.030-0.001 0.060 0 0.090 0.004 0.12 0.004 0.123 0.118 0.124 0.156 0.002 0.312 0.001 0.468-0.001 0.118-0.002 0.119-0.005 0.123-0.12 0.001-0.030 0-0.060 0-0.090 0-4.22 0-8.44 0-12.659 0-0.060 0-0.12-0.001-0.18-0.003-0.17-0.003-0.17-0.164-0.172-0.108-0.001-0.216-0.001-0.324-0.001-0.263-0.001-0.22-0.005-0.22 0.224-0.001 2.131-0.001 4.261-0.001 6.392zM62.523 6.538c0.016-0.415-0.323-0.785-0.761-0.785-0.465 0-0.783 0.339-0.783 0.762 0 0.424 0.276 0.765 0.762 0.788 0.42 0.021 0.779-0.342 0.782-0.764zM41.051 7.724c0-0.156 0.003-0.312-0.001-0.468-0.002-0.084 0.029-0.124 0.115-0.117 0.167 0.013 0.336 0.013 0.501 0.042 0.232 0.040 0.374 0.193 0.404 0.401 0.040 0.278-0.061 0.519-0.278 0.632-0.208 0.108-0.435 0.123-0.665 0.113-0.065-0.003-0.075-0.047-0.075-0.099 0-0.168 0-0.335 0-0.503zM40.623 16.141c0.035-0.351 0.065-0.701 0.109-1.051 0.013-0.104 0.058-0.207 0.102-0.304 0.092-0.205 0.264-0.284 0.479-0.284 0.219 0 0.387 0.093 0.467 0.3 0.060 0.155 0.114 0.317 0.135 0.481 0.063 0.488 0.075 0.979 0.021 1.469-0.019 0.172-0.047 0.343-0.080 0.513-0.015 0.075-0.047 0.148-0.081 0.218-0.097 0.198-0.26 0.289-0.479 0.285s-0.374-0.1-0.469-0.3c-0.123-0.261-0.15-0.54-0.169-0.821-0.011-0.167-0.002-0.335-0.002-0.503-0.012-0.001-0.023-0.001-0.034-0.003zM61.061 6.532c-0.006-0.391 0.292-0.714 0.68-0.714 0.403 0 0.691 0.291 0.694 0.696 0.005 0.43-0.282 0.724-0.685 0.723-0.402-0.001-0.67-0.282-0.69-0.705zM61.879 6.57c0.054-0.019 0.088-0.030 0.12-0.044 0.107-0.044 0.164-0.131 0.155-0.234-0.010-0.106-0.083-0.184-0.201-0.193-0.137-0.010-0.275-0.004-0.412-0.005-0.062-0.001-0.084 0.031-0.083 0.089 0.003 0.125 0.004 0.251 0.005 0.376 0 0.108-0.005 0.215-0.002 0.323 0.001 0.024 0.026 0.046 0.040 0.069 0.015-0.021 0.042-0.041 0.044-0.063 0.006-0.071 0.001-0.143 0.005-0.215 0.005-0.109 0.019-0.118 0.126-0.122 0.079-0.003 0.122 0.038 0.158 0.096 0.054 0.086 0.105 0.174 0.16 0.259 0.028 0.044 0.063 0.069 0.12 0.028-0.076-0.118-0.15-0.233-0.234-0.365zM61.76 6.144c0.053 0.005 0.113 0.009 0.172 0.018 0.075 0.012 0.115 0.065 0.122 0.135 0.008 0.077-0.020 0.15-0.105 0.163-0.111 0.018-0.224 0.023-0.336 0.026-0.019 0.001-0.055-0.034-0.057-0.054-0.008-0.077-0.008-0.155-0.002-0.232 0.001-0.020 0.035-0.049 0.058-0.053 0.045-0.009 0.094-0.003 0.148-0.003z"></path>
</svg>
</div><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M8.498 23.915h-1.588l1.322-5.127h-1.832l0.286-1.099h5.259l-0.287 1.099h-1.837l-1.323 5.127zM13.935 21.526l-0.62 2.389h-1.588l1.608-6.226h1.869c0.822 0 1.44 0.145 1.853 0.435 0.412 0.289 0.62 0.714 0.62 1.273 0 0.449-0.145 0.834-0.432 1.156-0.289 0.322-0.703 0.561-1.245 0.717l1.359 2.645h-1.729l-1.077-2.389h-0.619zM14.21 20.452h0.406c0.454 0 0.809-0.081 1.062-0.243s0.38-0.409 0.38-0.741c0-0.233-0.083-0.407-0.248-0.523s-0.424-0.175-0.778-0.175h-0.385l-0.438 1.682zM22.593 22.433h-2.462l-0.895 1.482h-1.666l3.987-6.252h1.942l0.765 6.252h-1.546l-0.125-1.482zM22.515 21.326l-0.134-1.491c-0.035-0.372-0.052-0.731-0.052-1.077v-0.154c-0.153 0.34-0.342 0.701-0.567 1.081l-0.979 1.64h1.732zM31.663 23.915h-1.78l-1.853-4.71h-0.032l-0.021 0.136c-0.111 0.613-0.226 1.161-0.343 1.643l-0.755 2.93h-1.432l1.608-6.226h1.859l1.77 4.586h0.021c0.042-0.215 0.109-0.524 0.204-0.924s0.406-1.621 0.937-3.662h1.427l-1.609 6.225zM38.412 22.075c0 0.593-0.257 1.062-0.771 1.407s-1.21 0.517-2.088 0.517c-0.768 0-1.386-0.128-1.853-0.383v-1.167c0.669 0.307 1.291 0.46 1.863 0.46 0.389 0 0.693-0.060 0.911-0.181s0.328-0.285 0.328-0.495c0-0.122-0.024-0.229-0.071-0.322s-0.114-0.178-0.2-0.257c-0.088-0.079-0.303-0.224-0.646-0.435-0.479-0.28-0.817-0.559-1.011-0.835-0.195-0.275-0.292-0.572-0.292-0.89 0-0.366 0.108-0.693 0.323-0.982 0.214-0.288 0.522-0.512 0.918-0.673 0.398-0.16 0.854-0.24 1.372-0.24 0.753 0 1.442 0.14 2.067 0.421l-0.567 0.993c-0.541-0.21-1.041-0.316-1.499-0.316-0.289 0-0.525 0.064-0.708 0.192-0.185 0.128-0.276 0.297-0.276 0.506 0 0.173 0.057 0.325 0.172 0.454 0.114 0.129 0.371 0.3 0.771 0.513 0.419 0.227 0.733 0.477 0.942 0.752 0.21 0.273 0.314 0.593 0.314 0.959zM41.266 23.915h-1.588l1.608-6.226h4.238l-0.281 1.082h-2.645l-0.412 1.606h2.463l-0.292 1.077h-2.463l-0.63 2.461zM49.857 23.915h-4.253l1.608-6.226h4.259l-0.281 1.082h-2.666l-0.349 1.367h2.484l-0.286 1.081h-2.484l-0.417 1.606h2.666l-0.28 1.091zM53.857 21.526l-0.62 2.389h-1.588l1.608-6.226h1.869c0.822 0 1.44 0.145 1.853 0.435s0.62 0.714 0.62 1.273c0 0.449-0.145 0.834-0.432 1.156-0.289 0.322-0.703 0.561-1.245 0.717l1.359 2.645h-1.729l-1.077-2.389h-0.619zM54.133 20.452h0.406c0.454 0 0.809-0.081 1.062-0.243s0.38-0.409 0.38-0.741c0-0.233-0.083-0.407-0.248-0.523s-0.424-0.175-0.778-0.175h-0.385l-0.438 1.682zM30.072 8.026c0.796 0 1.397 0.118 1.804 0.355s0.61 0.591 0.61 1.061c0 0.436-0.144 0.796-0.433 1.080-0.289 0.283-0.699 0.472-1.231 0.564v0.026c0.348 0.076 0.625 0.216 0.831 0.421 0.207 0.205 0.31 0.467 0.31 0.787 0 0.666-0.266 1.179-0.797 1.539s-1.267 0.541-2.206 0.541h-2.72l1.611-6.374h2.221zM28.111 13.284h0.938c0.406 0 0.726-0.084 0.957-0.253s0.347-0.403 0.347-0.701c0-0.471-0.317-0.707-0.954-0.707h-0.86l-0.428 1.661zM28.805 10.55h0.776c0.421 0 0.736-0.071 0.946-0.212s0.316-0.344 0.316-0.608c0-0.398-0.296-0.598-0.886-0.598h-0.792l-0.36 1.418zM37.242 12.883h-2.466l-0.897 1.517h-1.669l3.993-6.4h1.945l0.766 6.4h-1.548l-0.125-1.517zM37.163 11.749l-0.135-1.526c-0.035-0.381-0.053-0.748-0.053-1.103v-0.157c-0.153 0.349-0.342 0.718-0.568 1.107l-0.98 1.679h1.736zM46.325 14.4h-1.782l-1.856-4.822h-0.032l-0.021 0.14c-0.111 0.628-0.226 1.188-0.344 1.683l-0.756 3h-1.434l1.611-6.374h1.861l1.773 4.695h0.021c0.042-0.22 0.11-0.536 0.203-0.946s0.406-1.66 0.938-3.749h1.428l-1.611 6.374zM54.1 14.4h-1.763l-1.099-2.581-0.652 0.305-0.568 2.276h-1.59l1.611-6.374h1.596l-0.792 3.061 0.824-0.894 2.132-2.166h1.882l-3.097 3.052 1.517 3.322zM23.040 8.64c0-0.353-0.287-0.64-0.64-0.64h-14.080c-0.353 0-0.64 0.287-0.64 0.64v0c0 0.353 0.287 0.64 0.64 0.64h14.080c0.353 0 0.64-0.287 0.64-0.64v0zM19.2 11.2c0-0.353-0.287-0.64-0.64-0.64h-10.24c-0.353 0-0.64 0.287-0.64 0.64v0c0 0.353 0.287 0.64 0.64 0.64h10.24c0.353 0 0.64-0.287 0.64-0.64v0zM15.36 13.76c0-0.353-0.287-0.64-0.64-0.64h-6.4c-0.353 0-0.64 0.287-0.64 0.64v0c0 0.353 0.287 0.64 0.64 0.64h6.4c0.353 0 0.64-0.287 0.64-0.64v0z"></path>
</svg>
</div></div> </div>
</div>
</li>
</ul>
</div>
</div>
<div class="container"><div class="top-divider full-width"></div></div>
</div>
<div class="header-bg-container fill"><div class="header-bg-image fill"></div><div class="header-bg-color fill"></div></div> </div>
</header>







<main id="main" class="">
	<div class="checkout-page-title page-title">
	<div class="page-title-inner flex-row medium-flex-wrap container">
	<div class="flex-col flex-grow medium-text-center">
	<nav class="breadcrumbs flex-row flex-row-center heading-font checkout-breadcrumbs text-center strong h2 uppercase">

	<span class="divider hide-for-small"></span>
	<a href="" class="current">
	Checkout details </a>
	<span class="divider hide-for-small"></span>

	</nav>
	</div>
	</div>
	</div>
	<div class="cart-container container page-wrapper page-checkout"><div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><div class="woocommerce-form-coupon-toggle">
	<div class="woocommerce-info message-wrapper">

		<!--COUPON-->
<!----	<div class="message-container container medium-text-center">
	Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a> </div>
	</div>
	</div>
	<form class="checkout_coupon woocommerce-form-coupon has-border is-dashed" method="post" style="display:none">
	<p>If you have a coupon code, please apply it below.</p>
	<div class="coupon">
	<div class="flex-row medium-flex-wrap">
	<div class="flex-col flex-grow">
	<input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="" />
	</div>
	<div class="flex-col">
	<button type="submit" class="button expand" name="apply_coupon" value="Apply coupon">Apply coupon</button>
	</div>
	</div>
	</div>
	</form>-->

	
	<div class="woocommerce-notices-wrapper"></div> <style type="text/css">
				   .wt-single-coupon{
						background-color: #2890a8 ;
						border: 2px dashed #ffffff;
						color: #ffffff;
						box-shadow: 0 0 0 4px #2890a8, 2px 1px 6px 4px rgba(10, 10, 0, 0.5);
						text-shadow: -1px -1px #2890a8;
					}
	
					.wt-single-coupon.used-coupon {
						background-color: #eeeeee ;
						border: 2px dashed #000000;
						color: #000000;
						box-shadow: 0 0 0 4px #eeeeee, 2px 1px 6px 4px rgba(10, 10, 0, 0.5);
						text-shadow: -1px -1px #eeeeee;
					}
					.wt-single-coupon.used-coupon.expired {
						background-color: #f3dfdf ;
						border: 2px dashed #eccaca;
						color: #eccaca;
						box-shadow: 0 0 0 4px #f3dfdf, 2px 1px 6px 4px rgba(10, 10, 0, 0.5);
						text-shadow: -1px -1px #f3dfdf;
					}
	
				</style>



<!-------CART DISCCOUNT------->
	<!--S<div class="wt_coupon_wrapper"> <div class="wt-single-coupon">
	<div class="wt-coupon-content">
	<div class="wt-coupon-amount">
	<span class="amount"> &#36;5</span><span> Cart Discount</span>
	</div>
	<div class="wt-coupon-code"> <code> MONEYSTORE</code></div>
	<div class="wt-coupon-expiry">Expires on April 1, 2022</div>
	<div class="coupon-desc-wrapper">
	<i class="info"> i </i>
	<div class="coupon-desc"> Buy and get free $5 discount on checkout. </div>
	</div>
	</div>
	</div>
	</div>-->




	<form name="checkout" method="post" class="checkout woocommerce-checkout " action="add-fund.html" enctype="multipart/form-data">
	<div class="row pt-0 ">
	<div class="large-7 col  ">
	<div id="customer_details">
	<div class="clear">
	<div class="woocommerce-billing-fields">
	<h3>Billing details</h3>
	<div class="woocommerce-billing-fields__field-wrapper">
	<p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="-1"><label for="billing_email" class="">Email address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="" autocomplete="email username" /></span></p><p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="">First name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name" /></span></p><p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20"><label for="billing_last_name" class="">Last name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="" autocomplete="family-name" /></span></p><p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40"><label for="billing_country" class="">Country / Region&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><select name="billing_country" id="billing_country" class="country_to_state country_select " autocomplete="country" data-placeholder="Select a country / region&hellip;" data-label="Country / Region"><option value="">Select a country / region&hellip;</option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="PW">Belau</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, Saint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Cura&ccedil;ao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MK">North Macedonia</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option><option value="BL">Saint Barth&eacute;lemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="SX">Saint Martin (Dutch part)</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">
		Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom (UK)</option><option value="US" selected='selected'></option><option value="UM">United States (US) Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select><noscript><button type="submit" name="woocommerce_checkout_update_totals" value="Update country / region">Update country / region</button></noscript></span></p><p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50"><label for="billing_address_1" class="">Street address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="House number and street name" value="" autocomplete="address-line1" /></span></p><p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-priority="70"><label for="billing_city" class="">Town / City&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="" autocomplete="address-level2" /></span></p><p class="form-row form-row-wide address-field validate-required validate-state" id="billing_state_field" data-priority="80"><label for="billing_state" class="">State&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><select name="billing_state" id="billing_state" class="state_select " autocomplete="address-level1" data-placeholder="Select an option&hellip;" data-input-classes="" data-label="State">
	<option value="">Select an option&hellip;</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC" selected='selected'></option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option value="AA">Armed Forces (AA)</option><option value="AE">Armed Forces (AE)</option><option value="AP">Armed Forces (AP)</option></select></span></p><p class="form-row form-row-wide address-field validate-required validate-postcode" id="billing_postcode_field" data-priority="90"><label for="billing_postcode" class="">ZIP Code&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" autocomplete="postal-code" /></span></p> </div>
	</div>
	</div>
	<div class="clear">
	<div class="woocommerce-shipping-fields">
	</div>
	<div class="woocommerce-additional-fields">

	<p class="form-row ce-field form-row-wide" id="ce4wp_checkout_consent_checkbox_field" data-priority=""><span class="woocommerce-input-wrapper"><label class="checkbox ">
	<input type="checkbox" class="input-checkbox " name="ce4wp_checkout_consent_checkbox" id="ce4wp_checkout_consent_checkbox" value="1" /> Yes, I'm ok with you sending me additional newsletter and email content&nbsp;<span class="optional">(optional)</span></label></span></p></div>
	</div>
	</div>
	</div>
  <div class="large-5 col">
			
    <div class="col-inner has-border">
      <div class="checkout-sidebar sm-touch-scroll">

        
        <h3 id="order_review_heading">Your order</h3>

        
        <div id="order_review" class="woocommerce-checkout-review-order">
          <table class="shop_table woocommerce-checkout-review-order-table">
<thead>
<tr>
<th class="product-name">Product</th>
<th class="product-total">Subtotal</th>
</tr>
</thead>
<tbody>
      <tr class="cart_item">
    <td class="product-name"></b><?= $allItems; ?>
    <td class="product-total">
      <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><?= $grand_total; ?></bdi></span>					</td>
  </tr>
    </tbody>
<tfoot>

<tr class="cart-subtotal">
<th>Subtotal</th>
<td><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span></b><?= number_format($grand_total,2) ?></bdi></span></td>
</tr>

    <tr class="cart-discount coupon-moneystore">
  <th></th>

</tr>





<tr class="order-total">
<th>Total</th>
<td><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span></b><?= number_format($grand_total,2) ?></bdi></span></strong> </td>
</tr>


</tfoot>
</table>
	<div id="order_review" class="woocommerce-checkout-review-order">
	<table class="shop_table woocommerce-checkout-review-order-table">
	<thead>
	<tr>

	</tr>
	</thead>
	<tbody>
	<tr class="cart_item">
	<td class="product-name">
	</td>
	<td class="product-total">
	<span class="woocommerce-Price-amount amount"></span> </td>
	</tr>
	</tbody>
	<tfoot>
	<tr class="cart-subtotal">
	
	
	<tr class="order-total">

	<td><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span></bdi></span></strong> </td>
	</tr>
	</tfoot>
	</table>
	<div id="payment" class="woocommerce-checkout-payment">
			<ul class="wc_payment_methods payment_methods methods">
			<li class="wc_payment_method payment_method_btcpay">
	<input id="payment_method_btcpay" type="radio" class="input-radio" name="payment_method" value="btcpay"  checked='checked' data-order_button_text="Proceed to BTCPay" />

	<label for="payment_method_btcpay">
		Bitcoin <img src="https://i0.wp.com/cardingstore.com/wp-content/plugins/btcpay-for-woocommerce/assets/img/icon.png?w=1020&#038;ssl=1" alt="Bitcoin" data-recalc-dims="1" />	</label>
			<div class="payment_box payment_method_btcpay" >
			<p>You will be redirected to BTCPay to complete your purchase.</p>
		</div>
	</li>
		</ul>
		<div class="form-row place-order">
		<noscript>
			Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
		</noscript>

		<p class="form-row " id="mailpoet_woocommerce_checkout_optin_field" data-priority=""><span class="woocommerce-input-wrapper"><label class="checkbox woocommerce-form__label woocommerce-form__label-for-checkbox checkbox" data-automation-id="woo-commerce-subscription-opt-in">
						
		
			</div>
	
		
		<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Proceed to BTC PAY</button>
		
		<input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="39b3b7df28" /><input type="hidden" name="_wp_http_referer" value="/checkout/" />	</div>
</div>
							</div>

							<div class="woocommerce-privacy-policy-text"><p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="https://cardingstore.com/privacy-policy/" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
</div>						</div>
					</div>

					</div>

	</div>
	</form>

	</div>
	</div>
	</main>

	<div class="footer-widgets footer footer-2 dark">
<div class="row dark large-columns-4 mb-0">
<div id="flatsome_recent_posts-18" class="col pb-0 widget flatsome_recent_posts"> <span class="widget-title"></span><div class="is-divider small"></div> <ul>
<li class="recent-blog-posts-li">
<div class="flex-row recent-blog-posts align-top pt-half pb-half">
<div class="flex-col mr-half">

</div>
</div>
</div>
</li>
</ul> </div><div id="woocommerce_product_tag_cloud-8" class="col pb-0 widget woocommerce widget_product_tag_cloud"><span class="widget-title">Tags</span><div class="is-divider small"></div><div class="tagcloud"><a href="../carded-e-gift-cards/cardedgift.php" class="tag-cloud-link tag-link-116 tag-link-position-1" style="font-size: 14.3pt;" aria-label="Amazon Gift Card (2 products)">Amazon Gift Card</a>
	<a href="../bank-drops/banklogs.php" class="tag-cloud-link tag-link-134 tag-link-position-2" style="font-size: 8pt;" aria-label="American Express (1 product)">American Express</a>
	<a href="../credit-debit-cards/credit.php" class="tag-cloud-link tag-link-112 tag-link-position-3" style="font-size: 8pt;" aria-label="AUSTRALIA CVV 🇦🇺 (1 product)">AUSTRALIA CVV 🇦🇺</a>
	<a href="../credit-debit-cards/credit.php" class="tag-cloud-link tag-link-103 tag-link-position-4" style="font-size: 8pt;" aria-label="CANADA CC 🇨🇦 (1 product)">CANADA CC 🇨🇦</a>
	<a href="../bank-drops/banklogs.php" class="tag-cloud-link tag-link-136 tag-link-position-5" style="font-size: 14.3pt;" aria-label="Capital One Bank (2 products)">Capital One Bank</a>
	<a href="../cash-app/cashApp.php" class="tag-cloud-link tag-link-97 tag-link-position-6" style="font-size: 14.3pt;" aria-label="CashApp - UK (2 products)">CashApp - UK</a>
	<a href="../cash-app/cashApp.php" class="tag-cloud-link tag-link-95 tag-link-position-7" style="font-size: 14.3pt;" aria-label="Cash App - USA (2 products)">Cash App - USA</a>
	<a href="../bank-drops/banklogs.php" class="tag-cloud-link tag-link-122 tag-link-position-8" style="font-size: 8pt;" aria-label="Chase Bank (1 product)">Chase Bank</a>
	<a href="../bank-drops/banklogs.php" class="tag-cloud-link tag-link-132 tag-link-position-9" style="font-size: 8pt;" aria-label="Chime Bank (1 product)">Chime Bank</a>
	<a href="../carded-e-gift-cards/cardedgift.php" class="tag-cloud-link tag-link-117 tag-link-position-10" style="font-size: 14.3pt;" aria-label="Google Play Gift Card (2 products)">Google Play Gift Card</a>
	<a href="../bank-drops/banklogs.php" class="tag-cloud-link tag-link-123 tag-link-position-11" style="font-size: 8pt;" aria-label="Greendot log (1 product)">Greendot log</a>
	<a href="../credit-debit-cards/credit.php" class="tag-cloud-link tag-link-108 tag-link-position-12" style="font-size: 8pt;" aria-label="INDIA CC - NON VBV 🇮🇳 (1 product)">INDIA CC - NON VBV 🇮🇳</a>
	<a href="../carded-e-gift-cards/cardedgift.php" class="tag-cloud-link tag-link-114 tag-link-position-13" style="font-size: 22pt;" aria-label="iTunes Gift Cards. (4 products)">iTunes Gift Cards.</a>
	<a href="../mentorship-coaching/mentorship.php" class="tag-cloud-link tag-link-115 tag-link-position-14" style="font-size: 8pt;" aria-label="Mentorship &amp; Coaching (1 product)">Mentorship &amp; Coaching</a>
	<a href="../credit-debit-cards/credit.php" class="tag-cloud-link tag-link-104 tag-link-position-15" style="font-size: 8pt;" aria-label="NON-VBV CC 🇺🇸 (1 product)">NON-VBV CC 🇺🇸</a>
	<a href="../credit-debit-cards/credit.php" class="tag-cloud-link tag-link-110 tag-link-position-16" style="font-size: 8pt;" aria-label="NON VBV CC - WORLDWIDE 🌐 (1 product)">NON VBV CC - WORLDWIDE 🌐</a>
	<a href="../paypal/paypal.php" class="tag-cloud-link tag-link-88 tag-link-position-17" style="font-size: 14.3pt;" aria-label="PayPal (2 products)">PayPal</a>
	<a href="../paypal/paypal.php" class="tag-cloud-link tag-link-91 tag-link-position-18" style="font-size: 14.3pt;" aria-label="PayPal Transfer (2 products)">PayPal Transfer</a>
	<a href="../bank-drops/banklogs.php" class="tag-cloud-link tag-link-126 tag-link-position-19" style="font-size: 14.3pt;" aria-label="T-Mobile Account (2 products)">T-Mobile Account</a>
	<a href="../carded-e-gift-cards/cardedgift.php" class="tag-cloud-link tag-link-106 tag-link-position-20" style="font-size: 8pt;" aria-label="UK CC - NON VBV 🇬🇧 (1 product)">UK CC - NON VBV 🇬🇧</a>
	<a href="../bank-drops/banklogs.php" class="tag-cloud-link tag-link-128 tag-link-position-21" style="font-size: 8pt;" aria-label="Venmo Account (1 product)">Venmo Account</a>
	<a href="../bank-drops/banklogs.php" class="tag-cloud-link tag-link-130 tag-link-position-22" style="font-size: 8pt;" aria-label="Wellsfargo Bank Log (1 product)">Wellsfargo Bank Log</a>
	<a href="../western-union/wetsernunion.php" class="tag-cloud-link tag-link-99 tag-link-position-23" style="font-size: 8pt;" aria-label="Western Union (1 product)">Western Union</a></div></div>
<div id="block_widget-2" class="col pb-0 widget block_widget">
<span class="widget-title">About us</span><div class="is-divider small"></div>
<strong>Carding Guru | The money Magician — Free Carding Tutorials, Credit dumps, real cvv, get free Credit cards Online, How to buy cc online, buy fullz online. Best cvv bins, how to check cvv online, dumps cc sites, cc dumps for sale.</strong>
<strong><span style="color: #d83131;"><div class="social-icons follow-icons"><a href="https://cardingguru.com/" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon button circle is-outline facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook"><i class="fa-brands fa-facebook-f"></i><a href="https://cardingguru.com/" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon button circle is-outline  instagram tooltip" title="Follow on Instagram" aria-label="Follow on Instagram"><i class="fa-brands fa-instagram"></i><a href="https://cardingguru.com/" target="_blank" data-label="Twitter" rel="noopener noreferrer nofollow" class="icon button circle is-outline  twitter tooltip" title="Follow on Twitter" aria-label="Follow on Twitter"><i class="fa-brands fa-twitter"></i><a href="https://cardingguru.com/" data-label="E-mail" rel="nofollow" class="icon button circle is-outline  email tooltip" title="Send us an email" aria-label="Send us an email"><i class="fa-solid fa-envelope"></i></a><a href="https://cardingguru.com/ " target="_blank" rel="noopener noreferrer nofollow" data-label="Pinterest" class="icon button circle is-outline  pinterest tooltip" title="Follow on Pinterest" aria-label="Follow on Pinterest"><i class="fa-brands fa-pinterest"></i></a></div></span></strong>
</div>
<div id="block_widget-3" class="col pb-0 widget block_widget">
</div>
</div>
</div>
<div class="absolute-footer dark medium-text-center small-text-center">
<div class="container clearfix">
<div class="footer-secondary pull-right">
<div class="payment-icons inline-block"><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M45.023 7.359c0.837 0.845 0.837 2.038 0.837 2.038 0 1.193-0.845 2.038-0.845 2.038l-6.514 6.522c-0.845 0.837-2.038 0.837-2.038 0.837-1.193 0-2.038-0.837-2.038-0.837-0.845-0.845-0.845-2.038-0.845-2.038 0-1.193 0.845-2.038 0.845-2.038l1.586-1.586h-6.084c-1.208 0-2.052-0.845-2.052-0.845-0.852-0.852-0.852-2.052-0.852-2.052 0-1.201 0.852-2.045 0.852-2.045 0.845-0.852 2.052-0.852 2.052-0.852h6.084l-1.586-1.579c-0.845-0.845-0.845-2.038-0.845-2.038 0-1.193 0.845-2.038 0.845-2.038 0.845-0.845 2.038-0.845 2.038-0.845 1.193 0 2.038 0.845 2.038 0.845l6.522 6.514zM21.553 5.38c-1.593 0-2.719 1.126-2.719 1.126-1.126 1.126-1.126 2.719-1.126 2.719 0 1.593 1.126 2.719 1.126 2.719 1.126 1.126 2.719 1.126 2.719 1.126 1.593 0 2.719-1.126 2.719-1.126 1.126-1.126 1.126-2.719 1.126-2.719 0-1.593-1.126-2.719-1.126-2.719-1.126-1.126-2.719-1.126-2.719-1.126zM11.222 29.801c0.163-0.035 0.221-0.116 0.221-0.244v-0.71c0-0.128-0.081-0.186-0.209-0.175 0 0-0.477 0.070-0.931 0.070-0.744 0-1.012-0.431-1.012-1.082v-1.571c0-0.628 0.244-1.070 1-1.070 0.43 0 0.931 0.070 0.931 0.070 0.139 0.012 0.221-0.058 0.221-0.186v-0.71c0-0.128-0.070-0.209-0.221-0.233 0 0-0.489-0.105-1.012-0.105-1.42 0-2.199 0.768-2.199 2.211v1.629c0 1.443 0.791 2.211 2.199 2.211 0.478 0.001 1.013-0.104 1.013-0.104zM13.316 29.789c0.128 0 0.221-0.093 0.221-0.221v-7.818c0-0.129-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v7.818c0 0.128 0.093 0.221 0.221 0.221h0.838zM15.585 29.789c0.128 0 0.221-0.093 0.221-0.221v-5.375c0-0.128-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v5.375c0 0.128 0.093 0.221 0.221 0.221h0.838zM15.585 22.809c0.128 0 0.221-0.093 0.221-0.221v-0.838c0-0.129-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v0.838c0 0.128 0.093 0.221 0.221 0.221h0.838zM20.006 29.801c0.163-0.035 0.221-0.116 0.221-0.244v-0.71c0-0.128-0.081-0.186-0.209-0.175 0 0-0.477 0.070-0.931 0.070-0.744 0-1.012-0.431-1.012-1.082v-1.571c0-0.628 0.244-1.070 1-1.070 0.431 0 0.931 0.070 0.931 0.070 0.14 0.012 0.221-0.058 0.221-0.186v-0.71c0-0.128-0.070-0.209-0.221-0.233 0 0-0.488-0.105-1.012-0.105-1.419 0-2.199 0.768-2.199 2.211v1.629c0 1.443 0.791 2.211 2.199 2.211 0.477 0.001 1.012-0.104 1.012-0.104zM25.206 29.789c0.128 0 0.209-0.116 0.151-0.221l-1.594-3.060 1.443-2.315c0.070-0.105 0-0.221-0.128-0.221h-0.943c-0.128 0-0.233 0.116-0.303 0.221l-1.443 2.339 1.582 3.036c0.058 0.116 0.163 0.221 0.291 0.221h0.943zM22.101 29.789c0.128 0 0.221-0.093 0.221-0.221v-7.818c0-0.129-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v7.818c0 0.128 0.093 0.221 0.221 0.221h0.838zM28.662 28.51c-0.337 0.175-0.733 0.314-1.094 0.314-0.512 0-0.768-0.256-0.768-0.698 0-0.5 0.256-0.768 0.884-0.768h0.977v1.152zM29.72 29.789c0.128 0 0.221-0.093 0.221-0.221v-3.595c0-1.396-0.512-2.118-2.059-2.118-0.977 0-1.734 0.244-1.734 0.244-0.14 0.035-0.221 0.116-0.221 0.244v0.709c0 0.129 0.081 0.221 0.221 0.186 0 0 0.873-0.198 1.559-0.198s0.954 0.326 0.954 0.931v0.465c-0.151-0.024-0.721-0.070-1.117-0.070-1.291 0-2.024 0.593-2.024 1.791 0 1.175 0.663 1.745 1.791 1.745 0.547 0 1.036-0.209 1.408-0.442v0.104c0 0.128 0.093 0.221 0.221 0.221h0.781zM35.131 29.789c0.128 0 0.221-0.093 0.221-0.221v-3.734c0-1.21-0.431-1.978-1.699-1.978-0.663 0-1.163 0.256-1.5 0.512v-0.175c0-0.128-0.093-0.221-0.221-0.221h-0.78c-0.128 0-0.221 0.093-0.221 0.221v5.375c0 0.128 0.093 0.221 0.221 0.221h0.838c0.128 0 0.221-0.093 0.221-0.221v-4.177c0.326-0.175 0.721-0.338 1.082-0.338 0.616 0 0.779 0.349 0.779 0.896v3.618c0 0.128 0.093 0.221 0.221 0.221h0.837zM39.249 28.498c-0.314 0.151-0.663 0.267-0.977 0.267-0.64 0-0.885-0.407-0.885-0.989v-1.803c0-0.582 0.245-0.989 0.885-0.989 0.314 0 0.663 0.093 0.977 0.221v3.293zM40.308 29.789c0.128 0 0.221-0.093 0.221-0.221v-7.818c0-0.129-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v2.42c-0.349-0.175-0.768-0.314-1.245-0.314-1.291 0-1.896 0.791-1.896 2.036v1.978c0 1.245 0.605 2.036 1.896 2.036 0.501 0 0.942-0.186 1.303-0.407v0.070c0 0.128 0.093 0.221 0.221 0.221h0.779zM44.659 27.719c0 0.582-0.267 0.966-0.966 0.966h-0.895v-3.432c0.314-0.151 0.675-0.268 0.989-0.268 0.64 0 0.873 0.407 0.873 0.989v1.745zM43.81 29.789c1.443 0 2.129-0.768 2.129-2.036v-1.862c0-1.245-0.593-2.036-1.885-2.036-0.477 0-0.907 0.151-1.256 0.36v-2.466c0-0.129-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v7.818c0 0.128 0.093 0.221 0.221 0.221h2.070zM51.128 29.789c0.128 0 0.221-0.093 0.221-0.221v-5.375c0-0.128-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v4.177c-0.326 0.175-0.722 0.337-1.082 0.337-0.616 0-0.779-0.349-0.779-0.895v-3.618c0-0.128-0.093-0.221-0.221-0.221h-0.838c-0.128 0-0.221 0.093-0.221 0.221v3.734c0 1.21 0.431 1.978 1.699 1.978 0.663 0 1.163-0.256 1.501-0.512v0.175c0 0.128 0.093 0.221 0.221 0.221h0.779zM57.050 24.205c0.047-0.116-0.035-0.233-0.175-0.233h-0.919c-0.128 0-0.209 0.093-0.256 0.209l-1.245 3.688-1.187-3.688c-0.035-0.128-0.128-0.209-0.256-0.209h-0.919c-0.139 0-0.209 0.105-0.175 0.221l1.85 5.642-0.663 1.943c-0.046 0.117 0.047 0.221 0.175 0.221h0.943c0.128 0 0.198-0.093 0.245-0.209l2.582-7.585z"></path>
</svg>
</div><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M14.127 17.572c-0.405 1.693-1.351 2.984-2.842 3.87-1.494 0.888-3.084 1.13-4.778 0.726-1.774-0.403-3.105-1.37-3.991-2.903-0.889-1.531-1.131-3.144-0.726-4.838 0.403-1.693 1.37-2.982 2.903-3.87 1.53-0.886 3.144-1.128 4.838-0.726 1.693 0.404 2.981 1.372 3.87 2.903 0.887 1.532 1.129 3.144 0.726 4.838zM9.41 13.46l0.242-1.089-0.726-0.242-0.242 1.21c-0.081-0.079-0.284-0.121-0.605-0.121l0.363-1.21-0.726-0.121-0.242 1.089c-0.242 0-0.405-0.040-0.484-0.121l-0.968-0.242-0.121 0.847 0.484 0.121c0.161 0 0.242 0.121 0.242 0.363l-0.242 1.331-0.483 1.814c0 0.242-0.121 0.284-0.363 0.121l-0.484-0.121-0.363 0.847 0.968 0.242c0.242 0 0.403 0.042 0.484 0.121l-0.363 1.089 0.726 0.242 0.363-1.21c0.079 0.081 0.242 0.121 0.484 0.121l-0.242 1.21 0.726 0.121 0.242-1.089c1.288 0.242 2.096-0.079 2.419-0.968 0.321-0.726 0.121-1.289-0.605-1.693 0.563-0.161 0.847-0.484 0.847-0.968 0.078-0.726-0.364-1.288-1.331-1.693zM8.2 16.362c0.804 0.242 1.128 0.565 0.968 0.968-0.163 0.484-0.889 0.565-2.177 0.242l0.484-1.452c0.484 0.081 0.726 0.163 0.726 0.242zM8.563 14.064c0.726 0.242 1.007 0.565 0.847 0.968-0.163 0.565-0.768 0.686-1.814 0.363l0.363-1.452c0.321 0.081 0.523 0.121 0.605 0.121zM19.872 13.52c-0.121 0.042-0.224 0.060-0.302 0.060-0.163 0-0.405 0.081-0.726 0.242l1.089-4.112-2.54 0.363-2.782 11.611c0.321 0.242 0.644 0.363 0.968 0.363 0.079 0 0.242 0.020 0.484 0.060 0.242 0.042 0.403 0.102 0.484 0.181h1.451c0.645 0 1.331-0.121 2.056-0.363 0.563-0.242 1.128-0.645 1.693-1.21 0.645-0.805 1.007-1.37 1.089-1.693 0.242-0.563 0.363-1.249 0.363-2.056 0-0.645-0.042-1.089-0.121-1.331-0.081-0.403-0.284-0.765-0.605-1.089-0.242-0.403-0.526-0.644-0.847-0.726-0.484-0.242-0.968-0.363-1.451-0.363-0.081 0.002-0.182 0.022-0.303 0.062zM17.877 20.353h-0.484l0.968-4.475 0.726-0.363h0.605c0.484 0 0.765 0.121 0.847 0.363 0.242 0.404 0.363 0.806 0.363 1.21 0 0.323-0.081 0.726-0.242 1.21-0.081 0.242-0.284 0.605-0.605 1.089-0.323 0.323-0.605 0.565-0.847 0.726-0.484 0.163-0.847 0.242-1.089 0.242h-0.242zM27.794 13.701h-2.419l-1.935 8.467h2.419l1.935-8.467zM27.552 12.492c0.321-0.161 0.524-0.282 0.605-0.363 0.161-0.161 0.282-0.321 0.363-0.484 0-0.079 0.018-0.181 0.060-0.302 0.040-0.121 0.060-0.221 0.060-0.302 0-0.403-0.163-0.726-0.484-0.968-0.323-0.161-0.605-0.242-0.847-0.242-0.323 0-0.526 0.042-0.605 0.121-0.081 0-0.181 0.042-0.302 0.121-0.121 0.081-0.224 0.163-0.302 0.242-0.163 0.163-0.284 0.323-0.363 0.484 0 0.081-0.020 0.181-0.060 0.302-0.042 0.121-0.060 0.223-0.060 0.302 0 0.404 0.161 0.726 0.484 0.968 0.321 0.163 0.605 0.242 0.847 0.242 0.32 0 0.523-0.040 0.604-0.121zM28.278 18.177c-0.081 0.404-0.121 0.927-0.121 1.572-0.081 0.404-0.042 0.847 0.121 1.331 0.321 0.484 0.645 0.767 0.968 0.847 0.321 0.242 0.886 0.363 1.693 0.363 0.645 0 1.089-0.040 1.331-0.121 0.079 0 0.242-0.019 0.484-0.060 0.242-0.040 0.403-0.101 0.484-0.181l-0.121-1.935c-0.323 0.163-0.565 0.242-0.726 0.242-0.163 0.081-0.405 0.121-0.726 0.121-0.163 0-0.323 0-0.484 0l-0.242-0.121-0.363-0.363c0-0.079-0.020-0.181-0.060-0.302-0.042-0.121-0.060-0.221-0.060-0.302 0-0.079 0.018-0.2 0.060-0.363 0.040-0.161 0.060-0.282 0.060-0.363l0.726-2.903h2.661l0.484-1.935h-2.661l0.605-2.54-2.54 0.363-1.572 6.652zM34.567 20.111c0.079 0.323 0.282 0.726 0.605 1.21 0.484 0.323 0.886 0.565 1.21 0.726 0.242 0.163 0.804 0.242 1.693 0.242 0.563 0 0.968-0.040 1.21-0.121 0.242 0 0.605-0.079 1.089-0.242l-0.242-1.935c-0.081 0.081-0.202 0.121-0.363 0.121-0.163 0-0.284 0.042-0.363 0.121-0.081 0-0.242 0.020-0.484 0.060-0.242 0.042-0.405 0.060-0.484 0.060-0.484 0-0.889-0.161-1.21-0.484-0.242-0.321-0.363-0.765-0.363-1.331 0-0.886 0.2-1.652 0.605-2.298 0.484-0.484 1.128-0.726 1.935-0.726h0.847c0.321 0.163 0.523 0.242 0.605 0.242l0.847-1.814c-0.163-0.079-0.484-0.2-0.968-0.363-0.242-0.079-0.686-0.121-1.331-0.121-0.726 0-1.411 0.121-2.056 0.363-0.807 0.484-1.373 0.888-1.693 1.21-0.484 0.646-0.806 1.21-0.968 1.693-0.242 0.646-0.363 1.331-0.363 2.056 0 0.406 0.079 0.848 0.242 1.331zM47.025 21.805c0.563-0.321 1.046-0.726 1.452-1.21 0.484-0.645 0.765-1.21 0.847-1.693 0.242-0.726 0.363-1.37 0.363-1.935 0-0.321-0.081-0.805-0.242-1.452-0.081-0.242-0.284-0.605-0.605-1.089-0.242-0.403-0.605-0.645-1.089-0.726-0.484-0.161-0.968-0.242-1.452-0.242-0.806 0-1.494 0.163-2.056 0.484-0.806 0.646-1.29 1.048-1.452 1.21-0.565 0.888-0.889 1.493-0.968 1.814-0.163 0.806-0.242 1.451-0.242 1.935 0 0.646 0.079 1.089 0.242 1.331 0.161 0.565 0.363 0.927 0.605 1.089 0.242 0.323 0.563 0.565 0.968 0.726 0.321 0.163 0.804 0.242 1.452 0.242 0.886 0 1.612-0.161 2.177-0.484zM47.025 15.878c0.161 0.484 0.242 0.927 0.242 1.331 0 0.404-0.042 0.726-0.121 0.968l-0.363 1.089-0.726 0.726c-0.242 0.242-0.565 0.363-0.968 0.363-0.405 0-0.686-0.161-0.847-0.484-0.163-0.161-0.242-0.563-0.242-1.21 0-0.484 0.040-0.847 0.121-1.089 0-0.161 0.121-0.484 0.363-0.968 0.321-0.403 0.563-0.684 0.726-0.847 0.161-0.161 0.442-0.242 0.847-0.242 0.484 0 0.804 0.121 0.968 0.363zM54.282 13.701h-2.419l-1.935 8.467h2.298l2.056-8.467zM54.040 12.492c0.242-0.161 0.403-0.282 0.484-0.363 0.242-0.161 0.363-0.321 0.363-0.484 0.079-0.161 0.121-0.363 0.121-0.605 0-0.403-0.121-0.726-0.363-0.968-0.323-0.161-0.605-0.242-0.847-0.242-0.323 0-0.565 0.042-0.726 0.121l-0.242 0.121c-0.163 0.081-0.242 0.163-0.242 0.242-0.163 0.163-0.284 0.323-0.363 0.484-0.081 0.163-0.121 0.363-0.121 0.605 0 0.404 0.121 0.726 0.363 0.968 0.484 0.163 0.804 0.242 0.968 0.242 0.242 0 0.442-0.040 0.605-0.121zM54.040 22.168h2.419l1.572-6.531c0.161-0.079 0.484-0.121 0.968-0.121 0.321 0 0.523 0.042 0.605 0.121 0.242 0.081 0.363 0.242 0.363 0.484v0.726c0 0.081-0.020 0.202-0.060 0.363-0.042 0.163-0.060 0.323-0.060 0.484l-1.089 4.475h2.419l1.089-4.596c0.242-1.37 0.161-2.377-0.242-3.024-0.484-0.726-1.373-1.089-2.661-1.089-0.484 0-0.847 0.042-1.089 0.121-0.484 0-0.806 0.042-0.968 0.121-0.081 0-0.202 0.020-0.363 0.060-0.163 0.042-0.284 0.060-0.363 0.060-0.323 0.163-0.526 0.242-0.605 0.242l-1.936 8.104z"></path>
</svg>
</div><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M35.255 12.078h-2.396c-0.229 0-0.444 0.114-0.572 0.303l-3.306 4.868-1.4-4.678c-0.088-0.292-0.358-0.493-0.663-0.493h-2.355c-0.284 0-0.485 0.28-0.393 0.548l2.638 7.745-2.481 3.501c-0.195 0.275 0.002 0.655 0.339 0.655h2.394c0.227 0 0.439-0.111 0.569-0.297l7.968-11.501c0.191-0.275-0.006-0.652-0.341-0.652zM19.237 16.718c-0.23 1.362-1.311 2.276-2.691 2.276-0.691 0-1.245-0.223-1.601-0.644-0.353-0.417-0.485-1.012-0.374-1.674 0.214-1.35 1.313-2.294 2.671-2.294 0.677 0 1.227 0.225 1.589 0.65 0.365 0.428 0.509 1.027 0.404 1.686zM22.559 12.078h-2.384c-0.204 0-0.378 0.148-0.41 0.351l-0.104 0.666-0.166-0.241c-0.517-0.749-1.667-1-2.817-1-2.634 0-4.883 1.996-5.321 4.796-0.228 1.396 0.095 2.731 0.888 3.662 0.727 0.856 1.765 1.212 3.002 1.212 2.123 0 3.3-1.363 3.3-1.363l-0.106 0.662c-0.040 0.252 0.155 0.479 0.41 0.479h2.147c0.341 0 0.63-0.247 0.684-0.584l1.289-8.161c0.040-0.251-0.155-0.479-0.41-0.479zM8.254 12.135c-0.272 1.787-1.636 1.787-2.957 1.787h-0.751l0.527-3.336c0.031-0.202 0.205-0.35 0.41-0.35h0.345c0.899 0 1.747 0 2.185 0.511 0.262 0.307 0.341 0.761 0.242 1.388zM7.68 7.473h-4.979c-0.341 0-0.63 0.248-0.684 0.584l-2.013 12.765c-0.040 0.252 0.155 0.479 0.41 0.479h2.378c0.34 0 0.63-0.248 0.683-0.584l0.543-3.444c0.053-0.337 0.343-0.584 0.683-0.584h1.575c3.279 0 5.172-1.587 5.666-4.732 0.223-1.375 0.009-2.456-0.635-3.212-0.707-0.832-1.962-1.272-3.628-1.272zM60.876 7.823l-2.043 12.998c-0.040 0.252 0.155 0.479 0.41 0.479h2.055c0.34 0 0.63-0.248 0.683-0.584l2.015-12.765c0.040-0.252-0.155-0.479-0.41-0.479h-2.299c-0.205 0.001-0.379 0.148-0.41 0.351zM54.744 16.718c-0.23 1.362-1.311 2.276-2.691 2.276-0.691 0-1.245-0.223-1.601-0.644-0.353-0.417-0.485-1.012-0.374-1.674 0.214-1.35 1.313-2.294 2.671-2.294 0.677 0 1.227 0.225 1.589 0.65 0.365 0.428 0.509 1.027 0.404 1.686zM58.066 12.078h-2.384c-0.204 0-0.378 0.148-0.41 0.351l-0.104 0.666-0.167-0.241c-0.516-0.749-1.667-1-2.816-1-2.634 0-4.883 1.996-5.321 4.796-0.228 1.396 0.095 2.731 0.888 3.662 0.727 0.856 1.765 1.212 3.002 1.212 2.123 0 3.3-1.363 3.3-1.363l-0.106 0.662c-0.040 0.252 0.155 0.479 0.41 0.479h2.147c0.341 0 0.63-0.247 0.684-0.584l1.289-8.161c0.040-0.252-0.156-0.479-0.41-0.479zM43.761 12.135c-0.272 1.787-1.636 1.787-2.957 1.787h-0.751l0.527-3.336c0.031-0.202 0.205-0.35 0.41-0.35h0.345c0.899 0 1.747 0 2.185 0.511 0.261 0.307 0.34 0.761 0.241 1.388zM43.187 7.473h-4.979c-0.341 0-0.63 0.248-0.684 0.584l-2.013 12.765c-0.040 0.252 0.156 0.479 0.41 0.479h2.554c0.238 0 0.441-0.173 0.478-0.408l0.572-3.619c0.053-0.337 0.343-0.584 0.683-0.584h1.575c3.279 0 5.172-1.587 5.666-4.732 0.223-1.375 0.009-2.456-0.635-3.212-0.707-0.832-1.962-1.272-3.627-1.272z"></path>
</svg>
</div><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M9.315 16.3c-0.401 0.401-0.901 0.803-1.502 1.202-0.101 0.1-0.251 0.15-0.451 0.15-0.3-0.3-0.652-0.751-1.052-1.352-1.002 0.901-2.103 1.352-3.305 1.352-2.005 0-3.005-1-3.005-3.005 0-1.502 0.7-2.604 2.103-3.305 0.3-0.099 1.552-0.3 3.756-0.601v-0.3c0-0.7-0.101-1.15-0.3-1.352-0.101-0.399-0.451-0.601-1.052-0.601-0.901 0-1.453 0.401-1.652 1.202 0 0.202-0.1 0.3-0.3 0.3l-1.953-0.15c-0.202 0-0.3-0.15-0.3-0.451 0.399-2.003 1.902-3.005 4.507-3.005 1.301 0 2.303 0.352 3.005 1.051 0.5 0.502 0.751 1.603 0.751 3.305v3.155c0 0.502 0.25 1.103 0.751 1.803 0.198 0.202 0.198 0.401-0.001 0.601zM5.859 12.244c-2.004 0-3.005 0.701-3.005 2.103 0 0.901 0.399 1.352 1.202 1.352 0.601 0 1.101-0.3 1.502-0.901 0.2-0.399 0.3-1.101 0.3-2.103v-0.451zM39.962 20.957c0-0.399-0.251-0.5-0.751-0.3-4.307 1.704-8.614 2.554-12.92 2.554-6.11 0-11.668-1.45-16.676-4.357l-0.451-0.15c-0.3 0.1-0.3 0.3 0 0.601 4.808 4.207 10.416 6.31 16.826 6.31 5.508 0 10.066-1.352 13.672-4.056 0.2-0.2 0.3-0.399 0.3-0.601zM11.268 17.652h1.953c0.3 0 0.451-0.15 0.451-0.451v-5.409c0-1.803 0.451-2.704 1.352-2.704 0.801 0 1.202 0.901 1.202 2.704v5.409c0 0.1 0.099 0.251 0.3 0.451h2.103c0.2 0 0.3-0.15 0.3-0.451v-5.409c0-0.901 0.049-1.552 0.15-1.953 0.3-0.5 0.7-0.751 1.202-0.751 0.7 0 1.101 0.3 1.202 0.901v7.212c0 0.1 0.15 0.251 0.451 0.451h1.953c0.2 0 0.3-0.15 0.3-0.451v-6.46c0-1.601-0.15-2.652-0.451-3.155-0.601-0.7-1.352-1.052-2.253-1.052-1.403 0-2.305 0.601-2.704 1.803-0.601-1.202-1.453-1.803-2.554-1.803-1.302 0-2.204 0.601-2.704 1.803v-1.202c0-0.3-0.1-0.451-0.3-0.451h-1.953c-0.202 0-0.3 0.15-0.3 0.451v10.066c-0.001 0.1 0.099 0.251 0.3 0.451zM31.85 10.441c0-0.7-0.101-1.15-0.3-1.352-0.101-0.399-0.451-0.601-1.052-0.601-0.901 0-1.453 0.401-1.652 1.202 0 0.1-0.101 0.251-0.3 0.451l-1.953-0.3c-0.202 0-0.3-0.15-0.3-0.451 0.399-2.003 1.902-3.005 4.507-3.005 1.202 0 2.153 0.352 2.854 1.051 0.601 0.502 0.901 1.603 0.901 3.305v3.155c0 0.502 0.25 1.103 0.751 1.803 0.2 0.202 0.2 0.401 0 0.601-0.1 0.1-0.326 0.3-0.676 0.601-0.351 0.3-0.627 0.502-0.826 0.601-0.1 0.1-0.251 0.15-0.451 0.15-0.3-0.2-0.551-0.451-0.751-0.751-0.202-0.3-0.351-0.5-0.451-0.601-0.901 0.901-1.953 1.352-3.155 1.352-2.004 0-3.005-1-3.005-3.005 0-1.502 0.7-2.604 2.103-3.305 0.3-0.099 1.552-0.3 3.756-0.601v-0.301zM31.85 12.244c-2.004 0-3.005 0.701-3.005 2.103 0 0.901 0.399 1.352 1.202 1.352 0.601 0 1.052-0.3 1.352-0.901 0.3-0.399 0.451-1.101 0.451-2.103v-0.451zM40.488 18.028c-1.453 0.052-2.68 0.376-3.681 0.977-0.401 0.401-0.351 0.601 0.15 0.601 2.503-0.3 3.956-0.248 4.357 0.15 0.2 0.3-0.15 1.704-1.051 4.207 0.099 0.202 0.25 0.251 0.451 0.15 0.901-0.7 1.552-1.728 1.953-3.080 0.399-1.352 0.451-2.179 0.15-2.479-0.102-0.4-0.878-0.576-2.33-0.527zM44.019 14.798c-0.901-0.5-2.103-0.751-3.606-0.751l3.305-4.808c0.3-0.399 0.451-0.7 0.451-0.901v-1.202c0-0.3-0.1-0.451-0.3-0.451h-6.459c-0.3 0-0.451 0.15-0.451 0.451v1.352c0 0.3 0.15 0.451 0.451 0.451h3.305l-3.906 5.558c-0.1 0.202-0.15 0.552-0.15 1.052v1.352c0 0.3 0.15 0.451 0.451 0.451 2.202-1.202 4.507-1.202 6.911 0 0.3 0 0.451-0.15 0.451-0.451v-1.502c0.001-0.3-0.15-0.5-0.451-0.601zM54.385 12.244c0 1.603-0.427 2.929-1.277 3.981-0.852 1.052-1.929 1.578-3.23 1.578-1.403 0-2.504-0.549-3.305-1.652-0.803-1.101-1.202-2.453-1.202-4.056 0-1.601 0.399-2.929 1.202-3.981 0.801-1.052 1.902-1.578 3.305-1.578 1.402 0 2.503 0.552 3.305 1.653 0.801 1.104 1.202 2.456 1.202 4.056zM51.38 12.244c0-1.202-0.1-2.103-0.3-2.704-0.1-0.601-0.502-0.901-1.202-0.901-1.002 0-1.502 1.052-1.502 3.155 0 2.606 0.501 3.906 1.502 3.906 1 0 1.502-1.15 1.502-3.456zM61.146 6.535c-1.202 0-2.103 0.653-2.704 1.953v-1.502c0-0.2-0.15-0.3-0.451-0.3h-1.803c-0.202 0-0.3 0.101-0.3 0.3v10.216c0 0.1 0.099 0.251 0.3 0.451h1.953c0.3 0 0.451-0.15 0.451-0.451v-5.409c0-0.901 0.099-1.552 0.3-1.953 0.2-0.601 0.601-0.901 1.202-0.901 0.801 0 1.202 0.953 1.202 2.854v5.409c0 0.1 0.099 0.251 0.3 0.451h1.953c0.3 0 0.451-0.15 0.451-0.451v-6.31c0-1.601-0.202-2.652-0.601-3.155-0.401-0.801-1.152-1.202-2.253-1.202z"></path>
</svg>
</div><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M32 27.099c-10.36 0-20.721 0-31.082 0-0.278 0-0.278 0-0.278-0.273 0-7.221 0-14.442 0-21.663 0-0.264 0-0.264 0.269-0.264 20.727 0 41.454 0 62.181 0 0.269 0 0.269 0 0.269 0.264 0 7.227 0 14.454-0.001 21.681 0 0.295 0.040 0.255-0.259 0.255-10.366 0.001-20.733 0.001-31.099 0.001zM6.005 7.949c0.019 0.002 0.037 0.004 0.056 0.006 0.047 0.319 0.097 0.637 0.142 0.956 0.054 0.38 0.103 0.76 0.156 1.139 0.043 0.302 0.090 0.604 0.134 0.906 0.038 0.255 0.074 0.51 0.114 0.764 0.021 0.128 0.024 0.129 0.163 0.13 0.21 0.001 0.42 0.001 0.63 0.001 0.552 0 1.105 0.001 1.656-0.001 0.147 0 0.147-0.003 0.178-0.141 0.038-0.169 0.078-0.338 0.115-0.508 0.119-0.557 0.235-1.114 0.355-1.67 0.097-0.451 0.198-0.9 0.296-1.351 0.090-0.416 0.179-0.832 0.268-1.249 0.075-0.351 0.151-0.703 0.228-1.053 0.015-0.071-0.008-0.097-0.081-0.097-0.63 0.001-1.26 0.002-1.891 0-0.086 0-0.127 0.026-0.137 0.12-0.032 0.292-0.074 0.582-0.113 0.874-0.103 0.76-0.205 1.52-0.31 2.28-0.024 0.173-0.061 0.343-0.097 0.54-0.027-0.040-0.042-0.052-0.045-0.067-0.063-0.378-0.128-0.755-0.184-1.133-0.093-0.622-0.18-1.245-0.27-1.867-0.031-0.214-0.070-0.426-0.096-0.64-0.010-0.086-0.044-0.116-0.125-0.106-0.024 0.003-0.048 0-0.072 0-0.69 0-1.381 0-2.070 0.001-0.042 0-0.087-0.008-0.125 0.005-0.034 0.011-0.070 0.040-0.086 0.070-0.020 0.035-0.019 0.081-0.025 0.122-0.040 0.285-0.079 0.57-0.121 0.854-0.053 0.355-0.113 0.71-0.166 1.065-0.067 0.45-0.127 0.901-0.195 1.352-0.017 0.116-0.051 0.229-0.077 0.343-0.054-0.141-0.088-0.28-0.107-0.42-0.060-0.427-0.113-0.855-0.17-1.282-0.088-0.659-0.179-1.318-0.267-1.976-0.017-0.128-0.014-0.131-0.15-0.131-0.612-0.001-1.224-0.001-1.837-0.001-0.132 0-0.137 0.004-0.111 0.129 0.084 0.411 0.169 0.821 0.259 1.231 0.111 0.509 0.228 1.017 0.339 1.526 0.087 0.397 0.168 0.796 0.254 1.194 0.054 0.252 0.115 0.502 0.169 0.754 0.081 0.381 0.159 0.762 0.236 1.144 0.013 0.063 0.042 0.096 0.109 0.091 0.030-0.002 0.060 0 0.090 0 0.739 0 1.476 0 2.215 0 0.036 0 0.076 0.008 0.107-0.003 0.034-0.012 0.070-0.038 0.088-0.069 0.020-0.035 0.023-0.080 0.029-0.122 0.081-0.593 0.161-1.187 0.243-1.78 0.068-0.486 0.138-0.972 0.211-1.458 0.023-0.159 0.059-0.315 0.090-0.472zM30.034 16.759c-0.015 0.001-0.030 0.003-0.045 0.004-0.052-0.125-0.108-0.25-0.154-0.377-0.117-0.327-0.229-0.655-0.343-0.983-0.251-0.717-0.502-1.434-0.753-2.15-0.046-0.131-0.051-0.14-0.19-0.141-0.864-0.001-1.728-0.001-2.592 0-0.123 0-0.126 0.003-0.127 0.135-0.002 0.234-0.001 0.468-0.001 0.702 0 1.68 0 3.36 0 5.040 0 0.172 0.001 0.174 0.165 0.174 0.534 0.001 1.068 0.001 1.602-0.001 0.138 0 0.138-0.003 0.142-0.139 0.001-0.018 0.001-0.036 0.001-0.054 0-1.044-0.001-2.088 0.001-3.132 0-0.117 0.017-0.234 0.027-0.351 0.074 0.097 0.124 0.197 0.163 0.302 0.126 0.348 0.248 0.698 0.37 1.048 0.247 0.712 0.493 1.425 0.739 2.138 0.065 0.189 0.065 0.189 0.264 0.189 0.816 0 1.632 0.001 2.448 0 0.237 0 0.22 0.031 0.22-0.223 0.001-1.746 0-3.492 0-5.238 0-0.15 0.003-0.3 0-0.45-0.003-0.136-0.006-0.14-0.143-0.14-0.54-0.001-1.080-0.001-1.62-0.001-0.156 0-0.158 0.003-0.158 0.16-0.001 1.062 0 2.124-0.001 3.185 0 0.1-0.008 0.201-0.013 0.302zM48.181 8.173c0.013-0.002 0.026-0.003 0.038-0.005 0.036 0.086 0.078 0.17 0.109 0.257 0.136 0.39 0.267 0.781 0.403 1.171 0.248 0.712 0.501 1.422 0.746 2.135 0.031 0.088 0.069 0.122 0.163 0.122 0.864-0.003 1.729-0.001 2.593-0.003 0.135 0 0.138-0.003 0.138-0.141 0.001-0.444 0.001-0.888 0.001-1.332 0-1.471 0-2.941-0.001-4.412 0-0.182-0.002-0.182-0.178-0.183-0.522-0.001-1.044-0.001-1.567 0-0.159 0.001-0.161 0.003-0.161 0.157-0.001 0.528-0.001 1.056-0.001 1.585 0 0.564 0.001 1.128-0.001 1.693 0 0.073 0.015 0.152-0.053 0.237-0.036-0.077-0.069-0.133-0.091-0.193-0.054-0.146-0.104-0.293-0.156-0.44-0.177-0.502-0.354-1.004-0.531-1.507-0.166-0.474-0.334-0.947-0.496-1.422-0.028-0.080-0.060-0.113-0.149-0.113-0.864 0.003-1.729 0.001-2.593 0.003-0.145 0-0.146 0.004-0.146 0.156 0 1.35 0 2.701-0.001 4.051 0 0.576-0.001 1.153 0.001 1.729 0 0.127 0.003 0.131 0.128 0.131 0.546 0.001 1.093 0.001 1.638 0 0.139 0 0.139-0.003 0.143-0.139 0.001-0.048 0.001-0.096 0.001-0.144-0.001-1.056-0.003-2.113-0.002-3.169 0.001-0.075 0.015-0.15 0.023-0.225zM48.184 15.484c0.013-0.001 0.026-0.003 0.040-0.004 0.048 0.127 0.097 0.253 0.143 0.381 0.13 0.36 0.261 0.72 0.387 1.082 0.237 0.684 0.47 1.37 0.709 2.053 0.058 0.167 0.021 0.168 0.24 0.168 0.822 0 1.644 0 2.467 0 0.036 0 0.072-0.001 0.108-0.001 0.058 0.001 0.091-0.024 0.092-0.084 0.001-0.030 0.001-0.060 0.001-0.090 0-1.902 0.001-3.804 0-5.707 0-0.168-0.002-0.17-0.169-0.17-0.516-0.001-1.032-0.001-1.548-0.001-0.207 0-0.189-0.012-0.189 0.2 0 1.020 0 2.040-0.001 3.060 0 0.090 0.002 0.18-0.003 0.27-0.002 0.035-0.020 0.069-0.030 0.104-0.067-0.080-0.106-0.159-0.136-0.243-0.093-0.259-0.184-0.52-0.276-0.78-0.129-0.366-0.259-0.733-0.387-1.1-0.164-0.469-0.327-0.938-0.488-1.408-0.027-0.078-0.062-0.109-0.154-0.109-0.852 0.006-1.704 0.004-2.556 0.004-0.182 0-0.183-0.001-0.183 0.175-0.001 1.902-0.002 3.804-0.002 5.707 0 0.168 0.001 0.17 0.17 0.17 0.522 0.001 1.044 0.001 1.566 0 0.173 0 0.173-0.001 0.175-0.18 0-0.036-0.001-0.072-0.001-0.108 0-1.038-0.001-2.076 0.001-3.114 0.002-0.092 0.017-0.184 0.025-0.276zM43.196 8.794c-0.001-0.012-0.001-0.024-0.001-0.036 0.094-0.037 0.188-0.074 0.282-0.11 0.449-0.175 0.749-0.479 0.847-0.964 0.057-0.282 0.042-0.557-0.024-0.836-0.085-0.364-0.305-0.614-0.622-0.793-0.197-0.111-0.411-0.172-0.63-0.198-0.297-0.037-0.596-0.067-0.895-0.070-0.792-0.010-1.584-0.003-2.376-0.003-0.312 0-0.624-0.001-0.936 0.001-0.12 0.001-0.12 0.005-0.125 0.12-0.001 0.030 0 0.060 0 0.090 0 1.866 0 3.732 0 5.599 0 0.048 0.003 0.096-0.001 0.144-0.006 0.084 0.026 0.116 0.114 0.115 0.696-0.003 1.392-0.001 2.088-0.002 0.12 0 0.122-0.006 0.127-0.119 0.002-0.042 0.001-0.084 0.001-0.126-0.003-0.606-0.005-1.212-0.010-1.818-0.001-0.084 0.032-0.125 0.117-0.119 0.149 0.011 0.3 0.012 0.446 0.037 0.198 0.034 0.314 0.159 0.346 0.361 0.042 0.272 0.083 0.545 0.129 0.816s0.094 0.542 0.15 0.811c0.033 0.157 0.040 0.157 0.203 0.157 0.66 0.001 1.32 0.001 1.98 0 0.045 0 0.092-0.007 0.146-0.012-0.010-0.053-0.016-0.094-0.026-0.134-0.121-0.472-0.179-0.953-0.237-1.435-0.027-0.22-0.053-0.441-0.102-0.656-0.093-0.41-0.342-0.675-0.768-0.755-0.075-0.014-0.148-0.043-0.222-0.065zM23.835 15.324c0.001 0 0.003 0 0.003 0 0-0.684 0.001-1.368-0.001-2.052 0-0.158-0.003-0.158-0.159-0.161-0.048-0.001-0.096 0-0.144 0-0.648 0-1.296-0.001-1.944-0.001-0.115 0-0.118 0-0.119 0.115-0.002 0.228-0.001 0.456-0.001 0.684 0 1.032 0.002 2.064-0.003 3.096-0.001 0.136-0.019 0.276-0.059 0.405-0.069 0.218-0.228 0.321-0.445 0.321-0.204 0-0.352-0.108-0.44-0.308-0.067-0.154-0.070-0.314-0.070-0.476 0-1.164 0-2.328 0-3.492 0-0.066 0.001-0.132 0-0.198-0.003-0.141-0.003-0.141-0.137-0.145-0.012-0.001-0.024 0-0.036 0-0.678 0-1.356 0-2.034-0.001-0.024 0-0.048-0.001-0.072-0.001-0.058 0.002-0.086 0.033-0.087 0.091 0 0.036-0.001 0.072-0.001 0.108 0 1.242-0.001 2.485 0.001 3.726 0 0.15 0.008 0.3 0.027 0.449 0.090 0.687 0.442 1.185 1.070 1.491 0.416 0.202 0.857 0.297 1.314 0.324 0.419 0.025 0.839 0.031 1.256-0.032 0.363-0.055 0.714-0.145 1.043-0.316 0.689-0.36 1.015-0.943 1.035-1.701 0.016-0.642 0.003-1.284 0.003-1.926zM41.254 19.312c0.579 0.011 1.094-0.076 1.582-0.298 0.428-0.195 0.779-0.488 1.045-0.874 0.349-0.507 0.502-1.085 0.545-1.69 0.035-0.492-0.006-0.981-0.142-1.459-0.158-0.556-0.448-1.032-0.895-1.399-0.411-0.338-0.898-0.523-1.418-0.597-0.523-0.074-1.049-0.072-1.571 0.049-0.651 0.15-1.194 0.454-1.606 0.998-0.269 0.354-0.426 0.748-0.527 1.167-0.095 0.392-0.109 0.796-0.084 1.198 0.045 0.719 0.23 1.389 0.712 1.951 0.241 0.282 0.53 0.502 0.867 0.653 0.488 0.219 1.002 0.32 1.492 0.301zM19.32 10.020v-0.001c-0.318 0-0.636 0-0.954 0-0.042 0-0.084 0-0.126 0.002-0.053 0.002-0.077 0.035-0.070 0.083 0.037 0.298 0.082 0.593 0.24 0.858 0.31 0.519 0.795 0.779 1.359 0.918 0.356 0.088 0.719 0.125 1.087 0.128 0.663 0.005 1.316-0.053 1.928-0.337 0.342-0.159 0.631-0.383 0.829-0.711 0.237-0.394 0.316-0.819 0.264-1.275-0.046-0.412-0.22-0.753-0.532-1.024-0.296-0.257-0.656-0.39-1.023-0.499-0.465-0.136-0.936-0.251-1.403-0.381-0.108-0.030-0.218-0.074-0.312-0.134-0.221-0.139-0.216-0.449 0.010-0.577 0.085-0.049 0.189-0.068 0.288-0.085 0.076-0.013 0.155-0.005 0.234-0.002 0.243 0.009 0.375 0.116 0.433 0.352 0.037 0.151 0.037 0.151 0.195 0.151 0.42 0 0.84 0 1.26 0 0.192 0 0.384-0.001 0.576 0.001 0.069 0.001 0.095-0.026 0.094-0.096-0.006-0.365-0.113-0.696-0.34-0.981-0.337-0.422-0.812-0.598-1.318-0.696-0.323-0.063-0.652-0.081-0.984-0.079-0.568 0.003-1.124 0.073-1.649 0.294-0.425 0.179-0.763 0.465-0.963 0.891-0.15 0.319-0.17 0.657-0.146 1.002 0.032 0.468 0.241 0.835 0.624 1.1 0.212 0.148 0.454 0.234 0.703 0.303 0.421 0.118 0.84 0.243 1.258 0.369 0.183 0.055 0.367 0.111 0.541 0.187 0.273 0.12 0.339 0.446 0.148 0.671-0.19 0.224-0.438 0.255-0.704 0.196-0.262-0.058-0.388-0.245-0.415-0.502-0.013-0.122-0.020-0.13-0.16-0.129-0.322 0.002-0.646 0.001-0.97 0.001zM32.269 8.809c0 0.822 0 1.644 0 2.466 0 0.15-0.002 0.3 0.001 0.45 0.002 0.12 0.004 0.121 0.117 0.125 0.042 0.001 0.084 0.001 0.126 0.001 1.35 0 2.7 0 4.050 0 0.084 0 0.168 0.002 0.252-0.001 0.119-0.003 0.123-0.004 0.125-0.122 0.003-0.192 0.001-0.384 0.001-0.576 0-0.24 0.001-0.48-0.001-0.72-0.001-0.115-0.004-0.116-0.123-0.12-0.036-0.001-0.072 0-0.108 0-0.642 0-1.284 0-1.926 0-0.048 0-0.096-0.002-0.144 0-0.075 0.003-0.108-0.032-0.107-0.108 0.003-0.12-0.001-0.24 0-0.36 0.003-0.292-0.035-0.262 0.256-0.262 0.57-0.001 1.14 0 1.71-0.001 0.171-0.001 0.173-0.003 0.173-0.17 0.001-0.216 0.001-0.432 0.001-0.648 0-0.198 0.001-0.396-0.001-0.594-0.002-0.126-0.006-0.127-0.134-0.133-0.030-0.001-0.060 0-0.090 0-0.564 0-1.128 0-1.692 0-0.042 0-0.084-0.001-0.126 0-0.069 0.001-0.097-0.035-0.097-0.101 0.001-0.15-0.002-0.3 0-0.45 0.002-0.139 0.003-0.142 0.139-0.143 0.288-0.002 0.576-0.001 0.864-0.001 0.39 0 0.78 0.001 1.17-0.001 0.139-0.001 0.159-0.016 0.16-0.134 0.003-0.432 0.003-0.864 0-1.296-0.001-0.115-0.016-0.123-0.124-0.129-0.024-0.001-0.048 0.001-0.072 0.001-1.398 0-2.795-0.001-4.194-0.001-0.212 0-0.207-0.026-0.207 0.201 0.001 0.942 0.001 1.884 0.001 2.826zM11.983 8.815v0c-0.001 0.192-0.001 0.384-0.001 0.576 0 0.768-0.001 1.536 0.001 2.304 0 0.153 0.003 0.156 0.146 0.156 1.458 0.001 2.916 0.001 4.374 0 0.14 0 0.142-0.003 0.143-0.138 0.002-0.336 0.001-0.672 0.001-1.008 0-0.096-0.003-0.192 0-0.288 0.002-0.077-0.033-0.109-0.108-0.104-0.042 0.003-0.084 0-0.126 0-0.564 0-1.128 0-1.692 0-0.12 0-0.24-0.003-0.36 0-0.077 0.002-0.107-0.034-0.106-0.109 0.002-0.12-0.003-0.24-0.001-0.36 0.003-0.295-0.037-0.261 0.255-0.262 0.576-0.002 1.152 0 1.728-0.003 0.168-0.001 0.172-0.007 0.173-0.174 0.001-0.402 0.001-0.804-0.001-1.206-0.001-0.158-0.005-0.158-0.163-0.162-0.030-0.001-0.060 0-0.090 0-0.558 0-1.116 0-1.674 0-0.042 0-0.084-0.001-0.126-0.001-0.065 0.001-0.101-0.026-0.101-0.095 0.001-0.174 0.001-0.348 0.001-0.522 0-0.051 0.024-0.079 0.075-0.079 0.036-0.001 0.072 0.002 0.108 0.002 0.654 0 1.308 0.001 1.962 0.001 0.172 0 0.172-0.001 0.173-0.182 0.001-0.318 0-0.636 0-0.954 0-0.102-0.002-0.204 0.001-0.306 0.002-0.084-0.036-0.122-0.119-0.118-0.030 0.001-0.060 0-0.090 0-1.392 0-2.784 0-4.176 0-0.036 0-0.072 0.003-0.108 0-0.070-0.005-0.097 0.033-0.098 0.097 0 0.042-0.001 0.084-0.001 0.126 0.002 0.937 0.002 1.873 0.002 2.809zM27.949 5.783c-0.042 0-0.084 0-0.126 0-0.792 0-1.584 0.001-2.376 0-0.239 0-0.193 0.024-0.193 0.199-0.002 0.42-0.002 0.84-0.001 1.26 0.001 0.139 0.003 0.142 0.141 0.143 0.372 0.002 0.744 0.001 1.116 0.001 0.275 0 0.254-0.021 0.254 0.251 0 1.35 0 2.699 0 4.049 0 0.164 0.001 0.165 0.166 0.165 0.654 0.001 1.308 0.001 1.962 0 0.259-0.001 0.238 0.028 0.238-0.246 0-1.338-0.001-2.675-0.001-4.013 0-0.205 0.001-0.206 0.209-0.207 0.378-0.001 0.756 0.001 1.134-0.001 0.157-0.001 0.167-0.008 0.168-0.16 0.003-0.438 0.002-0.875 0-1.314-0.001-0.12-0.005-0.122-0.119-0.127-0.042-0.002-0.084-0.001-0.126-0.001-0.814 0.001-1.63 0.001-2.446 0.001zM36.364 16.147c0-0.931 0-1.861 0-2.791 0-0.036 0.001-0.072 0-0.108-0.003-0.132-0.004-0.132-0.127-0.137-0.030-0.001-0.060 0-0.090 0-0.643 0-1.285 0-1.927 0-0.242 0-0.224-0.019-0.224 0.223 0 1.873 0 3.746 0 5.619 0 0.036 0.001 0.072 0.001 0.108 0.001 0.065 0.030 0.101 0.098 0.101 0.042 0 0.084 0.001 0.126 0.001 0.595 0 1.188 0 1.783 0 0.084 0 0.168-0.005 0.252 0.001 0.090 0.006 0.118-0.035 0.109-0.117-0.003-0.029-0.001-0.060-0.001-0.090 0-0.936 0-1.873 0-2.81zM54.108 12.38c0 2.058 0 4.116 0 6.175 0 0.138 0.004 0.276 0.001 0.414-0.002 0.083 0.026 0.121 0.114 0.118 0.126-0.005 0.252 0 0.378-0.001 0.236-0.002 0.223 0.031 0.223-0.222 0-4.296 0-8.593 0.001-12.889 0-0.054-0.003-0.108 0-0.162 0.004-0.074-0.025-0.109-0.104-0.108-0.168 0.003-0.336 0.003-0.504-0.001-0.079-0.002-0.107 0.032-0.106 0.106 0.001 0.15-0.002 0.3-0.002 0.449-0.001 2.040-0.001 4.081-0.001 6.12zM59.541 12.452c0 2.131 0 4.262 0 6.393 0 0.030-0.001 0.060 0 0.090 0.004 0.12 0.004 0.123 0.118 0.124 0.156 0.002 0.312 0.001 0.468-0.001 0.118-0.002 0.119-0.005 0.123-0.12 0.001-0.030 0-0.060 0-0.090 0-4.22 0-8.44 0-12.659 0-0.060 0-0.12-0.001-0.18-0.003-0.17-0.003-0.17-0.164-0.172-0.108-0.001-0.216-0.001-0.324-0.001-0.263-0.001-0.22-0.005-0.22 0.224-0.001 2.131-0.001 4.261-0.001 6.392zM62.523 6.538c0.016-0.415-0.323-0.785-0.761-0.785-0.465 0-0.783 0.339-0.783 0.762 0 0.424 0.276 0.765 0.762 0.788 0.42 0.021 0.779-0.342 0.782-0.764zM41.051 7.724c0-0.156 0.003-0.312-0.001-0.468-0.002-0.084 0.029-0.124 0.115-0.117 0.167 0.013 0.336 0.013 0.501 0.042 0.232 0.040 0.374 0.193 0.404 0.401 0.040 0.278-0.061 0.519-0.278 0.632-0.208 0.108-0.435 0.123-0.665 0.113-0.065-0.003-0.075-0.047-0.075-0.099 0-0.168 0-0.335 0-0.503zM40.623 16.141c0.035-0.351 0.065-0.701 0.109-1.051 0.013-0.104 0.058-0.207 0.102-0.304 0.092-0.205 0.264-0.284 0.479-0.284 0.219 0 0.387 0.093 0.467 0.3 0.060 0.155 0.114 0.317 0.135 0.481 0.063 0.488 0.075 0.979 0.021 1.469-0.019 0.172-0.047 0.343-0.080 0.513-0.015 0.075-0.047 0.148-0.081 0.218-0.097 0.198-0.26 0.289-0.479 0.285s-0.374-0.1-0.469-0.3c-0.123-0.261-0.15-0.54-0.169-0.821-0.011-0.167-0.002-0.335-0.002-0.503-0.012-0.001-0.023-0.001-0.034-0.003zM61.061 6.532c-0.006-0.391 0.292-0.714 0.68-0.714 0.403 0 0.691 0.291 0.694 0.696 0.005 0.43-0.282 0.724-0.685 0.723-0.402-0.001-0.67-0.282-0.69-0.705zM61.879 6.57c0.054-0.019 0.088-0.030 0.12-0.044 0.107-0.044 0.164-0.131 0.155-0.234-0.010-0.106-0.083-0.184-0.201-0.193-0.137-0.010-0.275-0.004-0.412-0.005-0.062-0.001-0.084 0.031-0.083 0.089 0.003 0.125 0.004 0.251 0.005 0.376 0 0.108-0.005 0.215-0.002 0.323 0.001 0.024 0.026 0.046 0.040 0.069 0.015-0.021 0.042-0.041 0.044-0.063 0.006-0.071 0.001-0.143 0.005-0.215 0.005-0.109 0.019-0.118 0.126-0.122 0.079-0.003 0.122 0.038 0.158 0.096 0.054 0.086 0.105 0.174 0.16 0.259 0.028 0.044 0.063 0.069 0.12 0.028-0.076-0.118-0.15-0.233-0.234-0.365zM61.76 6.144c0.053 0.005 0.113 0.009 0.172 0.018 0.075 0.012 0.115 0.065 0.122 0.135 0.008 0.077-0.020 0.15-0.105 0.163-0.111 0.018-0.224 0.023-0.336 0.026-0.019 0.001-0.055-0.034-0.057-0.054-0.008-0.077-0.008-0.155-0.002-0.232 0.001-0.020 0.035-0.049 0.058-0.053 0.045-0.009 0.094-0.003 0.148-0.003z"></path>
</svg>
</div><div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
<path d="M8.498 23.915h-1.588l1.322-5.127h-1.832l0.286-1.099h5.259l-0.287 1.099h-1.837l-1.323 5.127zM13.935 21.526l-0.62 2.389h-1.588l1.608-6.226h1.869c0.822 0 1.44 0.145 1.853 0.435 0.412 0.289 0.62 0.714 0.62 1.273 0 0.449-0.145 0.834-0.432 1.156-0.289 0.322-0.703 0.561-1.245 0.717l1.359 2.645h-1.729l-1.077-2.389h-0.619zM14.21 20.452h0.406c0.454 0 0.809-0.081 1.062-0.243s0.38-0.409 0.38-0.741c0-0.233-0.083-0.407-0.248-0.523s-0.424-0.175-0.778-0.175h-0.385l-0.438 1.682zM22.593 22.433h-2.462l-0.895 1.482h-1.666l3.987-6.252h1.942l0.765 6.252h-1.546l-0.125-1.482zM22.515 21.326l-0.134-1.491c-0.035-0.372-0.052-0.731-0.052-1.077v-0.154c-0.153 0.34-0.342 0.701-0.567 1.081l-0.979 1.64h1.732zM31.663 23.915h-1.78l-1.853-4.71h-0.032l-0.021 0.136c-0.111 0.613-0.226 1.161-0.343 1.643l-0.755 2.93h-1.432l1.608-6.226h1.859l1.77 4.586h0.021c0.042-0.215 0.109-0.524 0.204-0.924s0.406-1.621 0.937-3.662h1.427l-1.609 6.225zM38.412 22.075c0 0.593-0.257 1.062-0.771 1.407s-1.21 0.517-2.088 0.517c-0.768 0-1.386-0.128-1.853-0.383v-1.167c0.669 0.307 1.291 0.46 1.863 0.46 0.389 0 0.693-0.060 0.911-0.181s0.328-0.285 0.328-0.495c0-0.122-0.024-0.229-0.071-0.322s-0.114-0.178-0.2-0.257c-0.088-0.079-0.303-0.224-0.646-0.435-0.479-0.28-0.817-0.559-1.011-0.835-0.195-0.275-0.292-0.572-0.292-0.89 0-0.366 0.108-0.693 0.323-0.982 0.214-0.288 0.522-0.512 0.918-0.673 0.398-0.16 0.854-0.24 1.372-0.24 0.753 0 1.442 0.14 2.067 0.421l-0.567 0.993c-0.541-0.21-1.041-0.316-1.499-0.316-0.289 0-0.525 0.064-0.708 0.192-0.185 0.128-0.276 0.297-0.276 0.506 0 0.173 0.057 0.325 0.172 0.454 0.114 0.129 0.371 0.3 0.771 0.513 0.419 0.227 0.733 0.477 0.942 0.752 0.21 0.273 0.314 0.593 0.314 0.959zM41.266 23.915h-1.588l1.608-6.226h4.238l-0.281 1.082h-2.645l-0.412 1.606h2.463l-0.292 1.077h-2.463l-0.63 2.461zM49.857 23.915h-4.253l1.608-6.226h4.259l-0.281 1.082h-2.666l-0.349 1.367h2.484l-0.286 1.081h-2.484l-0.417 1.606h2.666l-0.28 1.091zM53.857 21.526l-0.62 2.389h-1.588l1.608-6.226h1.869c0.822 0 1.44 0.145 1.853 0.435s0.62 0.714 0.62 1.273c0 0.449-0.145 0.834-0.432 1.156-0.289 0.322-0.703 0.561-1.245 0.717l1.359 2.645h-1.729l-1.077-2.389h-0.619zM54.133 20.452h0.406c0.454 0 0.809-0.081 1.062-0.243s0.38-0.409 0.38-0.741c0-0.233-0.083-0.407-0.248-0.523s-0.424-0.175-0.778-0.175h-0.385l-0.438 1.682zM30.072 8.026c0.796 0 1.397 0.118 1.804 0.355s0.61 0.591 0.61 1.061c0 0.436-0.144 0.796-0.433 1.080-0.289 0.283-0.699 0.472-1.231 0.564v0.026c0.348 0.076 0.625 0.216 0.831 0.421 0.207 0.205 0.31 0.467 0.31 0.787 0 0.666-0.266 1.179-0.797 1.539s-1.267 0.541-2.206 0.541h-2.72l1.611-6.374h2.221zM28.111 13.284h0.938c0.406 0 0.726-0.084 0.957-0.253s0.347-0.403 0.347-0.701c0-0.471-0.317-0.707-0.954-0.707h-0.86l-0.428 1.661zM28.805 10.55h0.776c0.421 0 0.736-0.071 0.946-0.212s0.316-0.344 0.316-0.608c0-0.398-0.296-0.598-0.886-0.598h-0.792l-0.36 1.418zM37.242 12.883h-2.466l-0.897 1.517h-1.669l3.993-6.4h1.945l0.766 6.4h-1.548l-0.125-1.517zM37.163 11.749l-0.135-1.526c-0.035-0.381-0.053-0.748-0.053-1.103v-0.157c-0.153 0.349-0.342 0.718-0.568 1.107l-0.98 1.679h1.736zM46.325 14.4h-1.782l-1.856-4.822h-0.032l-0.021 0.14c-0.111 0.628-0.226 1.188-0.344 1.683l-0.756 3h-1.434l1.611-6.374h1.861l1.773 4.695h0.021c0.042-0.22 0.11-0.536 0.203-0.946s0.406-1.66 0.938-3.749h1.428l-1.611 6.374zM54.1 14.4h-1.763l-1.099-2.581-0.652 0.305-0.568 2.276h-1.59l1.611-6.374h1.596l-0.792 3.061 0.824-0.894 2.132-2.166h1.882l-3.097 3.052 1.517 3.322zM23.040 8.64c0-0.353-0.287-0.64-0.64-0.64h-14.080c-0.353 0-0.64 0.287-0.64 0.64v0c0 0.353 0.287 0.64 0.64 0.64h14.080c0.353 0 0.64-0.287 0.64-0.64v0zM19.2 11.2c0-0.353-0.287-0.64-0.64-0.64h-10.24c-0.353 0-0.64 0.287-0.64 0.64v0c0 0.353 0.287 0.64 0.64 0.64h10.24c0.353 0 0.64-0.287 0.64-0.64v0zM15.36 13.76c0-0.353-0.287-0.64-0.64-0.64h-6.4c-0.353 0-0.64 0.287-0.64 0.64v0c0 0.353 0.287 0.64 0.64 0.64h6.4c0.353 0 0.64-0.287 0.64-0.64v0z"></path>
</svg>
</div></div> </div>
<div class="footer-primary pull-left">
<div class="menu-secondary-container"><ul id="menu-secondary" class="links footer-nav uppercase"><li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="cardingguru.com">About</a></li>
<li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-239"><a href="cardingguru.com">Our Stores</a></li>
<li id="menu-item-263" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-263"><a href="cardingguru.com">Blog</a></li>
<li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="cardingguru.com">Contact</a></li>
<li id="menu-item-276" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-276"><a href="cardingguru.com">FAQ</a></li>
</ul></div> <div class="copyright-footer">
Copyright 2022 © <strong>Carding Guru. All RightsReserved!</strong> </div>
</div>
</div>
</div>
<a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link" aria-label="Go to top"><i class="icon-angle-up"></i></a>
</footer>
</div>
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
<div class="sidebar-menu no-scrollbar ">
<ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
<li class="header-search-form search-form html relative has-icon">
<div class="header-search-form-wrapper">
<div class="searchform-wrapper ux-search-box relative is-normal"><form role="search" method="get" class="searchform" action="https://cardingstore.com/">
<div class="flex-row relative">
<div class="flex-col flex-grow">
<label class="screen-reader-text" for="woocommerce-product-search-field-2">Search for:</label>
<input type="search" id="woocommerce-product-search-field-2" class="search-field mb-0" placeholder="Search&hellip;" value="" name="s" />
<input type="hidden" name="post_type" value="product" />
</div>
<div class="flex-col">
<button type="submit" value="Search" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
    <i class="fa-solid fa-magnifying-glass"></i>
</div>
</div>
<div class="live-search-results text-left z-top"></div>
</form>
</div> </div>
</li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-106 current_page_item menu-item-572 has-icon-left"><a href="#" aria-current="page"><img class="ux-sidebar-menu-icon" width="20" height="20" src="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/kisspng-retail-point-of-sale-marketing-business-5b3fca46a3ebb9.8456182915309072066714.png?resize=280%2C280&ssl=1" alt="Storehome" />Store Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-571 has-icon-left"><a href="#"><img class="ux-sidebar-menu-icon" width="20" height="20" src="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/computer-icons-online-shopping-shopping-cart-service-shopping-cart-icon-64bdd8ba938644d420b5c46104ec023a.png?resize=280%2C280&ssl=1" alt="" />Product Categories</a>
<ul class="sub-menu nav-sidebar-ul children">
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-612"><a href="/product-category/bank-drops/">Bank Logs</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-599"><a href="/product-category/btc-hack-script/">BTC Hack Script</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-611"><a href="/product-category/carded-e-gift-cards/">Carded E–Gift Cards</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-606"><a href="/product-category/carded-products/">Carded Products</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-609"><a href="/product-category/cash-app/">Cash App</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-607"><a href="/product-category/credit-debit-cards/">Credit/Debit Cards</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-605"><a href="/product-category/debit-checks/">Deposit Checks</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-page-parent menu-item-603"><a href="/product-category/dumps/">Dumps</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-601"><a href="/product-category/fake-id/">Fake ID</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-615"><a href="/product-category/mentorship-coaching/">Mentorship &amp; Coaching</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-610"><a href="/product-category/paypal/">PayPal</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-602"><a href="/product-category/software/">Softwares</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-594"><a href="/product-category/ssn-fullz/">SSN Fullz</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-600"><a href="/product-category/venmo/">Venmo</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-608"><a href="/product-category/western-union/">Western Union</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-562 has-icon-left"><a href="#"><img class="ux-sidebar-menu-icon" width="20" height="20" src="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/Track_my_bus.png?resize=194%2C155&ssl=1" alt="Carding Store" />Track your order</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-573 has-icon-left"><a href="#"><img class="ux-sidebar-menu-icon" width="20" height="20" src="https://i0.wp.com/cardingstore.com/wp-content/uploads/2022/02/wishlist-icon-18.png?resize=280%2C280&ssl=1" alt="Carding Store" />Wishlist</a></li>
<li class="header-newsletter-item has-icon">
<a href="#header-newsletter-signup" class="tooltip" title="Sign up for Newsletter">
<i class="icon-envelop"></i>
<span class="header-newsletter-title">
Newsletter </span>
</a>
</li><li class="html header-social-icons ml-0">
<div class="social-icons follow-icons"><a href="https://cardingstore.com" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon primary button circle facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook"><i class="icon-facebook"></i></a><a href="https://cardingstore.com" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon primary button circle  instagram tooltip" title="Follow on Instagram" aria-label="Follow on Instagram"><i class="icon-instagram"></i></a><a href="https://cardingstore.com" target="_blank" rel="noopener noreferrer nofollow" data-label="TikTok" class="icon primary button circle tiktok tooltip" title="Follow on TikTok" aria-label="Follow on TikTok"><i class="icon-tiktok"></i></a><a href="https://cardingstore.com" target="_blank" data-label="Twitter" rel="noopener noreferrer nofollow" class="icon primary button circle  twitter tooltip" title="Follow on Twitter" aria-label="Follow on Twitter"><i class="icon-twitter"></i></a><a href="/cdn-cgi/l/email-protection#661f09131426030b070f0a" data-label="E-mail" rel="nofollow" class="icon primary button circle  email tooltip" title="Send us an email" aria-label="Send us an email"><i class="icon-envelop"></i></a><a href="https://cardingstore.com" target="_blank" rel="noopener noreferrer nofollow" data-label="Pinterest" class="icon primary button circle  pinterest tooltip" title="Follow on Pinterest" aria-label="Follow on Pinterest"><i class="icon-pinterest"></i></a></div></li> </ul>
</div>
</div>
<div class="ux-body-overlay"></div> <div id="login-form-popup" class="lightbox-content mfp-hide">
<div class="woocommerce-notices-wrapper"></div>
<div class="account-container lightbox-inner">
<div class="account-login-inner">
<h3 class="uppercase">Login</h3>
<form class="woocommerce-form woocommerce-form-login login" method="post">
<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
<label for="username">Username or email address&nbsp;<span class="required">*</span></label>
<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="" /> </p>
<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
<label for="password">Password&nbsp;<span class="required">*</span></label>
<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
</p>
<p class="form-row">
<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
</label>
<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="1474ae74c0" /><input type="hidden" name="_wp_http_referer" value="/" /> <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
</p>
<p class="woocommerce-LostPassword lost_password">
<a href="https://cardingstore.com/my-account/lost-password/">Lost your password?</a>
</p>
</form>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<link rel='stylesheet' id='flatsome-effects-css' href='https://cardingstore.com/wp-content/themes/flatsome/assets/css/effects.css?ver=3.15.2' type='text/css' media='all' />
<style id='wp-block-paragraph-inline-css' type='text/css'>
.is-small-text{font-size:.875em}.is-regular-text{font-size:1em}.is-large-text{font-size:2.25em}.is-larger-text{font-size:3em}.has-drop-cap:not(:focus):first-letter{float:left;font-size:8.4em;font-style:normal;font-weight:100;line-height:.68;margin:.05em .1em 0 0;text-transform:uppercase}p{overflow-wrap:break-word}p.has-drop-cap.has-background{overflow:hidden}p.has-background{padding:1.25em 2.375em}:where(p.has-text-color:not(.has-link-color)) a{color:inherit}
</style>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<script type='text/javascript' id='ce4wp_form_submit-js-extra'>
/* <![CDATA[ */
var ce4wp_form_submit_data = {"siteUrl":"https:\/\/cardingstore.com","url":"https:\/\/cardingstore.com\/wp-admin\/admin-ajax.php","nonce":"372666282d","listNonce":"243596bda3","activatedNonce":"57696a7612"};
/* ]]> */
</script>
<script type='text/javascript' src='https://cardingstore.com/wp-content/plugins/creative-mail-by-constant-contact/assets/js/block/submit.js?ver=1645287138' id='ce4wp_form_submit-js'></script>
<script type='text/javascript' src='https://c0.wp.com/p/jetpack/10.6/_inc/build/photon/photon.min.js' id='jetpack-photon-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/5.9.1/wp-includes/js/dist/vendor/regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/5.9.1/wp-includes/js/dist/vendor/wp-polyfill.min.js' id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/cardingstore.com\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://cardingstore.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.6' id='contact-form-7-js'></script>
<script type='text/javascript' id='wc_coinbase_commerce_scripts-js-extra'>
/* <![CDATA[ */
var wc_coinbase_commerce_params = {"ajax_url":"https:\/\/cardingstore.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://cardingstore.com/wp-content/plugins/woocommerce-coinbase-commerce/assets/dist/js/public/wc-coinbase-commerce-scripts.min.js?ver=5.9.1' id='wc_coinbase_commerce_scripts-js'></script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/6.2.1/assets/js/jquery-blockui/jquery.blockUI.min.js' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/cardingstore.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/6.2.1/assets/js/frontend/add-to-cart.min.js' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/6.2.1/assets/js/js-cookie/js.cookie.min.js' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/6.2.1/assets/js/frontend/woocommerce.min.js' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_baf0566c0da9c73925d8707d976f0604","fragment_name":"wc_fragments_baf0566c0da9c73925d8707d976f0604","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/6.2.1/assets/js/frontend/cart-fragments.min.js' id='wc-cart-fragments-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-after'>
		jQuery( 'body' ).bind( 'wc_fragments_refreshed', function() {
			var jetpackLazyImagesLoadEvent;
			try {
				jetpackLazyImagesLoadEvent = new Event( 'jetpack-lazy-images-load', {
					bubbles: true,
					cancelable: true
				} );
			} catch ( e ) {
				jetpackLazyImagesLoadEvent = document.createEvent( 'Event' )
				jetpackLazyImagesLoadEvent.initEvent( 'jetpack-lazy-images-load', true, true );
			}
			jQuery( 'body' ).get( 0 ).dispatchEvent( jetpackLazyImagesLoadEvent );
		} );
		
</script>
<script type='text/javascript' src='https://c0.wp.com/c/5.9.1/wp-includes/js/hoverIntent.min.js' id='hoverIntent-js'></script>
<script type='text/javascript' id='flatsome-js-js-extra'>
/* <![CDATA[ */
var flatsomeVars = {"theme":{"version":"3.15.2"},"ajaxurl":"https:\/\/cardingstore.com\/wp-admin\/admin-ajax.php","rtl":"","sticky_height":"70","assets_url":"https:\/\/cardingstore.com\/wp-content\/themes\/flatsome\/assets\/js\/","lightbox":{"close_markup":"<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>","close_btn_inside":false},"user":{"can_edit_pages":false},"i18n":{"mainMenu":"Main Menu"},"options":{"cookie_notice_version":"1","swatches_layout":false,"swatches_box_select_event":false,"swatches_box_behavior_selected":false,"swatches_box_update_urls":"1","swatches_box_reset":false,"swatches_box_reset_extent":false,"swatches_box_reset_time":300,"search_result_latency":"0"},"is_mini_cart_reveal":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://cardingstore.com/wp-content/themes/flatsome/assets/js/flatsome.js?ver=ddce2c6d3f3a93afe1db0d523049c446' id='flatsome-js-js'></script>
<script type='text/javascript' src='https://cardingstore.com/wp-content/themes/flatsome/inc/integrations/wc-yith-wishlist/wishlist.js?ver=3.10.2' id='flatsome-woocommerce-wishlist-js'></script>
<script type='text/javascript' src='https://cardingstore.com/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search.js?ver=3.15.2' id='flatsome-live-search-js'></script>
<script type='text/javascript' src='https://cardingstore.com/wp-content/themes/flatsome/assets/js/woocommerce.js?ver=bdd6f8ae659698ad382b4c523700f856' id='flatsome-theme-woocommerce-js-js'></script>
<!--[if IE]>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/intersection-observer-polyfill@0.1.0/dist/IntersectionObserver.js?ver=0.1.0' id='intersection-observer-polyfill-js'></script>
<![endif]-->
<script type='text/javascript' src='https://cardingstore.com/wp-content/themes/flatsome/assets/libs/packery.pkgd.min.js?ver=3.15.2' id='flatsome-masonry-js-js'></script>
<script type='text/javascript' src='https://cardingstore.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0' id='jquery-selectBox-js'></script>
<script type='text/javascript' src='//cardingstore.com/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6' id='prettyPhoto-js'></script>
<script type='text/javascript' id='jquery-yith-wcwl-js-extra'>
/* <![CDATA[ */
var yith_wcwl_l10n = {"ajax_url":"\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","enable_ajax_loading":"","ajax_loader_url":"https:\/\/cardingstore.com\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg","remove_from_wishlist_after_add_to_cart":"1","is_wishlist_responsive":"1","time_to_close_prettyphoto":"3000","fragments_index_glue":".","reload_on_found_variation":"1","mobile_media_query":"768","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies on your browser are enabled.","added_to_cart_message":"<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem","load_mobile_action":"load_mobile","delete_item_action":"delete_item","save_title_action":"save_title","save_privacy_action":"save_privacy","load_fragments":"load_fragments"},"nonce":{"add_to_wishlist_nonce":"a5b37bb208","remove_from_wishlist_nonce":"ee8f4be9d8","reload_wishlist_and_adding_elem_nonce":"4edac954f8","load_mobile_nonce":"2b821046f6","delete_item_nonce":"5e4ea2afcb","save_title_nonce":"06fa34ccf5","save_privacy_nonce":"a2af8a2af3","load_fragments_nonce":"729aad602f"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://cardingstore.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min.js?ver=3.6.0' id='jquery-yith-wcwl-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/5.9.1/wp-includes/js/underscore.min.js' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://c0.wp.com/c/5.9.1/wp-includes/js/wp-util.min.js' id='wp-util-js'></script>
<script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
/* ]]> */
</script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/6.2.1/assets/js/frontend/add-to-cart-variation.min.js' id='wc-add-to-cart-variation-js'></script>

<script type="text/javascript">
jQuery(function($) { 
jQuery( 'div.woocommerce' ).on( 'click', 'a.remove', function() {
				var productID = jQuery( this ).data( 'product_id' );
				var quantity = jQuery( this ).parent().parent().find( '.qty' ).val()
				var productDetails = {
					'id': productID,
					'quantity': quantity ? quantity : '1',
				};
				_wca.push( {
					'_en': 'woocommerceanalytics_remove_from_cart',
					'pi': productDetails.id,
					'pq': productDetails.quantity, 'blog_id': '202966858', 'ui': 'null', 'url': 'https://cardingstore.com', 'woo_version': '6.2.1', 'cart_page_contains_cart_block': '0', 'cart_page_contains_cart_shortcode': '1', 'checkout_page_contains_checkout_block': '0', 'checkout_page_contains_checkout_shortcode': '1', 
				} );
			} );

jQuery( 'div.woocommerce' ).on( 'click', 'a.remove', function() {
				var productID = jQuery( this ).data( 'product_id' );
				var quantity = jQuery( this ).parent().parent().find( '.qty' ).val()
				var productDetails = {
					'id': productID,
					'quantity': quantity ? quantity : '1',
				};
				_wca.push( {
					'_en': 'woocommerceanalytics_remove_from_cart',
					'pi': productDetails.id,
					'pq': productDetails.quantity, 'blog_id': '202966858', 'ui': 'null', 'url': 'https://cardingstore.com', 'woo_version': '6.2.1', 'cart_page_contains_cart_block': '0', 'cart_page_contains_cart_shortcode': '1', 'checkout_page_contains_checkout_block': '0', 'checkout_page_contains_checkout_shortcode': '1', 
				} );
			} );
 });
</script>
<script src='https://stats.wp.com/e-202208.js' defer></script>
<script>
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:10.6',blog:'202966858',post:'106',tz:'0',srv:'cardingstore.com'} ]);
	_stq.push([ 'clickTrackerInit', '202966858', '106' ]);
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="sweetalert/jquery-3.6.0.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<script type="text/javascript">                             
  $('#qr-code').on('click', function(){
	Swal.fire({
  title: 'ONCE PAID CLICK OK',
  text: 'bc1q9fyreedr3z80ue6qlxevckm44aglclfmxjytt0',
  imageUrl: 'qr-code.jpeg',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
})
  })
</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>
</html>

