<?php

namespace App\Http\Controllers;

use App\Category;
use App\Compoments\Recusive;
use App\Traits\StorageImageStrait;
use Illuminate\Http\Request;
use Storage;

class AdminProductController extends Controller
{
    use StorageImageStrait;
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return view('admin.product.index');
    }

    public function create()
    {
        $htmlOption = $this->getcategory($parent_id = '');
        return view('admin.product.add', compact('htmlOption'));
    }

    public function getcategory($parent_id)
    {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parent_id);

        return $htmlOption;
    }

    public function store(Request $request)
    {
        $dataProductCreate = [
            'name'=> $request->name,
            'price'=>$request->price,
            'content'=>content
        ];
        $dataUploadfeatureImage = $this->storageTraitUpload($request,'feature_image_path','product');
    }
}
