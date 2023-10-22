<?php

namespace App\Models\Backend;

use App\Models\Backend\BackendBaseModel;
use App\Traits\Slug;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends BackendBaseModel
{
    use HasFactory, SoftDeletes, Slug;

    protected $table    = 'albums';
    protected $fillable = ['id','title','slug','image','status','created_by','updated_by'];

    public function albumGallery(){
        $this->hasMany(AlbumGallery::class,'album_id','id');
    }
}
