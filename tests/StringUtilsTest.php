<?php
/*
Нажмите кнопку run чтобы запустить тесты.
Попробуйте изменять код функции / тестов, запуская проверки заново.
*/

require("src/StringUtils.php");
require("vendor/autoload.php");

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

Assert::eq(capitalize(''), '');
Assert::eq(capitalize('hello'), 'Hello');

