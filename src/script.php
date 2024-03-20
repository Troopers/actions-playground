<?php

declare(strict_types=1);

$fmt = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);

echo 'Le premier format affiché est '.$fmt->format(0);

exit(0);
