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
    public function oferta()
    {
        return view('newsletter.oferta');
    }
    public function index()
    {
        return view('newsletter.newsletter');
    }
    public function deleted()
    {
        return view('newsletter.pageDelete');
    }
    public function wspolpracaSend(NewsletterValidator $request)
    {
        $code = str_random(40);
        $rabat = str_random(10);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'subject' => 'Oferta - Miody Wigor',
            'code' => $code,
            'mode' => 'oferta',
            'rabat' => $rabat,
            );  
            
            Mail::send('newsletter.emails.ofertaNew', $data, function($message) use($data) {
            $message->to('kontakt@miodywigor.pl');
            $message->from('kontakt@miodywigor.pl');
            $message->subject( 'oferta wysłana' );
        });
     

        Mail::send('newsletter.emails.oferta', $data, function($message) use($data) {
            $message->to($data['email']);
            $message->from('kontakt@miodywigor.pl');
            $message->subject($data['subject']);
        }); 

        $news = new newsletter();
        $news->email = $request->input('email');
        $news->name = $request->input('name');
        $news->code = $code;
        $news->mode = 'oferta';
        $news->rabat = $rabat;
        $news->save();

        return redirect()->route('newsletter.oferta');
    }

    public function newsletterSend(NewsletterValidator $request)
    {
        $code = str_random(40);
        $rabat = str_random(10);
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'subject' => 'Witamy w Miody Wigor!',
            'code' => $code,
            'mode' => 'newsletter',
            'rabat' => $rabat,
            );  
            
            Mail::send('newsletter.emails.newsletterNew', $data, function($message) use($data) {
            $message->to('kontakt@miodywigor.pl');
            $message->from('kontakt@miodywigor.pl');
            $message->subject( 'ktoś dopisał się do newslettera' );
        });
     

        Mail::send('newsletter.emails.newsletterUser', $data, function($message) use($data) {
            $message->to($data['email']);
            $message->from('kontakt@miodywigor.pl');
            $message->subject($data['subject']);
        }); 

        $news = new newsletter();
        $news->email = $request->input('email');
        $news->name = $request->input('name');
        $news->code = $code;
        $news->mode = 'newsletter';
        $news->rabat = $rabat;
        $news->save();

        return redirect()->route('newsletter.index');
    }

    public function newsletterDelete($code)
    {
        $users = DB::table('newsletters')->where('code',$code)->get();
        foreach ($users as $user) {
            }

        if ( !$users->isEmpty() ){
            $data = array(
                'email' => $user->email,
                'subject' => 'ktoś wypisał się z newslettera',
                );    

            Mail::send('newsletter.emails.newsletterDelete', $data, function($message) use($data) {
                $message->to('kontakt@miodywigor.pl');
                $message->from('kontakt@miodywigor.pl');
                $message->subject($data['subject']);
            });
            newsletter::where('code', $code)->delete();

            
               
        }
        return redirect()->route('newsletter.deleted');    
    }    
}