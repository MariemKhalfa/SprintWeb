<?php
/**
 * Created by PhpStorm.
 * User: Sofien
 * Date: 09/04/2018
 * Time: 15:03
 */

namespace ELearningBundle\Listener;

use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;

class CalendarEvent extends FullCalendarEvent
{
    const SET_DATA = 'fullcalendar.set_data';


    /**
     * @var \Datetime
     */
    protected $start;
    /**
     * @var \Datetime
     */
    protected $end;
    /**
     * @var array
     */
    protected $filters;
    /**
     * @var FullCalendarEvent[]
     */
    protected $events = [];

    /**
     * CalendarEvent constructor.
     * @param \Datetime $start
     */
    public function __construct()
    {

    }
    /**
     * @param \Datetime $star
     * @param \Datetime $end
     * @param array $filters
     */

    /**
     * @return \Datetime
     */
    public function getStart()
    {
        return $this->start;
    }
    /**
     * @return \Datetime
     */
    public function getEnd()
    {
        return $this->end;
    }
    /**
     * @return array
     */
    public function getFilters()
    {
        return $this->filters;
    }
    /**
     * @param FullCalendarEvent $event
     *
     * @return $this
     */
    public function addEvent(FullCalendarEvent $event)
    {
        if (!in_array($event, $this->events, true)) {
            $this->events[] = $event;
        }
        return $this;
    }

    /**
     * @return FullCalendarEvent[]
     */
    public function getEvents()
    {
        return $this->events;
    }
    /**
     * @return array
     */
    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}