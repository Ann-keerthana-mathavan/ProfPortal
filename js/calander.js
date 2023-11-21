$(document).ready(function () {
  var currentYear = new Date().getFullYear();
  var currentMonth = new Date().getMonth();

  renderCalendars();

  $("#prevMonth").on("click", function () {
    currentMonth--;
    if (currentMonth < 0) {
      currentMonth = 11;
      currentYear--;
    }
    renderCalendars();
  });

  $("#nextMonth").on("click", function () {
    currentMonth++;
    if (currentMonth > 11) {
      currentMonth = 0;
      currentYear++;
    }
    renderCalendars();
  });

  function renderCalendars() {
    $("#calendar-container").empty();

    var currentDate = new Date(currentYear, currentMonth, 1);
    var daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

    var calendarHTML =
      '<div class="card card-calendar mb-4">' +
      '<h5 class="card-title text-center mt-3">' +
      new Intl.DateTimeFormat("en-US", {
        month: "long",
        year: "numeric",
      }).format(currentDate) +
      "</h5>" +
      '<div class="card-body">' +
      '<table class="table table-bordered table-responsive">' +
      "<thead>" +
      "<tr>" +
      '<th scope="col">Sun</th>' +
      '<th scope="col">Mon</th>' +
      '<th scope="col">Tue</th>' +
      '<th scope="col">Wed</th>' +
      '<th scope="col">Thu</th>' +
      '<th scope="col">Fri</th>' +
      '<th scope="col">Sat</th>' +
      "</tr>" +
      "</thead>" +
      '<tbody id="calendar-body">' +
      "</tbody>" +
      "</table>" +
      "</div>" +
      "</div>";

    $("#calendar-container").append(calendarHTML);

    // Update the calendar body
    var calendarBody = $("#calendar-body");
    calendarBody.empty();

    var firstDay = new Date(currentYear, currentMonth, 1).getDay();

    for (var day = 1; day <= daysInMonth; day++) {
      if ((day + firstDay - 1) % 7 === 0) {
        calendarBody.append("<tr>");
      }

      calendarBody.append(`<td>` + day + "</td>");

      if ((day + firstDay) % 7 === 0) {
        calendarBody.append("</tr>");
      }
    }

    // Fill in the remaining cells
    if (firstDay !== 0) {
      for (var i = 0; i < 7 - ((daysInMonth + firstDay - 1) % 7); i++) {
        calendarBody.append("<td></td>");
      }
      calendarBody.append("</tr>");
    }
  }
});
