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
namespace XippoGmbH\ContaoAhsFormBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\CoreBundle\Monolog\ContaoContext;
use Contao\Backend;
use Contao\Form;

/**
 * @Hook("processFormData")
 */
class AhsFormDataListener extends Backend
{
    public function __invoke(array $submittedData, array $formData, ?array $files, array $labels, Form $form): void
    {
        \System::log('Das ist die __invoke Methode!', __METHOD__, TL_GENERAL);
    }

    public function ahsForm($arrPost, $arrForm, $arrFiles)
    {
        \System::log('Das ist die ahsForm Methode!', __METHOD__, TL_GENERAL);
    }
}
