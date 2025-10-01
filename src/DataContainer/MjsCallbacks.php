<?php

namespace Patrickj\Contao\MjsBundle\DataContainer;

use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;
use Contao\DataContainer;

#[AsCallback('tl_patrickj_mjs', 'config.onbeforesubmit')]
class MjsCallbacks
{
    public function __invoke(array $arrValues, DataContainer $dc): array
    {
        // Get the recentScore and recentResult values
        $recentScore = $arrValues['recentScore'] ?? null;
        $recentResult = $arrValues['recentResult'] ?? null;

        // If recentScore is not submitted, try to read it from the datacontainer
        if ($recentScore === null && $dc->activeRecord) {
            $recentScore = $dc->activeRecord->recentScore;
        }

        // If recentResult is not submitted, try to read it from the datacontainer
        if ($recentResult === null && $dc->activeRecord) {
            $recentResult = $dc->activeRecord->recentResult;
        }
        // If recentScore is set and recentResult is valid (1-4)
        if ($recentScore && $recentResult >= 1 && $recentResult <= 4) {
            // Map recentResult to the corresponding score field
            $scoreFields = [
                1 => 'recentScoreFirst',
                2 => 'recentScoreSecond',
                3 => 'recentScoreThird',
                4 => 'recentScoreFourth'
            ];

            $scoreField = $scoreFields[$recentResult];
            $expectedScore = $arrValues[$scoreField] ?? null;

            // If expected score is not submitted, try to read it from the datacontainer
            if ($expectedScore === null && $dc->activeRecord) {
                $expectedScore = $dc->activeRecord->{$scoreField};
            }

            // If the expected score is set and doesn't match the player's score, throw an error
            if ($expectedScore && $recentScore != $expectedScore) {
                throw new \Exception($GLOBALS['TL_LANG']['tl_patrickj_mjs']['error_score_mismatch']);
            }
        }

        // If recentScore is set but recentResult is invalid, throw an error
        if ($recentScore && ($recentResult < 1 || $recentResult > 4 || $recentResult === null)) {
            throw new \Exception($GLOBALS['TL_LANG']['tl_patrickj_mjs']['error_invalid_score_position']);
        }

        // Return the values
        return $arrValues;
    }

    /**
     * Validate that the sum of all scores equals 100k
     * 
     * @param mixed $value The value of the recentScoreFourth field
     * @param DataContainer $dc The DataContainer object
     * 
     * @return mixed The validated value
     * @throws \Exception If validation fails
     */
    public function validateScoreSum($value, DataContainer $dc): mixed
    {
        // Only validate if a value is provided
        if ($value) {
            // Get all score values
            $scoreFirst = $dc->activeRecord->recentScoreFirst;
            $scoreSecond = $dc->activeRecord->recentScoreSecond;
            $scoreThird = $dc->activeRecord->recentScoreThird;
            $scoreFourth = $value; // Use the current value being saved

            // Check if all scores are set
            if ($scoreFirst && $scoreSecond && $scoreThird && $scoreFourth) {
                // Calculate the sum
                $sum = (int)$scoreFirst + (int)$scoreSecond + (int)$scoreThird + (int)$scoreFourth;

                // Check if the sum equals 100k
                if ($sum !== 100000) {
                    throw new \Exception($GLOBALS['TL_LANG']['tl_patrickj_mjs']['error_score_sum']);
                }
            }
        }

        return $value;
    }

    /**
     * Validate that the sum of place rates is between 99.99 and 100.01
     * 
     * @param mixed $value The value of the rateFourth field
     * @param DataContainer $dc The DataContainer object
     * 
     * @return mixed The validated value
     * @throws \Exception If validation fails
     */
    public function validateRateSum($value, DataContainer $dc): mixed
    {
        // Only validate if a value is provided
        if ($value) {
            // Get all rate values
            $rateFirst = $dc->activeRecord->rateFirst;
            $rateSecond = $dc->activeRecord->rateSecond;
            $rateThird = $dc->activeRecord->rateThird;
            $rateFourth = $value; // Use the current value being saved

            // Check if all rates are set
            if ($rateFirst && $rateSecond && $rateThird && $rateFourth) {
                // Calculate the sum
                $sum = (float)$rateFirst + (float)$rateSecond + (float)$rateThird + (float)$rateFourth;

                // Check if the sum is between 99.99 and 100.01, account for weird float rounding errors
                if ($sum < 99.989 || $sum > 100.011) {
                    throw new \Exception($GLOBALS['TL_LANG']['tl_patrickj_mjs']['error_rate_sum']);
                }
            }
        }

        return $value;
    }
}
