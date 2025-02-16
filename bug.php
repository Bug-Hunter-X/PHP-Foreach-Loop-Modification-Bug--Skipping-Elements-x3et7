function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//Problem:
//The above code is designed to remove elements with the value 'bar' from an array.However, directly modifying the array during a foreach loop can lead to unexpected behavior, in this case skipping elements.

//Solution:
//Use a copy of array or iterate over a copy of keys, or use array_filter.