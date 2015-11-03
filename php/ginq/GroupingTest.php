<?php

require_once 'vendor/autoload.php';

class Disc
{
    public $name;
    public $type;
    public $price;

    public function __construct($name, $type, $price)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }
}


class GroupingTest extends PHPUnit_Framework_TestCase
{
    protected $discs = [];

    public function setUp()
    {
        $this->discs[] = new Disc('disc1', 'single', 1000);
        $this->discs[] = new Disc('disc2', 'album', 3000);
        $this->discs[] = new Disc('disc3', 'single', 1500);
        $this->discs[] = new Disc('disc4', 'compilation', 3000);
        $this->discs[] = new Disc('disc5', 'single', 1000);
        $this->discs[] = new Disc('disc6', 'album', 1500);
        $this->discs[] = new Disc('disc7', 'single', 1000);
    }

    /**
     * タイプでのグルーピングテスト
     * @test
     */
    public function typeGrouping()
    {
        $data = Ginq::from($this->discs);
        $results = $data->toLookup(
            function ($v) { return $v->type; },
            function ($v) { return [$v->name, $v->price]; }
        )->toArrayRec();

        $this->assertThat($results, $this->equalTo([
            'single' => [
                ['disc1', 1000],
                ['disc3', 1500],
                ['disc5', 1000],
                ['disc7', 1000],
            ],
            'album' => [
                ['disc2', 3000],
                ['disc6', 1500],
            ],
            'compilation' => [
                ['disc4', 3000],
            ],
        ]));
    }

    /**
     * 価格でのグルーピングテスト
     * @test
     */
    public function priceGrouping()
    {
        $data = Ginq::from($this->discs);
        // グルーピング後のprice, nameでソートしている
        $results = $data->orderBy('price')
        ->thenBy('name')
        ->toLookup(
            function ($v) { return $v->price; },
            function ($v) { return [$v->name, $v->type]; }
        )->toArrayRec();

        $this->assertThat($results, $this->equalTo([
            1000 => [
                ['disc1', 'single'],
                ['disc5', 'single'],
                ['disc7', 'single'],
            ],
            1500 => [
                ['disc3', 'single'],
                ['disc6', 'album'],
            ],
            3000 => [
                ['disc2', 'album'],
                ['disc4', 'compilation'],
            ],
        ]));
    }
}
