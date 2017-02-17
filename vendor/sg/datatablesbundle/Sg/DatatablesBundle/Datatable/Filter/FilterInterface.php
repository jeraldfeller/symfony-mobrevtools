<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\DatatablesBundle\Datatable\Filter;

use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query\Expr\Andx;

/**
 * Interface FilterInterface
 *
 * @package Sg\DatatablesBundle\Datatable\Filter
 */
interface FilterInterface
{
    /**
     * Get property.
     *
     * @return string
     */
    public function getProperty();

    /**
     * Get template.
     *
     * @return string
     */
    public function getTemplate();

    /**
     * Add a condition.
     *
     * @param Andx         $andExpr
     * @param QueryBuilder $pivot
     * @param string       $searchField
     * @param mixed        $searchValue
     * @param integer      $i
     *
     * @return Andx
     */
    public function addAndExpression(Andx $andExpr, QueryBuilder $pivot, $searchField, $searchValue, &$i);

    /**
     * Get alias.
     *
     * @return string
     */
    public function getAlias();
}
