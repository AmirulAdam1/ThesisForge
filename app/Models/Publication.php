<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
<<<<<<< Updated upstream

    protected $primaryKey = 'publication_id';

    protected $fillable = [
        'publication_title',
        'publication_author',
        'publication_date',
        'publication_type',
        'publication_domain',
        'publication_fileName',  // Ensure this matches your database fields
        'publication_filePath',  // Ensure this matches your database fields
    ];

    public $timestamps = false;

    protected $table = 'publication';

}

=======
}
>>>>>>> Stashed changes
