<?php

namespace App;

enum EmailTypes: string
{
    case SUBSCRIPTION = 'subscription';
    case REVIEW = 'review';
    case CONTACT = 'contact';


}
