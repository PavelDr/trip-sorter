<?php

namespace PavelDr\TripSorter;

use PavelDr\TripSorter\Cards\AbsractCard;
use PavelDr\TripSorter\Sorters\SorterInterface;

/**
 * Class Trip
 * @package PavelDr\TripSorter
 */
class Trip
{
    /**
     * @var array
     */
    protected $cards;

    /**
     * @var SorterInterface
     */
    protected $sorter;

    /**
     * Trip constructor.
     * @param SorterInterface $sorter
     */
    public function __construct(SorterInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    /**
     * Use this function if you want change sorter
     * @param SorterInterface $sorter
     */
    public function setSorter(SorterInterface $sorter)
    {
        $this->sorter = $sorter;
    }
    /**
     * @param AbsractCard $card
     * @return $this
     */
    public function addCard(AbsractCard $card)
    {
        $this->cards[] = $card;
        return $this;
    }

    /**
     * Sort cards via start and finish location
     * @return mixed
     */
    protected function getSortedCards()
    {
        return $this->sorter->sort($this->cards);
    }

    /**
     * Get string route
     * @return string
     */
    public function getRoute()
    {
        $route = '';

        /** @var AbsractCard $card */
        foreach ($this->getSortedCards() as $card) {
            $route.= $card->getRoad().'<br/.>';
        }

        $route.= 'You have arrived at your final destination.';

        return $route;
    }
}