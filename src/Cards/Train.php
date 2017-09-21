<?php

namespace PavelDr\TripSorter\Cards;

/**
 * Class Train
 * @package PavelDr\TripSorter\Cards
 */
class Train extends AbsractCard
{
    /**
     * @var string
     */
    protected $train;

    /**
     * Train constructor.
     * @param $startLocation
     * @param $finishLocation
     * @param $seat
     * @param $train
     */
    public function __construct($startLocation, $finishLocation, $seat, $train)
    {
        parent::__construct($startLocation, $finishLocation, $seat);

        $this->train = $train;
    }

    /**
     * Get string for road
     * @return string
     */
    public function getRoad()
    {
        return 'Take train ' . $this->train . ' from ' . $this->getStartLocation() . ' to ' . $this->getFinishLocation() . '. Sit in seat ' . $this->getSeat() . '.';
    }
}