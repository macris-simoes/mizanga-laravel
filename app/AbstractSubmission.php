<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbstractSubmission extends Model
{
    protected $fillable = ['category', 'axis_id', 'abstract_title', 'abstract_body', 'first_keyword', 'second_keyword','third_keyword','author','author_affiliation','first_coauthor','first_coauthor_afiliation','second_coauthor','second_coauthor_afiliation','third_coauthor','third_coauthor_afiliation','fourth_coauthor','fourth_coauthor_afiliation','fifth__coauthor','fifth__coauthor_afiliation','sixth_coauthor','sixth_coauthor_afiliation','seventh_coauthor','seventh_coauthor_afiliation','eighth_coauthor','eighth_coauthor_afiliation','nineth_coauthor','nineth_coauthor_afiliation','tenth_coauthor','tenth_coauthor_afiliation','financial_support','registration_id'];
}
