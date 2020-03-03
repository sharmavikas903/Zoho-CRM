<?php
$token="7a49eacf8e1e11f4ec71937b8cf716fd";
$url = "https://www.zohoapis.com/crm/v2/Leads";
$tyy ="ZohoCRM.modules.leads.create";
$param= "authtoken=".$token."&scope=".$tyy."";
$senddata = array(
            "First_Name"=> "testownerdata",
            "Last_Name"=> "testownerdata_last",
            "Email"=> "testownerdata@gmail.com",
            "Phone" =>"8437542347",
            "Zip_Code"=>"10001",
            "Owner" => array("name"=>"rahul dogra","id"=>"4437118000000276009")
           );
           

$jsonecodeddata = json_encode(array("data" => array($senddata)));
print_r($jsonecodeddata);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonecodeddata);
$headers = [
    'Authorization:7a49eacf8e1e11f4ec71937b8cf716fd',
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
return $result;



?>
