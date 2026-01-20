<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentLogin extends Model
{
    use HasFactory;

    // Specify the table (optional if Laravel naming convention matches)
    protected $table = 'users';

    // Primary key (optional if it's 'id')
    protected $primaryKey = 'id';

    // Fillable fields (for mass assignment)
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Hidden fields (like password) when converting to JSON
    protected $hidden = [
        'password',
    ];

    // Timestamps (created_at, updated_at)
    public $timestamps = true;
}

