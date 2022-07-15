<?php

namespace App\Http\Controllers;

use App\Models\Audiobook;
use App\Spiders\Audible;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function testSpiderConstruct(Audible $spider)
    {
        $spider->__construct('https://www.audible.com/pd/The-Comeback-Audiobook/B09TV414Q8c');

        dd ($spider->details());
    }

    //
    public function browse()
    {
        $audiobooks = Audiobook::all();

        return view('pages.browse', compact('audiobooks'));
    }

    //
    public function detail(Audiobook $audiobook)
    {
        return view('pages.content', compact('audiobook'));
    }
}
