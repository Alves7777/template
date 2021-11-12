<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApisController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SectionTwoRequest;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\RedirectResponse;

class ApiSectionTwoController extends Controller
{
    public function __construct(ApisController $apiController)
    {
        parent::__construct();
        $this->apiController = $apiController;
    }
    public function index()
    {
        try {
            $getSectionTwo = $this->apiController->ApiSectionTwoGet();
            return view('sectiontwo.index', compact('getSectionTwo'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
        return view('sectiontwo.create');
        } catch (Exception $e) {
            alert()->error(" Página não encontrada.");
            return redirect()->back();
        }
    }

    public function store(SectionTwoRequest $request): RedirectResponse
    {
        try {

            $url = env('APP_URL') . 'section-two/add';
            $client = new Client([
                'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']
            ]);
            $response = $client->request('POST', $url, [
                'json' => $request->all()
            ]);
            alert()->success('Cadastrado com Sucesso.');
            return redirect()->route('sectiontwo.index', compact('response'));
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }

}
