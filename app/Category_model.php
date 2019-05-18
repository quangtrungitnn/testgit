<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category_model extends Model
{
    protected $table = 'category';
    protected $primaryKey='id';
    protected $fillable=['name','description','created_at','updated_at'];

    private $name;
    private $description;

    public function setName($name)
    {

        $this->name =$name;
        return $this;

    }

    public function setDescription($description)
    {

        $this->description =$description;
        return $this;

    }


    public function makeObjFromRequest(Request $request)
    {

        $this
        ->setName($request->input('name'))
        ->setDescription($request->input('description'));

        return $this;

    }

}
