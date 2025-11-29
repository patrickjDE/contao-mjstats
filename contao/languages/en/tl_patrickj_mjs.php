<?php

$GLOBALS['TL_LANG']['tl_patrickj_mjs'] = [
    'meta_legend' => 'Meta',
    'platform' => ['Platform'],
    'date' => ['Date'],
    'gameType' => ['Match Type', 'The match type you just played.'],
    'rank' => ['Skill Level', 'Your rank after the match.'],
    'exp' => ['Experience', 'Your experience counter after the match.'],

    'playStyle_legend' => 'Play Style',
    'styleAtk' => ['ATK', 'Based on average points won in the last 100 games.'],
    'styleDef' => ['DEF', 'Based on deal-in rate over the last 100 games.'],
    'styleSpd' => ['SPD', 'Based on win rate over the last 100 games.'],
    'styleLuk' => ['LUK', 'Based on number of Dora-Yaku (Dora, Ura Dora, Red Five & Ippatsu) in the last 20 wins.'],

    'trend_legend' => 'Recent match data',
    'room' => ['Room Level', 'The room your last match took place in.'],
    'recentResult' => ['Rank', 'Your rank in the last match'],
    'recentScore' => ['Your Score', 'Your score in the last match.'],
    'recentScoreFirst' => ['First place score', 'Score of the first place player in the last match.'],
    'recentScoreSecond' => ['Second place score', 'Score of the second place player in the last match.'],
    'recentScoreThird' => ['Third place score', 'Score of the third place player in the last match.'],
    'recentScoreFourth' => ['Fourth place score', 'Score of the fourth place player in the last match.'],

    'data_legend' => 'Detailed Info',
    'rateFirst' => ['1st', 'Percentage of matches ended in 1st place.'],
    'rateSecond' => ['2nd', 'Percentage of matches ended in 2nd place.'],
    'rateThird' => ['3rd', 'Percentage of matches ended in 3rd place.'],
    'rateFourth' => ['4th', 'Percentage of matches ended in 4th place.'],
    'rateNegative' => ['Negative', 'Percentage of matches ended with a negative score.'],
    'totalPlayed' => ['Total Played', 'Total number of matches played.'],
    'avgScore' => ['Avg Score', 'Average score of winning hands.'],
    'avgRank' => ['Avg Rank', 'Average rank at the end of a match.'],
    'maxHonba' => ['Max Repeats', 'Maximum number of wins as East.'],
    'avgTurns' => ['Avg Turns', 'Average number of turns per match.'],
    'rateWin' => ['Win Rate', 'Percentage of games won.'],
    'rateTsumo' => ['Tsumo Rate', 'Percentage of wins achieved with Tsumo.'],
    'rateDealIn' => ['Deal-in Rate', 'Percentage of games lost with Ron.'],
    'rateCall' => ['Call Rate', 'Percentage of games in which you called Chii/Pon/Kan.'],
    'rateRiichi' => ['Riichi Rate', 'Percentage of wins achieved with Riichi.'],

    // Custom stats
    'times' => ['times'],
    'show' => ['show'],
    'streakNoFirst' => ['Winless Streaks', 'Consecutive matches without placing 1st.'],
    'streakNoFourth' => ['Lossless Streaks', 'Consecutive matches without placing 4th.'],
    'streakConsecutive' => ['Consecutive Place Streaks', 'Longest consecutive streaks for each finishing place (1st–4th).'],

    // High scores
    'highScores' => ['High Scores', 'Highest match scores.'],
    'highScoreEver' => ['Lifetime', 'Highest score ever recorded.'],
    'highScoreRecentSmall' => ['Recent (small)', 'Highest score within the small recent window.'],
    'highScoreRecentBig' => ['Recent (big)', 'Highest score within the big recent window.'],

    // High average scores
    'highAvgScores' => ['Highest Average Scores', 'Highest average match scores.'],
    'highAvgScoreEver' => ['Lifetime', 'Highest average score ever recorded.'],
    'highAvgScoreRecentSmall' => ['Recent (small)', 'Highest average score within the small recent window.'],
    'highAvgScoreRecentBig' => ['Recent (big)', 'Highest average score within the big recent window.'],

    // Low scores
    'lowScores' => ['Low Scores', 'Lowest match scores.'],
    'lowScoreEver' => ['Lifetime', 'Lowest score ever recorded.'],
    'lowScoreRecentSmall' => ['Recent (small)', 'Lowest score within the small recent window.'],
    'lowScoreRecentBig' => ['Recent (big)', 'Lowest score within the big recent window.'],

    // Low average scores
    'lowAvgScores' => ['Lowest Average Scores', 'Lowest average match scores.'],
    'lowAvgScoreEver' => ['Lifetime', 'Lowest average score ever recorded.'],
    'lowAvgScoreRecentSmall' => ['Recent (small)', 'Lowest average score within the small recent window.'],
    'lowAvgScoreRecentBig' => ['Recent (big)', 'Lowest average score within the big recent window.'],

    // Error messages
    'error_invalid_score_position' => 'Please select a valid position (1-4) and enter a score.',
    'error_score_mismatch' => 'Your score does not match the score for your rank position.',
    'error_score_sum' => 'The sum of all scores must equal 100,000 points.',
    'error_rate_sum' => 'The sum of all place rates must be between 99.99 and 100.01.',
];
