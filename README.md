# php-terminal-color
You can print colorful text in terminal with this library.

## Install

get it by

`git clone https://github.com/songxk/php-terminal-color.git`

then include it into your PHP script

`require 'Color.php'`

## Example

``` php
<?php
require 'Color.php';
$style = array(
    Color::BOLD,
    Color::UNDERLINED,
);
echo 'Enjoy ' . Color::format('php-terminal-color', Color::LIGHT_MAGENTA, $style),' library';'''')'')
```
