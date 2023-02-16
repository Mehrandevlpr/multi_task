<?php  

class View {

    public static function load($file_path){
        // if(self::cache_exist($file_path)){
        //     //load file cache from here
        // }
         $file_path=BASE_PA. '/themes' . '/' . ACTIVE_THEME . "/$file_path";
         return include_once $file_path;
    }
    public static function render($file_path)
    {
       ob_start();
       $theme_file= BASE_PA . '/themes' . '/' . ACTIVE_THEME . "/$file_path";
       include_once $theme_file;
        $tpl_tem=ob_get_clean();
        // it could be a cache in server or others like add method save_cache($file_path,$tpl_theme)
        // file_put_contents(BASE_PASE.'/Cache/'.md5($file_path).'SALT.cache',$theme_file);
        return $tpl_tem;
    }
}



?>