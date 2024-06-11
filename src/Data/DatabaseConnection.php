<?php

namespace ManasahTech\Contracts\Data;


interface DatabaseConnection
{
    function getDriver();
    function getHost();
    function getPort();
    function getDatabase();
    function getUser();
    function getParams();
}