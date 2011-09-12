<?php

require_once("config.php");

?>
<html>
<head>
<title>Share bookmarklets</title>
</head>
<body>
Drag link to you bookmark toolbar to install.
<ul>
<?php
foreach ($users as $user => $email) {
$code = "javascript:(function(){ISRIL_H='f15c';ISRIL_SCRIPT=document.createElement('SCRIPT');ISRIL_SCRIPT.type='text/javascript';ISRIL_SCRIPT.src='$base_url/share.php?user=$user&url='+document.URL+'&title='+document.title;document.getElementsByTagName('head')[0].appendChild(ISRIL_SCRIPT)})();";
    echo '<li><a href="javascript:'.$code.';">Share with '.$user.'</a></li>';
}
?>
</ul>

</body>
</html>

