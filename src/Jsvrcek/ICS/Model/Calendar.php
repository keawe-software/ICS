<?php

namespace Jsvrcek\ICS\Model;

class Calendar
{
    /**
     * 
     * @var string $version
     */
    private $version = '2.0';

    /**
     *
     * @var string $prodId
     */
    private $prodId = '';

    /**
     *
     * @var string $calendarScale
     */
    private $calendarScale = 'GREGORIAN';

    /**
     *
     * @var string $method
     */
    private $method = 'PUBLISH';

    /**
     *
     * @var array $customHeaders
     */
    private $customHeaders = array();

    /**
     *
     * @var \DateTimeZone $timezone
     */
    private $timezone;

    /**
     *
     * @var array $events
     */
    private $events = array();
    
    /**
     * 
     * @var array $todos
     */
    private $todos = array();
    
    /**
     * 
     * @var array $freeBusy
     */
    private $freeBusy = array();

    /**
     * 
     */
    public function __construct()
    {
        $this->timezone = new \DateTimeZone('America/New_York');
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return Calendar
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getProdId()
    {
        return $this->prodId;
    }

    /**
     * @param string $prodId
     * @return \Jsvrcek\ICS\Model\Calendar
     */
    public function setProdId($prodId)
    {
        $this->prodId = $prodId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCalendarScale()
    {
        return $this->calendarScale;
    }

    /**
     * @param string $calendarScale
     * @return \Jsvrcek\ICS\Model\Calendar
     */
    public function setCalendarScale($calendarScale)
    {
        $this->calendarScale = $calendarScale;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return \Jsvrcek\ICS\Model\Calendar
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomHeaders()
    {
        return $this->customHeaders;
    }

    /**
     * use to add custom headers as array key-value pairs<br>
     * <strong>Example:</strong> $customHeaders = array('X-WR-TIMEZONE' => 'America/New_York')
     * 
     * @param array $customHeaders
     * @return \Jsvrcek\ICS\Model\Calendar
     */
    public function setCustomHeaders(array $customHeaders)
    {
        $this->customHeaders = $customHeaders;
        return $this;
    }
    
    /**
     * @param string $key
     * @param string $value
     * @return \Jsvrcek\ICS\Model\Calendar
     */
    public function addCustomHeader($key, $value)
    {
        $this->customHeaders[$key] = $value;
        return $this;
    }

    /**
     * @return \DateTimeZone
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param \DateTimeZone $timezone
     * @return \Jsvrcek\ICS\Model\Calendar
     */
    public function setTimezone(\DateTimeZone $timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return array
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param CalendarEvent $event
     * @return \Jsvrcek\ICS\Model\Calendar
     */
    public function addEvent(CalendarEvent $event)
    {
        $this->events[] = $event;
        return $this;
    }
    
    /**
     * @return array $todos returs array of CalendarTodo objects
     */
    public function getTodos()
    {
        return $this->todos;
    }
    
    /**
     * @param CalendarTodo $todo
     * @return \Jsvrcek\ICS\Model\CalendarEvent
     */
    public function addTodo(CalendarTodo $todo)
    {
        $this->todos[] = $todo;
        return $this;
    }
    
    /**
     * @param array $todos
     * @return \Jsvrcek\ICS\Model\CalendarEvent
     */
    public function setTodos(array $todos)
    {
        $this->todos = $todos;
        return $this;
    }
    
    /**
     * @return array $freeBusy returs array of CalendarFreeBusy objects
     */
    public function getFreeBusy()
    {
        return $this->freeBusy;
    }
    
    /**
     * @param CalendarFreeBusy $todo
     * @return \Jsvrcek\ICS\Model\CalendarEvent
     */
    public function addFreeBusy(CalendarFreeBusy $todo)
    {
        $this->freeBusy[] = $todo;
        return $this;
    }
    
    /**
     * @param array $freeBusy
     * @return \Jsvrcek\ICS\Model\CalendarEvent
     */
    public function setFreeBusy(array $freeBusy)
    {
        $this->freeBusy = $freeBusy;
        return $this;
    }
}
