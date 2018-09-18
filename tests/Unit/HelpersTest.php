<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Utilities\HelpersFunctions;
use Illuminate\Support\Facades\Route;
class HelpersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testshouldReturnCorrectTitle()
    {
        $expected = "Test | Laracarte - List of artisans";
        $actual = HelpersFunctions::formatTitle('test');
        $this->assertEquals("Home | Laracarte - List of artisans", HelpersFunctions::formatTitle('Home'));
        $this->assertEquals("About | Laracarte - List of artisans", HelpersFunctions::formatTitle('About'));
        $this->assertEquals("Artisans | Laracarte - List of artisans", HelpersFunctions::formatTitle('Artisans'));
        $this->assertEquals("Contacts | Laracarte - List of artisans", HelpersFunctions::formatTitle('Contacts'));
        $this->assertEquals("Login | Laracarte - List of artisans", HelpersFunctions::formatTitle('Login'));
        $this->assertEquals("Register | Laracarte - List of artisans", HelpersFunctions::formatTitle('Register'));
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testshouldReturnBaseTitleIfTitleIsEmpty()
    {
        $expected = "Laracarte - List of artisans";
        $actual = HelpersFunctions::formatTitle('');
        $this->assertEquals($expected, $actual);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testshouldReturnActiveStringIfGoodPathGiven()
    {
        $this->get(route('laracarte.home'));
        dd(HelpersFunctions::active('laracare.about'));
        dd(Route::is('laracarte.home'));
        $expected = "Active";
        $actual = HelpersFunctions::active('laracare.home');
        $this->assertEquals($expected, $actual);
    }



}
