<?php

namespace App\Enums;

enum ProductStatusEnum: string
{
    case Draft = 'draft';
    case Published = 'published';

    public static function label(): array
    {
        return [
            self::Draft->value => __('Draft'),
            self::Published->value => __('Published'),
        ];

    }


    public static function colors(): array
    {
        return [
            self::Draft->value => 'gray',
            self::Published->value => 'success',
        ];
    }

}
