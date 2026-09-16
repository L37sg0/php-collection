<?php

namespace  App\Modules\Base\Integration;

use RuntimeException;

/**
 * @package Base
 */
trait HasAttributes
{
    protected $data = [];

    /**
     * Setter/Getter
     * @param $name
     * @param $arguments
     * @return mixed|null
     * @throws RuntimeException
     */
    public function __call($name, $arguments)
    {
        $prefix = substr($name, 0, 3);
        if (in_array($prefix, ['set', 'get']) && !method_exists($this, $name)) {
            $property = substr_replace($name, '', 0, 3);
            if ($prefix === 'set') {
                $this->data[$property] = $arguments[0];
            } else {
                return $this->data[$property];
            }

            return $this;
        }

        if (method_exists($this, $name) || (property_exists($this, $name) && is_callable($this->$name))) {
            return call_user_func_array([$this, $name], $arguments);
        }

        throw new RuntimeException(sprintf("Method [%s] doesn't exists in class [%s].", $name, get_class($this)));
    }

    public function getData()
    {
        return $this->data;
    }
}
