Feature: Browse website
  In order to browse pages
  As a visitor
  I want to switch between pages via navigation menu

  Scenario: Go to homepage
    Given I have navigation menu
    When I try to go to homepage
    And homepage menu is available
    Then I click homepage menu
    And I see the page is changed to homepage

  Scenario: Go to contact us page
    Given I have navigation menu
    When I try to go to contact us page
    And contact us menu is available
    Then I click contact us page menu
    And I see the page is changed to contact us page
