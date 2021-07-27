<?php

Route::get('/timeline', 'Api\Timeline\TimeLineController@index');

Route::post('/tweets', 'Api\Tweets\TweetController@store');
