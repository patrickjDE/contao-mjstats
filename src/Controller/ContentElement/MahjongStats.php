<?php

namespace Patrickj\Contao\MjsBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\Controller;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Contao\Database;
use Patrickj\Contao\MjsBundle\Model\MjsModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement()]
class MahjongStats extends AbstractContentElementController
{
    protected function getResponse(FragmentTemplate $template, ContentModel $model, Request $request): Response
    {
        Controller::loadLanguageFile('tl_patrickj_mjs');

//        for ($i = 1; $i <= 195; $i++) {
//            Database::getInstance()->prepare("UPDATE tl_patrickj_mjs SET avgRank = (SELECT ROUND(SUM(recentResult)/?, 2) FROM tl_patrickj_mjs WHERE totalPlayed <= ?) WHERE ISNULL(avgRank) AND totalPlayed = ?")->execute($i, $i, $i)->affectedRows;
//            Database::getInstance()->prepare("UPDATE tl_patrickj_mjs SET rateNegative = (SELECT ROUND(COUNT(id)/?*100, 2) num FROM tl_patrickj_mjs WHERE totalPlayed <= ? AND recentScore < 0) WHERE ISNULL(rateNegative) AND totalPlayed = ?")->execute($i, $i, $i)->affectedRows;
//            Database::getInstance()->prepare("UPDATE tl_patrickj_mjs SET rateFourth = (SELECT ROUND(COUNT(id)/?*100, 2) num FROM tl_patrickj_mjs WHERE totalPlayed <= ? AND recentResult = 4) WHERE ISNULL(rateFourth) AND totalPlayed = ?")->execute($i, $i, $i)->affectedRows;
//            Database::getInstance()->prepare("UPDATE tl_patrickj_mjs SET rateThird = (SELECT ROUND(COUNT(id)/?*100, 2) num FROM tl_patrickj_mjs WHERE totalPlayed <= ? AND recentResult = 3) WHERE ISNULL(rateThird) AND totalPlayed = ?")->execute($i, $i, $i)->affectedRows;
//            Database::getInstance()->prepare("UPDATE tl_patrickj_mjs SET rateSecond = (SELECT ROUND(COUNT(id)/?*100, 2) num FROM tl_patrickj_mjs WHERE totalPlayed <= ? AND recentResult = 2) WHERE ISNULL(rateSecond) AND totalPlayed = ?")->execute($i, $i, $i)->affectedRows;
//            Database::getInstance()->prepare("UPDATE tl_patrickj_mjs SET rateFirst = (SELECT ROUND(COUNT(id)/?*100, 2) num FROM tl_patrickj_mjs WHERE totalPlayed <= ? AND recentResult = 1) WHERE ISNULL(rateFirst) AND totalPlayed = ?")->execute($i, $i, $i)->affectedRows;
//        }

        $arrStats = MjsModel::findAll(['return' => 'Array', 'order' => 'date, totalPlayed']);
        $template->statData = $arrStats;

        return $template->getResponse();
    }
}
