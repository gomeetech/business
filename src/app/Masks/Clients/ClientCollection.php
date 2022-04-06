<?php
namespace Gomee\Business\Masks\Clients;

use Gomee\Masks\MaskCollection;

class ClientCollection extends MaskCollection
{
    /**
     * lấy tên class mask tương ứng
     *
     * @return string
     */
    public function getMask()
    {
        return ClientMask::class;
    }
    // xem Collection mẫu ExampleCollection
}
