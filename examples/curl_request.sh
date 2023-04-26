SECRET_URL=''
ACCESS_TOKEN=''
CALENDAR_ID=''

curl -L -X GET 'https://api.bookingflix.com/connect/$SECRET_URL' -H 'Content-Type: application/json' -H 'Authorization: Bearer $ACCESS_TOKEN' -d '{
    "ID": $CALENDAR_ID,
    "range": {
        "from": "2023-01-01",
        "to": "2023-12-31"
    }
}'