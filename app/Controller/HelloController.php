<?php
class HelloController extends AppController {
 
  function index() {
    $data = 'Hello world!';
    $this->set('data', $data);
  }
 
}

