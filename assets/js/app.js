const setupJS = function() {
    countdown();
};

if (document.readyState === "complete" || (document.readyState !== "loading" && !document.documentElement.doScroll)) {
    setupJS();
} else {
    document.addEventListener("DOMContentLoaded", setupJS);
}

function countdown() {
    let end = new Date(php_array.giveaway_time);

    let _second = 1000;
    let _minute = _second * 60;
    let _hour = _minute * 60;
    let _day = _hour * 24;
    let timer;

    const formatValue = (value) => {
        if (value < 10) {
            value = '0' + value;
        }
        return value;
    }

    const showRemaining = () => {
        let now = new Date();
        let distance = end - now;
        if (distance > 0) {
            let days = Math.floor(distance / _day);
            let hours = Math.floor((distance % _day) / _hour);
            let minutes = Math.floor((distance % _hour) / _minute);
            let seconds = Math.floor((distance % _minute) / _second);

            document.querySelector('[data-timer="days"]').innerHTML = formatValue(days);
            document.querySelector('[data-timer="hours"]').innerHTML = formatValue(hours);
            document.querySelector('[data-timer="mins"]').innerHTML = formatValue(minutes);
            document.querySelector('[data-timer="secs"]').innerHTML = formatValue(seconds);
        }
    }

    setInterval(showRemaining, 1000);
}