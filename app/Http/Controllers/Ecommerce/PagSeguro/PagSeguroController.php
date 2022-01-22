<?php


namespace App\Http\Controllers\Ecommerce\PagSeguro;


use App\Http\Controllers\Controller;
use App\Models\Ecommerce\PagSeguro\PagSeguro;
use Illuminate\Http\RedirectResponse;

class PagSeguroController extends Controller
{
    public function pagseguro(PagSeguro $pagseguro): RedirectResponse
    {
//        return $pagseguro->generate();

        $code = $pagseguro->generate();

        $urlRedirect = config('pagseguro.url_redirect_after_request').$code;

        return redirect()->away($urlRedirect);
    }
}
