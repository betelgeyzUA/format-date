<?php

namespace Betelgeyzua\FormatDate;

use Betelgeyzua\FormatDate\Core\DateTime;

class DateFormatter
{
    /**
     * @var DateTime
     */
    private DateTime $date_time;

    public function __construct()
    {
        $this->date_time = new DateTime();
    }

    /**
     * @return DateTime
     */
    public function instance() :DateTime
    {
        return $this->date_time;
    }
}