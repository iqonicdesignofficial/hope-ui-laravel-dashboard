<?php

namespace App\Helpers;

class DateTimeHelper {
    public static function timeAgo($date)
    {
        if($date==null){ return '-'; }
        date_default_timezone_set('UTC');
        $diff_time= \Carbon\Carbon::createFromTimeStamp(strtotime($date))->diffForHumans();
        return $diff_time;
    }
    public static function dateAgo($date,$type2='')
    {
        if($date==null || $date=='0000-00-00 00:00:00'){ return '-'; }
        $diff_time1= \Carbon\Carbon::createFromTimeStamp(strtotime($date))->diffForHumans();
        $datetime = new \DateTime($date);
        $datetime->setTimezone(new \DateTimeZone(\Auth::check() ? \Auth::user()->time_zone ?? 'UTC' : 'UTC'));
        $diff_time= \Carbon\Carbon::parse($datetime->format('Y-m-d H:i:s'))->isoFormat('LLL');
        if($type2 != ''){ return $diff_time; }
        return $diff_time1 .' on '.$diff_time;
    }

    public static function date($date, $format = 'd-m-Y H:i:s')
    {
        if($date==null || $date=='0000-00-00 00:00:00'){ return '-'; }
        $datetime = new \DateTime($date);
        $la_time = new \DateTimeZone(\Auth::check() ? \Auth::user()->time_zone ?? 'UTC' : 'UTC');
        $datetime->setTimezone($la_time);
        $newDate= $datetime->format('Y-m-d H:i:s');
        $diff_time = \Carbon\Carbon::createFromTimeStamp(strtotime($newDate))->format($format);
        return $diff_time;
    }

    public static function saveDate($date)
    {
        if($date==null || $date=='0000-00-00 00:00:00'){ return null; }
        $datetime = new \DateTime($date);
        $la_time = new \DateTimeZone(\Auth::check() ? \Auth::user()->time_zone ?? 'UTC' : 'UTC');
        $datetime->setTimezone($la_time);
        $newDate= $datetime->format('Y-m-d H:i:s');
        $diff_time = \Carbon\Carbon::createFromTimeStamp(strtotime($newDate));
        return $diff_time;
    }
    public static function strtotimeToDate($date)
    {
        if($date==null || $date=='0000-00-00 00:00:00'){ return '-'; }
        date_default_timezone_set(\Auth::check() ? \Auth::user()->time_zone ?? 'UTC' : 'UTC');
        $diff_time = \Carbon\Carbon::createFromTimeStamp($date);
        return $diff_time;
    }
}