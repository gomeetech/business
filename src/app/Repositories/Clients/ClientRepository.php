<?php

namespace Gomee\Business\Repositories\Clients;

use Gomee\Repositories\BaseRepository;
/**
 * validator 
 * 
 */
use Gomee\Business\Validators\Clients\ClientValidator;
use Gomee\Business\Masks\Clients\ClientMask;
use Gomee\Business\Masks\Clients\ClientCollection;
class ClientRepository extends BaseRepository
{
    /**
     * class chứ các phương thức để validate dử liệu
     * @var string $validatorClass 
     */
    protected $validatorClass = ClientValidator::class;
    /**
     * tên class mặt nạ. Thường có tiền tố [tên thư mục] + \ vá hậu tố Mask
     *
     * @var string
     */
    protected $maskClass = ClientMask::class;

    /**
     * tên collection mặt nạ
     *
     * @var string
     */
    protected $maskCollectionClass = ClientCollection::class;

    /**
     * @var \App\Models\Client
     */
    static $__Model__;

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Client::class;
    }

}