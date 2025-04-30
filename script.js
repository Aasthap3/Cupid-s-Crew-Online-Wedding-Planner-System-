window.addEventListener('DOMContentLoaded'), function() {
    var calendar = document.getElementById('calendar');

  
    // Get current month and year
    var today = new Date();
    var currentMonth = today.getMonth();
    var currentYear = today.getFullYear();
 
    // Generate calendar
    generateCalendar(currentMonth, currentYear);
  
    function generateCalendar(month, year) {
      var firstDay = new Date(year, month, 1).getDay();
      var daysInMonth = new Date(year, month + 1, 0).getDate();
  
      var table = document.createElement('table');
      var header = table.createTHead();
      var body = table.createTBody();
  
      // Create table header
      var headerRow = header.insertRow();
      var daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
  
      for (var i = 0; i < daysOfWeek.length; i++) {
        var cell = headerRow.insertCell();
        cell.textContent = daysOfWeek[i];
      }
  
      // Create table cells
      var date = 1;
  
      for (var i = 0; i < 6; i++) {
        var row = body.insertRow();
  
        for (var j = 0; j < 7; j++) {
          if (i === 0 && j < firstDay) {
            var cell = row.insertCell();
            cell.textContent = '';
          } else if (date > daysInMonth) {
            break;
          } else {
            var cell = row.insertCell();
            cell.textContent = date;
            cell.addEventListener('click', showEvent);
            date++;
          }
        }
      }
  
      calendar.innerHTML = '';
      calendar.appendChild(table);
    }
  
    function showEvent(event) {
      var date = event.target.textContent;
      var month = currentMonth + 1; // JavaScript months are zero-based
      var year = currentYear;
  
      // Pass the selected date to a PHP script to fetch and display events
      window.location.href = 'events.php?date=' + date + '&month=' + month + '&year=' + year;
    }
}