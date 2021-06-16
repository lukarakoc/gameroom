
(function ($) {
  "use strict";

  var events = [{start: '2019-04-01', end: '2019-04-07', summary: "Example Event", mask: true}, {start: '2019-05-05', end: '2019-05-15', summary: "Example Event #3", mask: true}];
  var calendar2 = new Date();
  calendar2.setMonth(calendar2.getMonth() - 1);
  
  $('#calendar').calendar({color: 'purple', date: calendar2, events: events});
  

}(jQuery));
