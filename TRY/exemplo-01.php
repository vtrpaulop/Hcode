<?php

try {

    throw new Exception("Deu erro", 400);

} catch (Exception $e) {

        echo json_encode(array(
            "message" => $e->getMessage(),
            "line" => $e->getLine(),
            "file" => $e->getFile(),
            "code" => $e->getCode(),
        ));


}