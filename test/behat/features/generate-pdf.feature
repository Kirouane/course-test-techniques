Feature: Generate a PDF file for https://github.com

  Scenario: List 2 files in a directory
    Given I am on "/index.html"
    When I fill in "name" with "BehatTest"
    And I fill in "url" with "https://github.com/Behat/MinkExtension/blob/master/doc/index.rst"
    And I press "generate"
    And I wait for 5 seconds
    Then I should see "BehatTest.pdf"
