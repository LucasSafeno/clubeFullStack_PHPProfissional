<?php
function validate(array $validations)
{
  $result = [];
  $param = '';
  foreach ($validations as $field => $validate) {
    if (!str_contains($validate, '|')) {
      if (str_contains($validate, ':')) {
        [$validate, $param] = explode(':', $validate);
      }
      $result[$field] =  $validate($field, $param);
    } else {
      $explodePipeValidate = explode('|', $validate);
      foreach ($explodePipeValidate as $validate) {
        if (str_contains($validate, ':')) {
          [$validate, $param] = explode(':', $validate);
        }
        $result[$field] = $validate($field, $param);
      }
    }
  }

  if (in_array(false, $result)) {
    return false;
  }
  return $result;
} //? validate()

function multipleValidations() {} //? multipleValidations()

function required($field)
{
  if ($_POST[$field] === '') {
    setFlash($field, "O campo é obrigatório");
    return false;
  }

  return filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);
} //? required()

function email($field)
{
  $emailIsValid = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);

  if (!$emailIsValid) {
    setFlash($field, "O campo deve ser um email válido");
    return false;
  }

  return filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);
} //? email()

function unique($field, $param)
{
  // var_dump($field, $param);
  // die();
  $data = filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);
  $user = findBy($param, $field, $data);

  if ($user) {
    setFlash($field, 'O campo já está cadastrado!');
    return false;
    // var_dump("Chegamos aqui");
    // die();
  }
  // var_dump("Chegamos aqui fora if");
  return $data;
} //? unique()

function maxlen($field, $param)
{
  $data = filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);

  if (strlen($data) > $param) {
    setFlash($field, "O campo deve ter no máximo {$param} caracteres");
    return false;
  }

  return $data;
}//? maxlen()
