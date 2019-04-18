<?php

namespace Bluesnap;

/**
 * Class HostedPaymentFieldsToken.
 */
class HostedPaymentFieldsToken {

  /**
   * Create a BlueSnap Hosted Payment Fields token.
   *
   * @return array
   *   An array with the token in 'hosted_payment_fields_token'.
   */
  public static function create() {
    return Api::post('payment-fields-tokens', NULL, TRUE);
  }

}
