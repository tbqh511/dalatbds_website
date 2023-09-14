<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin_menu
        $data = [
            [NULL, '0', '1', 'Dashboard', 'fa-bar-chart', '/', NULL, NULL, NULL],
            [NULL, '0', '34', 'Admin', 'fa-tasks', '', NULL, NULL, '2023-06-07 16:26:38'],
            [NULL, '2', '35', 'Users', 'fa-users', 'auth/users', NULL, NULL, '2023-06-07 16:26:38'],
            [NULL, '2', '36', 'Roles', 'fa-user', 'auth/roles', NULL, NULL, '2023-06-07 16:26:38'],
            [NULL, '2', '37', 'Permission', 'fa-ban', 'auth/permissions', NULL, NULL, '2023-06-07 16:26:38'],
            [NULL, '2', '38', 'Menu', 'fa-bars', 'auth/menu', NULL, NULL, '2023-06-07 16:26:38'],
            [NULL, '2', '39', 'Operation log', 'fa-history', 'auth/logs', NULL, NULL, '2023-06-07 16:26:38'],
            [NULL, '0', '40', 'Helpers', 'fa-gears', '', NULL, '2023-06-07 14:33:24', '2023-06-07 16:26:38'],
            [NULL, '8', '41', 'Scaffold', 'fa-keyboard-o', 'helpers/scaffold', NULL, '2023-06-07 14:33:24', '2023-06-07 16:26:38'],
            [NULL, '8', '42', 'Database terminal', 'fa-database', 'helpers/terminal/database', NULL, '2023-06-07 14:33:24', '2023-06-07 16:26:38'],
            [NULL, '8', '43', 'Laravel artisan', 'fa-terminal', 'helpers/terminal/artisan', NULL, '2023-06-07 14:33:24', '2023-06-07 16:26:38'],
            [NULL, '8', '44', 'Routes', 'fa-list-alt', 'helpers/routes', NULL, '2023-06-07 14:33:24', '2023-06-07 16:26:38'],
            [NULL, '0', '27', 'Location', 'fa-location-arrow', '/#', '*', '2023-06-07 16:07:01', '2023-06-07 16:24:19'],
            [NULL, '0', '23', 'Post', 'fa-newspaper-o', '/#', '*', '2023-06-07 16:07:54', '2023-06-07 16:22:45'],
            [NULL, '0', '13', 'Real Estate', 'fa-home', '/#', '*', '2023-06-07 16:08:41', '2023-06-07 16:22:45'],
            [NULL, '0', '2', 'CRM Sytems', 'fa-star', '/#', '*', '2023-06-07 16:09:53', '2023-06-07 16:10:15'],
            [NULL, '17', '4', 'Contacts', 'fa-book', '/crm-contacts', '*', '2023-06-07 16:13:23', '2023-06-07 16:15:14'],
            [NULL, '17', '3', 'Customers Info', 'fa-comment-o', '/crm-customers', '*', '2023-06-07 16:15:05', '2023-06-07 16:15:14'],
            [NULL, '17', '5', 'Customer Address', 'fa-hand-pointer-o', '/crm-customer-addresses', '*', '2023-06-07 16:15:58', '2023-06-07 16:16:04'],
            [NULL, '17', '6', 'Deals', 'fa-adn', '/crm-deals', '*', '2023-06-07 16:17:17', '2023-06-07 16:18:10'],
            [NULL, '17', '7', 'crm-deal-assigneds', 'fa-bars', '/crm-deal-assigneds', '*', '2023-06-07 16:17:32', '2023-06-07 16:18:10'],
            [NULL, '17', '8', 'crm-deal-commissions', 'fa-bars', '/crm-deal-commissions', '*', '2023-06-07 16:17:46', '2023-06-07 16:18:10'],
            [NULL, '17', '12', 'crm-deal-products', 'fa-bars', '/crm-deal-products', '*', '2023-06-07 16:18:25', '2023-06-07 16:22:45'],
            [NULL, '17', '11', 'crm-deal-statuses', 'fa-bars', '/crm-deal-statuses', '*', '2023-06-07 16:18:39', '2023-06-07 16:22:45'],
            [NULL, '17', '10', 'crm-leads', 'fa-bars', '/crm-leads', '*', '2023-06-07 16:18:53', '2023-06-07 16:22:45'],
            [NULL, '17', '9', 'crm-lead-sources', 'fa-bars', '/crm-lead-sources', '*', '2023-06-07 16:19:06', '2023-06-07 16:22:45'],
            [NULL, '16', '14', 'products', 'fa-bars', '/products', '*', '2023-06-07 16:19:43', '2023-06-07 16:22:45'],
            [NULL, '16', '19', 'product-addresses', 'fa-bars', '/product-addresses', '*', '2023-06-07 16:19:57', '2023-06-07 16:22:45'],
            [NULL, '16', '21', 'product-legals', 'fa-bars', '/product-legals', '*', '2023-06-07 16:20:08', '2023-06-07 16:22:45'],
            [NULL, '16', '22', 'product-metas', 'fa-bars', '/product-metas', '*', '2023-06-07 16:20:22', '2023-06-07 16:22:45'],
            [NULL, '16', '20', 'product-product-types', 'fa-bars', '/product-product-types', '*', '2023-06-07 16:20:34', '2023-06-07 16:22:45'],
            [NULL, '16', '18', 'product-terms', 'fa-bars', '/product-terms', '*', '2023-06-07 16:20:54', '2023-06-07 16:22:45'],
            [NULL, '16', '17', 'product-term-relationships', 'fa-bars', '/product-term-relationships', '*', '2023-06-07 16:21:07', '2023-06-07 16:22:45'],
            [NULL, '16', '16', 'product-term-taxonomies', 'fa-bars', '/product-term-taxonomies', '*', '2023-06-07 16:21:28', '2023-06-07 16:22:45'],
            [NULL, '16', '15', 'product-types', 'fa-bars', '/product-types', '*', '2023-06-07 16:21:40', '2023-06-07 16:22:45'],
            [NULL, '15', '24', 'posts', 'fa-bars', '/posts', '*', '2023-06-07 16:23:35', '2023-06-07 16:24:19'],
            [NULL, '15', '25', 'post-metas', 'fa-bars', '/post-metas', '*', '2023-06-07 16:23:47', '2023-06-07 16:24:19'],
            [NULL, '15', '26', 'post-types', 'fa-bars', '/post-types', '*', '2023-06-07 16:23:57', '2023-06-07 16:24:19'],
            [NULL, '14', '33', 'administrative-regions', 'fa-bars', '/administrative-regions', '*', '2023-06-07 16:24:40', '2023-06-07 16:26:38'],
            [NULL, '14', '32', 'administrative-units', 'fa-bars', '/administrative-units', '*', '2023-06-07 16:25:09', '2023-06-07 16:26:38'],
            [NULL, '14', '31', 'districts', 'fa-bars', '/districts', '*', '2023-06-07 16:25:19', '2023-06-08 13:42:28'],
            [NULL, '14', '30', 'provinces', 'fa-bars', '/provinces', '*', '2023-06-07 16:25:29', '2023-06-08 13:42:28'],
            [NULL, '14', '29', 'wards', 'fa-bars', '/wards', '*', '2023-06-07 16:25:40', '2023-06-08 13:42:28'],
            [NULL, '14', '28', 'Streets', 'fa-bars', '/streets', '*', '2023-06-07 16:25:50', '2023-06-08 14:32:09'],
        ];

        $query = "INSERT INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `permission`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        foreach ($data as $record) {
            DB::statement($query, $record);
        }
    }
}
