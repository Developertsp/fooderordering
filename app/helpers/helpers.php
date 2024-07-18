<?php

function is_software_manager()
{
    $user_role = Auth()->user()->role;
    return ($user_role  == config('constants.SOFTWARE_MANAGER')) ? true : false;
}

function view_permission($page_name = null)
{
    $user_role = auth()->user()->role;
    switch ($user_role) {

        case 1: // Software Manager
            switch ($page_name) {
                case 'dashboard':
                case 'users':
                case 'company':
                case 'products':
                    return true;
                default:
                    return false;
            }

        case 2: // Company Super Admin
            switch ($page_name) {
                case 'dashboard':
                case 'users':
                case 'schedules':
                case 'products':
                case 'options':
                case 'categories':
                    return true;
                default:
                    return false;
            }

        case 3: // Company Shop Admin
            switch ($page_name) {
                case 'dashboard':
                case 'schedules':
                    return true;
                default:
                    return false;
            }

        case 4:
            switch ($page_name) {
                case 'home':
                case 'dashboard':
                    return true;
                default:
                    return false;
            }

        default:
            return false;
    }
}