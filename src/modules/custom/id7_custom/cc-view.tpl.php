<?= l('Remove your credit card', 'my-credit-card/remove'); ?>

<dl>
    <dt>Number</dt>
        <dd><?=id7_custom_cc_masking($number);?></dd>
    <dt>Expires</dt>
        <dd><?=$exp_date_month . '/' . $exp_date_year?></dd>
    <dt>CCV</dt>
        <dd><?=$cvv?></dd>
</dl>
