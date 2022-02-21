# DateFormatter

# Date Convert
A small library to convert a date string in date in words, multi language RU, UA, EN.

Require this package with composer.

```shell
composer require betelgeyzua/format-date
```
### Simple Usage

The original date string must be supplied in the date format ('01-01-2022', '01.01.2022', etc.). 

An example usage is shown below:

```php
use Betelgeyzua\FormatDate\DateFormatter;

$formatter = new DateFormatter(); // Create object DateFormatter;
$formatter->instance(); // returns object Betelgeyzua\FormatDate

$date_in_word = $formatter->instance()->dateInWords('02.07.2022'); // returns 02 Июля 2022 default language RU
$date_in_word = $formatter->instance()->dateInWords('02.07.2022', 'ua'); // returns 02 Липня 2022
$date_in_word = $formatter->instance()->dateInWords('02.07.2022', 'en'); // returns 02 July 2022
```