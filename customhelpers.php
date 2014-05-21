<?php

use Carbon\Carbon;

function today($format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	return Carbon::today()->format($format);
}

function tomorrow($format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	return Carbon::tomorrow()->format($format);
}

function yesterday($format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	return Carbon::yesterday()->format($format);
}

function nextDay($datetime=null, $day, $format=null)
{
	$day = strtoupper($day);
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	$days = ['SUNDAY' => Carbon::SUNDAY, 'MONDAY' => Carbon::MONDAY, 'TUESDAY' => Carbon::TUESDAY, 'WEDNESDAY' => Carbon::WEDNESDAY, 'THURSDAY' => Carbon::THURSDAY, 'FRIDAY' => Carbon::FRIDAY, 'SATURDAY' => Carbon::SATURDAY];
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->next($days[$day])->format($format);
}

function dayOfWeek($datetime=null)
{
	$days = ['Sunday','Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	$datetime = $datetime ? $datetime:Carbon::now();
	return $days[Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->dayOfWeek];
}

function ukDate($datetime=null, $timestamp=false)
{
	$datetime = $datetime ? $datetime:Carbon::now();
	$timestamp = $timestamp ? 'd/m/Y H:ia':'d/m/Y';
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->format($timestamp);
}

function ukDateToDate($datetime=null, $timestamp=false)
{
	$datetime = $datetime ? $datetime:Carbon::now();
	$format = $timestamp ? 'd/m/Y H:i:s':'d/m/Y';
	$timestamp = $timestamp ? 'Y-m-d H:i:s':'Y-m-d';
	return Carbon::createFromFormat($format, $datetime)->format($timestamp);
}

function humanDate($datetime)
{
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->diffForHumans();
}

function age($datetime)
{
	return Carbon::createFromFormat('Y-m-d', $datetime)->age;
}

function weekend($datetime=null)
{
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->isWeekend();
}

function diffInDays($datetime)
{
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->diffInDays();
}

function addYears($datetime=null, $years, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->addYears($years)->format($format);
}

function addMonths($datetime=null, $months, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->addMonths($months)->format($format);
}

function addWeeks($datetime=null, $weeks, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->addWeeks($weeks)->format($format);
}

function addDays($datetime=null, $days, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->addDays($days)->format($format);
}

function startOfDay($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfDay()->format($format);
}

function endOfDay($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfDay()->format($format);
}

function startOfWeek($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfWeek()->format($format);
}

function endOfWeek($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfWeek()->format($format);
}

function startOfMonth($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfMonth()->format($format);
}

function endOfMonth($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfMonth()->format($format);
}

function startOfYear($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfYear()->format($format);
}

function endOfYear($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfYear()->format($format);
}

function startOfDecade($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfDecade()->format($format);
}

function endOfDecade($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfDecade()->format($format);
}

function startOfCentury($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->startOfCentury()->format($format);
}

function endOfCentury($datetime=null, $format=null)
{
	$format = $format ? $format:'Y-m-d H:i:s';
	$datetime = $datetime ? $datetime:Carbon::now();
	return Carbon::createFromFormat('Y-m-d H:i:s', $datetime)->endOfCentury()->format($format);
}
