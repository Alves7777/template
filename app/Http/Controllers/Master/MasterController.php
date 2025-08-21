<?php

namespace App\Http\Controllers\Master;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Services\Master\MasterService;
use Exception;

class MasterController extends Controller
{
    private AbstractView $abstract;
    private MasterService $masterService;

    public function __construct(MasterService $masterService)
    {
        parent::__construct();
        $this->masterService = $masterService;
        $this->abstract = new AbstractView();
        // $this->abstract->setMaster(); // Implemente conforme necessário
    }

    public function index()
    {
        try {
            $users = \App\Models\User::with('client')->get();
            return view('master.index', compact('users'));
        } catch (Exception $e) {
            $this->ops($e->getMessage());
            return redirect()->back();
        }
    }

    public function show($id)
    {
        try {
            $masters = $this->masterService->findOrFail($id);
            return view($this->abstract->show, compact('masters'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }
}
