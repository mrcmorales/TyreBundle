<?php

namespace MrcMorales\TyreBundle\Enum;

/**
 * Class SeasonTyreTypeEnum
 */
class SeasonTyreTypeEnum extends Enum
{
    const SUMMER = 1;
    const WINTER = 2;
    const ALL_SEASON = 3;

    /**
     * @return array
     */
    public static function getTranslations()
    {
        return array(
            static::SUMMER => 'type.season_type.summer',
            static::WINTER => 'type.season_type.winter',
            static::ALL_SEASON => 'type.season_type.all_season',
        );
    }
}
