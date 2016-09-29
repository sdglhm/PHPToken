<?php

//This will help you to start your php session
//If session isn't started yet, I will start it for you

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
