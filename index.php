<?php
// curl https://letfunc.github.io/php/let_func.php --output let_func.php
include 'let_func.php';

# Class: Sync / Async
$code = new LetFunc("https://letjson.github.io/php/let_json.php", "let_json", "https://letjson.github.io/js/letjson.json");

# Class / Sync
$value = $code->exec();
var_dump(1, $value);

# Class / Async
$value = $code->each(function ($value) {
    var_dump(2, $value);
});


# Function Async
let_func("https://letjson.github.io/php/let_json.php", "let_json", "https://letjson.github.io/js/letjson.json", function ($value) {
    var_dump(3, $value);
});
