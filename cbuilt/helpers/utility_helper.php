<?php

function fw($input = "") {
    fwrite(STDOUT, ' ' . $input);
    fwrite(STDOUT, NEW_LINE);
}

function fq($input = "") {
    fw("JARVIS : " . $input);
    fwrite(STDOUT, " ME : ");
}

function fgr($input = "") {
    fw("JARVIS : " . $input);
}

function fr() {
    return trim(fgets(STDIN));
}

function jarvis_start() {
    global $window_user;
    fw(NEW_LINE);
    fw(NEW_LINE);
    fw("||||||||||||||||| J A R V I S |||||||||||||||||");
    fw(NEW_LINE);
    fgr("HELLO " . strtoupper($window_user));
}