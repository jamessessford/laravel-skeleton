<?php

namespace Domain\User\Models;

use Parental\HasParent;

final class Mortal extends User
{
    use HasParent;
}
