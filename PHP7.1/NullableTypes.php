<?php

//check if the passed value is a string or null
function isNullOrBlank( ?string $value) {
    if (is_null($value)) {
        return true;
    }

    if (strlen(trim($value)) == 0) {
        return true;
    }

    return false;
}

var_dump(isNullOrBlank(null));