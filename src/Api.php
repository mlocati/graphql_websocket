<?php

namespace Concrete5GraphqlWebsocket;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Controller\Controller;
use Siler\GraphQL as SilerGraphQL;
use Siler\Http\Request;
use Siler\Http\Response;

class Api extends Controller
{
    public function view()
    {
        Response\header('Access-Control-Allow-Origin', '*');
        Response\header('Access-Control-Allow-Headers', 'content-type');

        if (Request\method_is('post')) {
            $schema = SchemaBuilder::get();
            SilerGraphQL\init($schema);
        }
    }
}
