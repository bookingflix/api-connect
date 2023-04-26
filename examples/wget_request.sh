### Uses wget to put bookings to file request_output.json ###

SECRET_URL=''
ACCESS_TOKEN=''
CALENDAR_ID=''

wget --no-check-certificate --quiet -O ./request_output.json \
  --method GET \
  --timeout=0 \
  --header 'Content-Type: application/json' \
  --header 'Authorization: Bearer $ACCESS_TOKEN' \
  --body-data '{
    "ID": $CALENDAR_ID,
    "range": {
        "from": "2023-01-01",
        "to": "2023-12-31"
    }
}' \
   'https://api.bookingflix.com/connect/$SECRET_URL' 