<?php

namespace App\Core;

use Illuminate\Support\Collection;
use Illuminate\Foundation\Bus\DispatchesJobs;

trait ServesFeaturesTrait
{
    use MarshalTrait;
    use DispatchesJobs;

    /**
     * Serve the given feature with the given arguments.
     *
     * @param string $feature
     * @param array $arguments
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function serve($feature, $arguments = [])
    {
        return $this->dispatch($this->marshal($feature, new Collection(), $arguments));
    }
}
