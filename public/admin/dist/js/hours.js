const secondsHand = document.querySelector('.clock__hand--second');
const minsHand = document.querySelector('.clock__hand--min');
const hoursHand = document.querySelector('.clock__hand--hour');

function setDate() {
    const now = new Date();

    const seconds = now.getSeconds();
    const secondsDegrees = (seconds / 60) * 360;
    secondsHand.style.transform = `rotate(${secondsDegrees}deg)`;

    const mins = now.getMinutes();
    const minsDegrees = ((mins / 60) * 360) + (seconds / 60) * 6;
    minsHand.style.transform = `rotate(${minsDegrees}deg)`;

    const hours = now.getHours();
    const hoursDegrees = ((hours / 12) * 360) + (mins / 60) * 30;
    console.log(hoursDegrees);
    hoursHand.style.transform = `rotate(${hoursDegrees}deg)`;
}

setInterval(setDate, 1000);

setDate();
