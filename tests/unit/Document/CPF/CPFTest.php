<?php

namespace laravel\pagseguro\Tests\Unit\Sender\Document\CPF;

use laravel\pagseguro\Document\CPF\CPF;
use PHPUnit\Framework\TestCase;

/**
 * Sender Document CPF Test
 * @author Isaque de Souza <isaquesb@gmail.com>
 */
class CPFTest extends TestCase
{

    public function testEmptyCPF()
    {
        $cpf = new CPF();
        $this->assertEquals([
            'number' => null,
        ], $cpf->toArray());
    }

    public function testCpf()
    {
        $data = [
            'number' => '10987654321',
        ];
        $cpf = new CPF($data);
        $this->assertEquals($data, $cpf->toArray());
        $this->assertEquals($data['number'], $cpf->getNumber());
    }
}
