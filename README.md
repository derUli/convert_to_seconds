# convert_to_seconds

 UliCMS Module to convert a given TimeUnit (e.g. 4 hours) to seconds

## examples

```php
<?php

declare(strict_types=1);

use content\modules\convert_to_seconds\ConvertToSeconds;
use content\modules\convert_to_seconds\TimeUnit;

ConvertToSeconds::convertToSeconds(60, TimeUnit::SECONDS); // => 60
ConvertToSeconds::convertToSeconds(5,  TimeUnit::MINUTES); // => 300 
ConvertToSeconds::convertToSeconds(2,  TimeUnit::HOURS); // => 7200
ConvertToSeconds::convertToSeconds(1,  TimeUnit::DAYS); // => 86400
ConvertToSeconds::convertToSeconds(2,  TimeUnit::WEEKS); // => 604800
ConvertToSeconds::convertToSeconds(2,  TimeUnit::MONTHS); // => 5184000
ConvertToSeconds::convertToSeconds(1,  TimeUnit::YEARS); // => 31536000
ConvertToSeconds::convertToSeconds(1,  TimeUnit::DECADES); // => 315360000
?>
```