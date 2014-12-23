<?php

class Rock_Fmt_DataTempoBr extends Rock_Fmt_Mask
{

    public function __construct(Rock_Datet_DateObj $dateObj)
    {
        $this->val = $dateObj->getDate('%d%m%Y%H%M%S');
        $this->mask = '##/##/#### ##:##:##';
    }
}
