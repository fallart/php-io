<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Request;

use Input\Input;
use Input\InputsCollection;
use Input\PropertiesCollection;
use Input\Property\RequiredProperty;

class UserRequest extends AbstractRequest
{

    public function configure(): void
    {
        $this->setBody(new InputsCollection([
            'id' => (new Input())
                ->setDescription('user id')
                ->withProperties(new PropertiesCollection([
                    new RequiredProperty(true),
                ])),
            'name' => (new Input())
                ->setDescription('user name')
                ->withProperties(new PropertiesCollection([
                    new RequiredProperty(true),
                ])),
            'surname' => (new Input())
                ->setDescription('user surname')
                ->withProperties(new PropertiesCollection([
                    new RequiredProperty(false),
                ])),
            'comment' => (new Input())
                ->setDescription('comment from user')
                ->withProperties(new PropertiesCollection([
                    new RequiredProperty(true),
                ])),
        ]));
    }
}