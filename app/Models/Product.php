<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Product extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the product name
     * $this->attributes['price'] - int - contains the product price
     * ***#*** Agregar created_at y updated_at
    */ 

    protected $fillable = ['title','price','image','description','rating','category','supplier'];

    public static function validate(Request $request):void{
        $newProduct = new Product();
        // $newProduct->setCategory(request->category);
        // $newProduct->save();
        $request->validate([
            "title" => "required",
            "price" => "required|numeric|gt:0",
            "image" => "required",
            "description" => "required",
            "rating" => "required|numeric|gt:0",
            "category" => "required",
            "supplier" => "required",

        ]);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId($id) : void
    {
        $this->attributes['id'] = $id;
    }

    public function getTitle(): string
    {
        return $this->attributes['title'];
    }

    public function setTitle($title) : void
    {
        $this->attributes['title'] = $title;
    }

    public function getImage(): string
    {
        return $this->attributes['image'];
    }

    public function setImage(string $image) : void
    {
        $this->attributes['image'] = $image;
    }

    public function getCategory(): string
    {
        return $this->attributes['category'];
    }

    public function setCategory($category) : void
    {
        $this->attributes['category'] = $category;
    }

    public function getPrice(): int
    {
        return $this->attributes['price'];
    }

    public function setPrice($price) : int
    {
        $this->attributes['price'] = $price;
    }

    public function getSupplier(): string
    {
        return $this->attributes['supplier'];
    }

    public function setSupplier(string $supplier) : void
    {
        $this->attributes['supplier'] = $supplier;
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function setDescription(string $description) : void
    {
        $this->attributes['description'] = $description;
    }

    public function getRating(): int
    {
        return $this->attributes['rating'];
    }

    public function setRating( string $rating) : void
    {
        $this->attributes['rating'] = $name;
    }
}
