<?php

function view_permission($page_name = null)
{
    $user_role = auth()->user()->role;
    switch ($user_role) {

        case 1: // Software Manager
            switch ($page_name) {
                case 'dashboard':
                case 'users':
                case 'company':
                    return true;
                default:
                    return false;
            }

        case 2: // Company Super Admin
            switch ($page_name) {
                case 'dashboard':
                case 'users':
                    return true;
                default:
                    return false;
            }

        case 3: // Company Shop Admin
            switch ($page_name) {
                case 'dashboard':
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