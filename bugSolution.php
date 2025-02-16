//Solution 1: Iterate over a copy of the keys
function foo(array $arr) {
  $keys = array_keys($arr);
  foreach ($keys as $key) {
    if ($arr[$key] === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

//Solution 2: Using array_filter
function foo(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'bar';
  });
}

//Solution 3: Create a new array
function foo(array $arr) {
  $result = [];
  foreach ($arr as $value) {
    if ($value !== 'bar') {
      $result[] = $value;
    }
  }
  return $result;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )