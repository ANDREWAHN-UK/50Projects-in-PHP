const button = document.getElementById("noteButton");
const toasts = document.getElementById("notifications");

const messages = [
  "Hello world",
  "Well hello there",
  "Bootstrap has its own button and toast classes, so using those here causes all sorts of issues",
  "Stay hydrated",
  "Have you walked the dog?",
  "Work hard AND smart",
  "Check your diary",

];

const types = ['info', 'success', 'error']

button.addEventListener('click', () => createNotification())

function createNotification(message = null, type = null) {
    const notif = document.createElement('div')
    notif.classList.add('notification')
    notif.classList.add(type ? type : getRandomType())

    notif.innerText = message ? message : getRandomMessage()

    toasts.appendChild(notif)

    setTimeout(() => {
        notif.remove()
    }, 3000)
}

function getRandomMessage() {
    return messages[Math.floor(Math.random() * messages.length)]
}

function getRandomType() {
    return types[Math.floor(Math.random() * types.length)]
}
