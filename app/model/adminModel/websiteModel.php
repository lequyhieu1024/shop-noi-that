<?php 

    function listws(){
        $sql = "SELECT * FROM website";
        $result = pdo_query($sql);
        return $result;
    }    
    function editws( $ten_website,$banner_website,$dia_chi_website,$email_website,$phone_website,$logo_website,$title_website,
    $favicon_website,$rate,$location){
        if($logo_website != "" && $banner_website != "" && $favicon_website != "" ){
            $sql = "UPDATE website SET ten_website='$ten_website',banner_website='$banner_website',dia_chi_website='$dia_chi_website',
            email_website='$email_website',phone_website='$phone_website',logo_website='$logo_website',title_website='$title_website',favicon_website='$favicon_website',
            rate='$rate', location='$location' WHERE id_website = 1";
        }
        else if($logo_website != "" && $banner_website != ""){
            $sql = "UPDATE website SET ten_website='$ten_website',banner_website='$banner_website',dia_chi_website='$dia_chi_website',
            email_website='$email_website',phone_website='$phone_website',logo_website='$logo_website',title_website='$title_website',
            rate='$rate', location='$location' WHERE id_website = 1";
        }
        else if($logo_website != "" && $favicon_website != ""){
            $sql = "UPDATE website SET ten_website='$ten_website',dia_chi_website='$dia_chi_website',
            email_website='$email_website',phone_website='$phone_website',logo_website='$logo_website',title_website='$title_website',favicon_website='$favicon_website',
            rate='$rate', location='$location' WHERE id_website = 1";
        }
        else if($banner_website != "" && $favicon_website != ""){
            $sql = "UPDATE website SET ten_website='$ten_website',banner_website='$banner_website',dia_chi_website='$dia_chi_website',
            email_website='$email_website',phone_website='$phone_website',title_website='$title_website',favicon_website='$favicon_website',
            rate='$rate', location='$location' WHERE id_website = 1";
        }
        else if($logo_website != ""){
            $sql = "UPDATE website SET ten_website='$ten_website',dia_chi_website='$dia_chi_website',
            email_website='$email_website',phone_website='$phone_website',logo_website='$logo_website',title_website='$title_website',
            rate='$rate', location='$location' WHERE id_website = 1";
        }
        else if($banner_website != ""){
            $sql = "UPDATE website SET ten_website='$ten_website',banner_website='$banner_website',dia_chi_website='$dia_chi_website',
            email_website='$email_website',phone_website='$phone_website',title_website='$title_website',
            rate='$rate', location='$location' WHERE id_website = 1";
        }
        
        else if($favicon_website != ""){
            $sql = "UPDATE website SET ten_website='$ten_website',dia_chi_website='$dia_chi_website',
            email_website='$email_website',phone_website='$phone_website',title_website='$title_website',favicon_website='$favicon_website',
            rate='$rate', location='$location' WHERE id_website = 1";
        }
        else{
            $sql = "UPDATE website SET ten_website='$ten_website',dia_chi_website='$dia_chi_website',
            email_website='$email_website',phone_website='$phone_website',title_website='$title_website',
            rate='$rate', location='$location' WHERE id_website = 1";
        }
        pdo_execute($sql);
    }

?>