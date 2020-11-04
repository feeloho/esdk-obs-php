<?php
/**
 * Created by PhpStorm.
 * User: zhaolin
 * Email: 79534505@qq.com
 * Date Time: 2020-11-04 17:46
 */

namespace Feeloho\Obs;

use Illuminate\Support\Facades\Facade;

class ObsFacede extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Obs';
    }
}