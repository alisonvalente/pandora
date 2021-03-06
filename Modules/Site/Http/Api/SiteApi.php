<?php

namespace Modules\Site\Http\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Site\Entities\SiteRepository;
use Illuminate\Support\Facades\Auth;

class SiteApi extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param  $idUser
     * @return json
     */
    public function get(SiteRepository $repository)
    {
        $userId = Auth::id();

        $site = $repository->getByUserId($userId);

        return $site->toJson();
    }

    /**
     * @param  int $id  
     * @param  Request $request
     * @return json
     */
    public function put($id, Request $request, SiteRepository $repository)
    {
        $data = json_decode($request->getContent(), true);

        if ($data['user_id'] !== Auth::id()) {
            return $this->boolToJson(false);
        }
        
        $model = $repository->findByID($id, false);

        $bool = false;
        if ($model) {
            $bool = $repository->update($model, $data);
        }

        return $this->boolToJson($bool);
    }

    /**
     * @param  Request $request
     * @param  SiteRepository $repository
     * @return json
     */
    // public function post(Request $request, SiteRepository $repository)
    // {
    //     $userId = 1;

    //     $data = json_decode($request->getContent(), true);
    //     $data['user_id'] = $userId;

    //     $model = $repository->create($data);

    //     return $this->boolToJson($model ?: false);
    // }

    /**
     * @return Response
     * @return json
     */
    // public function delete()
    // {
    // }

    public function boolToJson($bool = false)
    {
        return json_encode(["status" => ($bool)?'ok':'erro']);
    }
}
