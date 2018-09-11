<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaracarteContact;
use App\Http\Requests\LaracarteContactFormRequest;
use App\Http\Requests\LaracarteLoginFormRequest;
use App\Http\Requests\LaracarteRegisterFormRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;
use App\Models\Message;
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
        try
        {
            $name       = $request->name;
            $email      = $request->email;
            $message    = $request->message;

            $message_inserted = Message::create(['name'=>$name, 'email'=>$email, 'message'=>$message]);

            Mail::to("e.m.lotonga@gmail.com")
                    ->send(new ContactMessage($name, $email, $message) );
            Flashy::success('Votre message a été envoyé !');
            return redirect()->route('laracarte.index');
        }
        catch(\Exception $e)
        {
            Flashy::error("Nous somme désolé, mais votre message n'a pas été envoyé !");
        }
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
