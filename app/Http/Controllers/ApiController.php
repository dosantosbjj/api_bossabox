<?php

namespace App\Http\Controllers;

use App\Tools;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $tools = Tools::all();

        if($tools != null){
            foreach($tools as $tool){
                $tool->tags = explode(',', $tool->tags);
            }
            return response($tools,200)
                ->header('Content-type','application/json');
        }
        return response('Error fetching data...', 404);
    }

    public function create(Request $request)
    {
        $tool = new Tools();
        $tool->title = $request->title;
        $tool->description = $request->description;
        $tool->link = $request->link;
        $tool->tags = $request->tags;
        if(!$tool->save()){
            return response('Não foi possível criar o recurso',400);
        }
        return response('Status: 201 Created', 201)
                ->header('Content-Type','application/json');
    }

    public function findByTag(Request $request)
    {
        if(!$request->query('tag')){
            return response('Query string inválida!',400)
                ->header('Content-type','text/plain');
        }
        $tag = $request->query('tag');
        $tool = Tools::where('tags', 'LIKE', '%'. $tag . '%')->get();
        return response($tool,200)
            ->header('Content-type','application/json');
    }

    public function destroy($id)
    {
        $tool = Tools::findOrFail($id);
        if(!$tool->delete()){
            return response('Não foi possível excluir o recurso...', 406)
                ->header('Content-type','text/plain');
        }
            return response('Status: 204 No content',204);
    }
}
