<?php

use App\Video;
use Illuminate\Http\Request;
use App\Comment;

Route::get('/', function () {
    $video = Video::find(1);
    return view('welcome', compact('video'));
});

Route::get('/videos/{video}/comments/{comment}/reply', function (Request $request, Video $video, Comment $comment) {
    $reply = new Comment;
    $reply->body = str_random(32);
    $reply->user()->associate($request->user());
    $reply->parent_id = $comment->id;

    $video->comments()->save($reply);
    //$comment->replies()->save($reply);

    return back();
})->name('comment.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
