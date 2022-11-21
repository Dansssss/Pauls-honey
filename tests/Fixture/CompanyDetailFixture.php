<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompanyDetailFixture
 */
class CompanyDetailFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'company_detail';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'name' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'name of the company', 'precision' => null],
        'address' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'address of paul\'s healthy honey', 'precision' => null],
        'established_time' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'extablished time of paul\'s hoeny', 'precision' => null],
        'business_scope' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'businesss scope of paul\'s hoeny', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['name'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'name' => '1781e63f-fa1c-4a0a-83c1-140464c23bd0',
                'address' => 'Lorem ipsum dolor sit amet',
                'established_time' => '2021-03-31',
                'business_scope' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
