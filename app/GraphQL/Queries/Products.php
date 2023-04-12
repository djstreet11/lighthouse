<?php

namespace App\GraphQL\Queries;

use Nuwave\Lighthouse\Execution\ResolveInfo;
use Nuwave\Lighthouse\Schema\TypeRegistry;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

final class Products
{
    public function __invoke($_, array $args)
    {
        return 'test';
//        return [
//            'page'=>$args['page'],
//            'count'=>$args['count'],
//        ];
    }
}
