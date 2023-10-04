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
     * $this->attributes['comment'] - string - contains the product name
     * $this->attributes['created_at'] - string - contains the created_at timestamp
     * $this->attributes['updated_at'] - string - contains the updated_at timestamp
     * ***#*** Agregar created_at y updated_at
    */ 

    protected $fillable = ['title','price','image','description','rating','category','supplier'];



    public static function validate(Request $request):void{
        $request->validate([
            "comment" => "required",
        ]);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id) : void
    {
        $this->attributes['id'] = $id;
    }

    public function getComment(): string
    {
        return $this->attributes['comment'];
    }

    public function setComment(string $comment ) : void
    {
        $this->attributes['comment'] = $comment;
    }

    public function getCreatedAt(): string
    {
        return $this->attributes['createdAt'];
    }

    public function setCreatedAt(string $createdAt) : void
    {
        $this->attributes['createdAt'] = $createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updatedAt'];
    }

    public function setUpdatedAt(string $updatedAt) : void
    {
        $this->attributes['updatedAt'] = $updatedAt;
    }
}
