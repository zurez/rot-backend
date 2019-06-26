<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;
use LaravelFCM\Message\Topics;
class MessageController extends Controller
{
  public function message(Request $request)
  {
    $notificationBuilder = new PayloadNotificationBuilder('my title');
    $notificationBuilder->setBody('Hello world')
                        ->setSound('default');
    
    $notification = $notificationBuilder->build();
    
    $topic = new Topics();
    $topic->topic('common');
    
    $topicResponse = FCM::sendToTopic($topic, null, $notification, null);
    
   dd( $topicResponse->isSuccess(),
    $topicResponse->shouldRetry(),
    $topicResponse->error());
  }
}
