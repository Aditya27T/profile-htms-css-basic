function updateClock() {
  const now = new Date();
  const hour = now.getHours();
  const minute = now.getMinutes();
  const second = now.getSeconds();

  const timeString = `${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}:${second.toString().padStart(2, '0')}`;

  const clockElement = document.getElementById('clock');
  clockElement.textContent = timeString;
}

// Update the clock every second
setInterval(updateClock, 1000);
