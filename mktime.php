
<html>
<body bgcolor="pink">
<h3>mktime() function : </h3>
<?php
$today = mktime(0,0,0,date("m"), date("d"), date("Y"));
echo "Today date is :".date("d-m-Y", $today)."<br/>";
$yesterday = mktime(0,0,0,date("m"), date("d")-1, date("Y"));
echo "The date of yesterday was :".date("d-m-Y", $yesterday)."<br/>";
$tomorrow = mktime(0,0,0,date("m"), date("d")+1,date("Y"));
echo "Tomorrow date will be : ".date("d-m-Y", $tomorrow);
?>
</body>
</html>
//Various format of date in PHP

DAYS

d - day of the month 2 digits (01-31)
j - day of the month (1-31)
D - 3 letter day (Mon - Sun)
l - full name of day (Monday - Sunday)
N - 1=Monday, 2=Tuesday, etc (1-7)
S - suffix for date (st, nd, rd)
w - 0=Sunday, 1=Monday (0-6)
z - day of the year (1=365)

WEEK

W - week of the year (1-52)

MONTH

F - Full name of month (January - December)
m - 2 digit month number (01-12)
n - month number (1-12)
M - 3 letter month (Jan - Dec)
t - Days in the month (28-31)

YEAR

L - leap year (0 no, 1 yes)
o - ISO-8601 year number (Ex. 1979, 2006)
Y - four digit year (Ex. 1979, 2006)
y - two digit year (Ex. 79, 06)

TIME

a - am or pm
A - AM or PM
B - Swatch Internet time (000 - 999)
g - 12 hour (1-12)
G - 24 hour c (0-23)
h - 2 digit 12 hour (01-12)
H - 2 digit 24 hour (00-23)
i - 2 digit minutes (00-59)
s 0 2 digit seconds (00-59)

OTHER

e - timezone (Ex: GMT, CST)
I - daylight savings (1=yes, 0=no)
O - offset GMT (Ex: 0200)
Z - offset in seconds (-43200 - 43200)
r - full RFC 2822 formatted date 