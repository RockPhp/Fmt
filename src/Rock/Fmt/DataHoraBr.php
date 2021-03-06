<?php

class Rock_Fmt_DataHoraBr extends Rock_Fmt_Mask
{

    public function __construct(Rock_Datet_DateObj $dateObj)
    {
        $this->val = $dateObj->getDate('%d%m%Y%H%M');
        $this->mask = '##/##/#### ##:##';
    }
}
