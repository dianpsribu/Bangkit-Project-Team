<?php

    class index extends load
    {        
        public function home()
        {
            header_content_type("json");

            $json["response"] = false;
            $json["message"] = "Access Danied";

            echo json_encode($json);
        }
    }
