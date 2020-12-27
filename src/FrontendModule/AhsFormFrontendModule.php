<?php
/*
 * This file is part of xippogmbh/contao-ahsform-bundle.
 *
 * (c) Aurelio Gisler (Xippo GmbH)
 *
 * @author     Aurelio Gisler
 * @package    XippoGmbHContaoAhsFormBundle
 * @license    MIT
 * @see        https://github.com/xippoGmbH/contao-ahsform-bundle
 *
 */
declare(strict_types=1);

namespace XippoGmbH\ContaoAhsFormBundle\FrontendModule;

use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\BackendTemplate;
use Contao\Input;
use Contao\Message;
use Contao\Module;
use Contao\ModuleModel;
use Contao\System;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AhsFormFrontendModule extends Module
{
	public function __construct(ModuleModel $objModule, string $strColumn = 'main')
    {
        parent::__construct($objModule, $strColumn);
        $this->container = System::getContainer();
    }


}
