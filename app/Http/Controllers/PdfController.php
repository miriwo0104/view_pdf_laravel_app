<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * リクエストを用いてPDFを表示する
     *
     * @return response
     */
    public function showRequest()
    {
        return response()->file(storage_path('app/public/pdf/01_file.pdf'));
    }

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
