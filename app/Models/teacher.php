<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $fillable = ['admin_id', 'matiere_id'];
    public function departments()
    {
        return $this->belongsToMany(departement::class, 'teacher_departments');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }


}
