<?php

namespace App\Http\Controllers;

use App\Services\NewExampleService;
use Illuminate\Http\Request;

class NewExampleServiceController extends Controller
{
    /**
     * @var NewExampleService
     */
    private $newExampleService;

    public function index()
    {
        return '<h1>TESTING</h1>';
    }

    /**
     * NewExampleServiceController constructor.
     * @param NewExampleService $newExampleService
     */
    public function __construct(NewExampleService $newExampleService)
    {
        $this->newExampleService = $newExampleService;
    }

    /**
     * @param string $message
     * @return string
     */
    public function useServiceMethod(string $message): string
    {
        $this->newExampleService->setFoo($message);
        return $this->newExampleService->getFoo();
    }
}
