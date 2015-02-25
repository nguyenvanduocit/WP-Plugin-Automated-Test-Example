<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2/25/2015
 * Time: 2:17 PM
 */
use AE\Field\AE_Button;
class Test_AE_Button extends WP_UnitTestCase {
    public function test_Util(){
        $field = array (
            'readonly'=>true,
            'default' =>'123',
            'label' =>'Hehe',
            'id' =>'123',
            'name'=>'test'
        );
        $value = '1111';
        $parent = null;
        $button = new AE_Button($field, $value, $parent);
        $this->assertTrue(true);
    }
}