<?php
session_start();
echo "SESSION STATUS : " . session_status();
echo "<br><br>";
?>
<!DOCTYPE html>
<html>

<div class="cookie"></div>
<br><br>

<script>

(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-ND2HBGH');

function getCookie(cname) {
  const decodedCookie = decodeURIComponent(document.cookie);
  const ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) === ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(cname + '=') === 0) {
      return c.substring(cname.length + 1);
    }
  }
  return "";
}

const cookieName = "_ga_FPQ2H8PFXB";
const cookieValue = getCookie(cookieName);

const cookieDiv = document.querySelector('.cookie');

if (cookieValue) {
  cookieDiv.innerHTML = `The value of the cookie "${cookieName}" is: ${cookieValue}`;
} else {
  cookieDiv.innerHTML = `Cookie "${cookieName}" not found.`;
}

</script>

<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

<br><br>

<div class="cookie"></div>

</body>

</html>