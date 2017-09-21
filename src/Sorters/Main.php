<?php

namespace PavelDr\TripSorter\Sorters;

use PavelDr\TripSorter\Cards\AbsractCard;

/**
 * Class Main
 * @package PavelDr\TripSorter\Sorters
 */
class Main implements SorterInterface
{
    /**
     * Sort cards via start and finish location
     * @param array $cards
     * @return array
     */
    public function sort(array $cards)
    {
        $sortedCards = [];
        list($startIndexes,$finishIndexes, $startLocation) = $this->createIndexes($cards);

        /** @var AbsractCard $currentCard */
        while ($currentCard = (array_key_exists($startLocation, $startIndexes)) ? $startIndexes[$startLocation] : null) {

            array_push($sortedCards, $currentCard);

            /** @var string $startLocation */
            $startLocation = $currentCard->getFinishLocation();
        }

        return $sortedCards;
    }

    /**
     * Create default indexes for array
     * @param $cards
     * @return array
     */
    protected function createIndexes($cards)
    {
        $startIndexes = [];
        $finishIndexes = [];
        $startLocation = '';
        /** @var AbsractCard $card */
        foreach ($cards as $card) {
            $startIndexes[$card->getStartLocation()] = $card;
            $finishIndexes[$card->getFinishLocation()] = $card;
        }

        /** @var AbsractCard $card */
        foreach ($cards as $card) {
            $startLocation = $card->getStartLocation();
            if (!array_key_exists($startLocation, $finishIndexes)) {
                break;
            }
        }

        return [
            $startIndexes,
            $finishIndexes,
            $startLocation
        ];
    }
}