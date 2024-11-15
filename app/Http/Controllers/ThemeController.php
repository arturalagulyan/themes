<?php
namespace App\Http\Controllers;

use App\Http\Requests\ChooseThemeRequest;
use App\View\Composers\ThemeComposer;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\View as ViewFacade;

class ThemeController extends Controller
{
    public function __construct()
    {
        ViewFacade::composer('*', ThemeComposer::class);
    }

    public function main(): View
    {
        return view('main');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function choose(ChooseThemeRequest $request): RedirectResponse
    {
        $theme = $request->validated('theme');
        return redirect()->route('main', ['theme' => $theme]);
    }
}
