<?php
session_start();
requireValidSession();

// $date = (new Datetime())->getTimestamp();
// $today = strftime('%d de %B de %Y', $date);
// loadTemplateView('day_records', ['today' => $today]);


$date = new DateTime(); // Cria um objeto DateTime com a data atual
$formatter = new IntlDateFormatter(
    'pt_BR',
    IntlDateFormatter::LONG,
    IntlDateFormatter::NONE
);
$today = $formatter->format($date);
loadTemplateView('day_records', ['today' => $today]);