<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

require 'vendor/autoload.php';
//session_start();
require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';

//use Carrot\Controller\ErrorMessage;

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true
    //'cache' => dirname(__FILE__) . '/cache'
);

$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

// Render Front Page
$app->get('/', function() use($app) {
	$app->render('asstoritve.twig');
})->name('home');

// Send Mail through POST
// $app->post('/', function() use($app){
//   $name = $app->request->post('name');
//   $email = $app->request->post('email');
//   $msg = $app->request->post('msg');
// });

//$errorMessage = new ErrorMessage;
//$errorMessage->validate();

  

  // if(!empty($name) && !empty($email) && !empty($msg)) {
  //   $cleanName = filter_var($name, FILTER_SANITIZE_STRING);
  //   $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
  //   $cleanMsg = filter_var($msg, FILTER_SANITIZE_STRING);
  // } else {
  //   //message the user that there was a problem
  
  //   $app->redirect('/');
  //   exit();
  // }
  
//   // Send Email
// $transport = Swift_MailTransport::newInstance();

// $message = Swift_Message::newInstance();
// $message->setFrom(array(
//     $cleanEmail => $cleanName
//   ));
// $message->setTo(array(''));
// $message->setBody($cleanMsg);

// $mailer = Swift_Mailer::newInstance($transport);
  
//   $result = $mailer->send($message);

//   if($result > 0) {
//     // send a message that says thank you.

//     $app->redirect('/');
//     exit();
   
//   } else {
//     // send a message to the user that the message failed to send
//     // log that there was an error
//     $app->redirect('/');
//     //$app->redirect('/as2/');
//     exit();
//   }

$app->run();
