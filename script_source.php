<?php

$scriptSources = array(
"//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"
,"//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"
);

foreach ($scriptSources as $source) {
  echo '<script type="text/javascript" src="' . $source . '"></script>';
}

?>