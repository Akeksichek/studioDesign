document.addEventListener("DOMContentLoaded", function(event) {
var selectElement = document.getElementById('category');
var selectedValue = selectElement.value;
console.log(selectedValue);

var selectElement = document.getElementById('category');
var selectedCategoryElement = document.getElementById('selected-category');

selectElement.addEventListener('change', function() {
  selectedCategoryElement.textContent = selectElement.value;
});


  var urlParams = new URLSearchParams(window.location.search);
  var category = urlParams.get('category');

  var selectElement = document.getElementById('category');
  selectElement.value = category;

  console.log('category:', category);
console.log('selectElement:', selectElement);
console.log('options:', options);
});