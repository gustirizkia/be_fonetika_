<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\Request;

class PageContentController extends Controller
{
    public function index(Request $request)
    {
        $pageContents = PageContent::select("title", "slug")->get();
        return response()->json($pageContents);
    }

    public function show(Request $request, $id)
    {
        $pageContent = PageContent::where("slug", $id)->first();
        if (!$pageContent) {
            return response()->json(["message" => "Page not found"], 404);
        }

        $pageContent->image = asset("storage/" . $pageContent->image);

        return response()->json($pageContent);
    }
}
