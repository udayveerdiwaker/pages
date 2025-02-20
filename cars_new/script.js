// if < then 768
// mobile sorting overlay jquery start
$(document).ready(function () {
    function updateFilterCount() {
      let count = 0;
  
      // Count selected dropdowns
      $(".filter-dropdown").each(function () {
        if ($(this).val() && $(this).val() !== "") {
          count++;
        }
      });
  
      // Count selected checkboxes
      $(".filter-checkbox:checked").each(function () {
        count++;
      });
  
      // Count selected radio buttons
      $(".filter-radio:checked").each(function () {
        count++;
      });
  
      // Count range slider changes
      $(".filter-range").each(function () {
        let min = $(this).attr("min");
        let max = $(this).attr("max");
        let value = $(this).val();
        if (value != min && value != max) {
          count++;
        }
      });
  
      // Update the UI
      if (count > 0) {
        $("#filter-count").text(`(${count})`).show();
      } else {
        $("#filter-count").hide();
      }
    }
  
    // Detect changes and update count
    $(".filter-dropdown, .filter-checkbox, .filter-radio, .filter-range").on("change", function () {
      updateFilterCount();
    });
  
    // Reset count when filters are cleared
    $(".clear-filters").click(function () {
      $(".filter-dropdown").val("");
      $(".filter-checkbox, .filter-radio").prop("checked", false);
      $(".filter-range").val($(".filter-range").attr("min")); // Reset range slider
      updateFilterCount();
    });
  
    updateFilterCount(); // Initialize on page load
  });


     
      