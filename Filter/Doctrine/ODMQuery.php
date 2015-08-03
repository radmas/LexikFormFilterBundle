<?php

namespace Lexik\Bundle\FormFilterBundle\Filter\Doctrine;

use Lexik\Bundle\FormFilterBundle\Filter\Condition\Condition;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Doctrine\Expression\ODMExpressionBuilder;
use Doctrine\ODM\MongoDB\Query\Builder as QueryBuilder;

/**
 * @author Jeremy Barthe <j.barthe@lexik.fr>
 */
class ODMQuery implements QueryInterface
{
    /**
     * @var QueryBuilder $queryBuilder
     */
    private $queryBuilder;

    /**
     * @var ODMExpressionBuilder $expr
     */
    private $expressionBuilder;

    /**
     * Constructor.
     *
     * @param QueryBuilder $queryBuilder
     * @param boolean      $forceCaseInsensitivity
     */
    public function __construct(QueryBuilder $queryBuilder, $forceCaseInsensitivity = false)
    {
        $this->queryBuilder      = $queryBuilder;
        $this->expressionBuilder = new ODMExpressionBuilder(
            $this->queryBuilder->expr(),
            $forceCaseInsensitivity
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getEventPartName()
    {
        return 'odm';
    }

    /**
     * {@inheritDoc}
     */
    public function getQueryBuilder()
    {
        return $this->queryBuilder;
    }

    /**
     * {@inheritDoc}
     */
    public function createCondition($expression, array $parameters = array())
    {
        return new Condition($expression, $parameters);
    }

    /**
     * Get QueryBuilder expr.
     *
     * @return \Doctrine\ODM\MongoDB\Query\Expr
     */
    public function getExpr()
    {
        return $this->queryBuilder->expr();
    }

    /**
     * {@inheritDoc}
     */
    public function getRootAlias()
    {
        return 'r';
    }

    /**
     * {@inheritDoc}
     */
    public function hasJoinAlias($joinAlias)
    {
        return false;
    }

    /**
     * Get expr class.
     *
     * @return \Lexik\Bundle\FormFilterBundle\Filter\Doctrine\Expression\ExpressionBuilder
     */
    public function getExpressionBuilder()
    {
        return $this->expressionBuilder;
    }
}