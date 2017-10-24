<?php

namespace Date;

/**
 * Class DateHoursComparator
 * @package Date
 */
class DateHoursComparator implements DateComparator
{

    function compareTo($o1, $o2)
    {
        return $o1->getHours() > $o2->getHours();
    }

}