<?php

namespace App\Http\Controllers;

use App\Services\DalesExampleService;
use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    /**
     * @var DalesExampleService
     */
    protected $dalesExampleService;

    public function __construct(DalesExampleService $dalesExampleService)
    {

        $this->dalesExampleService = $dalesExampleService;
    }
    /**
     * @param null $page
     * @return \Illuminate\Contracts\View\View
     */
    public function index($page = null)
    {
        return View::make('pages', ['page' => $page]);
    }

    /**
     * @param float|int $a
     * @param float|int $b
     * @return float
     */
    public function someFunction(float $a, float $b) : float
    {
        return $a + $b;
    }

    public function someOtherFunction()
    {
        return $this->dalesExampleService->doSomething();
    }
}
