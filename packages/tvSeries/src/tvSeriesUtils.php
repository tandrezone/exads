<?php

namespace exads\tvSeries;

use Symfony\Component\Dotenv\Dotenv;
use xbugs\simplexdb\DatabaseUtils;

class tvSeriesUtils
{
    const WEEK_DAYS = [
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday'
    ];

    public function nextAired($time = null, $show = '') {
        if($time) {
            $time = time();
        }
        echo PHP_EOL;

        $week = date('w', $time);
        $hours = date('H', $time);
        $minutes = date('i',$time);
        $timeOfWeek = ($week * 24 * 60) + ($hours*60) + $minutes;
        echo $this->formatTimeOfTheWeek($timeOfWeek);
        $this->getStuff($timeOfWeek);
    }

    public function getStuff($timeofweek) {
        $dbh = new DatabaseUtils();
        $query = 'SELECT title,channel, tv_series_intervals.week_day, tv_series_intervals.show_time from tv_series
    INNER JOIN tv_series_intervals
    ON tv_series.id = tv_series_intervals.id_tv_series
WHERE (tv_series_intervals.week_day * tv_series_intervals.show_time > '.$timeofweek.') ORDER BY tv_series_intervals.week_day * tv_series_intervals.show_time DESC';
        $result = $dbh->fetchQuery($query);
        $dbh = null;
        print_r($result);
    }

    private function formatTimeOfTheWeek(int $time) {
        $week = intdiv($time, 24*60 );
        $hoursMinutes = $time - ($week*24*60);
        $hours = intdiv($hoursMinutes,60);
        $minutes = $hoursMinutes % 60;
        return self::WEEK_DAYS[$week].' -> '.$hours. ' : '.$minutes;
    }

    private function formatWeekDay(int &$weekDay) {
        $week = intdiv($weekDay, 24*60 );
        $weekDay =  self::WEEK_DAYS[$week];
    }

    private function formatHoursMinutes(int &$hoursMin) {
        $week = intdiv($hoursMin, 24*60 );
        $hoursMinutes = $hoursMin - ($week*24*60);
        $hours = intdiv($hoursMinutes,60);
        $minutes = $hoursMinutes % 60;
        $hoursMin = $hours. ' : '.$minutes;
    }
}