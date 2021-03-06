<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 14-Jun-18
 * Time: 00:52
 */

namespace App\Student\Search;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesSearch extends Search
{

    /**
     * @param Request $filters
     * @param $pageResults
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function apply(Request $filters, $pageResults = 15)
    {
        $query = parent::applyDecoratorFromRequest($filters, (new Company())->newQuery());

        $query->whereNotNull('company_name')
            ->whereNotNull('description')
            ->whereNotNull('location');

        $page = $filters->get('page');
        if ($page) {
            return parent::getResults($query, $pageResults, $page);
        } else {
            return parent::getResults($query, $pageResults);
        }
    }
}
