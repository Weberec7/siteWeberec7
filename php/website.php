<?php

class Site
{
	public $title;
	public $author;
	public $stylesheet;
	public $description;
	public $modernizr;
	public $client;
	//modernizr has yet to be implemented
	
	public function __construct($title, $author, $stylesheet, $description, $client) {
	
	$this->title = $title;
	$this->author = $author;
	$this->stylesheet = $stylesheet;
	$this->description = $description;
	$this->client = $client;
	$this->modernizr = false;	
	}
	
	public function head(){
echo('
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="/myimg/myicon.ico" />
<title>'.$this->title.'</title>
<meta name="description" content="'.$this->description.'">
<meta name="author" content="'.$this->author.'">
<link rel="stylesheet" href="http://weberec7.com/'.$this->stylesheet.'"  rel="stylesheet" type="text/css"/>
<link href="http://weberec7.com/mycss/lightbox.css" rel="stylesheet"/>
<link href="http://fonts.googleapis.com/css?family=Habibi|Philosopher" rel="stylesheet" type="text/css">
<script src="myjs/weberec7.js"></script>
<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<body id="'.$this->title.'">
<section id="main">

	<hgroup>
		<h1>'.$this->client.'</h1>
		<h2>Portfolio: '.$this->title.'</h2> 
	</hgroup>
	<nav id="nav">
    	<ul>
			<li><a href="/" >Home</a></li>
			<li><a href="/Projects" >Projects</a></li>
			<li><a href="/PhotoBlog" >PhotoBlog</a></li>
			<li><a href="/Bio" >Bio</a></li>
			<li><a href="/Resume" >Resume</a></li>
			<li><a href="/Contact" >Contact</a></li>
		</ul>
    </nav>
			');

	}
	
	
	public function foot(){
		echo('<footer><p>Copyright © 2013 Ethan Weber. All rights reserved.</p></footer>');
	}
	
}

?>