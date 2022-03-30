<?php
declare(strict_types=1);
namespace LaravelKeep2Share\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Keep2Share
 * @package Keep2Share\Facades
 */
class Keep2Share extends Facade
{
    protected static function getFacadeAccessor() {
        return 'keep2share';
    }
}