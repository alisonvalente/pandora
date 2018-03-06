<?php

namespace Modules\Panel\Http\Controllers;

use Modules\Core\Http\Controllers\CoreController;
use Modules\Site\Entities\SiteRepository;

class PanelController extends CoreController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(SiteRepository $repository)
    {
        return view('panel::index');
    }
}
