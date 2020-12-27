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
// Backend modules
//$GLOBALS['BE_MOD']['content']['xippo_maps'] = ['tables' => ['tl_xippo_maps','tl_xippo_maps_marker','tl_content'],];

// Models
//$GLOBALS['TL_MODELS']['tl_xippo_maps'] = \XippoGmbH\MapsBundle\Model\MapsModel::class;

// Front end modules
$GLOBALS['FE_MOD']['miscellaneous']['ahsform'] = 'xippogmbh\ContaoAhsFormBundle\FrontendModule\AhsFormFrontendModule';

$GLOBALS['TL_HOOKS']['processFormData'] = array('xippogmbh\ContaoAhsFormBundle\EventListener\AhsFormDataListener', 'ahsForm');
