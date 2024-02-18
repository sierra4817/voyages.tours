// Get the select element
var select = document.querySelector('#sort-options');

// Add an event listener to handle changes to the selected option
select.addEventListener('change', function() {
  // Get the selected option value
  var selectedOption = this.value;

  // Perform actions based on the selected option
  switch (selectedOption) {
    case 'price-asc':
      // Sort destinations by price in ascending order
      sortDestinationsByPrice(true);
      break;
    case 'price-desc':
      // Sort destinations by price in descending order
      sortDestinationsByPrice(false);
      break;
    case 'rating-asc':
      // Sort destinations by rating in ascending order
      sortDestinationsByRating(true);
      break;
    case 'rating-desc':
      // Sort destinations by rating in descending order
      sortDestinationsByRating(false);
      break;
  }
});

// Function to sort destinations by price
function sortDestinationsByPrice(ascending) {
  // Your code here
}

// Function to sort destinations by rating
function sortDestinationsByRating(ascending) {
  // Your code here
}