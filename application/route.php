<?php
use think\Route;

Route::rule('/admin', 'admin/entry/index', 'GET|POST');
Route::rule('/teacher', 'teacher/entry/mycourse', 'GET|POST');
Route::rule('/', 'admin/index/index', 'GET|POST');


Route::rule('/login', 'admin/login/login', 'GET|POST');
Route::rule('/quit', 'admin/quit/quit', 'GET|POST');

Route::rule('/teacher/applystate', 'teacher/applystate/applystate', 'GET|POST');
Route::rule('/teacher/applyhistory', 'teacher/applystate/applyhistory', 'GET|POST');
Route::rule('/teacher/mycourse', 'teacher/entry/mycourse', 'GET|POST');
Route::rule('/teacher/test','teacher/test/test','GET|POST');
Route::rule('/teacher/courseapply','teacher/entry/courseapply','GET|POST');
Route::rule('/teacher/courseview', 'teacher/entry/index', 'GET|POST');



