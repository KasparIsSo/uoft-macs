function toStringMonth(month, version) {
  const monthsOfTheYear = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ];

  const monthsOfTheYearShort = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec"
  ];

  if (version == "long") {
    return monthsOfTheYear[month];
  } else {
    return monthsOfTheYearShort[month];
  }
}

function toStringDay(day, version) {
  const daysOfTheWeek = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  ];

  const daysOfTheWeekShort = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

  if (version == "long") {
    return daysOfTheWeek[day];
  } else {
    return daysOfTheWeekShort[day];
  }
}

function toHours(hours) {
  let time = [];
  time[0] = hours % 12;

  if (hours >= 12 && hours < 24) {
    time[1] = "pm";
  } else {
    time[1] = "am";
  }
  return time;
}

function toMinutes(minutes) {
  let doubleDigits = ("0" + minutes).slice(-2);
  return doubleDigits;
}
