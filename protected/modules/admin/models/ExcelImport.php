<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hcg
 * Date: 13-11-8
 * Time: 上午9:58
 * To change this template use File | Settings | File Templates.
 */
class  extends CFormModel {

    public $image;

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array(
            //note you wont need a safe rule here
            array('image', 'file', 'allowEmpty' => true, 'types' => 'jpg, jpeg, gif, png'),
        );
    }

}