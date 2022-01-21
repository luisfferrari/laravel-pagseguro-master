<?php

namespace laravel\pagseguro\Document\Passport;

use laravel\pagseguro\Complements\ValidationRulesInterface;
use laravel\pagseguro\Complements\ValidationRulesTrait;

/**
 * Validation Rules Object
 *
 * @category   Document
 * @package    Laravel\PagSeguro\Document
 *
 * @author     Isaque de Souza <isaquesb@gmail.com>
 * @since      2015-01-10
 *
 * @copyright  Laravel\PagSeguro
 */
class ValidationRules implements ValidationRulesInterface
{

    /**
     * @var array
     */
    protected $rules = [
        'number' => 'Required',
    ];

    /**
     * @var array
     */
    protected $messages;

    use ValidationRulesTrait;
}
