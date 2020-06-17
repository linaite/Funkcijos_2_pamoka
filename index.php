<?php
//1. Sukurkite formos masyva ir panaudojus funkcijas atsvaizduokite ekrane;
$form = [
    'inputs' => [
        'user_name' => [
            'type' => 'text',
            'placeholder' => 'User name:',
            'name' => 'user_name',
        ],
        'user_email' => [
            'type' => 'email',
            'placeholder' => 'User email:',
            'name' => 'user_email',
        ],
        'user_password' => [
            'type' => 'password',
            'placeholder' => 'User password:',
            'name' => 'user_password',
        ],
        'user_age' => [
            'type' => 'number',
            'placeholder' => 'User age:',
            'name' => 'user_age',
        ],
    ],
    'buttons' => [
        'send' => [
            'type' => 'submit',
            'value' => 'Siusti',
            'name' => 'send'
        ],
        'delete' => [
            'type' => 'submit',
            'value' => 'Istrinti',
            'name' => 'delete'
        ]
    ],
];
var_dump($_POST);
//Inputu funkcija
function get_inputs($array, $input_name1, $input_name2 = false, $input_name3 = false)
{
    $inputs = '';
    foreach ($array['inputs'] as $input) {
        if ($input['name'] == $input_name1) {
            $inputs .= '<input type="' . $input['type'] . '" placeholder="' . $input['placeholder'] . '" name="' . $input['name'] . '" >';
        } elseif ($input['name'] == $input_name2) {
            $inputs .= '<input type="' . $input['type'] . '" placeholder="' . $input['placeholder'] . '" name="' . $input['name'] . '" >';
        } elseif ($input['name'] == $input_name3) {
            $inputs .= '<input type="' . $input['type'] . '" placeholder="' . $input['placeholder'] . '" name="' . $input['name'] . '" >';
        }
    }
    return $inputs;
}
//Buttonu funkcija
function get_buttons($array, $button_name1, $button_name2 = false, $button_name3 = false)
{
    $buttons = '';
    foreach ($array['buttons'] as $button) {
        if ($button['name'] == $button_name1) {
            $buttons .= '<input type="' . $button['type'] . '" value="' . $button['value'] . '" name="' . $button['name'] . '" >';
        } elseif ($button['name'] == $button_name2) {
            $buttons .= '<input type="' . $button['type'] . '" value="' . $button['value'] . '" name="' . $button['name'] . '" >';
        } elseif ($button['name'] == $button_name3) {
            $buttons .= '<input type="' . $button['type'] . '" value="' . $button['value'] . '" name="' . $button['name'] . '" >';
        }
    }
    return $buttons;
}
//Formos funkcija
function get_form($inputs, $buttons)
{
    print '<form method="post">' . $inputs . $buttons . '</form>';
}

$inputs = get_inputs($form, 'user_name', 'user_email');
$buttons = get_buttons($form, 'delete', 'send');
get_form($inputs, $buttons);

?>


