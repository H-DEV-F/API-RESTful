<?php

//funcionarios
//$this->apiResource('funcionarios', 'Api\FuncionarioApiController');
//get
Route::get('funcionarios/get', 'Api\FuncionarioApiController@get');
Route::get('funcionarios/get/{id}', 'Api\FuncionarioApiController@get');

//relatorio
Route::get('funcionarios/relatorio', 'Api\FuncionarioApiController@relatorio');

//insert
Route::get('funcionarios/insert', 'Api\FuncionarioApiController@insert');

//update
Route::get('funcionarios/update/{id}', 'Api\FuncionarioApiController@update');

//delete
Route::get('funcionarios/delete/{id}', 'Api\FuncionarioApiController@delete');