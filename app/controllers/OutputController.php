<?php // api output controller
    namespace api\controllers;

    class OutputController {

        public function errorOutput($code, $message) {
            
            global $siteController;
            
            // send api return headers
            $siteController->sendAPIHeaders();

            // build error json
            $arr = [
                "status" => "error",
                "code" => $code,
                "message" => $message
            ];

            // print json & kill app
            die(json_encode($arr));
        }
    }


?>