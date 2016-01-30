<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() 
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() 
    {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        $record = $this->quotes->first(); //this will grab the first quote 
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    //-------------------------------------------------------------
    //  This will call on the bob monkhouse quote.
    //-------------------------------------------------------------
    function zzz() 
    {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        $record = $this->quotes->first(); //this will grab the first quote 
        $this->data = array_merge($this->data, $record);
        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */