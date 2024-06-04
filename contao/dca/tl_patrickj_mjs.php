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
            'fields'      => ['platform', 'gameType', 'totalPlayed', 'rateWin', 'rateDealIn', 'rateFourth'],
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
        'mahjong_soul' => '{meta_legend},platform,date,gameType,rank,exp;{playStyle_legend},styleAtk,styleDef,styleSpd,styleLuk;{trend_legend},recentResult;{data_legend},rateFirst,rateSecond,rateThird,rateFourth,rateNegative,totalPlayed,avgScore,avgRank,maxHonba,avgTurns,rateWin,rateTsumo,rateDealIn,rateCall,rateRiichi',
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
            'sql'       => "varchar(12) NOT NULL default ''",
        ],
        'exp'          => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp' >= 'natural',
                'minval'   => 0,
            ],
            'sql'       => "varchar(5) NOT NULL default ''",
        ],
        'styleAtk'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp' >= 'natural',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(3) NOT NULL default ''",
        ],
        'styleDef'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp' >= 'natural',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(3) NOT NULL default ''",
        ],
        'styleSpd'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp' >= 'natural',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(3) NOT NULL default ''",
        ],
        'styleLuk'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp' >= 'natural',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(3) NOT NULL default ''",
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
            'sql'       => "varchar(2) NOT NULL default ''",
        ],
        'rateFirst'    => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
        'rateSecond'   => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
        'rateThird'    => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
        'rateFourth'   => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
        'rateNegative' => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
        'totalPlayed'  => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'natural',
                'minval'   => 0,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
        'avgScore'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'natural',
                'minval'   => 0,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
        'avgRank'      => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
            ],
            'sql'       => "varchar(4) NOT NULL default ''",
        ],
        'maxHonba'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'natural',
                'minval'   => 0,
            ],
            'sql'       => "varchar(2) NOT NULL default ''",
        ],
        'avgTurns'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
            ],
            'sql'       => "varchar(5) NOT NULL default ''",
        ],
        'rateWin'      => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
        'rateTsumo'    => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
        'rateDealIn'   => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
        'rateCall'     => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
        'rateRiichi'   => [
            'inputType' => 'text',
            'eval'      => [
                'tl_class' => 'w25',
                'rgxp'     => 'digit',
                'minval'   => 0,
                'maxval'   => 100,
            ],
            'sql'       => "varchar(6) NOT NULL default ''",
        ],
    ],
];
