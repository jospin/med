<?PHP

class UtilMig 
{

    public static function upFotos($file, $id, $praia){
        $pathFotos = 'images/imoveis/'.$id;
        $origPath = "/home/medeirosimoveis/medeirosimoveis.cim.br/images/imoveis/";

        if(!is_dir($pathFotos)){
            mkdir ($pathFotos,0777);
        }

        try{

            if(file_exists($pathFotos."/".$praia."_img_home_".$file)){
                echo "ok\n";
                return true;
            }
            /**
            * Home - 518x360
            */

            $imgHome = new SmartImage($origPath.$file);
            $imgHome->resize(518,360);
            $imgHome->addWaterMarkImage("images/watermark.png",35,176,170);
            $imgHome->saveImage($pathFotos."/".$praia."_img_home_".$file, 70);		
            echo $origPath.$file."  ----> ". $pathFotos."/".$praia."_img_home_".$file."\n";		
            unset($imgHome);

            /**
            * List - 131x85
            */
            $imgList = new SmartImage($origPath.$file);
            $imgList->resize(131, 85);
            $imgList->saveImage($pathFotos."/".$praia."_img_list_".$file, 70);        
            unset($imgList);

            /**
            * grid/featured - 184x119
            */
            $imgDestHome = new SmartImage($origPath.$file);
            $imgDestHome->resize(184, 119);
            $imgDestHome->saveImage($pathFotos."/".$praia."_img_featured_".$file, 70);
            unset($imgDestHome);

            /**
            * Inside view - 620x360
            */
            $imgProduto = new SmartImage($origPath.$file);
            $imgProduto->resize(620, 360);
            $imgProduto->addWaterMarkImage("images/watermark.png",35,176,170);
            $imgProduto->saveImage($pathFotos."/".$praia."_img_inside_".$file, 70);
            unset($imgProduto);

            /**
            * thumb - 45x33
            */
            $imgThumb = new SmartImage($origPath.$file);
            $imgThumb->resize(45,33);
            $imgThumb->saveImage($pathFotos."/".$praia."_img_thumb_".$file, 70);                
            unset($imgThumb);

            /**
            * Other - 300x178
            */
            $imgThumb = new SmartImage($origPath.$file);
            $imgThumb->resize(300,178);
            $imgThumb->addWaterMarkImage("images/watermark.png",35,176,170);
            $imgThumb->saveImage($pathFotos."/".$praia."_img_other_".$file, 80);                
            unset($imgThumb);                

            return true;
        }catch(Exception $e){
            return $e;	
        }
    }

    public static function now(){
        return date('Y-m-d H:i:s')	;
    }

    public static function moeda($valor){
        return number_format($valor,2,',','.');
    }

    public static function decimalDb($valor){
        $v = str_replace(".","",$valor);
        return str_replace(",",".",$v);
    }

    public static function removeAcento($string){
        //$s = utf8_encode($string);
        $s = $string;
        $s = str_replace("ç","c",$s);
        $s = str_replace("+","",$s);
        $s = str_replace("%","",$s);
        $s = str_replace("Ç","C",$s);
        $s = str_replace(".","",$s);
        $s = str_replace(",","",$s);
        $s = str_replace("_-_","_",$s);
        $s = str_replace("-","_",$s);
        $s = str_replace("&","",$s);
        $s = mb_ereg_replace('[àáãâ]',"a",$s);
        $s = mb_ereg_replace("[ÁÀÂÃ]","A",$s);
        $s = mb_ereg_replace("[éèê]","e",$s);
        $s = mb_ereg_replace("[ÉÈÊ]","E",$s);
        $s = mb_ereg_replace("[íìî]","i",$s);
        $s = mb_ereg_replace("[ÍÌÎ]","I",$s);
        $s = mb_ereg_replace("[óòôõº]","o",$s);
        $s = mb_ereg_replace("[ÓÒÔÕ]","O",$s);
        $s = mb_ereg_replace("[úùû]","u",$s);
        $s = mb_ereg_replace("[ÚÙÛ]","U",$s);
        $s = mb_ereg_replace("\"","",$s);

        return $s;
    }

    public static function toSSL(){
        if( $_SERVER['HTTPS'] != "on" ){
            $new_url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            header("Location: $new_url");
            exit;
        }    	
    }

    public static function toStandard(){
        if( $_SERVER['HTTPS'] == "on" ){
            $new_url = "http://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            header("Location: $new_url");
            exit;
        }       
    }

    public static function dateDb($date){
        return substr($date,6,4)."-".substr($date,3,2)."-".substr($date,0,2);    	
    }

    public static function sendMail($to, $from, $subject, $message){
        $headers = 'From: '.$from . "\r\n" .
        'Reply-To: '.$from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    }

    public static function urlCanonical($url = NULL){
        $default = "www.medeirosimoveis.cim.br";
        if($url){
            $response = $default.$url;
        }else{
            $response = $default;
        }

        return $response;
    }

}

