<?php

namespace PavelDr\TripSorter\Cards;

/**
 * Class AirportBus
 * @package PavelDr\TripSorter\Cards
 */
class AirportBus extends AbsractCard
{
    /**
     * Get string for road
     * @return string
     */
    public function getRoad()
    {
        $seat = $this->getSeat() ? 'Sit in seat ' . $this->getSeat() . '.' : 'No seat assignment.';

        return 'Take the airport bus from ' . $this->getStartLocation()
            . ' to ' . $this->getFinishLocation() . '. '
            . $seat;
    }
}