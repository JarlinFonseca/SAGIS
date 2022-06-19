<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    use HasFactory;


/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['name', 'description'];



/** Relation Methods */
public function people()
{
    return $this->hasMany(Person::class);
}
}