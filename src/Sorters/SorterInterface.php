<?php

namespace PavelDr\TripSorter\Sorters;

/**
 * Interface SorterInterface
 * @package PavelDr\TripSorter\Sorters
 */
interface SorterInterface
{
    /**
     * Sort cards via start and finish location
     * @param array $cards
     * @return mixed
     */
    public function sort(array $cards);
}