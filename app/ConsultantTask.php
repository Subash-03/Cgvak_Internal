<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'cgvak_consultant_tasks';
    protected $primaryKey='task_id';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'projecticode', 'consultanticode','tasksdescription','tasksestimatedhours','taskstartdate','tasksenddate','	taskscreatedon','taskscreatedby','projectphaseicode','tasktypeicode','modifiedby','modifiedon','isActive'
    ];

   
}
?>