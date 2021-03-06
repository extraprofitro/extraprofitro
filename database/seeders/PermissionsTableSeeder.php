<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 40,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 41,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 42,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 43,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 44,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 45,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 46,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 47,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 48,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 49,
                'title' => 'expense_create',
            ],
            [
                'id'    => 50,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 51,
                'title' => 'expense_show',
            ],
            [
                'id'    => 52,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 53,
                'title' => 'expense_access',
            ],
            [
                'id'    => 54,
                'title' => 'income_create',
            ],
            [
                'id'    => 55,
                'title' => 'income_edit',
            ],
            [
                'id'    => 56,
                'title' => 'income_show',
            ],
            [
                'id'    => 57,
                'title' => 'income_delete',
            ],
            [
                'id'    => 58,
                'title' => 'income_access',
            ],
            [
                'id'    => 59,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 60,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 61,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 62,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 63,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 64,
                'title' => 'datefacturare_create',
            ],
            [
                'id'    => 65,
                'title' => 'datefacturare_edit',
            ],
            [
                'id'    => 66,
                'title' => 'datefacturare_show',
            ],
            [
                'id'    => 67,
                'title' => 'datefacturare_access',
            ],
            [
                'id'    => 68,
                'title' => 'team_create',
            ],
            [
                'id'    => 69,
                'title' => 'team_edit',
            ],
            [
                'id'    => 70,
                'title' => 'team_show',
            ],
            [
                'id'    => 71,
                'title' => 'team_delete',
            ],
            [
                'id'    => 72,
                'title' => 'team_access',
            ],
            [
                'id'    => 73,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 74,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 75,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 76,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 77,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 78,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 79,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
