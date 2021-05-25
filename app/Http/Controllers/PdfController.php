<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * リダイレクトを用いてPDFを表示する
     *
     * @return redirect|file_url
     */
    public function showRedirect()
    {
        return redirect(asset('pdf/01_file.pdf'));
    }
}
