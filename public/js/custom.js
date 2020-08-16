
const init = () => {
  $('form.form-confirm').submit(function () {
    return confirm('Are you sure you want to perform this operation?');
  })
  initDate();
}

const initDate = () => {
  const options = {
    type: 'date',
    dateFormat: 'YYYY-MM-DD'
  }
  // Initialize all input of type date
  var calendars = bulmaCalendar.attach('[type="date"]', options);

  // Loop on each calendar initialized
  /*
  for(var i = 0; i < calendars.length; i++) {
      // Add listener to date:selected event
      calendars[i].on('select', date => {
          console.log(date);
      });
  }
  // To access to bulmaCalendar instance of an element    
  var element = document.querySelector('#my-date');
  if (element) {
      // bulmaCalendar instance is available as element.bulmaCalendar
      element.bulmaCalendar.on('select', function(datepicker) {
          console.log(datepicker.data.value());
      });
  }*/
};

const showMessage = (message, type = "success") => {
  let dismissible = false;
  let pauseOnHover = true;
  let duration = 2000;
  switch (type) {
    case "warning":
      type = "is-warning";
      dismissible = true;
      duration = 3000;
      break;
    case "error":
      type = "is-danger";
      dismissible = true;
      duration = 4000;
      break;
    case "success":
      type = "is-success";
      break;
    default:
      type = "is-info";
      break;
  }
  toast({
    message: "<p class='subtitle'>" + message + "</p>",
    type: type,
    duration: duration,
    position: "bottom-right",
    dismissible: dismissible,
    pauseOnHover: pauseOnHover,
    opacity: 0.9,
    animate: { in: 'fadeIn', out: 'fadeOut' }
  });
}