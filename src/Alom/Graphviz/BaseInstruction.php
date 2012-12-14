<?php
/*
 * This file is part of Alom Graphviz.
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alom\Graphviz;

/**
 * Base class for Graphviz instructions.
 *
 * @author Alexandre Salomé <alexandre.salome@gmail.com>
 */
abstract class BaseInstruction implements InstructionInterface
{
    /**
     * Renders an inline assignment (without indent or end return line).
     *
     * It will handle escaping, according to the value.
     *
     * @param string $name  A name
     * @param string $value A value
     *
     * @return string
     */
    protected function renderInlineAssignment($name, $value)
    {
        return $name . '=' . $value;
    }
}
