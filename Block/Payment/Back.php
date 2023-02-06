<?php

/**
 *                                                                                                                                                                        ######
 *                                                                                                                                                                        ######
 *  ###########    ###########    ###########    ###########    ###########   ############    ###########   ###### ######   ###########    ###########    ###########   #############
 * #############  #############  #############  #############  #############  #############  #############  ###### ######  #############  #############  #############  #############
 * ###### ######  ###### ######  ###### ######         ######  ###### ######  ###### ######         ######  ###### ######  #### ### ####  ###### ######  ###### ######  #############
 * ###### ######  ######         #############  #############  ###### ######  ###### ######  #############  ###### ######  #### ### ####  #############  ###### ######    ######
 * ###### ######  ###### ######  ######         ###### ######  ###### ######  ###### ######  ###### ######  ###### ######  #### ### ####  ######         ###### ######    ######
 * #############  #############  #############  #############  ###### ######  #############  #############  #############  #### ### ####  #############  ###### ######    ##########
 *  ###########    ###########    ###########    ###########   ###### ######  ############    ###########   #############  #### ### ####   ###########   ###### ######    ##########
 *                                                                            ######                               ######
 *                                                                            ######                        #############
 *                                                                            ######                        ############
 * 
 *
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Oceanpayment\Creditcard\Block\Payment;


class Back extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Checkout\Model\Session
     */
    protected $_checkoutSession;
    protected $_paymentMethod;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Checkout\Model\Session $checkoutSession
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Oceanpayment\Creditcard\Model\PaymentMethod $paymentMethod,
        \Magento\Checkout\Model\Session $checkoutSession,
        array $data = []
    ) {
        $this->_checkoutSession = $checkoutSession;
        parent::__construct($context, $data);
        $this->_paymentMethod = $paymentMethod;
        $this->_isScopePrivate = true;
    }




}
