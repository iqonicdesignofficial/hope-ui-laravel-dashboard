<?php
namespace App\Helpers;

class EnvChange{
    public static function envChanges($type,$value){
        $path = base_path('.env');
        $checkType = $type.'="';
        if(strpos($value,' ') || strpos(file_get_contents($path),$checkType) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $value)){
            $value = '"'.$value.'"';
        }
        $value=str_replace('\\', '\\\\', $value);
        if (file_exists($path)) {
            if(in_array($type,config('constant.BOOLEAN_VARIABLE'))){
                if($value === '1') {
                    $value = 'true';
                }else {
                    $value = 'false';
                }
            }
            if (env($type) === null){
                \File::append($path, "\n".$type.'='.$value);
            }else{
                if(in_array($type,config('constant.BOOLEAN_VARIABLE'))){
                    file_put_contents($path, str_replace(
                        $type.'='.(env($type) ? 'true' : 'false'), $type.'='.$value, file_get_contents($path)
                    ));
                }else{
                    $typeValue = env($type);
                    if(strpos(env($type),' ') || strpos(file_get_contents($path),$checkType)){
                        $typeValue = '"'.env($type).'"';
                    }
                    file_put_contents($path, str_replace(
                        $type.'='.$typeValue, $type.'='.$value, file_get_contents($path)
                    ));
                }
            }
        }
    }
}