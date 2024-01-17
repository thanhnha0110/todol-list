# timezone
Get timezone by PHP

<br />

## Installation
```
composer create-project nhanguyen/timezones
```
<br />

## Information
Time zone in Server-Client environment
Now imagine you make an app to schedule tasks, you get the user's time value. The selection on the client side is transmitted to the server and then saved that value, then this value is displayed on the client side

What happens if the client accesses from different time zones? For example, when creating a calendar in Vietnam, but then opening it for a business trip in the US, the value stored on the server side must be a fixed value and does not depend on the time zone. So the client only needs to do is display that value in accordance with the current time zone.

In addition, when the user creates a timestamp, we also convert it to Unix time units according to ISO-8601 standard to contain the offset information 2017–03–10T11:30:00+09:00. What we do in specialized terminology often uses two words to describe: parsing and formatting

## Usage
At the root directory, run the command below to initialize localhost:
```
php artisan serve
```
Open the browser, enter route to see the results:
```
http://127.0.0.1:8000/timezones/UTC
```

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).