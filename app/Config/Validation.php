<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $login = [
        'user'  => 'required',
        'password'   => 'required',
    ];

    public $login_errors = [
        'user' => [
            'required' => 'El campo "Usuario" es obligatorio',
        ],
        'password' => [
            'required' => 'El campo "Contraseña" es obligatorio',
        ]
    ];

    public $unidadesInsert = [
        'unidad'  => 'required',
        'nombre_corto'   => 'required',
    ];

    public $unidadesInsert_errors = [
        'unidad' => [
            'required' => 'El campo "Unidad" es obligatorio',
        ],
        'nombre_corto' => [
            'required' => 'El campo "Abreviatura" es obligatorio',
        ]
    ];

    public $categorias = [
        'cat_nombre'  => 'required',
    ];

    public $categorias_errors = [
        'cat_nombre' => [
            'required' => 'El campo "Categoría" es obligatorio',
        ],
    ];
}
