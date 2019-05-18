<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{

    protected  $table = 'product';
    protected  $primaryKey= 'id' ;
    protected $fillable= ['name','producer','unit_price','promotion_price','image','id_category'];

    private $name;
    private $producer;
    private $unit_price;
    private $promotion_price;
    private $image;
    private $id_category;

    public function setName($name)
    {

        $this->$name =$name;
        return $this;

    }

    public function setProducer($producer)
    {

        $this->$producer = $producer;
        return $this;

    }

    public function setUnit_price($unit_price)
    {

        $this->$unit_price =$unit_price;
        return $this;
    }

    public function setPromotion_price($promotion_price)
    {

        $this->$promotion_price =$promotion_price;
        return $this;
    }

    public function setImage($image)
    {

        $this->$image =$image;
        return $this;
    }

    public function setId_category($id_category)
    {

        $this->$id_category =$id_category;
        return $this;
    }


    public function makeObjFromRequest(Request $request)
    {

        $this
        ->setName($request->input('name'))
        ->setProducer($request->input('producer'))
        ->setUnit_price($request->input('unit_price'))
        ->setPromotion_price($request->input('promotion_price'))
        ->setImage($request->input('image'))
        ->setId_category($request->input('id_category'));

        return $this;

    }







}
