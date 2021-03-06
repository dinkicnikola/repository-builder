<?php
/**
 * Created by PhpStorm.
 * User: Dinkic
 * Date: 10/9/2019
 * Time: 3:03 PM
 */

namespace Dinkara\RepoBuilder\Utils;


class AvailableRestQueryParams
{
    //FILTER PARAMS
    const EQ = '_eq';
    const NE = '_ne';
    const LT = '_lt';
    const GT = '_gt';
    const LTE = '_lte';
    const GTE = '_gte';
    const IN = '_in';
    const NIN = '_nin';
    const NIL = '_nil';
    const NNIL = '_nnil';
    const BTW = '_btw';
    const NBTW = '_nbtw';
    const CNT = '_cnt';
    const NCNT = '_ncnt';

    //ADDITIONAL PARAMS
    const _SORT = '_sort';
    const _PAGE = 'page';
    const _LIMIT = '_limit';
    const _WHERE = '_where';

    //SORT PARAMS
    const ASC = 'asc';
    const DESC = 'desc';

    //Operations
    const WHERE = 'where';
    const WHERE_IN = 'whereIn';
    const WHERE_NOT_IN = 'whereNotIn';
    const WHERE_NULL = 'whereNull';
    const WHERE_NOT_NULL = 'whereNotNull';
    const WHERE_BETWEEN = 'whereBetween';
    const WHERE_NOT_BETWEEN = 'whereNotBetween';

    public static function filters(){
        return [
            self::EQ,
            self::NE,
            self::LT,
            self::GT,
            self::LTE,
            self::GTE,
            self::IN,
            self::NIN,
            self::NIL,
            self::NNIL,
            self::BTW,
            self::NBTW,
            self::CNT,
            self::NCNT,
        ];
    }

    public static function additionalFilters(){
        return [
            self::_START,
            self::_LIMIT,
            self::_SORT,
        ];
    }

    public static function sortDirections(){
        return [
            self::ASC,
            self::DESC,
        ];
    }
    public static function paginateParams(){
        return [
            self::_START,
            self::_LIMIT,
        ];
    }

    public static function textToOperator($textOperator){
        $operator = '=';
        switch ($textOperator){
            case self::GT:
                $operator = '>';
                break;
            case self::LT:
                $operator = '<';
                break;
            case self::GTE:
                $operator = '>=';
                break;
            case self::LTE:
                $operator = '<=';
                break;
            case self::CNT:
                $operator = 'like';
                break;
            case self::NCNT:
                $operator = 'not like';
                break;
            default:
                $operator = '=';
                break;

        }
        return $operator;
    }


}