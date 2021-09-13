<?php
add_action('wp_ajax_nopriv_hbsubs', 'hbsubs');
add_action('wp_ajax_hbsubs', 'hbsubs');
function hbsubs(){
    parse_str($_POST['fields'],$data);
    
    
    require ABSPATH.'/vendor/autoload.php';


    $hubSpot = \HubSpot\Factory::createWithApiKey('6ebd693b-7511-4190-8ded-a9dec3217f3c');

    $properties = [
        "email" => $data['email'],
        "firstname" => $data['name'],
        "lastname" => $data['last_name'],
        "zip" => $data['postcode']
    ];

    if(!empty($data['dentist_practice'])){
        $properties["dental_practice"] = $data["dentist_practice"];
    }

    try {
        $contactInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput();
        $contactInput->setProperties($properties);
    
        $contact = $hubSpot->crm()->contacts()->basicApi()->create($contactInput);
        wp_die(json_encode(array('type' => 'success','message' => "Contact created!")));
    } catch (Exception $e) {
        $response = json_decode($e->getResponseBody());
        wp_die(json_encode(array('type' => 'error','message' => str_replace('Existing ID: 601','',$response->message))));
    }

    exit;
}
?>