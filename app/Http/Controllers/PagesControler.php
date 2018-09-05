<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LaracarteContact;
use App\Http\Requests\LaracarteContactFormRequest;
use App\Http\Requests\LaracarteLoginFormRequest;
use App\Http\Requests\LaracarteRegisterFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class PagesControler extends Controller
{
    /**
     * Display index/home view.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('laracarte.index');
    }

    /**
     * Display about view
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('laracarte.about');
    }

    /**
     * Display contact view
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view("laracarte.contact");
    }
    
    public function contact_store(LaracarteContactFormRequest $request)
    {
        $name       = $request->name;
        $email      = $request->email;
        $message    = $request->message;
        
        $success = Mail::to("e.m.lotonga@gmail.com")
                ->send(new ContactMessage($name, $email, $message) );
        /* dump($name);
        dump($email);
        dump($message);

        $success = \App\Utilities\HelpersFunctions::sendEmail("e.m.lotonga@gmail.com", $name . " email => " . $email, "Laracarte application", $message);
 */
        dd($success);
    }

    /**
     * Display artisan view
     * @return \Illuminate\Http\Response
     */
    public function artisan()
    {
        return view('laracarte.artisans');
    }

    
    public function login()
    {
        return view('laracarte.auth.login');
    }
    public function login_store(LaracarteLoginFormRequest $request)
    {
        dd('login store');
    }

    public function register()
    {
        return view('laracarte.auth.register');
    }

    public function register_store(LaracarteRegisterFormRequest $request)
    {
        dd('register store');
    }

}