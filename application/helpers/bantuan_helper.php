<?php
function convertrole($id)
{
    if ($id == 0) {
        $id = "User";
    }
    if ($id == 1) {
        $id = "Admin";
    }
    if ($id == 2) {
        $id = "Driver";
    }
    return $id;
}

function convertrewards($id)
{
    return $id * 5;
}

function convertupah($id)
{
    return $id * 5000;
}
