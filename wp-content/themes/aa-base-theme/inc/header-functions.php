<?php
function aa_header_preload(){

		$tmp_dir = get_stylesheet_directory();
		$tmp_uri = get_stylesheet_directory_uri();

	?>

	<?php

	$main_styles = array(
		array(
			'dir' => $tmp_dir . "/style.css",
			'uri' => $tmp_uri . "/style.css"
		),
		array(
			'dir' => $tmp_dir . "/build/css/style.min.css",
			'uri' => $tmp_uri . "/build/css/style.min.css"
		)
	);

	foreach($main_styles as $ms):
		?>
		<link rel="preload" href="<?= $ms['uri']; ?>?ver=<?= filemtime($ms['dir']); ?>" as="style" onload="this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?= $ms['uri']; ?>?ver=<?= filemtime($ms['dir']); ?>"></noscript>
		<?php
	endforeach;


	$dns_prefetch = [
		'https://www.youtube.com',
		'https://api.mapbox.com',
		'https://fonts.googleapis.com',
		'https://connect.facebook.net',
		'https://www.googleadservices.com',
	];
	//also prefetch the default APIs from google, facebook... ?>
	
	<?php foreach($dns_prefetch as $dns_url): ?>
	<link rel="dns-prefetch" href="<?= $dns_url; ?>">
	<?php endforeach; ?>

	<?php
		$preconnect = [
			'https://fonts.gstatic.com/',
		];
		foreach($dns_prefetch as $dns_url): ?>
		<link rel="preconnect" href="<?= $dns_url; ?>" crossorigin>
	<?php endforeach; ?>

	<script>/*loadCss*/(function(w){"use strict";var loadCSS=function(href,before,media,attributes){var doc=w.document;var ss=doc.createElement("link");var ref;if(before){ref=before}else{var refs=(doc.body||doc.getElementsByTagName("head")[0]).childNodes;ref=refs[refs.length-1]}var sheets=doc.styleSheets;if(attributes){for(var attributeName in attributes){if(attributes.hasOwnProperty(attributeName)){ss.setAttribute(attributeName,attributes[attributeName])}}}ss.rel="stylesheet";ss.href=href;ss.media="only x";function ready(cb){if(doc.body){return cb()}setTimeout(function(){ready(cb)})}ready(function(){ref.parentNode.insertBefore(ss,before?ref:ref.nextSibling)});var onloadcssdefined=function(cb){var resolvedHref=ss.href;var i=sheets.length;while(i--){if(sheets[i].href===resolvedHref){return cb()}}setTimeout(function(){onloadcssdefined(cb)})};function loadCB(){if(ss.addEventListener){ss.removeEventListener("load",loadCB)}ss.media=media||"all"}if(ss.addEventListener){ss.addEventListener("load",loadCB)}ss.onloadcssdefined=onloadcssdefined;onloadcssdefined(loadCB);return ss};if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}else{w.loadCSS=loadCSS}})(typeof global!=="undefined"?global:this);/*link[rel=preload] polyfill*/(function(w){"use strict";if(!w.loadCSS){w.loadCSS=function(){}}var rp=loadCSS.relpreload={};rp.support=function(){var ret;try{ret=w.document.createElement("link").relList.supports("preload")}catch(e){ret=false}return function(){return ret}}();rp.bindMediaToggle=function(link){var finalMedia=link.media||"all";function enableStylesheet(){if(link.addEventListener){link.removeEventListener("load",enableStylesheet)}else if(link.attachEvent){link.detachEvent("onload",enableStylesheet)}link.setAttribute("onload",null);link.media=finalMedia}if(link.addEventListener){link.addEventListener("load",enableStylesheet)}else if(link.attachEvent){link.attachEvent("onload",enableStylesheet)}setTimeout(function(){link.rel="stylesheet";link.media="only x"});setTimeout(enableStylesheet,3e3)};rp.poly=function(){if(rp.support()){return}var links=w.document.getElementsByTagName("link");for(var i=0;i<links.length;i++){var link=links[i];if(link.rel==="preload"&&link.getAttribute("as")==="style"&&!link.getAttribute("data-loadcss")){link.setAttribute("data-loadcss",true);rp.bindMediaToggle(link)}}};if(!rp.support()){rp.poly();var run=w.setInterval(rp.poly,500);if(w.addEventListener){w.addEventListener("load",function(){rp.poly();w.clearInterval(run)})}else if(w.attachEvent){w.attachEvent("onload",function(){rp.poly();w.clearInterval(run)})}}if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}else{w.loadCSS=loadCSS}})(typeof global!=="undefined"?global:this);</script>
    <?php
}