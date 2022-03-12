<?php

namespace App\Http\Controllers\Contact;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\ContactRequest;
use App\Services\Contact\ContactService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    private AbstractView $abstract;
    private ContactService $sectionSevenService;

    public function __construct(ContactService $sectionSevenService)
    {
        parent::__construct();
        $this->sectionSevenService = $sectionSevenService;
        $this->abstract = new AbstractView();
        $this->abstract->setContact();
    }

    public function index()
    {
        try {
            $contact = $this->sectionSevenService->all();
            return view($this->abstract->index, compact('contact'));
        } catch (Exception $e) {
            $this->ops($e->getMessage());
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
            $qtdMax = 3; // array
            $data = $this->sectionSevenService->all();
            $this->abstract->getValidation($data, $qtdMax);
            return view($this->abstract->create);
        } catch (\ErrorException $e) {
            alert()->warning('Você não pode adicionar mais ' . $this->abstract->title);
            return redirect()->back();
        } catch (\Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        try {
            // se o primeiro array estiver adicionado, o restante é null
            DB::beginTransaction();
            $this->sectionSevenService->create($request->validated());
            DB::commit();
            $this->successRegister($this->abstract->title);
            return redirect()->route($this->abstract->index);
        } catch (Exception $e) {
            DB::rollBack();
            $this->errorMsg($e);
            return redirect()->back();
        }
    }

    public function show($id)
    {
        try {
            $contact = $this->sectionSevenService->findOrFail($id);
            return view($this->abstract->show, compact('contact'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function edit(string $id)
    {
        try {
            $contact = $this->sectionSevenService->findOrFail($id);
            return view($this->abstract->edit, compact('contact'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function update(ContactRequest $request, $id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->sectionSevenService->update($id, $request->validated());
            DB::commit();
            $this->successEditing($this->abstract->title);
            return redirect()->route($this->abstract->index);
        } catch (Exception $e) {
            DB::rollBack();
            $this->errorMsg($e);
            return redirect()->back();
        }
    }

    public function destroy($id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->sectionSevenService->delete($id);
            DB::commit();
            $this->successDelete($this->abstract->title);
            return redirect()->route($this->abstract->index);
        } catch (Exception $e) {
            DB::rollBack();
            $this->errorMsg($e);
            return redirect()->back();
        }
    }
}
