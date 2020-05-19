# convert_to_seconds

 UliCMS Module which converts a given Timeunit (e.g. 4 hours) to seconds

## examples

```php
<?php
use function UliCMS\Utils\ConvertToSeconds\convertToSeconds;
convertToSeconds(60, 'seconds') // => 6
convertToSeconds(5, 'minutes') // => 300 
convertToSeconds(2, 'hours') // => 7200
convertToSeconds(1, 'days') // => 86400
convertToSeconds(2, 'weeks') // => 604800
convertToSeconds(2, 'months') // => 5184000
convertToSeconds(1, 'years') // => 31536000
convertToSeconds(1, 'decades') // => 315360000
?>
```