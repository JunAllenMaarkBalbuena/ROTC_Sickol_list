function toggleDetails(button) {
  // Find the row that contains the details (the one after the current row)
  var row = button.closest('tr');
  var detailsRow = row.nextElementSibling;  // This is the hidden row with additional details

  // Get the computed style of the details row
  var computedStyle = window.getComputedStyle(detailsRow);
  
  // Toggle the display of the details row based on its current state
  if (computedStyle.display === "table-row" || detailsRow.style.display === "table-row") {
      detailsRow.style.display = "none";
      button.innerText = "Expand";  // Change the button text to 'Expand'
  } else {
      detailsRow.style.display = "table-row";
      button.innerText = "Collapse";  // Change the button text to 'Collapse'
  }
}
