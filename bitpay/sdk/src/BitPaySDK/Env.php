<?php


namespace BitPaySDK;


interface Env
{
    const Test                  = "Test";
    const Prod                  = "Prod";
    const TestUrl               = "https://test.comatio.com/";
    const ProdUrl               = "https://pay.comatio.com/";
    const BitpayApiVersion      = "2.0.0";
    const BitpayPluginInfo      = "BitPay_PHP_Client_v3.5.2003";
    const BitpayApiFrame        = "custom";
    const BitpayApiFrameVersion = "1.0.0";
}