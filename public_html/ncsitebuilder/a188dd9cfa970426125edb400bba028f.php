<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Custom Maintenance page"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
						<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Custom Maintenance page"); ?>" />
			<meta name="robots" content="noindex" />
		
	<!-- Facebook Open Graph -->
						<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20260502124636" type="text/javascript"></script>
	<script src="js/a188dd9cfa970426125edb400bba028f-bundle.js?ts=20260502124636" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20260502124636" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a188dd9cfa970426125edb400bba028f-bundle.css?ts=20260502124636" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/><!-- HTML Meta Tags -->
<title>CryptoPandemic Official Website</title>
<meta name="description" content="Welcome to CryptoPandemic's Official Website!">
<meta name="author" content="George Dreemer">
<meta name="robots" content="index, follow">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://cryptopandemic.com">
<meta property="og:type" content="website">
<meta property="og:title" content="CryptoPandemic's Official Website">
<meta property="og:description" content="Welcome to CryptoPandemic's Official Website!">
<meta property="og:image" content="https://cryptopandemic.com/gallery_gen/e6752594e756a7de0a81a328e4fdf98a_fit.png">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="cryptopandemic.com">
<meta property="twitter:url" content="https://cryptopandemic.com">
<meta name="twitter:title" content="CryptoPandemic's Official Website">
<meta name="twitter:description" content="Welcome to CryptoPandemic's Official Website!">
<meta name="twitter:image" content="https://cryptopandemic.com/gallery_gen/e6752594e756a7de0a81a328e4fdf98a_fit.png"><link rel="shortcut icon" href="gallery/favicons/favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	window.useTrailingSlashes = false;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?> wb-maintenance-page="true"><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_main_a188dd9cfa970426125edb400bba028f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a189ad2f584d000942380b8ea6c8f9b4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a189ad2f584f006e1872d1033112c68a" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="20%" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#000000"><text x="65.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a189ad2f5853009eda233e436660849c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2">This page is currently down for maintenance</h2>
</div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>
