# php-terminal-color
Some tools of php for terminal

## Install

get it by

`git clone https://github.com/songxk/php-terminal.git`

then include it into your PHP script

# Color
``` php
<?php
require 'Color.php';
$style = array(
    Color::BOLD,
    Color::UNDERLINED,
);
echo 'Enjoy ' . Color::format('php-terminal-color', Color::LIGHT_MAGENTA, $style) . ' library';
```

# Progress
```php
<?php
require 'Progress.php';
for($percent=0;$percent<=100;$percent++) {
    Progress::showProgressBar($percent);
}
```
