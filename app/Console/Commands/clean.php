<?php

namespace App\Console\Commands;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To seed the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate:refresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $user = new User();
        $user->name = 'Raheel Anwaar';
        $user->email = 'raheelanwaar0316@gmail.com';
        $user->email_verified_at = now();
        $user->date_of_birth = '1996-03-16';
        $user->phone_number = '0316-1234567';
        $user->country = 'Pakistan';
        $user->account_type = 'verified';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->save();

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'raheelanwaar834@gmial.com';
        $user->email_verified_at = now();
        $user->date_of_birth = '1996-03-16';
        $user->phone_number = '0316-1234567';
        $user->country = 'Pakistan';
        $user->account_type = 'verified';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'admin';
        $user->save();

    }
}
