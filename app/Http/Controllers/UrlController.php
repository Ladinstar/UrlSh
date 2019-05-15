<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {

        $this->validate($request, ['url' => 'required|url']);

        $record = $this->getRecordForUrl($request->url);

        return view('result')->with('url', $record);

    }

    public function show($shortened)
    {

        $url = Url::where('shortened', $shortened)->firstOrFail();

        return redirect($url->url);
    }

    private function getRecordForUrl($url)
    {

        return Url::firstOrCreate(
            [ 'url' => $url ],
            [ 'shortened' => Url::get_unique_short_url() ]
        );

    }
}
