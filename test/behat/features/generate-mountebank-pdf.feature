Feature: Generate a PDF file for https://github.com

  Scenario: Generate 1 pdf
    Given I am on "/index.html"
    When I fill in "name" with "MountebankTest"
    And I fill in "url" with "http://localhost:4545"
    And I press "generate"
    And I wait for 5 seconds
    Then I should see "MountebankTest.pdf"

