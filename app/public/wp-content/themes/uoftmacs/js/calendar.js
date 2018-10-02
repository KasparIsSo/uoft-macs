let events;
let eventsTrigger = false;

const Http = new XMLHttpRequest();
const url =
  "https://www.googleapis.com/calendar/v3/calendars/medarchmacs@gmail.com/events?key=AIzaSyApOOws4j_1aIGd4AZwnap_gnRAMQWAQP4";
Http.open("GET", url);
Http.send();
Http.onreadystatechange = e => {
  if (!eventsTrigger) {
    const response = JSON.parse(Http.responseText);
    events = response.items;
    eventsTrigger = !eventsTrigger;
    listEvents(events);
  }
};

function listEvents(eventList) {
  const eventContainer = document.querySelector(".calendar__list");
  const now = Date.now();

  for (var i = 0; i < events.length; i++) {
    let eventInstance = new Date(events[i].end.dateTime);
    if (Date.parse(eventInstance) > now) {
      eventContainer.appendChild(createEvent(events[i]));
      if (i < events.length - 1) {
        eventContainer.appendChild(createEventBreak());
      }
    }
  }
}

function createEventBreak() {
  let hairlineBreak = document.createElement("hr");
  hairlineBreak.className = "content__course-break";

  return hairlineBreak;
}

function createEvent(eventObj) {
  let event = document.createElement("div");
  event.className = "event";

  let eventTitle = document.createElement("h4");
  eventTitle.className = "event__title";
  eventTitle.innerHTML = eventObj.summary;

  let eventDate = document.createElement("p");
  eventDate.className = "event__date";
  let eventStart = new Date(eventObj.start.dateTime);
  let eventStartTime = toHours(eventStart.getHours());
  let eventEnd = new Date(eventObj.end.dateTime);
  let eventEndTime = toHours(eventEnd.getHours());
  eventDate.innerHTML =
    toStringMonth(eventStart.getMonth()) +
    ". " +
    eventStart.getDate() +
    ", " +
    toStringDay(eventStart.getDay()) +
    ". " +
    eventStartTime[0] +
    ":" +
    toMinutes(eventStart.getMinutes()) +
    " " +
    eventStartTime[1] +
    " - " +
    // + toStringDay(eventEnd.getDay()) + " "
    eventEndTime[0] +
    ":" +
    toMinutes(eventEnd.getMinutes()) +
    " " +
    eventEndTime[1];

  event.appendChild(eventTitle);
  event.appendChild(eventDate);

  if (eventObj.location) {
    let eventLocation = document.createElement("p");
    eventLocation.className = "event__location";
    eventLocation.innerHTML = eventObj.location;
    event.appendChild(eventLocation);
  }

  if (eventObj.description) {
    let eventDescription = document.createElement("p");
    eventDescription.className = "event__description";
    eventDescription.innerHTML = eventObj.description;
    event.appendChild(eventDescription);
  }

  return event;
}
