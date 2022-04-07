<?php

namespace Gomee\Business\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;

use Illuminate\Http\Request;
use Gomee\Helpers\Arr;

use TestSPACERepositories\Tests\TestRepository;

class TestController extends AdminController
{
    protected $module = 'tests';

    protected $moduleName = 'Test';

    protected $flashMode = true;

    /**
     * repository chinh
     *
     * @var TestRepository
     */
    public $repository;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TestRepository $repository)
    {
        $this->repository = $repository;
        $this->init();
    }

}
