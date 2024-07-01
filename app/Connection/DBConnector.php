<?php

namespace App\Connection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class DBConnector
{
    /**
     * Create a new class instance.
     */
    public function getDB(Request $request){
        $db = [
            'db_host' =>  $request->input('db_host'),
            'db_port'=>  $request->input('db_port'),
            'db_name' =>  $request->input('db_name'),
            'db_username' =>  $request->input('db_username'),
            'db_password' =>  $request->input('db_password'),
            'db_prefix' => $request->input('db_prefix'),
        ];
        $filePath = '../config/database.php';
        $dbValue = file_get_contents($filePath);
        $dbEdit = include $filePath;
        $dbEdit['connections']['mysql']['host'] = $db['db_host'];
        $dbEdit['connections']['mysql']['port'] = $db['db_port'];
        $dbEdit['connections']['mysql']['database'] = $db['db_name'];
        $dbEdit['connections']['mysql']['username'] = $db['db_username'];
        $dbEdit['connections']['mysql']['password'] = $db['db_password'];
        $dbEdit['connections']['mysql']['prefix'] = $db['db_prefix'];
        $newContents = "<?php\n\nreturn " . var_export($dbEdit, true) . ";\n";
        file_put_contents($filePath, $newContents);
        Artisan::call('config:clear');
        return redirect()->route('check-db');
    }
        public function checkDB(){
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
