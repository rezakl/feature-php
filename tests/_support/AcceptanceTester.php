<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @Given I have navigation menu
     */
     public function iHaveNavigationMenu()
     {
        throw new \Codeception\Exception\Incomplete("Step `I have navigation menu` is not defined");
     }

    /**
     * @When I try to go to homepage
     */
     public function iTryToGoToHomepage()
     {
        throw new \Codeception\Exception\Incomplete("Step `I try to go to homepage` is not defined");
     }

    /**
     * @When homepage menu is available
     */
     public function homepageMenuIsAvailable()
     {
        throw new \Codeception\Exception\Incomplete("Step `homepage menu is available` is not defined");
     }

    /**
     * @Then I click homepage menu
     */
     public function iClickHomepageMenu()
     {
        throw new \Codeception\Exception\Incomplete("Step `I click homepage menu` is not defined");
     }

    /**
     * @Then I see the page is changed to homepage
     */
     public function iSeeThePageIsChangedToHomepage()
     {
        throw new \Codeception\Exception\Incomplete("Step `I see the page is changed to homepage` is not defined");
     }

    /**
     * @When I try to go to contact us page
     */
     public function iTryToGoToContactUsPage()
     {
        throw new \Codeception\Exception\Incomplete("Step `I try to go to contact us page` is not defined");
     }

    /**
     * @When contact us menu is available
     */
     public function contactUsMenuIsAvailable()
     {
        throw new \Codeception\Exception\Incomplete("Step `contact us menu is available` is not defined");
     }

    /**
     * @Then I click contact us page menu
     */
     public function iClickContactUsPageMenu()
     {
        throw new \Codeception\Exception\Incomplete("Step `I click contact us page menu` is not defined");
     }

    /**
     * @Then I see the page is changed to contact us page
     */
     public function iSeeThePageIsChangedToContactUsPage()
     {
        throw new \Codeception\Exception\Incomplete("Step `I see the page is changed to contact us page` is not defined");
     }
}
