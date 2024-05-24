<?php

if (isset($events) && is_array($events)) {
    $events_next_180_days = 0;
    $booked_past_365_days = 0;
    $active_events = 0;
    $archived_events = 0;

    $today = new DateTime();
    $next_180_days = (new DateTime())->modify('+180 days');
    $past_365_days = (new DateTime())->modify('-365 days');

    foreach ($events as $event) {
        $event_start = new DateTime($event['event_start']);
        $booked_date = new DateTime($event['booked']);

        if ($event_start >= $today && $event_start <= $next_180_days) {
            $events_next_180_days++;
        }

        if ($booked_date >= $past_365_days) {
            $booked_past_365_days++;
        }

        if ($event['status'] == 'Active') {
            $active_events++;
        } else if ($event['status'] == 'Archived') {
            $archived_events++;
        }
    }
}
?>