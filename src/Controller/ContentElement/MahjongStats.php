<?php

namespace Patrickj\Contao\MjsBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\Controller;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Patrickj\Contao\MjsBundle\Model\MjsModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement()]
class MahjongStats extends AbstractContentElementController
{
    protected function getResponse(FragmentTemplate $template, ContentModel $model, Request $request): Response
    {
        Controller::loadLanguageFile('tl_patrickj_mjs');

        $arrStats = MjsModel::findAll(['return' => 'Array', 'order' => 'date, totalPlayed']);
        $template->statData = $arrStats;

        return $template->getResponse();
    }
}
