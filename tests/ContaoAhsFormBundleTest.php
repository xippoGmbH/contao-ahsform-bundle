<?php

/*
 * This file is part of Contao AhsForm Bundle.
 *
 * (c) Aurelio Gisler (Xippo GmbH)
 *
 * @license LGPL-3.0-or-later
 */

namespace XippoGmbH\ContaoAhsFormBundle\Tests;

use XippoGmbH\ContaoAhsFormBundle\ContaoAhsFormBundle;
use PHPUnit\Framework\TestCase;

class ContaoSkeletonBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoAhsFormBundle();

        $this->assertInstanceOf('XippoGmbH\ContaoAhsFormBundle\ContaoAhsFormBundle', $bundle);
    }
}
