<?php

namespace Betelgeyzua\FormatDate\Translate;

class MonthTranslate
{
    /**
     * @param string $language
     * @return string[]
     */
    public static function month(string $language) : array
    {
        switch ($language) {
            case 'en':
                $months = [
                    1 => 'January',
                    2 => 'February',
                    3 => 'March',
                    4 =>  'April',
                    5 =>  'May',
                    6 =>  'June',
                    7 =>  'July',
                    8 =>  'August',
                    9 =>  'September',
                    10 =>  'October',
                    11 =>  'November',
                    12 =>  'December',
                ];
                break;
            case 'ua':
                $months = [
                    1 => 'Січня',
                    2 => 'Лютого',
                    3 => 'Березня',
                    4 =>  'Квітня',
                    5 =>  'Травня',
                    6 =>  'Червня',
                    7 =>  'Липня',
                    8 =>  'Серпня',
                    9 =>  'Вересня',
                    10 =>  'Жовтня',
                    11 =>  'Листопада',
                    12 =>  'Грудня',
                ];
                break;
            default:
                $months = [
                    1 => 'Января',
                    2 => 'Февраля',
                    3 => 'Марта',
                    4 =>  'Апреля',
                    5 =>  'Мая',
                    6 =>  'Июня',
                    7 =>  'Июля',
                    8 =>  'Августа',
                    9 =>  'Сентября',
                    10 =>  'Октября',
                    11 =>  'Ноября',
                    12 =>  'Декабря',
                ];
        }

        return  $months;
    }
}