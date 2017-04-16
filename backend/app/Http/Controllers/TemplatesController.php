<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTemplateRequest ;
use App\Models\Template ;
use Ramsey\Uuid\Uuid;

class TemplatesController extends Controller
{
    public function index()
    {
        $templates = Template::get() ;
        return view('templates.index',compact('templates')) ; 
    }

    public function create()
    {
        return view('templates.create') ;
    }

    public function store(CreateTemplateRequest $request)
    {
        $reqData = $request->all() ;
        $uuid4 = Uuid::uuid4() ;

    
        $additionalData = [
                        'user_id' => auth()->user()->getKey(),
                        'uuid' => $uuid4->toString(),
                        'source_type' => '',
                        'version' => '',
                        'commit_id' => $uuid4->toString()
                            ] ; 
        
        Template::create(
            array_merge($request->only('source_url','title','description'), $additionalData)
            ) ;
    }
}