<?php

namespace System;

class FDuck extends Duck
{

    #[\Override] function fly()
    {
        echo 'Утка один Ф';
    }
}