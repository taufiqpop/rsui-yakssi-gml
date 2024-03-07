<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $table            = 'settings';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama', 'owner', 'telepon', 'author', 'email', 'fax', 'facebook', 'instagram', 'alamat', 'jadwal', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps    = true;
}
