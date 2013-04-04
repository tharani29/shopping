<?php

class BaseModelStub extends BaseModel
{
    protected $table = 'items';

    public $validationRules = array(
        'fields' => array(
            'id',
            'name',
            'details',
            'sku',    
        ),
        'view' => array(
            'id'        => 'integer|min:0',
            'name'      => 'between:1,40',
            'details'   => 'between:1,250',
            'sku'       => 'between:1,20'
        ),
        'new' => array(
            'name'      => 'required|min:2|max:40',
            'details'   => 'between:4,250',
            'sku'       => 'between:4,20'
        ),
        'edit' => array(
            'name'      => 'min:2|max:40',
            'details'   => 'between:4,250',
            'sku'       => 'between:4,20'
        ),
    );

}