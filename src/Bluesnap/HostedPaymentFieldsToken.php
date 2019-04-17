<?php

namespace Bluesnap;

/**
 * Class HostedPaymentFieldsToken.
 */
class HostedPaymentFieldsToken {

  /**
   * Create a BlueSnap Hosted Payment Fields token.
   *
   * @return array|mixed|\Psr\Http\Message\ResponseInterface
   */
  public static function create() {
    return Api::post('payment-fields-tokens', NULL, TRUE);
  }

}
