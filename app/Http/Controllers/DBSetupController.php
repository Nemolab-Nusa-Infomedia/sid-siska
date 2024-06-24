<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class DBSetupController extends Controller
{
    public function getDB(Request $request){
        $db = [
            'db_host' =>  $request->input('db_host'),
            'db_port'=>  $request->input('db_port'),
            'db_name' =>  $request->input('db_name'),
            'db_username' =>  $request->input('db_username'),
            'db_password' =>  $request->input('db_password'),
            'db_prefix' => $request->input('db_prefix'),
        ];
        $envContent = file_get_contents(base_path('.env'));
        $envContent = str_replace('DB_HOST=' . env('DB_HOST'), 'DB_HOST=' . $db['db_host'], $envContent);
        $envContent = str_replace('DB_PORT=' . env('DB_PORT'), 'DB_PORT=' . $db['db_port'], $envContent);
        $envContent = str_replace('DB_DATABASE=' . env('DB_DATABASE'), 'DB_DATABASE=' . $db['db_name'], $envContent);
        $envContent = str_replace('DB_USERNAME=' . env('DB_USERNAME'), 'DB_USERNAME=' . $db['db_username'], $envContent);
        $envContent = str_replace('DB_PASSWORD=' . env('DB_PASSWORD'), 'DB_PASSWORD=' . $db['db_password'], $envContent);
        file_put_contents(base_path('.env'), $envContent);

        try {
            DB::connection()->getPdo();
            return redirect()->route('confirm-database')->with('success', 'Database setup completed!');
        } catch (\Exception $e) {
            return redirect()->route('confirm-database')->with('error', 'Database setup failed!');
        }

    }

    public function migrateDB(){
        try {
            DB::purge('mysql');
            DB::reconnect('mysql');
            Artisan::call('migrate', ['--force' => true]);
            // Artisan::call('key:generate');
            return redirect()->route('config-akun');
        } catch (Exception $e) {
            return redirect()->route('confirm-database')>with('error', 'Database setup failed!');
        }
    }
}
