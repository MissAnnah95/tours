// document.addEventListener('DOMContentLoaded', function() {
//     var calendarEl = document.getElementById('calendar');
//     var calendar = new FullCalendar.Calendar(calendarEl, {
//       initialView: 'dayGridMonth'
//     });
//     calendar.render();
//   });

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      initialDate: '2020-11-07',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      events: [
        {
            title: 'Kenya Wildlife Safari',
            start: '2020-11-01',
            end: '2020-11-10'
          },
        {
          title: 'Kenya Wildlife Safari',
          start: '2020-11-20',
          end: '2020-11-30'
        },
        {
          title: 'Kenya Wildlife Safari',
          start: '2020-12-01',
          end: '2020-12-10'
        },
        {
          title: 'Kenya Wildlife Safari',
          start: '2020-12-13',
          end: '2020-12-18'
        },
        
      ]
    });

    calendar.render();
  });
  
  $('#myModal').on('shown.bs.modal', function () {
    $("#calendar").fullCalendar('render');
 });