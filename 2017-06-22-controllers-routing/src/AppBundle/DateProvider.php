<?php

declare(strict_types=1);

namespace AppBundle;

class DateProvider
{
    public function getDate(): \DateTime
    {
        return new \DateTime();
    }
}
