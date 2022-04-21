<?php

/*
 *   _____                                ____  _   _ ____
 *  | ____|_  ___ __  _ __ ___  ___ ___  |  _ \| | | |  _ \
 *  |  _| \ \/ / '_ \| '__/ _ \/ __/ __| | |_) | |_| | |_) |
 *  | |___ >  <| |_) | | |  __/\__ \__ \ |  __/|  _  |  __/
 *  |_____/_/\_\ .__/|_|  \___||___/___/ |_|   |_| |_|_|   v 1.0.0
 *             |_|
 *
*/

# Require Express PHP Framework...
// require_once 'Express.php';
// include __DIR__.'/vendor/autoload.php';
include __DIR__.'/vendor/hxgf/xprss/src/XPRSS.php';



# Create an Expess PHP app...
global $app;
$app = new Express();

# Require Configuration file...
// require_once "config.php";




# Configure Express PHP app...

		/**
		 * Set Express router's base path
		 */
		//  $app->set('basePath', '/express-php-master');
		//  $app->set('basePath', '/');
		 
		 /**
		  * Set Express view engine
		  */
		//  $app->set('view engine', 'default');

		 /**
		  * Set Express views path
		  */
		$app->set('views', 'views/');

		/**
		  * Set Express static files path
		  */
		// $app->set('static', 'public/');


		/**
		 *  Set App Global variable
		 */


		$app->setGlobal('appName', 'Express App');


		/**
		 * Inject the app object into the view.
		 */

		$app->setGlobal('app', $app);

		/*
		 * Import Express Modules
		 */


		# Import database module...
		// $app->import('ExpressORM');



		/**
		 * Connect to database
		 */

		// $app->_ExpressORM->Instance('localhost', 'root', '', 'revo');
		// if(!$app->_ExpressORM->CheckInstance()) throw new Exception("Database Error: Unable to Connect to Database");


# Define app routes... 
// require_once "routes/Apis.php";
// require_once "routes/Web.php";

echo "everything ok";
die;

$app->get('/', function($req, $res) {
	$res->render('home', array('title'=>'Home'));
});