<?php
  class Pages extends Controller{
    public function __construct(){
     
    }

    // Load Homepage
    public function index(){
      // If user logged in, redirect to posts
      if(isset($_SESSION['user_id'])){
        redirect('posts');
      }

      //Data for the default homepage
      $data = [
        'title' => 'Welcome to OpenMinds',
        'description' => 'Dear User, I believe the world has so much to offer that 
        I must request you to Sign in or create a free account to fully experience the content'
      ];

      $this->view('pages/index', $data);
    }

  }