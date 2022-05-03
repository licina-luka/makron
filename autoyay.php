#!/usr/bin/php
<?php

$tgt = $argv[1];

$code = file_get_contents($tgt);

foreach (glob('src/macro/*.yay') as $macrons) {
    $code = str_replace(
        "<?php\n",
        "<?php\n" . file_get_contents($macrons),
        $code
    );
}

$tmp = str_replace('src', 'tmp', $tgt);
if (! file_exists(dirname($tmp))) {
    mkdir(dirname($tmp), 0777, true);
}

file_put_contents($tmp, $code);