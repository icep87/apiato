<?php

namespace App\Containers\User\Settings\Repositories;

use App\Containers\User\Contracts\UserRepositoryInterface;
use App\Containers\User\Models\User;
use App\Port\Repository\Abstracts\Repository;

/**
 * Class UserRepository.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UserRepository extends Repository implements UserRepositoryInterface
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'          => 'like',
        'platform'      => 'like',
        'device'        => 'like',
        'birth'         => 'like',
        'gender'        => '=',
        'id'            => '=',
        'visitor_id'    => '=',
        'email'         => '=',
        'points'        => '=',
        'referral_code' => '=',
    ];

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }
}
