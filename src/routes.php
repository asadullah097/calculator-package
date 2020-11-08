<?php

Route::get('add/{a}/{b}', 'AsadDev\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'AsadDev\Calculator\CalculatorController@subtract');