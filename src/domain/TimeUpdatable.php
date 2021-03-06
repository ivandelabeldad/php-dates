<?php

namespace Date;

/**
 * Interface TimeUpdatable
 * @package Time
 */
interface TimeUpdatable
{

    /**
     * @param int $time
     * @return void
     */
    public function updateFromUnixTime($time);

}
