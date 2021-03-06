<?php

namespace EletronicData\Field;

use EletronicData\Format\FormatInterface;
use EletronicData\Type\TypeInterface;

interface FieldInterface
{

    /**
     * Sets the sequential number.
     *
     * @param int $sequential
     *
     * @return FieldInterface
     */
    public function setSequential($sequential);

    /**
     * Gets the sequential number.
     * @return int
     */
    public function getSequential();

    /**
     * Sets field name.
     *
     * @param string $name
     *
     * @return FieldInterface
     */
    public function setName($name);

    /**
     * Gets the field name.
     * @return mixed
     */
    public function getName();

    /**
     * Sets the field description.
     *
     * @param string $description
     *
     * @return FieldInterface
     */
    public function setDescription($description);

    /**
     * Gets the field description.
     * @return mixed
     */
    public function getDescription();

    /**
     * Sets the start position of field value.
     *
     * @param int $position
     *
     * @return FieldInterface
     */
    public function setStartPosition($position);

    /**
     * Gets the start position of field value.
     * @return int
     */
    public function getStartPosition();

    /**
     * Gets the end position of field value.
     * Will Calculate start postion plus length.
     * @return int
     */
    public function getEndPosition();

    /**
     * Sets the max length of value.
     *
     * @param int $length
     *
     * @return FieldInterface
     */
    public function setLength($length);

    /**
     * Gets the max length of value.
     * @return int
     */
    public function getLength();

    /**
     * Sets the field type.
     *
     * @param TypeInterface $type
     *
     * @return FieldInterface
     */
    public function setType(TypeInterface $type);

    /**
     * Gets the field type.
     * @return TypeInterface
     */
    public function getType();

    /**
     * Sets the value format.
     *
     * @param FormatInterface $type
     *
     * @return FieldInterface
     */
    public function setFormat(FormatInterface $type);

    /**
     * Gets the value format.
     * @return FormatInterface
     */
    public function getFormat();

    /**
     * Sets the field value.
     *
     * @param mixed $value
     *
     * @return FieldInterface
     */
    public function setValue($value);

    /**
     * Gets the field value.
     * @return mixed
     */
    public function getValue();

    /**
     * Sets the default field value.
     *
     * @param mixed $value
     *
     * @return FieldInterface
     */
    public function setDefaultValue($value);

    /**
     * Gets the default field value.
     * @return mixed
     */
    public function getDefaultValue();

    /**
     * @return string
     */
    public function getFormattedValue();
}