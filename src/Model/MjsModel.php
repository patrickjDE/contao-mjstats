<?php

namespace Patrickj\Contao\MjsBundle\Model;

use Contao\Model;

class MjsModel extends Model implements \JsonSerializable
{
    protected static $strTable = 'tl_patrickj_mjs';

    public function jsonSerialize(): array
    {
        $arr = $this->row();
        return array_map(function($value) {
            return $value === '' ? null : $value;
        }, $arr);
    }
}
