<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // The name of the table associated with this model
    protected $table = 'users';

    // The primary key of the table
    protected $primaryKey = 'id';

    // List of fields that can be inserted or updated
    protected $allowedFields = ['name', 'email', 'city', 'tel', 'password'];

    // Validation rules
    protected $validationRules = [
        'name'     => 'required|min_length[3]|max_length[255]',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'city'     => 'required|min_length[3]|max_length[100]',   // Règles de validation pour "city"
        'tel'      => 'required|numeric|min_length[10]|max_length[15]',  // Règles de validation pour "tel"
        'password' => 'required|min_length[8]',
    ];
    

    // Fields that should be validated during insert or update operations
    protected $validationMessages = [
        'email' => [
            'is_unique' => 'This email is already in use.'
        ]
    ];

    // Enable or disable query logging
    protected $DBGroup = 'default';
    
    // Optional: Automatic timestamp management (created_at and updated_at)
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Specify the return type of the model (optional)
    protected $returnType = 'array'; // or 'object' or 'CodeIgniter\Database\Row'
}
