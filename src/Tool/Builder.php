<?php

namespace PayEye\Lib\Tool;

trait Builder
{
    public static function builder(): self
    {
        return new self();
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->objectToArray($this);
    }

    /**
     * @param object $object
     * @return array
     */
    private function objectToArray(object $object): array
    {
        $array = get_object_vars($object);

        foreach ($array as $key => $item) {
            if (is_object($item)) {
                $array[$key] = $item->toArray();
            }
        }

        return $array;
    }
}
