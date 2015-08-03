<?php

namespace Lexik\Bundle\FormFilterBundle\Filter\Doctrine\Expression;

use Doctrine\ODM\MongoDB\Query\Expr;

class ODMExpressionBuilder extends ExpressionBuilder
{
    /**
     * Construct.
     *
     * @param Expr $expr
     */
    public function __construct(Expr $expr, $forceCaseInsensitivity)
    {
        $this->expr = $expr;
        parent::__construct($forceCaseInsensitivity);
    }
}
