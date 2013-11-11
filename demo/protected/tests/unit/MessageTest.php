<?php
Yii::import('application.controllers.MessageController');
class MessageTest extends CTestCase{
    
    public function testRepeat(){
        
        $message = new MessageController('messageTest');
        $this->assertEquals($message->repeat("Any One Out There?"), "Any One Out There?");
        
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

