<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Wyatt Paquin
 */
interface ICrud {
    //put your code here
    
    public function update();
    public function delete();
    public function readSingle();
    public function readAll();
    public function create();
}


?>