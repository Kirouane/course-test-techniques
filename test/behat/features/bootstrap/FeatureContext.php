<?php

use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends \Behat\MinkExtension\Context\MinkContext
{

    /**
     * @Given /^I wait for (\d+) seconds$/
     */
    public function iWaitForSeconds($time)
    {
        $this->getSession()->wait($time * 1000);
    }
}
