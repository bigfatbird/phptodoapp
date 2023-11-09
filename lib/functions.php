<?php

function add() {
    return 1 + 1;
}

function get_todos() {
$todos = json_decode(file_get_contents('data/todos.json'), true);
    return $todos;
}