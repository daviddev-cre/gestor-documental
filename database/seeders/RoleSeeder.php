<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $role_admin = Role::create(['name' => 'admin']);
            $role_review = Role::create(['name' => 'review']);
            $role_user = Role::create(['name' => 'user']);
    
            $permission_roles_create = Permission::create(['name' => 'create_role']);
            $permission_roles_read = Permission::create(['name' => 'read_role']);
            $permission_roles_update = Permission::create(['name' => 'update_role']);
            $permission_roles_delete = Permission::create(['name' => 'delete_role']);
    
            $permission_administration_condition_create = Permission::create(['name' => 'create_administracion_condition']);
            $permission_administration_condition_read = Permission::create(['name' => 'read_administracion_condition']);
            $permission_administration_condition_update = Permission::create(['name' => 'update_administracion_condition']);
            $permission_administration_condition_delete = Permission::create(['name' => 'delete_administracion_condition']);
    
            $permission_financial_condition_create = Permission::create(['name' => 'create_financial_condition']);
            $permission_financial_condition_read = Permission::create(['name' => 'read_financial_condition']);
            $permission_financial_condition_update = Permission::create(['name' => 'update_financial_condition']);
            $permission_financial_condition_delete = Permission::create(['name' => 'delete_financial_condition']);
    
            $permission_humant_talent_create = Permission::create(['name' => 'create_humant_talent']);
            $permission_humant_talent_read = Permission::create(['name' => 'read_humant_talent']);
            $permission_humant_talent_update = Permission::create(['name' => 'update_humant_talent']);
            $permission_humant_talent_delete = Permission::create(['name' => 'delete_humant_talent']);
    
            $permission_infraestructure_create = Permission::create(['name' => 'create_infraestructure']);
            $permission_infraestructure_read = Permission::create(['name' => 'read_infraestructure']);
            $permission_infraestructure_update = Permission::create(['name' => 'update_infraestructure']);
            $permission_infraestructure_delete = Permission::create(['name' => 'delete_infraestructure']);
    
            $permission_Endowment_create = Permission::create(['name' => 'create_endowment']);
            $permission_Endowment_read = Permission::create(['name' => 'read_endowment']);
            $permission_Endowment_update = Permission::create(['name' => 'update_endowment']);
            $permission_Endowment_delete = Permission::create(['name' => 'delete_endowment']);
    
            $permission_meds_create = Permission::create(['name' => 'create_meds']);
            $permission_meds_read = Permission::create(['name' => 'read_meds']);
            $permission_meds_update = Permission::create(['name' => 'update_meds']);
            $permission_meds_delete = Permission::create(['name' => 'delete_meds']);
    
            $permission_priority_processes_create = Permission::create(['name' => 'create_priority_processes']);
            $permission_priority_processes_read = Permission::create(['name' => 'read_priority_processes']);
            $permission_priority_processes_update = Permission::create(['name' => 'update_priority_processes']);
            $permission_priority_processes_delete = Permission::create(['name' => 'delete_priority_processes']);
    
            $permission_medical_records_create = Permission::create(['name' => 'create_medical_records']);
            $permission_medical_records_read = Permission::create(['name' => 'read_medical_records']);
            $permission_medical_records_update = Permission::create(['name' => 'update_medical_records']);
            $permission_medical_records_delete = Permission::create(['name' => 'delete_medical_records']);
    
            $permission_service_interdependencies_create = Permission::create(['name' => 'create_service_interdependecies']);
            $permission_service_interdependencies_read = Permission::create(['name' => 'read_service_interdependecies']);
            $permission_service_interdependencies_update = Permission::create(['name' => 'update_service_interdependecies']);
            $permission_service_interdependencies_delete = Permission::create(['name' => 'delete_service_interdependecies']);
    
            $permission_admin = [
                $permission_roles_create, $permission_roles_read,$permission_roles_update,$permission_roles_delete,
                $permission_administration_condition_create, $permission_administration_condition_read, $permission_administration_condition_update,  $permission_administration_condition_delete,
                $permission_financial_condition_create, $permission_financial_condition_read, $permission_financial_condition_update, $permission_financial_condition_delete,
                $permission_humant_talent_create, $permission_humant_talent_read, $permission_humant_talent_update, $permission_humant_talent_delete,
                $permission_infraestructure_create, $permission_infraestructure_read, $permission_infraestructure_update, $permission_infraestructure_delete,
                $permission_Endowment_create, $permission_Endowment_read, $permission_Endowment_update, $permission_Endowment_delete,
                $permission_meds_create, $permission_meds_read, $permission_meds_update, $permission_meds_delete,
                $permission_priority_processes_create, $permission_priority_processes_read, $permission_priority_processes_update, $permission_priority_processes_delete,
                $permission_medical_records_create, $permission_medical_records_read, $permission_medical_records_update, $permission_medical_records_delete,
                $permission_service_interdependencies_create,  $permission_service_interdependencies_read,  $permission_service_interdependencies_update,  $permission_service_interdependencies_delete
            ];
    
            $permission_review = [
                $permission_administration_condition_create, $permission_administration_condition_read, $permission_administration_condition_update,
                $permission_financial_condition_create, $permission_financial_condition_read, $permission_financial_condition_update,
                $permission_humant_talent_create, $permission_humant_talent_read, $permission_humant_talent_update,
                $permission_infraestructure_create, $permission_infraestructure_read, $permission_infraestructure_update,
                $permission_Endowment_create, $permission_Endowment_read, $permission_Endowment_update,
                $permission_meds_create, $permission_meds_read, $permission_meds_update,
                $permission_priority_processes_create, $permission_priority_processes_read, $permission_priority_processes_update,
                $permission_medical_records_create, $permission_medical_records_read, $permission_medical_records_update,
                $permission_service_interdependencies_create,  $permission_service_interdependencies_read,  $permission_service_interdependencies_update
            ];
    
            $permission_user = [
                $permission_administration_condition_create, $permission_administration_condition_read, $permission_administration_condition_update,
                $permission_financial_condition_create, $permission_financial_condition_read, $permission_financial_condition_update,
                $permission_humant_talent_create, $permission_humant_talent_read, $permission_humant_talent_update,
                $permission_infraestructure_create, $permission_infraestructure_read, $permission_infraestructure_update,
                $permission_Endowment_create, $permission_Endowment_read, $permission_Endowment_update,
                $permission_meds_create, $permission_meds_read, $permission_meds_update,
                $permission_priority_processes_create, $permission_priority_processes_read, $permission_priority_processes_update,
                $permission_medical_records_create, $permission_medical_records_read, $permission_medical_records_update,
                $permission_service_interdependencies_create,  $permission_service_interdependencies_read,  $permission_service_interdependencies_update
            ];
    
            $role_admin->syncPermissions($permission_admin);
            $role_review->syncPermissions($permission_review );
            $role_user->syncPermissions($permission_user);
        }
    }
}
