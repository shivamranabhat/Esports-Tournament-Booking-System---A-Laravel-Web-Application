let timers = document.querySelectorAll(".countdown-timer");
for (let i = 0; i < timers.length; i++) {
    let x = setInterval(function() {
        let countDownDate = new Date(timers[i].getAttribute('data-closing-time')).getTime();
        let now = new Date().getTime();
        let distance = countDownDate - now;
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);
        timers[i].innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
        if (distance < 0) {
            clearInterval(x);
            timers[i].innerHTML = "CLOSED";
            timers[i].closest('.single-item').style.display = "none";
        }
    }, 1000);
}
