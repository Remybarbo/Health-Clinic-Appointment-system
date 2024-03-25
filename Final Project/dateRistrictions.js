
var date = new Date();
var tdate = date.getDate();
var month = date.getMonth()+1;
if (tdate<10) {
  tdate='0'+tdate;
}

if (month<10) {
  month='0'+month;
}
var year = date.getUTCFullYear();

var minDate = year + "-" + month + "-" + tdate;
document.getElementById('date').setAttribute('min',minDate)


const dateInput = document.getElementById('date');
const timeInput = document.getElementById('time');
const timeDropdown = document.getElementById('timeDropdown');

const generateTimeOptions = () => {
  const options = [];
  const isWeekend = isWeekendDay(new Date(dateInput.value));

  const startHour = isWeekend ? 8 : 9;
  const endHour = isWeekend ? 20 : 21;

  for (let i = startHour; i <= endHour; i++) {
    for (let j = 0; j < 60; j += 15) {
      const hour = i.toString().padStart(2, '0');
      const minute = j.toString().padStart(2, '0');
      options.push(`${hour}:${minute}`);
    }
  }
  return options;
};

const updateDropdown = () => {
  const timeOptions = generateTimeOptions();
  timeDropdown.innerHTML = '';

  timeOptions.forEach(option => {
    const optionElement = document.createElement('div');
    optionElement.classList.add('timeOption');
    optionElement.textContent = option;

    optionElement.addEventListener('click', () => {
      timeInput.value = option;
      timeDropdown.style.display = 'none';
    });

    timeDropdown.appendChild(optionElement);
  });
};

const updateTimeRestriction = () => {
  updateDropdown();
};

const isWeekendDay = (date) => {
  const dayOfWeek = date.getDay();
  return dayOfWeek === 5 || dayOfWeek === 6;
};

timeInput.addEventListener('focus', () => {
  updateTimeRestriction();
  timeDropdown.style.display = 'block';
});

document.addEventListener('click', (event) => {
  if (!dateTimePicker.contains(event.target)) {
    timeDropdown.style.display = 'none';
  }
});
