<?php

namespace App\Modules\Base\Database;

use App\Modules\Base\Models\Group;
use App\Modules\Base\Models\GroupType;
use App\Modules\Base\Models\User;
use App\Modules\Base\Models\UserGroup;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->createAdminUserAndGroup();
//        $this->createRegularUsersAndGroups(5, 4);
    }

    public function createAdminUserAndGroup()
    {
        $user = new User();
        $user->fill([
            User::FIELD_NAME => 'Administrator',
            User::FIELD_EMAIL => 'admin@admin.bg',
            User::FIELD_EMAIL_VERIFIED_AT => Carbon::today(),
            User::FIELD_PASSWORD => Hash::make('password'),
            User::FIELD_REMEMBER_TOKEN => '',
        ])->save();

        $group = new Group();
        $group->fill([
            Group::FIELD_NAME           => 'Admin',
            Group::FIELD_DESCRIPTION    => 'User group for administrators',
            Group::FIELD_TYPE           => GroupType::User
        ]);
        $group->save();

        (new UserGroup())->fill([
            UserGroup::FIELD_USER_ID => $user->getAttribute(User::FIELD_ID),
            UserGroup::FIELD_GROUP_ID => $group->getAttribute(Group::FIELD_ID)
        ])->save();
    }

    public function createRegularUsersAndGroups(int $numberOfGroups, int $usersPerGroup)
    {
        Group::factory($numberOfGroups)->create([
            Group::FIELD_TYPE => GroupType::User
        ])->each(function ($group) use ($usersPerGroup) {
            User::factory($usersPerGroup)->create()->each(function ($user) use ($group) {
                (new UserGroup())->fill([
                    UserGroup::FIELD_USER_ID => $user->getAttribute(User::FIELD_ID),
                    UserGroup::FIELD_GROUP_ID => $group->getAttribute(Group::FIELD_ID)
                ])->save();
            });
        });
    }

}
