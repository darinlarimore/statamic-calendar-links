<?php

namespace Darinlarimore\StatamicCalendarLinks\Fieldtypes;

use Statamic\Fields\Fieldtype;
use Spatie\CalendarLinks\Link;
use Carbon\Carbon;

class CalendarLink extends Fieldtype
{
    protected $icon = 'calendar';
    protected $categories = ['special'];

    protected $meta = [
        'icon' => 'calendar',
    ];

    public function augment($value)
    {
        if (!$value) return null;

        $from = Carbon::parse($value['startDate'] . ' ' . $value['startTime']);
        $to = Carbon::parse($value['endDate'] . ' ' . $value['endTime']);

        $link = Link::create(
            $value['title'],
            $from,
            $to
        )
            ->description($value['description'])
            ->address($value['location']);

        return array_merge($value, [
            'google_link' => $link->google(),
            'ics_link' => $link->ics(),
            'yahoo_link' => $link->yahoo(),
            'webOutlook_link' => $link->webOutlook(),
        ]);
    }

    public function preProcess($data)
    {
        return $data;
    }
}
