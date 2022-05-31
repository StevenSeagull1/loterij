setInterval( function() {

    let currentDate = new Date();
    let day = currentDate.getDate() + 1; 
    let month = currentDate.getMonth() + 1;
    // First, set the time and date you want to countdown to
    let e = new Date();
    thisYear = e.getFullYear(); // Get this year
    let countingDownTo = new Date(`${month} ${day} ${thisYear} 00:00:00`);
    console.log('countingdownto => ',countingDownTo);

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