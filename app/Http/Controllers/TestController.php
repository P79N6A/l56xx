<?php

namespace App\Http\Controllers;

use App\Jobs\MailQueue;
use App\Mail\RegisterSuccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    //
    public function TestSentMail($qq){
        //直接发送邮件
        return $res = Mail::to($qq.'@qq.com')->send(new RegisterSuccess($qq));
        //var_dump($res);//NULL

        //邮件消息队列
        //$res = Mail::to('32705669@qq.com')->queue((new RegisterSuccess())->onConnection('redis'));
        //echo "加入邮件发送队列成功！";
        //var_dump($res);
        //$this->dispatch(new MailQueue());
        //(new MailQueue())->handle();
        //dispatch(new MailQueue());

    }
}
