<?php

namespace Salamek\Zasilkovna\Model;


class Size implements IModel
{
    /** @var int */
    private $length;

    /** @var int */
    private $width;

    /** @var int */
    private $height;

    /**
     * PacketAttributes constructor.
     * @param $length
     * @param $width
     * @param $height
     */
    public function __construct(
        $length,
        $width,
        $height
    )
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @param int $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }
}
