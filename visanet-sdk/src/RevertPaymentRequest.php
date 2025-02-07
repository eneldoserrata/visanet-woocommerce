<?php

namespace VisanetSDK;

use \VisanetSDK\Account;
use \VisanetSDK\lib\TransactionsSoapClient;

class RevertPaymentRequest
{
  public function revert($transactionId, $authorizationAmount, $referenceCode, $deviceFingerprintId = '')
  {
    $transactionData = $this->__getTransactionData($transactionId, $authorizationAmount, $referenceCode, $deviceFingerprintId);

    $client = new TransactionsSoapClient();
    return $client->runTransaction($transactionData);
  }

  protected function __getTransactionData($transactionId, $authorizationAmount, $referenceCode, $deviceFingerprintId = '')
  {
    return (object) array(
      'clientLibrary' => 'PHP',
      'clientLibraryVersion' => phpversion(),
      'clientEnvironment' => php_uname(),
      'merchantID' => Account::getMerchantId(),
      'deviceFingerprintID' => $deviceFingerprintId,
      'merchantReferenceCode' => $referenceCode,
      'ccAuthReversalService' => (object) array(
        'run' => 'true',
        'authRequestID' => $transactionId
      ),
      'purchaseTotals' => (object) array(
        'currency' => Account::getCurrency(),
        'grandTotalAmount' => $authorizationAmount
      )
    );
  }
}
