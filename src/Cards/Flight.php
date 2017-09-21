<?php

namespace PavelDr\TripSorter\Cards;

/**
 * Class Flight
 * @package PavelDr\TripSorter\Cards
 */
class Flight extends AbsractCard
{
    /**
     * @var string
     */
    protected $flight;

    /**
     * @var string
     */
    protected $gate;

    /**
     * @var string/null
     */
    protected $counter;

    /**
     * Flight constructor.
     * @param $startLocation
     * @param $finishLocation
     * @param $seat
     * @param $flight
     * @param $gate
     * @param null $counter
     */
    public function __construct(
        $startLocation,
        $finishLocation,
        $seat,
        $flight,
        $gate,
        $counter = null
    ) {
        parent::__construct($startLocation, $finishLocation, $seat);

        $this->flight = $flight;
        $this->gate = $gate;
        $this->counter = $counter;
    }

    /**
     * Get string for road
     * @return string
     */
    public function getRoad()
    {
        $baggage = $this->counter ? '<br/>Baggage drop at ticket counter ' . $this->counter . '.' : '<br/>Baggage will be automatically transferred from your last leg.';

        return 'From ' . $this->getStartLocation() . ', take flight ' . $this->flight
            . ' to ' . $this->getFinishLocation() . '. Gate ' . $this->gate
            . ', seat ' . $this->getSeat() . '. ' . $baggage;
    }
}