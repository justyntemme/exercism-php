<?php
function from($b) {
    $GIGA_SECOND = DateInterval::createFromDateString('1000000000 seconds');
    return date_add($b, $GIGA_SECOND);
}
?>
