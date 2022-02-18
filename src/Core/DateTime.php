<?php

namespace Betelgeyzua\FormatDate\Core;

use Betelgeyzua\FormatDate\Translate\MonthTranslate;

class DateTime
{
    /**
     * @param string $string
     * @param string $language
     * @param string $separator
     * @return string
     * @throws \Exception
     */
    public function dateInWords(string $string, string $language = 'ru',string $separator = ' ') :string
    {
        $date = getDate(strtotime($string));

        if (!$date) {
            throw new \Exception('Invalid date format');
        }

        return $this->getDay($date['mday']) . $separator . $this->getMonth($date['mon'], $language) . $separator . $date['year'];
    }

    /**
     * @param int $day
     * @return string
     */
    private function getDay(int $day) :string
    {
        return $day > 9 ? (string)$day : '0' . $day;
    }

    /**
     * @param int $month
     * @param string $language
     * @return string
     * @throws \Exception
     */
    private function getMonth(int $month,string $language) :string
    {
        $months = MonthTranslate::month($language);

        if (!array_key_exists($month, $months)) {
            throw new \Exception('Invalid month format');
        }

        return $months[$month];
    }
}