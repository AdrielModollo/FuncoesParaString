<?php
echo IntlDateFormatter::formatObject(
         new DateTime('2013-01-01 00:00:00 Europe/Moscow'),
         'LLLL',
         'ru_RU');
?>
