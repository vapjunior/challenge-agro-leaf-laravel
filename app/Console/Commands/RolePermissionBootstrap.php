<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionBootstrap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel_web:bootstrap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create roles and permissions';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $roles = ["Admin", "Viewer"];

        $permissions = [
            "Create Locations",
            "Edit Locations",
            "View All Locations",
            "Select Area",
            "Edit Area",
            "View All Areas",
            "View All Users",
            "Assign Role",
            "Unassign Role",
            "View All Permissions",
            "View All Roles",
        ];

        $viewerPermissions = [
            "View All Locations",
            "View All Areas",
        ];

        $this->line('Setting Up Roles:');

        foreach($roles as $role) {
            $role = Role::updateOrCreate(['name' => $role, 'guard_name' => 'web']);
            $this->info('Created ' . $role->name . ' Role');
        }

        $this->line('Setting Up Permissions:');


        // GIVE PERMISSIONS TO ADMIN ROLE
        $adminRole = Role::where('name', 'Admin')->first();
        foreach($permissions as $pName) {
            $permission = Permission::updateOrCreate(['name' => $pName, 'guard_name' => 'web']);

            $adminRole->givePermissionTo($permission);
            $this->info('Created ' . $permission->name . ' Permission');
        }

        // GIVER PERMISSION TO VIEWER ROLE 
        $viewerRole = Role::where('name', 'Viewer')->first();
        
        foreach($viewerPermissions as $pName) {
            
            $permission = Permission::where('name', $pName)->first();
            $viewerRole->givePermissionTo($permission->name);
            $this->info('Granted ' . $permission->name . ' Viewer Permission');
        }

        $this->info('All permissions are granted to Admin');
        $this->info('Some permissions are granted to Viewer');
        $this->line('Application is Complete');
    }
}
