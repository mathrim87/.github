<?php
/**
 * Salus Admin Menu Helper
 *
 * Classe riutilizzabile per registrare sottomenu sotto il menu "Salus" nella dashboard WordPress.
 * Se il menu Salus non esiste, viene creato automaticamente.
 *
 * @package Salus
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('Salus_Admin_Menu')) {

    class Salus_Admin_Menu {

        private static $sort_hook_added = false;

        public static function register_submenu($page_title, $menu_title, $capability, $menu_slug, $callback, $text_domain = 'salus') {
            $salus_menu_slug = 'salus';

            if (!self::$sort_hook_added) {
                add_action('admin_menu', array(__CLASS__, 'sort_submenu'), 999);
                self::$sort_hook_added = true;
            }

            if (self::menu_exists($salus_menu_slug)) {
                add_submenu_page(
                    $salus_menu_slug,
                    $page_title,
                    $menu_title,
                    $capability,
                    $menu_slug,
                    $callback
                );
                return;
            }

            add_menu_page(
                __('Salus', $text_domain),
                __('Salus', $text_domain),
                $capability,
                $salus_menu_slug,
                $callback,
                'dashicons-heart',
                30
            );

            add_submenu_page(
                $salus_menu_slug,
                $page_title,
                $menu_title,
                $capability,
                $menu_slug,
                $callback
            );

            remove_submenu_page($salus_menu_slug, $salus_menu_slug);
        }

        public static function menu_exists($slug = 'salus') {
            global $menu;
            if (!is_array($menu)) {
                return false;
            }
            foreach ($menu as $menu_item) {
                if (isset($menu_item[2]) && $menu_item[2] === $slug) {
                    return true;
                }
            }
            return false;
        }

        public static function sort_submenu() {
            global $submenu;
            if (isset($submenu['salus']) && is_array($submenu['salus'])) {
                usort($submenu['salus'], function ($a, $b) {
                    return strcasecmp($a[0], $b[0]);
                });
            }
        }
    }
}
