/* Uses js fetch to console.log bookings object */

var SECRET_URL='';
var ACCESS_TOKEN='';
var CALENDAR_ID='';

var myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");
myHeaders.append("Authorization", "Bearer " + ACCESS_TOKEN);

var raw = JSON.stringify({
  "ID": CALENDAR_ID,
  "range": {
    "from": "2023-01-01",
    "to": "2023-12-31"
  }
});

var requestOptions = {
  method: 'GET',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

fetch("https://api.bookingflix.com/connect/" + SECRET_URL, requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));