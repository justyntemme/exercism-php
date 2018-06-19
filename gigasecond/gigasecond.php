<?php
function datesetup($b) {
    return strtotime("Y-m-d H:i:s",$b);
}

function from($b) {
    $GIGA_SECOND = DateInterval::createFromDateString('1000000000 seconds');
    return date_add($b, $GIGA_SECOND);
}
?>