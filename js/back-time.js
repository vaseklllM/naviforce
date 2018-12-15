function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }
   
  function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');
   
    function updateClock() {
      var t = getTimeRemaining(endtime);
   
      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
      secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
   
      if (t.total <= 0) {
        clearInterval(timeinterval);
      }
    }
   
    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
  }
  // var timeDay = 3; //  rest of days
  // var timeHours = 7; // rest of hours
  // var timeMinutes = 2; // rest of minutes
  // var timeSecound = 37; // rest of secound
  // var dateTime = (( timeDay * 24 * 60 * 60 ) + ((timeHours * 60 * 60) + (timeMinutes * 60))) + timeSecound;
  var deadline="January 01 2018 00:00:00 GMT+0300"; //for Ukraine
  var deadline = new Date(Date.parse(new Date()) + <?echo ($time);?> * 1000); // for endless timer
  
  initializeClock('clockdiv', deadline);
  initializeClock('clockdivtwo', deadline);