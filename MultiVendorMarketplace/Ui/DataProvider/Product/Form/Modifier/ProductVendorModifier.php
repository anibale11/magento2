<?php
namespace Vinsol\MultiVendorMarketplace\Ui\DataProvider\Product\Form\Modifier;

use Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\AbstractModifier;

class ProductVendorModifier extends AbstractModifier
{
    public function modifyMeta(array $meta)
    {
    //     $meta['product[user_id]'] = [
    //         'arguments' => [
    //             'data' => [
    //                 'config' => [
    //                     // 'label' => __('Label For Fieldset'),
    //                     // 'sortOrder' => 50,
    //                     // 'collapsible' => true
    //                     'default' => 'rajneesh',
    //                     'required' => true,
    //                     'hidden' => true
    //                 ]
    //             ]
    //         ],
    //         // 'children' => [
    //         //     'test_field_name' => [
    //         //         'arguments' => [
    //         //             'data' => [
    //         //                 'config' => [
    //         //                     'formElement' => 'select',
    //         //                     'componentType' => 'field',
    //         //                     'options' => [
    //         //                         ['value' => 'test_value_1', 'label' => 'Test Value 1'],
    //         //                         ['value' => 'test_value_2', 'label' => 'Test Value 2'],
    //         //                         ['value' => 'test_value_3', 'label' => 'Test Value 3'],
    //         //                     ],
    //         //                     'visible' => 1,
    //         //                     'required' => 1,
    //         //                     'label' => __('Label For Element')
    //         //                 ]
    //         //             ]
    //         //         ]
    //         //     ]
    //         // ]
    //     ];

        return $meta;
    }

    // /**
    //  * {@inheritdoc}
    //  */
    public function modifyData(array $data)
    {
        return $data;
    }
}
