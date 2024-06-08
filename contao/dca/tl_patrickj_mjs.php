<?php

use Contao\DataContainer;
use Contao\DC_Table;

$GLOBALS['TL_DCA']['tl_patrickj_mjs'] = [
    'config' => [
        'dataContainer'    => DC_Table::class,
        'enableVersioning' => true,
        'sql'              => [
            'keys' => [
                'id' => 'primary',
            ],
        ],
    ],
    'list'   => [
        'sorting'           => [
            'mode'        => DataContainer::MODE_SORTED,
            'flag'        => DataContainer::SORT_DAY_DESC,
            'panelLayout' => 'filter;search,limit',
            'fields'      => ['platform', 'gameType', 'totalPlayed', 'date'],
        ],
        'label'             => [
            'fields'      => ['platform', 'gameType', 'date', 'totalPlayed', 'recentResult', 'recentScore', 'rateWin', 'rateDealIn', 'rateFourth', 'rateCall'],
            'showColumns' => true,
        ],
        'global_operations' => [
            'all',
        ],
        'operations'        => [
            'edit',
            'copy',
            'delete',
            'show',
        ],
    ],

    'palettes' => [
        '__selector__' => ['platform'],
        'default'      => '{meta_legend},platform',
        'mahjong_soul' => '{meta_legend},platform,date,gameType,rank,exp;{playStyle_legend},styleAtk,styleDef,styleSpd,styleLuk;{trend_legend},room,recentResult,recentScore,recentScoreFirst,recentScoreSecond,recentScoreThird,recentScoreFourth;{data_legend},rateFirst,rateSecond,rateThird,rateFourth,rateNegative,totalPlayed,avgScore,avgRank,maxHonba,avgTurns,rateWin,rateTsumo,rateDealIn,rateCall,rateRiichi',
    ],

    'fields' => [
        'id'           => [
            'sql' => "int(10) unsigned NOT NULL auto_increment",
        ],
        'tstamp'       => [
            'sql' => "int(10) unsigned NOT NULL default 0",
        ],
        'platform'     => [
            'filter'    => true,
            'inputType' => 'select',
            'options'   => [
                'mahjong_soul' => 'Mahjong Soul',
            ],
            'eval'      => [
                'includeBlankOption' => true,
                'mandatory'          => true,
                'submitOnChange'     => true,
                'tl_class'           => 'w50',
            ],
            'sql'       => "varchar(32) NOT NULL default ''",
        ],
        'date'         => [
            'default'   => time(),
            'flag'      => DataContainer::SORT_DAY_DESC,
            'inputType' => 'text',
            'eval'      => [
                'datepicker' => true,
                'doNotCopy'  => true,
                'mandatory'  => true,
                'rgxp'       => 'datim',
                'tl_class'   => 'w50',
            ],
            'sql'       => "int(10) unsigned NOT NULL default 0",
        ],
        'gameType'     => [
            'filter'    => true,
            'inputType' => 'select',
            'options'   => [
                'east'  => 'East',
                'south' => 'South',
                'east3'  => '3 Player East',
                'south3' => '3 Player South',
            ],
            'eval'      => [
                'mandatory' => true,
                'tl_class'  => 'w50',
            ],
            'sql'       => "varchar(8) NOT NULL default ''",
        ],
        'rank'         => [
            'inputType' => 'select',
            'options'   => [
                'novice1' => 'Novice ★',
                'novice2' => 'Novice ★★',
                'novice3' => 'Novice ★★★',
                'adept1'  => 'Adept ★',
                'adept2'  => 'Adept ★★',
                'adept3'  => 'Adept ★★★',
                'expert1' => 'Expert ★',
                'expert2' => 'Expert ★★',
                'expert3' => 'Expert ★★★',
            ],
            'eval'      => [
                'includeBlankOption' => true,
                'tl_class' => 'w25',
            ],
            'sql'       => "varchar(12)",
        ],
        'room'         => [
            'inputType' => 'select',
            'options'   => [
                'bronze' => 'Bronze',
                'silver' => 'Silver',
                'gold' => 'Gold',
                'jade' => 'Jade',
                'throne' => 'Throne',
            ],
            'eval'      => [
                'includeBlankOption' => true,
                'tl_class' => 'w25',
            ],
            'sql'       => "varchar(8)",
        ],
        'exp'          => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp' >= 'natural',
                'minval'   => 0,
            ],
            'sql'       => "varchar(5)",
        ],
        'styleAtk'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp' >= 'natural',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(3)",
        ],
        'styleDef'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp' >= 'natural',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(3)",
        ],
        'styleSpd'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp' >= 'natural',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(3)",
        ],
        'styleLuk'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp' >= 'natural',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(3)",
        ],
        'recentResult' => [
            'inputType' => 'select',
            'options'   => [
                '1*' => '😼🕶️',
                '1'  => '1.',
                '2'  => '2.',
                '3'  => '3.',
                '4'  => '4.',
            ],
            'eval'      => [
                'includeBlankOption' => true,
                'tl_class' => 'w25',
            ],
            'sql'       => "varchar(2)",
        ],
        'recentScore' => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
            ],
            'sql'       => "varchar(6)",
        ],
        'recentScoreFirst' => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'clr w25',
                'rgxp'     => 'digit',
            ],
            'sql'       => "varchar(6)",
        ],
        'recentScoreSecond' => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
            ],
            'sql'       => "varchar(6)",
        ],
        'recentScoreThird' => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
            ],
            'sql'       => "varchar(6)",
        ],
        'recentScoreFourth' => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
            ],
            'sql'       => "varchar(6)",
        ],
        'rateFirst'    => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6)",
        ],
        'rateSecond'   => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6)",
        ],
        'rateThird'    => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6)",
        ],
        'rateFourth'   => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6)",
        ],
        'rateNegative' => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6)",
        ],
        'totalPlayed'  => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'natural',
                'minval'   => 0,
            ],
            'sql'       => "varchar(6)",
        ],
        'avgScore'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'natural',
                'minval'   => 0,
            ],
            'sql'       => "varchar(6)",
        ],
        'avgRank'      => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
            ],
            'sql'       => "varchar(4)",
        ],
        'maxHonba'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'natural',
                'minval'   => 0,
            ],
            'sql'       => "varchar(2)",
        ],
        'avgTurns'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
            ],
            'sql'       => "varchar(5)",
        ],
        'rateWin'      => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6)",
        ],
        'rateTsumo'    => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6)",
        ],
        'rateDealIn'   => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6)",
        ],
        'rateCall'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6)",
        ],
        'rateRiichi'   => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6)",
        ],
    ],
];
