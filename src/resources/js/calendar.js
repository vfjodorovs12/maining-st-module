document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    const events = JSON.parse(calendarEl.getAttribute('data-events'));

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay',
        },
        events: events,
        eventClick: function (info) {
            alert('Event: ' + info.event.title + '\nStart: ' + info.event.start);
        },
    });

    calendar.render();
});
