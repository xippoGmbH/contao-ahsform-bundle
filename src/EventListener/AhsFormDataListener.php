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
use Contao\Form;

/**
 * @Hook("processFormData")
 */
class AhsFormDataListener
{
    public function __invoke(array $submittedData, array $formData, ?array $files, array $labels, Form $form): void
    {
        \System::getContainer()
			->get('monolog.logger.contao')
			->log(LogLevel::INFO, 'Ein Log-Eintrag', array(
			'contao' => new ContaoContext(__CLASS__.'::'.__FUNCTION__, TL_GENERAL
			)));
    }
}
