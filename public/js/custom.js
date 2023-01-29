

// Get And Append Current Year
let currentYearElement = document.querySelector('.currentYear');
let currentDate = new Date();
let currentYear = currentDate.getFullYear();
console.log('currentYear -> ',currentYear);
currentYearElement.innerHTML = currentYear;