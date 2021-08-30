<?php

namespace App\Interfaces;


interface StringRepositoryInterface
{
    public function index();

    public function create();

    public function store($request);

    public function show($id);

    public function edit($id);

    public function update($request);

    public function destroy($request);

    public function work();

    public function end();

    public function ending($request);

    public function info_string();

    public function info($request);
}