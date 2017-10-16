<?php

namespace Dinkara\RepoBuilder\Repositories;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author ndzak
 */
interface IRepo {

    function model();

    function firstOrNew($where);

    function firstOrCreate($where);

    function fill($fields);
    
    function find($id);
    
    function all();
    
    function paginateAll($perPage = 20);

    function create($fields);

    function findAndUpdate($id, $fields);

    function update($fields);
    
    function save();
    
    function delete();
    
    function __call($name, $arguments);
}