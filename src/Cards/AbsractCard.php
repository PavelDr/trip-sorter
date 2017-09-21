<?php

namespace PavelDr\TripSorter\Cards;

/**
 * Class AbsractCard
 * @package PavelDr\TripSorter\Cards
 */
abstract class AbsractCard
{
    /**
     * @var string
     */
    protected $startLocation;

    /**
     * @var string
     */
    protected $finishLocation;

    /**
     * @var string/null
     */
    protected $seat;

    /**
     * AbsractCard constructor.
     * @param $startLocation (Where customer start his travel)
     * @param $finishLocation (Where customer finish his travel)
     * @param $seat (customer seat)
     */
    public function __construct(
        $startLocation,
        $finishLocation,
        $seat = null
    ) {
        $this->startLocation = $startLocation;
        $this->finishLocation = $finishLocation;
        $this->seat = $seat;
    }

    /**
     * Get information about road from card
     */
    abstract public function getRoad();

    /**
     * @return string
     */
    public function getStartLocation()
    {
        return $this->startLocation;
    }

    /**
     * @return string
     */
    public function getFinishLocation()
    {
        return $this->finishLocation;
    }

    /**
     * @return string
     */
    public function getSeat()
    {
        return $this->seat;
    }
}