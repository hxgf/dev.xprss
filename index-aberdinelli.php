<?php
include __DIR__.'/vendor/autoload.php';

use \XPRSS\Application;
use \XPRSS\Router;

$xprss = new Application();
$router = new Router();

// $xprss->set('view engine','php');
// $xprss->set('views','./views');
// $xprss->set('allow_php',true);



// The complete request info can be var_dumped calling getInfo():
$xprss->getInfo();

/**
 * Here you have a few common usages for XPRSS
 */

// Handle $_POST variables
$router->post('/', function($req, $res) {
	$res->json(array(
		'name'	=> $req->body->name
	));
});




$router->get('/', function($req, $res) {
	$res->send('<h1>Hello Cleveland!</h1>');
  // $res->render('what.php', array(
  //   'what' => 'you know what'
  // ));
});

// Handle $_GET variables in /page path, for example /path?name=Alan
$router->get('/path', function($req, $res) {
	$res->send('Hi, '.$req->query->name);
});

// Handle dynamic URL
$router->get('/:page', function($req, $res) {
	$res->send('You are visiting '.$req->params->page.'!');
});

// You can handle nested dynamic paths:
$router->get('/:author/:id', function($req, $res) {
	$res->send('You are visiting the post id: '.$req->params->id.' by '.$req->params->author);
});

// You can even use regex
$router->get('/([0-9]{4})-word', function($req, $res) {
	// For example, here we want 4 numbers and then "-word"
});

// You have a few useful helpers for cookies
$router->get('/cookie', function($req, $res) {
	// Get a cookie named "username"
	$name = $req->cookies->username;

	// Set a cookie
	$res->cookie('cookieName', 'cookieContent');

	// Remove a cookie
	$res->clearCookie('username');
});

// And for redirections, too
$router->get('/redirect', function($req, $res) {
	// Using Location header
	$res->location('/other-page');

	// Or using a 302 redirect:
	$res->redirect('/other-page');

	// Or a 301 permanent redirect
	$res->redirect('/other-page', true);
});

/**
 * listen() must receive an instance of Router to work.
 */
$xprss->listen($router);
?>
