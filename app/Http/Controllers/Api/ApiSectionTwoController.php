<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApisController;
use App\Http\Requests\Api\SectionTwoRequest;
use Exception;
use Illuminate\Http\RedirectResponse;

class ApiSectionTwoController extends ApisController
{
    public string $index = 'sectiontwo.index';

    public function index()
    {
        try {
            $getSectionTwo = $this->RESPONSE_SECTIONTWO_GET;
            return view($this->index, compact('getSectionTwo'));
        } catch (Exception $e) {
            alert()->error($this->MSG_ERROR);
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
            return view('sectiontwo.create');
        } catch (Exception $e) {
            alert()->error($this->MSG_ERROR);
            return redirect()->back();
        }
    }

    public function store(SectionTwoRequest $request): RedirectResponse
    {
        try {
            $url = $this->URL . $this->ROUTE_SECTIONTWO_POST;
            $client = $this->CLIENT;
            $response = $client->request('POST', $url, [
                'json' => $request->all()
            ]);
            alert()->success($this->MSG_REGISTER_SUCCESS);
            return redirect()->route($this->index, compact('response'));
        } catch (Exception $e) {
            alert()->error($this->MSG_ERROR);
            return redirect()->back();
        }
    }


    public function show($id)
    {
//        try {
//            $sectionone = $this->sectionOneService->findOrFail($id);
            return view('sectiontwo.show');
//        } catch (Exception $e) {
//            alert()->error($this->title . " não encontrada.");
//            return redirect()->back();
//        }
    }

    public function edit(string $id)
    {
//        try {
//            $sectionone = $this->sectionOneService->findOrFail($id);
            return view('sectiontwo.edit');
//        } catch (Exception $e) {
//            alert()->error($e->getMessage());
//            return redirect()->back();
//        }
    }

    public function update(SectionTwoRequest $request, $id): RedirectResponse
    {
//        try {
//        dd($request->all());
            $url = $this->URL . $this->ROUTE_SECTIONTWO_PUT;
            $client = $this->CLIENT;
            $response = $client->request('PUT', $url, [
                'json' => $request->findOrFail($id)
            ]);
//            alert()->success($this->MSG_REGISTER_SUCCESS);
            return redirect()->route($this->index, compact('response'));
//        } catch (Exception $e) {
//            alert()->error($this->MSG_ERROR);
//            return redirect()->back();
//        }
    }

}
