<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Check Status - Simple Energy</title>
				<link href="../img/3256favicon2.png" rel="icon">
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		<link href="../css/style.css" rel="stylesheet">
		<link href="../css/style_slide.css" rel="stylesheet">
		<style>
		#book img {
			width: 100%;
			height: 100vh;
			object-fit: cover;
		}
		</style>
	</head>
	<body>

<table>
 
  <?php
include_once("../../connection.php");
error_reporting(0);
?>
<br><br><br><br>
<table>
<?php
    
$sql = "SELECT * from payment where username='amit22'";

$result = $db->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
    <td>Beneficiary Name</td>
    <td>".$row['holder_name']."</td>
    </tr>
  <tr>
    <td>Account No.</td>
    <td>".$row['account_name']."</td>
    
  </tr>
  <tr>
    <td>Bank Name</td>
    <td>".$row['bank_name']."</td>
    
  </tr>
  <tr>
    <td>IFSC Code</td>
    <td>".$row['ifsc_code']."</td>
    </tr>
    <tr>
    <td>PAY FROM UPI Method</td>
    <td>".$row['upi_number']."</td>
    </tr>
 </tr>";

}
}
 else {
    echo "not successsfully";

    
} 
?>
 
</table>

</body>

</html>

		</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-9d1856e e-flex e-con-boxed wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="9d1856e" data-element_type="container" data-settings="{&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-3f955e1 elementor-widget elementor-widget-image" data-id="3f955e1" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" fetchpriority="high" width="800" height="268" src="upload/payment.webp" class="attachment-large size-large wp-image-171" alt="" sizes="(max-width: 800px) 100vw, 800px" />															</div>
				</div>
					</div>
				</div>
							</div>
				<div class="post-tags">
					</div>
			</div>

	
</main>

	
		<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
			<div class='footer-width-fixer'>		<div data-elementor-type="wp-post" data-elementor-id="215" class="elementor elementor-215">
							<div class="elementor-element elementor-element-f3887d2 e-flex e-con-boxed wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="f3887d2" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;container_type&quot;:&quot;flex&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-b4c78b6 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="b4c78b6" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;container_type&quot;:&quot;flex&quot;}" data-core-v316-plus="true">
				<div class="elementor-element elementor-element-9ca7fe6 elementor-widget elementor-widget-text-editor" data-id="9ca7fe6" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p></p>


<div class="col-sm-12 col-md-4">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Get In Touch</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map marker"></span><span class="text">A-13, Radha enclav, Bhagat Singh Marg, Sargasan,Gandhinagar, Gujarat 382421</span></li>
	                <li><a href="tel:+918956181474 "><span class="icon fa fa-phone"></span><span class="text">+918956181474 </span></a></li>
	                <li><a href="info@navbharatfinances.online"><span class="icon fa fa-paper-plane pr-4"></span>info@navbharatfinances.online</span></span></a></li>
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
		</div>		</footer>
	</div><!-- #page -->
			<script type='text/javascript'>
				const lazyloadRunObserver = () => {
					const dataAttribute = 'data-e-bg-lazyload';
					const lazyloadBackgrounds = document.querySelectorAll( `[${ dataAttribute }]:not(.lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
					entries.forEach( ( entry ) => {
						if ( entry.isIntersecting ) {
							let lazyloadBackground = entry.target;
							const lazyloadSelector = lazyloadBackground.getAttribute( dataAttribute );
							if ( lazyloadSelector ) {
								lazyloadBackground = entry.target.querySelector( lazyloadSelector );
							}
							if( lazyloadBackground ) {
								lazyloadBackground.classList.add( 'lazyloaded' );
							}
							lazyloadBackgroundObserver.unobserve( entry.target );
						}
					});
					}, { rootMargin: '100px 0px 100px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>
			


</script>
<script src='../wp-content/plugins/essential-blocks/assets/js/eb-blocks-localize5462.js?ver=4.2.6' id='essential-blocks-blocks-localize-js'></script>
<script src='../wp-content/plugins/royal-elementor-addons/assets/js/lib/particles/particles7c45.js?ver=3.0.6' id='wpr-particles-js'></script>
<script src='../wp-content/plugins/royal-elementor-addons/assets/js/lib/jarallax/jarallax.minf184.js?ver=1.12.7' id='wpr-jarallax-js'></script>
<script src='../wp-content/plugins/royal-elementor-addons/assets/js/lib/parallax/parallax.min5152.js?ver=1.0' id='wpr-parallax-hover-js'></script>
<script src='../wp-content/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0' id='hello-theme-frontend-js'></script>
<script src='../wp-content/plugins/creame-whatsapp-me/public/js/qr-creator.min8a54.js?ver=1.0.0' id='joinchat-qr-js'></script>
<script src='../wp-content/plugins/creame-whatsapp-me/public/js/joinchat.minc9d0.js?ver=5.0.10' id='joinchat-js'></script>
<script id='eael-general-js-extra'>
var localize = {"ajaxurl":"https:\/\/bookenergy.site\/wp-admin\/admin-ajax.php","nonce":"1a1d9491ce","i18n":{"added":"Added ","compare":"Compare","loading":"Loading..."},"eael_translate_text":{"required_text":"is a required field","invalid_text":"Invalid","billing_text":"Billing","shipping_text":"Shipping","fg_mfp_counter_text":"of"},"page_permalink":"https:\/\/bookenergy.site\/payment\/","cart_redirectition":"","cart_page_url":"","el_breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}};
</script>
<script src='../wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min29ad.js?ver=5.8.9' id='eael-general-js'></script>
<script src='../wp-content/plugins/header-footer-elementor/inc/js/frontend88a1.js?ver=1.6.16' id='hfe-frontend-js-js'></script>
<script src='../wp-content/plugins/elementor/assets/js/webpack.runtime.minafc7.js?ver=3.16.4' id='elementor-webpack-runtime-js'></script>
<script src='../wp-content/plugins/elementor/assets/js/frontend-modules.minafc7.js?ver=3.16.4' id='elementor-frontend-modules-js'></script>
<script src='../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script src='../wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.16.4","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_swiper_latest":true,"container_grid":true,"hello-theme-header-footer":true,"editor_v2":true,"landing-pages":true,"nested-elements":true,"e_lazyload":true,"e_global_styleguide":true},"urls":{"assets":"https:\/\/bookenergy.site\/1/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":157,"title":"payment%20%E2%80%93%20Simple%20Energy","excerpt":"","featuredImage":false}};
</script>
<script src='../wp-content/plugins/elementor/assets/js/frontend.minafc7.js?ver=3.16.4' id='elementor-frontend-js'></script>
<script id='wpr-addons-js-js-extra'>
var WprConfig = {"ajaxurl":"https:\/\/bookenergy.site\/wp-admin\/admin-ajax.php","resturl":"https:\/\/bookenergy.site\/wp-json\/wpraddons\/v1","nonce":"f8aa097351","comparePageID":"","comparePageURL":"https:\/\/bookenergy.site\/payment\/","wishlistPageID":"","wishlistPageURL":"https:\/\/bookenergy.site\/payment\/","chooseQuantityText":"Please select the required number of items.","site_key":"","is_admin":"","input_empty":"Please fill out this field","select_empty":"Nothing selected","file_empty":"Please upload a file","recaptcha_error":"Recaptcha Error"};
</script>
<script data-cfasync="false" src='../wp-content/plugins/royal-elementor-addons/assets/js/frontend.min9bdc.js?ver=1.3.77' id='wpr-addons-js-js'></script>
<script src='../wp-content/plugins/royal-elementor-addons/assets/js/modal-popups.min9bdc.js?ver=1.3.77' id='wpr-modal-popups-js-js'></script>
</body>
</html> 


<!-- Page cached by LiteSpeed Cache 5.6 on 2023-09-22 04:54:45 -->