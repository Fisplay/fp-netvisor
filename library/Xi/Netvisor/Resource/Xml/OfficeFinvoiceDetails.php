<?php

namespace Xi\Netvisor\Resource\Xml;

class OfficeFinvoiceDetails
{
    private $finvoiceAddress;
    private $finvoiceRouterCode;

    /**
     * @param string $finvoiceAddress
     * @param string $finvoiceRouterCode
     */
    public function __construct(
        $finvoiceAddress,
        $finvoiceRouterCode
    ) {
        $this->finvoiceAddress = $finvoiceAddress;
        $this->finvoiceRouterCode = $finvoiceRouterCode;
    }
}
