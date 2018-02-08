<?php

namespace Modules\Site\Http\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Site\Entities\SiteRepository;

class SiteApi extends Controller
{
    /**
     * @return Response
     */
    public function get($idUser, SiteRepository $repository)
    {
        $site = $repository->getByUserId($idUser);

        return $site->toJson();
    }

    /**
     * @param  Request $request
     * @return Response
     */
    public function post(Request $request, SiteRepository $repository)
    {

    }

    /**
     * @param  Request $request
     * @return Response
     */
    public function put($id, Request $request, SiteRepository $repository)
    {
        $data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true);

        return $repository->where('id', $id)->update($data);
    }

    /**
     * @return Response
     */
    public function delete()
    {
    }
}
