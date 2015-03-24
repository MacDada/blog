<?php
class UserNotFoundException extends RuntimeException {
    try {
        //znaleziono
    } catch (Exception $ex) {
        //nie znaleziono
    }
}