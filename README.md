laravel-date-helpers
====================

Some custom date helpers for Laravel 4.

These helpers use the Carbon Date functions that are included with Laravel 4, but put into easier helper functions.

Installation
====================
Place the customhelpers.php file into your `app` folder.

Add `require app_path().'/customhelpers.php';` to your `global.php` file.

run `composer dump-auto` in terminal / CMD Prompt.

Usage
====================
Simply type the function into your view/model/controller.

Check out the source code to see the optional parameters you can pass to these functions.


Examples
====================
```
	print 'Yesterday: '.yesterday().'<br>';
	print 'Today: '.today().'<br>';
	print 'Tomorrow: '.tomorrow().'<br>';
	print 'Day Of Week: '.dayOfWeek().'<br>';
	print 'UK Date: '.ukDate('2012-01-24 00:00:00').'<br>';
	print 'UK Date / Time: '.ukDate('2012-01-24 00:00:00', true).'<br>';
	print 'Human Date: '.humanDate('2013-10-26 00:00:00').'<br>';
	print 'UK Date to Date: '.ukDateToDate('21/10/2013').'<br>';
	print 'UK Date to Timestamp: '.ukDateToDate('21/10/2013 12:00:20', true).'<br>';
	print 'Age in years: '.age('1985-10-26').'<br>';
	$weekend = weekend() ? 'Yes':'No';
	print 'Is it the weekend?: '.$weekend.'<br>';
	print 'Diff In Days: '.diffInDays('2012-01-24 00:00:00').'<br>';
	print 'Add 2 years: '.addYears(null, 2).'<br>';
	print 'Add 2 months: '.addMonths(null, 2).'<br>';
	print 'Add 2 weeks: '.addWeeks(null, 2).'<br>';
	print 'Add 2 days: '.addDays(null, 2).'<br>';
	print 'Start Of Day: '.startOfDay().'<br>';
	print 'End Of Day: '.endOfDay().'<br>';
	print 'Start Of Week: '.startOfWeek().'<br>';
	print 'End Of Week: '.endOfWeek().'<br>';
	print 'Start Of Month: '.startOfMonth().'<br>';
	print 'End Of Month: '.endOfMonth().'<br>';
	print 'Start Of Year: '.startOfYear().'<br>';
	print 'End Of Year: '.endOfYear().'<br>';
	print 'Start Of Decade: '.startOfDecade().'<br>';
	print 'End Of Decade: '.endOfDecade().'<br>';
	print 'Start Of Century: '.startOfCentury().'<br>';
	print 'End Of Century: '.endOfCentury().'<br>';
	print 'Next Monday: '.nextDay(null, 'Monday').'<br>';
	print 'Next Monday After Date: '.nextDay('2014-03-01 12:30:12','Monday').'<br>';
	print 'Next Monday After Date in d/m/Y H:ia format: '.nextDay('2014-03-01 12:30:12','Monday', 'd/m/Y H:ia').'<br>';
	```
