<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 10 2023 16:30:12 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="645bbf4568f5e8589de027ab" data-wf-site="6456c2138619102a79ba202a">
<head>
  <meta charset="utf-8">
  <title>Protected page</title>
  <meta content="Protected page" property="og:title">
  <meta content="Protected page" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/tehnicka-skola-cacak.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
      WebFont.load({
        google: {
          families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "PT Serif:400,400italic,700,700italic", "Inter:300,regular,500,600,700,800:cyrillic,cyrillic-ext,latin", "Roboto:regular,italic,500,700,700italic,900,900italic:cyrillic,latin"]
        }
      });
    </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="utility-page-wrap">
    <div class="utility-page-content w-password-page w-form">
      <form action="/.wf_auth" method="post" id="email-form" name="email-form" data-name="Email Form" class="utility-page-form w-password-page"><img src="https://d3e54v103j8qbb.cloudfront.net/static/utility-lock.ae54711958.svg" alt="">
        <h2>Protected Page</h2><label for="pass" class="w-password-page">Password</label><input type="password" class="w-password-page w-input" autofocus="true" maxlength="256" name="pass" data-name="field" placeholder="Enter your password" id="pass"><input type="submit" value="Submit" data-wait="Please wait..." class="w-password-page w-button">
        <div class="w-password-page w-form-fail">
          <div>Incorrect password. Please try again.</div>
        </div>
        <div style="display:none" class="w-password-page w-embed w-script"><input type="hidden" name="path" value="<%WF_FORM_VALUE_PATH%>"><input type="hidden" name="page" value="<%WF_FORM_VALUE_PAGE%>"></div>
        <div style="display:none" class="w-password-page w-embed w-script">
          <script type="application/javascript">
              (function _handlePasswordPageOnload() {
                if (/[?&]e=1(&|$)/.test(document.location.search)) {
                  document.querySelector('.w-password-page.w-form-fail').style.display = 'block';
                }
              })()
            </script>
        </div>
      </form>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6456c2138619102a79ba202a" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>