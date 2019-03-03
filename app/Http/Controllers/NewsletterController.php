<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterValidator;
use App\Newsletter;
use Illuminate\Http\Request;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

//use Illuminate\Http\Request\NewsletterValidator;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('newsletter.newsletter');
    }

    public function newsletterSend(NewsletterValidator $request)
    {
        $code = str_random(40);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'subject' => 'Witaj ' . $request->name,
            'code' => $code,
            );    

        Mail::send('newsletter.emails.newsletterNew', $data, function($message) use($data) {
            $message->to('mtxfazdiz@gmail.com');
            $message->from('mtx@mtx.pl');
            $message->subject( 'ktoś dopisał się do newslettera' );
        });

        Mail::send('newsletter.emails.newsletterUser', $data, function($message) use($data) {
            $message->to($data['email']);
            $message->from('mtxfazdiz@gmail.com');
            $message->subject($data['subject']);
        }); 

        $news = new newsletter();
        $news->email = $request->input('email');
        $news->name = $request->input('name');
        $news->code = $code;
        $news->save();

        return redirect()->route('newsletter.index');
        //return view('welcome');
    }

    public function newsletterDelete($code)
    {
        $users = DB::table('newsletters')->where('code',$code)->get();

        foreach ($users as $user) {
        }

        $data = array(
            'email' => $user->email,
            'subject' => 'ktoś wypisał się z newslettera',
            );    

        Mail::send('newsletter.emails.newsletterDelete', $data, function($message) use($data) {
            $message->to('mtxfazdiz@gmail.com');
            $message->from('mtxfazdiz@gmail.com');
            $message->subject($data['subject']);
        });
        newsletter::where('code', $code)->delete();

        return view('newsletter.pageDelete');
    }    
}