<?php
require_once "../config/config.php";
include_once ROOT_PATH . "/app/models/Menu.php";

class MenuListController {
    public function getMenuList($type) {
        $menu = new Menu();
        $menuList = $menu->getMenuItems($type);
        return $menuList;
    }
}

