@wishlist
Feature: Adding a simple product to the wish list
  In order to select products for later purchase
  As a Customer
  I want to be able to add simple products to wish list

  Background:
    Given the store operates on a single channel in "United States"
    And I am a logged in customer
    And the store has a product "Sauerkraut" priced at "$99.99"

  @ui
  Scenario: Adding a product to the wish list as a logged in customer
    When I add this product to the wish list
    Then I should be notified that the product has been successfully added to the wishlist
    When I go to the customer wish list page
    And on the wishlist page I should see the product "Sauerkraut"
