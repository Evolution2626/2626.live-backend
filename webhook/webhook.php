<?php
 // this receives the webhook and creates variables
 $webhookjson = @file_get_contents("php://input");
 $webhook = json_decode($webhookjson);

?>
