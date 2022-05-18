setInterval( function() {
 
    // First, set the time and date you want to countdown to
    let countingDownTo = new Date("may 25, 2022 00:00:00");

    // Get today's time and date
    let now = new Date();

    // Find the difference (result is the time remaining in milliseconds)
    let timeRemaining = countingDownTo - now;

    // Now convert the milliseconds into:
    // Days remaining:
    let days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    // Hours remaining:
    let hours = Math.floor(timeRemaining / (1000 * 60 * 60));
    // Minutes remaining:
    let minutes = Math.floor(timeRemaining / (1000 * 60));
    // Seconds remaining:
    let seconds = Math.floor(timeRemaining / (1000));

    // Now subtract greater unit from lesser units
    let daysToDisplay = days;
    // 1. subtract 24 hours for every day remaining from hours
    let hoursToDisplay = hours - (days * 24);
    // 2. Subtract 60 minutes for every hour remaining from minutes
    let minutesToDisplay = minutes - (hours * 60);
    // 3. Subtract 60 second for every minutes remaining from seconds
    let secondsToDisplay = seconds - (minutes * 60);

    // Time now ready to display!
    const countdown = document.getElementById('countdown');
    countdown.innerHTML = `
    <table>
        <tr>
            <td>
                <span id="days" class="number">${formatNumber(daysToDisplay)}</span><span class="colon">:</span>
            </td>
            <td>
                <span id="hours" class="number">${formatNumber(hoursToDisplay)}</span><span class="colon">:</span>
            </td>
            <td>
                <span id="minutes" class="number">${formatNumber(minutesToDisplay)}</span><span class="colon">:</span>
            </td>
            <td>
                <span id="seconds" class="number">${formatNumber(secondsToDisplay)}</span>
            </td>
        </tr>
        <tr>
            <td>
                <span class="text colonright">Dagen</span>
            </td>
            <td>
                <span class="text colonright">Uren</span>
            </td>
            <td>
                <span class="text colonright">Minuten</span>
            </td>
            <td>
                <span class="text">Seconden</span>
            </td>
        </tr>
    </table>
    `
    }, 1000);


function formatNumber(inputNumber) {
let outputNumber = inputNumber.toLocaleString('en-US', {
    minimumIntegerDigits: 2,
    useGrouping: false
    })
return outputNumber;
}

// (function ($) {
//     $.fn.countdown = function (options, callback) {
//         var settings = $.extend({
//             date: null,
//             offset: null,
//             day: 'Day',
//             days: 'Days',
//             hour: 'Hour',
//             hours: 'Hours',
//             minute: 'Minute',
//             minutes: 'Minutes',
//             second: 'Second',
//             seconds: 'Seconds'
//         }, options);

//         // Throw error if date is not set
//         if (!settings.date) {
//             $.error('Date is not defined.');
//         }

//         // Throw error if date is set incorectly
//         if (!Date.parse(settings.date)) {
//             $.error('Incorrect date format, it should look like this, 12/24/2012 12:00:00.');
//         }

//         // Save container
//         var container = this;

//         /**
//          * Change client's local date to match offset timezone
//          * @return {Object} Fixed Date object.
//          */
//         var currentDate = function () {
//             // get client's current date
//             var date = new Date();

//             // turn date to utc
//             var utc = date.getTime() + (date.getTimezoneOffset() * 60000);

//             // set new Date object
//             var new_date = new Date(utc + (3600000*settings.offset));

//             return new_date;
//         };

//         /**
//          * Main countdown function that calculates everything
//          */
//         function countdown () {
//             var target_date = new Date(settings.date), // set target date
//                 current_date = currentDate(); // get fixed current date

//             // difference of dates
//             var difference = target_date - current_date;

//             // if difference is negative than it's pass the target date
//             if (difference < 0) {
//                 // stop timer
//                 clearInterval(interval);

//                 if (callback && typeof callback === 'function') callback();

//                 return;
//             }

//             // basic math variables
//             var _second = 1000,
//                 _minute = _second * 60,
//                 _hour = _minute * 60,
//                 _day = _hour * 24;

//             // calculate dates
//             var days = Math.floor(difference / _day),
//                 hours = Math.floor((difference % _day) / _hour),
//                 minutes = Math.floor((difference % _hour) / _minute),
//                 seconds = Math.floor((difference % _minute) / _second);

//             // based on the date change the refrence wording
//             var text_days = (days === 1) ? settings.day : settings.days,
//                 text_hours = (hours === 1) ? settings.hour : settings.hours,
//                 text_minutes = (minutes === 1) ? settings.minute : settings.minutes,
//                 text_seconds = (seconds === 1) ? settings.second : settings.seconds;

//                 // fix dates so that it will show two digets
//                 days = (String(days).length >= 2) ? days : '0' + days;
//                 hours = (String(hours).length >= 2) ? hours : '0' + hours;
//                 minutes = (String(minutes).length >= 2) ? minutes : '0' + minutes;
//                 seconds = (String(seconds).length >= 2) ? seconds : '0' + seconds;

//             // set to DOM
//             container.find('.days').text(days);
//             container.find('.hours').text(hours);
//             container.find('.minutes').text(minutes);
//             container.find('.seconds').text(seconds);

//             container.find('.days_text').text(text_days);
//             container.find('.hours_text').text(text_hours);
//             container.find('.minutes_text').text(text_minutes);
//             container.find('.seconds_text').text(text_seconds);
//         }

//         // start
//         var interval = setInterval(countdown, 1000);
//     };

// })(jQuery);

// $(".openNav").click(function() {
//   $("body").toggleClass("navOpen");
//   $("nav").toggleClass("open");
//   $(".wrapper").toggleClass("open");
//   $(this).toggleClass("open");
// });





// Second File from here


// var today = new Date();
// var tomorrow = new Date(today);
// tomorrow.setDate(today.getDate() + 1);
// var day = tomorrow.getDate();
// var month = tomorrow.getMonth() + 1;
// var year = tomorrow.getFullYear();

// var nextday = month + '/' + day + '/' + year + ' 00:00:00';

// $('#example').countdown({
//     date: nextday,
//     day: 'Day',
//     days: 'Days'
// }, function () {
//     day++;
// });