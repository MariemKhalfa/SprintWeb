<?php
/**
 * Created by PhpStorm.
 * User: Sofien
 * Date: 09/04/2018
 * Time: 15:06
 */

namespace ELearningBundle\Listener;

use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;
use ELearningBundle\Listener\CalendarEvent as MyCustomEvent;

class LoadDataListener
{
    /**
     * @param CalendarEvent $calendarEvent
     *
     * @return FullCalendarEvent[]
     */
    public function loadData(CalendarEvent $calendarEvent)
    {
        $startDate = $calendarEvent->getStart();
        $endDate = $calendarEvent->getEnd();
        $filters = $calendarEvent->getFilters();

        //You may want do a custom query to populate the events

        $calendarEvent->addEvent(new MyCustomEvent('Event Title 1', new \DateTime('now')));
        $calendarEvent->addEvent(new MyCustomEvent('Event Title 2', new \DateTime('now')));
    }

}