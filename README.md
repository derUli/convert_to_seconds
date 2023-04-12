# convert_to_seconds

 UliCMS Module to convert a given TimeUnit (e.g. 4 hours) to seconds

## examples

```php
<?php

declare(strict_types=1);

use content\modules\convert_to_seconds\ConvertToSeconds;
use content\modules\convert_to_seconds\TimeUnit;

convertToSeconds(60, TimeUnit::SECONDS); // => 60
convertToSeconds(5,  TimeUnit::MINUTES); // => 300 
convertToSeconds(2,  TimeUnit::HOURS); // => 7200
convertToSeconds(1,  TimeUnit::DAYS); // => 86400
convertToSeconds(2,  TimeUnit::WEEKS); // => 604800
convertToSeconds(2,  TimeUnit::MONTHS); // => 5184000
convertToSeconds(1,  TimeUnit::YEARS); // => 31536000
convertToSeconds(1,  TimeUnit::DECADES); // => 315360000
?>
```