<?php

use Patrickj\Contao\MjsBundle\Model\MjsModel;

$GLOBALS['BE_MOD']['content']['patrickj_mjs'] = [
    'tables' => [
        'tl_patrickj_mjs',
    ],
];
$GLOBALS['TL_MODELS']['tl_patrickj_mjs'] = MjsModel::class;
