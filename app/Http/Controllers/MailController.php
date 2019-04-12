<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MailController extends Controller
{

    public function send(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $question = $request->input('question');
        $contents = [
            '联系人:'.$name,
            '联系邮箱：'.$email,
            '联系电话：'.$phone,
            '相关咨询：'.$question,
        ]; 
        // Mail::send()的返回值为空，所以可以其他方法进行判断 
        Mail::send(
            'emails.sendMail',                                      //向目标邮箱发送的内容模板
            ['contents'=>$contents],                                //发送的内容，由request获取的input值
            function($message){                                     
                $to = '330359531@qq.com'; 
                $message ->to($to)->subject('来自huaye-dg的消息'); 
            }
        ); 
        // 返回的一个错误数组，利用此可以判断是否发送成功
        // dd(Mail::failures());
        // dd($contents);
		return redirect('contact')->with('message', 'Message sent!');
    } 
}

