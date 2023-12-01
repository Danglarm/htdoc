<?php

namespace System;

class MDuck extends Duck
{

    #[\Override] function fly()
    {
        echo 'Утка 2 M';
    }
}